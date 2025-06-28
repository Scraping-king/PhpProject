<?php
if(isset($_POST["submit"])){
    $user=$_POST["username"];
    $pass=$_POST["password"];
    
    $upercase=preg_match('@[A-Z]@',$pass);
    $lowercase=preg_match('@[a-z]@',$pass);
    $number=preg_match('@[0-9]@',$pass);
    $special_char = preg_match('@[^\w]@', $pass);  // matches special characters
    $passerr="password must contain at least on capital,one small,one number and one special character";
    
    if(empty($user)){
        echo "username is mandatory!";
    }elseif(strlen($user)<=3){
        echo "username must be at least 4 character";
        echo "<br>";
    }else(!preg_match("/^[a-zA-Z]*$/",$user)){
        echo "username must be alphabet";
    }else{
        // echo $user;
    }
    if(!$upercase || !$lowercase || !$number || !$special_char || strlen($pass)<8){
        echo $passerr;
    }
    elseif(strlen($pass)<=8){
        echo "passward must be at least 8 character!";
    }
}
?>
<!DOCTYPE html>
<html lang="eng">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>php validation</title>
</head>
<body>
<form action="validation.php" method="post">
username:<input type="text" name="username" id=""><br><br>
password:<input type="password" name="password" id=""><br><br>
<input type="submit" name="submit" value="register">
</form>
</body>
</html>