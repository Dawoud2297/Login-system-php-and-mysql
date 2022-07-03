<?php


class SignupCtrl extends Signup{

    private $userName;
    private $pwd;
    private $pwdRepeat;
    private $email;


    public function __construct($uName,$pwd,$pwdRepeat,$email)
    {
        $this->userName = $uName;
        $this->pwd = $pwd;
        $this->pwdRepeat = $pwdRepeat;
        $this->email = $email;
    }

    private function inputIsEmpty(){
        $res;
        if(empty($this->userName) || empty($this->pwd) || empty($this->pwdRepeat) || empty($this->email)){
            $res = false;
        }else{
            $res = true;
        }
        return $res;
    }

    private function userNameCheck(){
        $res;
        if(!preg_match("/^[a-zA-z0-9]*$/",$this->userName)){
            $res = false;
        }else{
            $res  = true;
        }
        return $res;
    }

    private function invalidEmail(){
        $result;
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $result  = false;
        }else{
            $result = true;
        }
        return $result;
    }

    private function pwdsMatch(){
        $res;
        if($this->pwd !== $this->pwdRepeat){
            $res = false;
        }else{
            $res = true;
        }
        return $res;
    }
    private function userExist(){
        $res;
        if(!$this->checkUser($this->email)){
            $res = false;
        }else{
            $res = true;
        }
        return $res;
    }
    
    public function signUpUser(){
        if($this->inputIsEmpty() == false){
            header('location: ../signupform.php?error=inputIsEmpty');
            exit();
        }
        if($this->userNameCheck() == false){
            header('location: ../signupform.php?error=invalidUserName');
            exit();
        }
        if($this->pwdsMatch() == false){
            header('location: ../signupform.php?error=passwordDoesntMatch');
            exit();
        }
        if($this->userExist() == false){
            header('location: ../signupform.php?error=UserIsExist');
            exit();
        }
        $this->setUser($this->userName,$this->email,$this->pwd);
    }
}
?>