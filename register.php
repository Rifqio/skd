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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    
    <meta charset="UTF-8">
    <title>Registrasi</title>
</head>
<body>
    <div class="container text-center mt-5 mb-5">
    <form action=""  style="max-width:480px; margin:auto;" method="POST">

            <h1 class="h2"> Halaman Registrasi </h1>

            <div class="input-group mb-3 mt-3">
                <span class="input-group-text" id="basic-addon1">@</span>
                <input type="email" class="form-control" placeholder="Email" name="email" id="email">
                <label for="email"></label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" name="nama" id="nama" >
                <label for="floatingInput">Nama</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="username" onkeypress="return event.charCode != 32" name="username">
                <label for="username">Username </label>   
            </div>

            <div class="form-floating mb-3">
                <input type="password" class="form-control" name="password" id="password" 
                pattern="(?=.*\d)(?=.*[a-z])(?=.*?[#?!@$%^&*-])(?=.*[A-Z]).{8,}" 
                title="Must contain at least one number, one uppercase and lowercase letter, one special character and at least 8 or more characters">
                <label for="password">Password  </label>
            </div>

            <div class="form-floating mb-3">
                <input type="password" class="form-control" name="password2" id="password2" >
                <label for="password2">Konfirmasi Password </label>
            </div>
            
            <div class="form-floating mb-3">
                <textarea  class="form-control" placeholder="Alamat" name="alamat" id="alamat"> </textarea>
                <label for="alamat">Alamat </label>
            </div>

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-success" name="register">Daftar!</button>
            </div>
   

    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>
</html>