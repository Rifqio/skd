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
    //Cek konfirmasi password
    if ($password !== $password2)
    {
        echo "<script>
              alert('Password tidak sesuai');
              </script>";
        return false;
    }
    // Enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);
  
   //Menambah user baru ke databse
    mysqli_query($conn, "INSERT INTO users VALUES('','$nama','$username','$password','$email','$alamat')");
    return mysqli_affected_rows($conn);
}
?>