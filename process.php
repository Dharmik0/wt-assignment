<?php
session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,"mydatabase");
$txtName = $_POST['name'];
$txtEmail = $_POST['email'];

$txtMessage = $_POST['message'];

// database insert SQL code
$sql = "INSERT INTO contact(SrNo, Name, Email, Message) VALUES ('0', '$txtName', '$txtEmail', '$txtMessage')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
    echo "data recorded";
}

?>