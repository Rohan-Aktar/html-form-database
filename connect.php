<?php
error_reporting(0);
$servername="localhost";
$username="root";
$password="";
$dbname="database";

$conn = mysqli_connect("localhost","root","","database");

if($conn){
    // echo "Connection Established";
    }
    else{
        echo "Faild to connect".mysqli_connect_error();
    }
 if(isset($_POST["submit"])){
$fn = $_POST["firstname"];
$ln = $_POST["lastname"];
$em = $_POST["email"];
$ph = $_POST["phone"];

if($fn!="" && $ln!="" && $em!="" && $ph!=""){
$query= "INSERT INTO USER VALUES('','$fn','$ln','$em','$ph')";
$data = mysqli_query($conn,$query);
if($data)
{
    // echo "Inserted successfully";
}}
else{
    echo " FAILED".mysqli_connect_error();
}};
    ?>