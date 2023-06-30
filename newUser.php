<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "task";

$conn = mysqli_connect($servername, $username, $password, $database);


if($_SERVER['REQUEST_METHOD'] == 'POST'){
$id = $_POST['id']; 
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$bday = $_POST['bday'];
$email = $_POST['email'];
$contact = $_POST['contact'];


$sql = " INSERT INTO `user` ( `user_id`, `user_fname`, `user_lname`,`user_bday`, `user_email`, `user_contact`) VALUES ('$id', '$fname', '$lname','$bday', '$email', ' $contact') ";
$result = mysqli_query($conn, $sql);
}
?>