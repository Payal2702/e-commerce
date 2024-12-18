<?php

session_start();
// var_dump($_SESSION);
// var_dump($_POST);
$_SESSION["first_name"] = $_POST["fname"];
$_SESSION["last_name"] = $_POST["lname"];


$conn = mysqli_connect("localhost", "root", "", "e_commerce");
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$pass = $_POST["pass"];
$cpass = $_POST["cpass"];




$sql = "INSERT INTO `user_data` (`First_name` , `Last_name`, `Email`, `Password`) VALUES ('$fname', '$lname', '$email', '$pass')";

if($pass === $cpass){
    $query = mysqli_query($conn , $sql);
    if($query){
        echo "Data inserted";
        header("Location: login.php");//redirect
    }
    else{
        echo "Error..";
    }
}
else{
    echo "Password does not matched";
}











