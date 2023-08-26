<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>   
<body>
        <?php


            class person{
                public $phone;
                public $address;
                function getData(){
                    return $this->phone ."<br>". $this->address;
                }
            }
            class  employee extends person {
                private $emp_no;
                private $emp_name;
                
                function __construct($employee_no , $employee_name) {
                    $this->emp_no = $employee_no;
                    $this->emp_name = $employee_name;
                }


                function getData(){
                    return "overriding";
                    // we can change 'override' the content inside the function in the 'person' class inside 'employee' class 
                }

                function printData(){
                    $no = $this->emp_no;
                    $name = $this->emp_name;
                    $phoneaddress = $this->getData();
                    echo "<div style='margin:10px;padding:0'> <h3>$no</h3> <h3>$name</h3> <h3>$phoneaddress</h3> </div>";

                }
            }



            if (isset($_POST["btntest"])) {
                   
                $emp1 = new employee(1,"Jimin");
                $emp1->phone = "153-8753-7741";
                $emp1->address = "South-korea";
                $emp1 ->printData();
                //echo $emp1->getData();

                $emp2 = new employee(2,"Barka");
                $emp2->phone = "153-9567-7584";
                $emp2->address = "South-korea";
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