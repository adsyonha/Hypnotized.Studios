<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hypnotized";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn)
{
    die("Connect Failed". mysqli_connect_error());
}

if(isset($_POST["save"]))
{
    $name = $_POST["Name"];
    $item = $_POST['Item'];
    $phonenumber = $_POST["PhoneNumber"];
    $address = $_POST["Address"];
    $zipcode = $_POST["Zipcode"];
    $size = $_POST["Size"];
}