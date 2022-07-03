<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">  
    <title>Document</title>
</head>
<body>
<form action="inc/login.inc.php" method="POST" class="m-3">
        <div class="mb-3">
            <label class="form-label">email</label>
            <input type="email" class="form-control" name="email"/>
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="pwd"/>
        </div>
        <div class="mb-3">
            <input type="submit" class="form-control btn btn-primary" name="submit"/>
        </div>
        <a href="form.php" class="form-control btn btn-primary" name="#">Doesn't have an email</a>
    </form>

</body>
</html>