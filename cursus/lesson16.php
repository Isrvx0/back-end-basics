<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>   
<body>
        <?php
            // CLASS AND OBJECTS IN PHP // https://www.w3schools.com/php/php_oop_classes_objects.asp#:~:text=A%20class%20is%20a%20template,is%20an%20instance%20of%20class.

            // A class is defined by using the class keyword, followed by the name of the class and a pair of curly braces ({}). All its properties and methods go inside the braces:
                    
                    # we're making a class that called 'employee' and inside the '{}' is the container of the class.
                    # we build a class to make from it an objects.
            class  employee {
                // Properties
                public $emp_no;
                public $emp_name;

                // Methods
                function printData(){
                    $no = $this->emp_no;
                    $name = $this->emp_name;
                    echo "<div style='margin:10px;padding:0'<h3>$no</h3> <h3>$name</h3>";
                }
            }
            if (isset($_POST["btntest"])) {
                    # Objects of a class are created using the "new" keyword.
                    # We can create multiple objects from a class.
                    # Each object has all the properties and methods defined in the class, but they will have different property values.
                
                // object 1
                $emp1 = new employee();
                $emp1 ->emp_no = 1;
                $emp1 ->emp_name = "Jimin";
                $emp1 ->printData();

                // object 2
                $emp2 = new employee();
                $emp2 ->emp_no = 2;
                $emp2 ->emp_name = "Barka";
                $emp2 ->printData();
            }


        ?>
         <form method="post"> 
            <div>
                <h1> Test Form </h1>
            
                <button name="btntest"> Click To Test </button>    
            </div>
            <br>
        </form>  
</body>