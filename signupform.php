<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">  
    <title>LOGS</title>
</head>
<body>
    <form action="inc/signup.inc.php" method="POST" class="m-3">
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="name"/>
        </div>
        <div class="mb-3">
            <label class="form-label">email</label>
            <input type="email" class="form-control" name="email"/>
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="pwd"/>
        </div>
        <div class="mb-3">
            <label class="form-label">Confirm Password</label>
            <input type="password" class="form-control" name="pwdRep"/>
        </div>
        <div class="mb-3">
            <input type="submit" class="form-control btn btn-primary" name="submit"/>
        </div>
        <div class="mb-3">
            <a href="loginForm.php" class="form-control btn btn-primary" name="#">Already have an email</a>
        </div>
    </form>
</body>
</html>