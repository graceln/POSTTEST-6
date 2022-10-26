<?php 
require 'koneksi.php';
$username = $_POST["username"];
$email = $_POST["email"];
$phone_number = $_POST["phone_number"];
$password = $_POST["password"];

$query_sql = "INSERT INTO users (username, email, phone_number, password) 
            VALUES ('$username', '$email', '$phone_number', '$password')";


if (mysqli_query($conn, $query_sql)) {
    header("Location: signin.html");
} else {
    echo "Sign Up failed : " . mysqli_error($conn);
}

?>
