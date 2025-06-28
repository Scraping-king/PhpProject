<?php
// $txt="Hello world!";
// $y=30;
// echo $txt;
// echo "</br>";
// echo $y;


// function v_scope(){
//     $x=45; //local variable
//     echo $x;
// }
// v_scope();



// <!-- function v_scope(){
//     $x=45; //local variable
// }
// v_scope();
// echo $x;  //this display error b/c it is local variable


// $y=60;//global variable
// function v_scope(){
//     echo $y;//displys error  because it is global variable
// }
// v_scope();


// $y=60;//global variable
// function v_scope(){

// }
// v_scope();
// echo $y;


//we use global keyword to access global variable in local variable
$y=60;//global variable
function v_scope(){
    global $y;
    echo $y;
}
v_scope();


//static function
function st(){
    static $a=1;
    echo $a;
    $a++;
}
st();
echo "</br>";
st();
echo "</br>";
st();
?> 