<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>

<div class="container text-center">
    <?php include "functions.php";
    $token = $_GET['t'];
    $sql_check = mysqli_query($conn, "SELECT * FROM users WHERE token='". $token . "' and aktif='0'");
    $total = mysqli_num_rows($sql_check);
    if ($total > 0 )
    {
        mysqli_query($conn, "UPDATE users SET aktif='1' WHERE token='".$token."' and aktif='0'");
        echo '<div class="alert alert-success"> Akun sudah aktif silahkan 
        <a href="login.php">Login</a></div>';
    }else
        echo '<div class="alert alert-warning"> Invalid token </div>'
    ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>