<?php
//database connection code
$conn=mysqli_connect('localhost','root','','iibm');

//get the post records
$fn=$_POST["fname"];
$ln=$_POST["lname"];
$em=$_POST["email"];
$ph=$_POST["pnum"];
$mass=$_POST["massage"];

//database insert sql code
//note:  ' and ` is not equel
//not requred uper and lower case in insert
$sql = "insert into `FORM1` (`First name`, `Last Name`, `Email`, `Phone`, `Massage`) VALUES('$fn','$ln','$em','$ph','$mass')";




//insert in database

$final = mysqli_query($conn,$sql);


if($final)
{
    echo "<h1>Form Are Submit</h1>";
}







?>