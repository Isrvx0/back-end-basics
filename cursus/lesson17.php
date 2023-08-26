<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>   
<body>
        <?php
            class  employee {
              
                private $emp_no;
                private $emp_name;
                // we can make it private || public
                // by public varibale , we can use it ouside the class, but with private varibale, it will give an error if we use it outside the class 
                
                function __construct($employee_no , $employee_name) {
                    // It'll work aumomaticly as first as you make a new object !
                    //echo 'Now created new object from employee class <br>';
                    $this->emp_no = $employee_no;
                    $this->emp_name = $employee_name;

                }

                function printData(){
                    $no = $this->emp_no;
                    $name = $this->emp_name;
                    echo "<div style='margin:10px;padding:0'<h3>$no</h3> <h3>$name</h3>";
                }
            }



            if (isset($_POST["btntest"])) {
                   
                $emp1 = new employee(1,"Jimin");
                //$emp1 ->emp_no = 1;
                //$emp1 ->emp_name = "Jimin";
                $emp1 ->printData();

                $emp2 = new employee(2,"Barka");
                //$emp2 ->emp_no = 2;
                //$emp2 ->emp_name = "Barka";
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