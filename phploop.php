<?php
// //for loop
// for($i=0;$i<=100;$i++){
//     echo "$i </br>";
// }

// //another for loop to add 1-100 numbers
// $sum=0;
// for($i=1;$i<=100;$i++){
//     $sum=$sum+$i;
// }
// echo "the sum of 1-100 numbers is= $sum";


// //while loop
// $w=1;
// while($w<=100){
//     echo "$w </br>";
//     $w++;
// }


// //do while loop
// $x=1;
// do{
//     echo "$x </br>";
//     $x++;
// }
// while($x<=20)

// //foreach loop
// $colors=["white","black","blue","brown"];
// foreach($colors as $color){
//     echo "$color <br>";
// }

$person = [
    "name" => "Alice",
    "age" => 30,
    "city" => "New York"
];

foreach ($person as $key => $value) {
    echo "$key: $value<br>";
}
?>