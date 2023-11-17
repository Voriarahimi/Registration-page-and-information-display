<?php


$f=$_POST['name'];
$g = $_POST['fname'];
$k = $_POST['age'];
$v = $_POST['blood'];

$a=mysqli_connect("localhost","root","");
mysqli_select_db($a,'class');
$b=mysqli_query($a,"insert into `voria` values('$f','$g','$k','$v')");
if(empty($f) || empty($g) || empty($k) || empty($v) ){
    echo("یکی از ورودی هاخالی یا به اشتباه وارد شده");
}
else{
    echo("اطلاعات با موفقعیت ثبت شد!:)");}
    ?>


