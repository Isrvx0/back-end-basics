<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>   
<body>
        <?php
        if ($_SERVER["REQUEST_METHOD"]=='POST') {

            $myfile = $_FILES['myup']; // => it will returns array with 5 elements : bestand(name,type,tmp_name,error,size)
            // echo $myfile['name'].'<br>';
            copy($myfile["tmp_name"] , $myfile["name"]);
                    // 1e parameter = is the bron from where you're going to copy, 2e parameter : name of the file 
        }
        ?>

        <form method="post" enctype="multipart/form-data">
            <div>
                <h1> Upload File Form </h1>
                
                <input type="file" name="myup"/>
                <button>Submit</button>
            </div>  
        </form>
</body>