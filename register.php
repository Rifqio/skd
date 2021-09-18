<?php 
require 'functions.php';
if (isset($_POST["register"]) ){
    if(registrasi ($_POST) >0){
        echo "<script>alert('User berhasil ditambah');  
        </script>";
    }else{
        echo mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registrasi</title>
    <style>
        label {
            display: block;
        }
        ul{
            list-style-type: none;
        }
    </style>
</head>
<body>
    <h1> Halaman Registrasi </h1>
    
    <form action="" method="POST">
        <ul>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
                <label for="username">Username : </label>
                <input type="text" onkeypress="return event.charCode != 32" name="username" id="username">
            </li>
            <li>
                <label for="password">Password : </label>
                <input type="password" name="password" id="password"
                pattern="(?=.*\d)(?=.*[a-z])(?=.*?[#?!@$%^&*-])(?=.*[A-Z]).{8,}" 
                title="Must contain at least one number, one uppercase and lowercase letter, one special character and at least 8 or more characters">
            </li>
            <li>
                <label for="password2">Konfirmasi Password : </label>
                <input type="password" name="password2" id="password2">
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email">
            </li>
            <li>
                <label for="alamat">Alamat : </label>
                <textarea name="alamat" id="alamat"> </textarea>
            </li>
            <li>
                <button type="submit" name="register">Daftar!</button>
            </li>
        </ul>

    </form>
</body>
</html>