<?php 
session_start();
require 'functions.php';
if(isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

    //Cek username
    if ( mysqli_num_rows($result) === 1 ){
        //Cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])){
            header("Location: dashboard.php");
            exit;
        }
    }
    $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <style>
        label {
            display: block;
        }
        ul{
            list-style-type: none;
        }
        input {
            max-width: 300px;
            margin:auto;
        }
    </style>
    
    <div class="container text-center mt-5 mb-5">
    <form style="margin:auto;" action="" method="POST">
        <ul>
            <h1 class="h2 mb-3">Login Page</h1>
            <?php if(isset($error)):?>
            <p style="color:red; font-style:italic">Username atau password salah</p>
            <?php endif;?>
            <li>
                <label for="username" class="sr-only"></label>
                <input type="text" class="form-control shadow-sm p-2 mb-4 bg-body rounded" name="username" id="username" placeholder="Username">
            </li>
            <li>
                <label for="password" class="sr-only"></label>
                <input type="password" class="form-control mt-3 shadow-sm p-2 mb-2 bg-body rounded" name="password" id="password" placeholder="Password">
            </li>
            <li>
                <button type="submit" class="btn btn-outline-primary mt-4" name="login">Login</button>
            </li>
            <p class="mt-3">Belum punya akun? <a href="register.php">Register</a></p>
        </ul>
    </form>
    </div>
    
</body>
</html>