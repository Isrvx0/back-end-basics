<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "information";

// Establish a connection to the database
$conn = new mysqli($host, $user, $pass, $db);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if email and password are set in the POST data
    if (isset($_POST['email']) && isset($_POST['psw'])) {
        $email = $_POST['email'];
        $password = password_hash($_POST['psw'], PASSWORD_DEFAULT); // Hash the password before saving

        // SQL query to create the users table if it doesn't exist
        $createTableQuery = "CREATE TABLE IF NOT EXISTS users (
                              id INT AUTO_INCREMENT PRIMARY KEY,
                              email VARCHAR(255) NOT NULL,
                              password VARCHAR(255) NOT NULL
                            )";

        if ($conn->query($createTableQuery) === TRUE) {
            // SQL query to insert user data into the database
            $insertQuery = "INSERT INTO users (email, password) VALUES ('$email', '$password')";

            if ($conn->query($insertQuery) === TRUE) {
                echo "User registered successfully";
            } else {
                echo "Error: " . $insertQuery . "<br>" . $conn->error;
            }
        } else {
            echo "Error creating table: " . $conn->error;
        }
    } else {
        echo "Email and password not set in POST data";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
                body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .signup-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 400px;
            text-align: center;
        }

        .signup-container h1 {
            color: #333;
        }

        input[type=text], input[type=password] {
            width: 100%;
            padding: 15px 5px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

        input[type=text]:focus, input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }

        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }

        button:hover {
            opacity: 1;
        }

        .cancelbtn, .signupbtn {
            float: left;
            margin: 8px 0;
            color: white;
            opacity: 0.9;
            width: 50%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            background-color: #b70f0a;
        }

        .cancelbtn{
            background-color: #ccc;
            color: #333;
        }

        .container {
            padding: 16px;
        }

        .clearfix::after {
            content: "";
            clear: both;
            display: table;
        }

        .login-link {
            color: dodgerblue;
            text-decoration: none;
        }

        input[type=checkbox], label {
            align-items: left;
            float: left;
        }

        .terms {
            float: left;
            margin: 0px;
        }

        @media screen and (max-width: 300px) {
            .cancelbtn, .signupbtn {
                width: 100%;
            }
        }
    </style>
    <title>Sign-Up Form</title>
</head>
<body>
    <div class="signup-container">
        <form action="" method="post" id="signupForm">
            <!-- Your existing HTML content here -->
            <div class="signup-container">
        <form action="/subscription_form.html" id="signupForm">
            <div class="container">
                <h1>Sign Up</h1>
                <p>Please fill in this form to create an account.</p>
                <hr>

                <input type="text" placeholder="Enter Email" name="email" required>
                <input type="password" placeholder="Enter Password" id="password" name="psw" required>
                <input type="password" placeholder="Repeat Password" id="confirmPassword" name="psw-repeat" required">
                <span id="passwordError" style="color: red;"></span>

                <label>
                    <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                </label>

                <p class="terms"> By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
                <div class="clearfix">
                    <button type="button" class="cancelbtn">Cancel</button>
                    <button type="button" class="signupbtn" onclick="checkPasswords()">Sign Up</button>
                </div>

                <p>Already have an account? <a class="login-link" href="login.html">Login here</a>.</p>
            </div>
        </form>
            <div class="clearfix">
                <button type="button" class="cancelbtn">Cancel</button>
                <button type="submit" class="signupbtn" onclick="checkPasswords()">Sign Up</button>
            </div>
        </form>

        <script>
            function checkPasswords() {
                var password = document.getElementById('password').value;
                var confirmPassword = document.getElementById('confirmPassword').value;
                var passwordError = document.getElementById('passwordError');

                if (password !== confirmPassword) {
                    passwordError.textContent = 'Passwords do not match';
                } else {
                    passwordError.textContent = '';
                    document.getElementById('signupForm').submit(); // Submit the form if passwords match
                }
            }
        </script>
    </div>
</body>
</html>
