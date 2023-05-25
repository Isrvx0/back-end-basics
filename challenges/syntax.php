<?php
function letters_optellen($words) {
    $max = '';
    foreach ($words as $word) {
        if (strlen($word) > strlen($max)){
            $max = $word;
    }}
    return $max;
}
 
$wordenLijst = ['kat', 'hond', 'olifant'] ;
$result = letters_optellen($wordenLijst);

echo $result;


















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

 