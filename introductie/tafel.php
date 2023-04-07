
<?php
$numbers = array(3,5,8,12);

function  multiplication_tables($number){
    echo "De tafel van $number <br/>";
    for ($num = 0; $num <= 10; $num++) {
        echo "$number x $num   = " .$number * $num ."<br/>" ;
    };
};

foreach($numbers as $key) {
    multiplication_tables($key);
    echo "<br/>";
  }


// Maak een PHP applicatie die met een for loopje de tafel van 6 laat zien.
// 2. Zorg er nu voor dat de for loop in een functie staat die de waarde 6 mee krijgt als parameter.
// 3. Maak een array met de waardes 3, 5, 8 & 12 en loop hier doorheen met een foreach en laat zo voor ieder cijfer de tafel zien
