<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
<?php 
$conn = mysqli_connect("localhost","root","","skd");

function registrasi($data)
{
    global $conn;
    $nama = $data["nama"];
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn,$data["password"]);
    $password2 = mysqli_real_escape_string($conn,$data["password2"]);
    $email = $data["email"];
    $alamat = $data["alamat"];
    
    //Membuat token
    $token = hash('sha256',md5(date('Y m d')));
    //Check user terdaftar
    $sql_check = mysqli_query($conn, "SELECT * FROM users WHERE email=' ". $email . "'");
    $row_check = mysqli_num_rows($sql_check);
    //Cek konfirmasi password
    if ($password !== $password2)
    {
        echo "<script>
              alert('Password tidak sesuai');
              </script>";
        
    } else {
        if ($row_check > 0 )
        {
            echo '<script> alert("Email sudah terdaftar"); 
            document.location="register.php"; </script>';
        } else
        {
            $insert = mysqli_query($conn, "INSERT INTO users VALUES('','$nama','$username','$password','$email','$alamat','$token','0')");
            include("mail.php");

            if ($insert)
        {
            echo '<div class="alert alert-success">
            Pendaftaran berhasil silahkan cek email lalu <a href="login.php">Login </a></div>';
        }
        
    }
    $password = password_hash($password, PASSWORD_DEFAULT);
    return false;

        
    }
    // Enkripsi password
  
   //Menambah user baru ke databse
    
    return mysqli_affected_rows($conn);
}
?>