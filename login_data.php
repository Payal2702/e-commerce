<?php

session_start();

$conn = mysqli_connect("localhost", "root", "", "e_commerce");
$email = $_POST["email"];
$pass = $_POST["pass"];

$sql = "SELECT * FROM `user_data` WHERE `Email` = '$email' AND `Password` = '$pass'";

$query = mysqli_query($conn , $sql);


if($query){
    echo "Logged in successfully";
    echo "First name:". $_SESSION["first_name"]."<br>";
    echo "Last name:". $_SESSION["last_name"]."<br>";
    echo "Email:". $email."<br>";
    echo "Password:". $pass."<br>";

    
}
else{
    echo "error";
}












?>