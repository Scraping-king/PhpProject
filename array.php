<?php
// //indexed array
// $prog=["HTML","CSS","REACT","C++"];
// // echo $prog[3];
// $arrlen=count($prog);
// sort($prog);
// for($i=0;$i<$arrlen;$i++){
//     echo $prog[$i];
//     echo "<br>";
// }

// //associative array
// $age=array("nahom"=>"25","melat"=>"20");
// asort($age);
// // echo $age["nahom"];
// foreach($age as $age=>$value){
//     echo "$age:"."$value";
//     echo "<br>";
// }

// multidimenssional array
$program=array(
    array("php","python","c++","javascript"),
    array("react","c#","java","argorithm"),
);
// echo $program[0][1];
for($row=0;$row<=1;$row++){
    echo "row $row";
    echo "<br>";
    for($col=0;$col<=3;$col++){
        echo $program[$row][$col];
        echo "<br>";
    }
}
?>