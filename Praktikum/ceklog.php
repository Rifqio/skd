<?php 
session_start();
require 'koneksi.php';
if(isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");

    //Cek username
    if (mysqli_num_rows($result) == 0) {
        echo
        '<script>alert("Wrong username or password"); document.location="index.php";</script>';
    } else {
        $row = mysqli_fetch_assoc($result);
        if ($row['role'] == "admin") {
            $_SESSION['admin'] = $username;
            echo
            '<script> 
                document.location="admin.php";
            </script>';
        } else {
            $_SESSION['user'] = $username;
            echo
            '<script>
                document.location="member.php";
            </script>';
        }
    }
}

?>