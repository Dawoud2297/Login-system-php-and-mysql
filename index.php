<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="m-4">
            <div class="m-4"> 
                    <?php if(isset($_SESSION['userName'])){ ?>
                        <h1>Welcome <?php echo $_SESSION['userName'] ?></h1>                        
                    <?php }?>
            </div>
            <a href="classes/logout.php" class="btn btn-outline-primary" > Logout</a>
        </div>
    </div>
</body>
</html>