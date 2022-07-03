<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $pwdRep = $_POST['pwdRep'];


    include "../classes/dbh.php";
    include "../classes/signup.php";
    include "../classes/signup.ctrl.php";

    $signup = new SignupCtrl($name,$pwd,$pwdRep,$email);

    $signup->signUpUser();

    header('location: ../loginForm.php?error=none');

}
?>