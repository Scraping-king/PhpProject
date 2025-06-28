<?php declare(strict_types=1);  //declare(strict_types=1); used to accept based on the given data types
// function writemsg()  //no argument
// {
//     echo "HELLO VIEWERS";
// }
// writemsg();   //function calling

function add(int $a,int $b)  //function with argument
{
    $sum=$a+$b;
    echo "$sum <br>";
    // return $a+$b;
}
add(10,40);  //function calling
add(1,40);  //function calling
add(10,4);  //function calling
add(101,40);  //function calling
add(10,402);  //function calling
add(107,40);  //function calling
add(10,46);  //function calling
add(20,40);  //function calling
add(10,50);  //function calling
add(90,40);  //function calling
// echo add(10,30);
?>