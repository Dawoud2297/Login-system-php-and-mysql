<?php

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    include "../classes/dbh.php";
    include "../classes/login.php";
    include "../classes/login.ctrl.php";

    $login = new LoginCtrl($email,$pwd);

    $login->loginUser();

    header('location: ../index.php?error=none');
}

?>