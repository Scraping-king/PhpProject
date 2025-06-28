<html>
<body>
<form action="phpForm.php" method="get">
Name:<input type="text" name="username" id=""><br><br>
Email:<input type="text" name="Email" id=""><br><br>
Comment:<textarea name="Comment" id="" cols="20" rows="3"></textarea><br><br>
Gender:<input type="radio" name="gender" id="" value="male">male
<input type="radio" name="gender" id="" value="female">female
<input type="submit" name="submit" value="submit">
</form>
<?php
if($_GET['submit']){
    echo $_GET['username']."<br>";
    echo $_GET['Email']."<br>";
    echo $_GET['Comment']."<br>";
    echo $_GET['gender'];
}
?>
</body>
</html>