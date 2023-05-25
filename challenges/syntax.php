<?php
function gcd_calculator ($number1, $number2) {

    while ($number1 != $number2) {
        if ($number1 > $number2) {
            $number1 -= $number2;
        } else {
            $number2 -= $number1;
        }
    }
    return $number1;
}

$result = gcd_calculator (8,12);
echo "De grootste deler is " . $result;

// function gcd_number ($number1 , $number2) {
//     $divisors_list = array();
//     $divisors_list2 = array();

//     for ($i=1; $i <= $number1; $i++){
//         if ($number1 % $i == 0){
//             $divisors_list [] = $i;
//         }
//     };
//     for ($x=1; $x <= $number2; $x++){
//         if ($number2 % $x == 0){
//             $divisors_list [] = $x;
//         }
//     };

//     foreach ($divisors_list as $num1){
//         echo `$num1`;
//         foreach ($divisors_list as $num2){
//             echo `$num2`;
//             if ($num2 == $num1){
//                 $divisors_list2 [] = $num2;
//             }        
//     }};
//     return max($divisors_list2);

// }

// echo gcd_number(8,12);


//-----------------------


// opdracht 3:

// function lijst_sorteren($lijst) {
//     $newLijst = array();

//     foreach ($lijst as $words){
//         $key = array_search(min($lijst), $lijst);
//         array_push($newLijst, min($lijst));
//         unset($lijst[$key]);
//     }
//     return $newLijst;
// }
 
// $wordenLijst = [3, 1, 4, 2];
// $result = lijst_sorteren($wordenLijst);

// foreach ($result as $word){
//     echo $word;
//     echo '<br>';
// }


//-----------------------


//opdracht 2 :

// function letters_optellen($words) {
//     $max = '';
//     foreach ($words as $word) {
//         if (strlen($word) > strlen($max)){
//             $max = $word;
//     }}
//     return $max;
// }
 
// $wordenLijst = ['kat', 'hond', 'olifant'] ;
// $result = letters_optellen($wordenLijst);

// echo $result;

//-----------------------

//opdracht 1 :

// function lijst_optellen($numbers) {
//     $sum = 0;
//     foreach ($numbers as $number) {
//         if ($number % 2 == 0){
//         $sum += $number;
//     }}
//     return $sum;
// }
 

// $getallenLijst = [1, 2, 3, 4];
// $result = lijst_optellen($getallenLijst);

// echo $result; // Output: 10

 