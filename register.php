<?php
include "db.php";

$name = $_POST['firstname'] . ' ' . $_POST['lastname'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$sql_check = "SELECT * FROM users WHERE email='$email'";
$result_check = mysqli_query($conn, $sql_check);

if (mysqli_num_rows($result_check) > 0) {
    echo "Email already registered. Please use a different email.";
} else {
    $sql = "INSERT INTO users(name,email,password) 
    VALUES('$name','$email','$password')";

    if(mysqli_query($conn,$sql)){
        header("Location: login.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>