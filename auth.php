<?php
$conn = mysqli_connect('localhost', 'root', '', 'ajax');

$email = $_POST['email'];
$pass = $_POST['password'];
$sql = "SELECT * FROM student WHERE email ='$email'";
if (mysqli_query($conn, $sql)->num_rows == 1) {
    $sql = "SELECT * FROM student WHERE email ='$email' AND password ='$pass'";
    if (mysqli_query($conn, $sql)->num_rows == 1) {
        $userdata = mysqli_fetch_assoc(mysqli_query($conn, $sql));
        session_start();

        $_SESSION['user'] = $userdata;

        echo true;
    } else {
        echo 'password is wrong';
    }
} else {
    echo 'email is wrong';
}
