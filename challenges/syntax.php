<?php
function lijst_sorteren($lijst) {
    $newLijst = array();

    foreach ($lijst as $words){
        $key = array_search(min($lijst), $lijst);
        array_push($newLijst, min($lijst));
        unset($lijst[$key]);
    }
    return $newLijst;
}
 
$wordenLijst = [3, 1, 4, 2];
$result = lijst_sorteren($wordenLijst);

foreach ($result as $word){
    echo $word;
    echo '<br>';
}














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

 