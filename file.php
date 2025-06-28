<?php
$new_file=fopen("sample.txt","w") or die("unable to open!");
$txt="GIRMA TECH";
// fwrite($new_file,$txt);
echo fread($new_file,filesize("sample.txt"));
?>