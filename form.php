<?php
$name=$_POST["name"];
$lastname=$_POST["lastname"];
$calender=$_POST["calender"];
$gender=$_POST["gender"];
$file=$_POST["Document"];
$up_file = $_POST["uploadfile"];
// $filesize=$_FILES["Document"]["size"];
// $filetype=pathinfo($file,PATHINFO_EXTENSION);


echo "your name :".$name."<br>";
echo "your last name :".$lastname."<br>";
echo "date of birth :".$calender."<br>";
echo "gender :".$gender."<br>";
echo "id proof :".$file."<br>";
// echo "file size :".$filesize."<br>";
echo "image: ".$up_file."<br>";

?>