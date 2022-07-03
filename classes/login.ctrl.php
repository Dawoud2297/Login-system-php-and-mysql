<?php

class LoginCtrl extends Login {

    private $email;
    private $pwd;

    public function __construct($email,$pwd)
    {
        $this->email = $email;
        $this->pwd  =$pwd;
    }

    private function emptyInputs(){
        $res;
        if(empty($this->email) || empty($this->pwd)){
            $res = false;
        }else{
            $res = true;
        }
        return $res;
    }

    public function loginUser(){
        if($this->emptyInputs() == false){
            header('location: ../loginForm.php?error=feildsareEmpty');
            exit();
        }
        $this->getUser($this->pwd,$this->email);
    }


}

?>