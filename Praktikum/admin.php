<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <div class="text-center mt-5">
    <h1 class="h3">Admin Page</h1>
    <p>Welcome aboard <?php echo $_SESSION['admin']; ?></p>
    <a href="logout.php" class="btn btn-outline-danger btn-sm">Logout</a>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>