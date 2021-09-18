<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <script language="javascript" src="./mask.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
    <div class="container text-center mt-5 mb-5">
    <div class="row">
        <form style="max-width: 480px; margin:auto; padding-top:8%;" action="ceklog.php" method="post">
        <h1 class="h3">Please Login</h1>
        <div> 
            <label for="username" class="sr-only"></label>
            <input type="text" class="form-control" name="username" placeholder="Username" onkeypress="return runScript(event)">
        </div>
    
        <div class="mb-3">
            <label for="password" class="sr-only"></label>
            <input type="password" class="form-control" name="password" placeholder="Password">
        </div>

        <div class="d-grid gap-2 mt-4">
            <button type="submit" class="btn btn-lg btn-primary btn-block" name="login">Login</button>
        </div>
        </form>
    
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>