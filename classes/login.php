<?php

class Login extends Dbh{
    protected function getUser($pwd,$email){
        $stmt = $this->connect()->prepare('SELECT password FROM indUser WHERE email = ? OR name = ?');

        if(!$stmt->execute(array($email,$email))){
            $stmt = null;
            header('location: ../loginForm.php?error=publicloginerror');
            exit();
        }
        if($stmt->rowCount() == 0){
            $stmt = null;
            header('location: ../loginForm.php?error=userNotFound');
            exit();
        }

        $passHash = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $passCompare = password_verify($pwd,$passHash[0]['password']);

        if($passCompare == false){
            $stmt = null;
            header('location: ../loginForm.php?error=wrongpassword');
            exit();
        }elseif($passCompare == true){
            $stmt = $this->connect()->prepare('SELECT * FROM indUser WHERE email = ? OR name = ? And password = ?;');

            if(!$stmt->execute(array($email,$email,$pwd))){
                $stmt = null;
            header('location: ../loginForm.php?error=afterPassloginerror');
            exit();
            }

            if($stmt->rowCount() == 0){
                $stmt = null;
                header('location: ../loginForm.php?error=afterPassuserisnotexist');
                exit();
            }

            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            session_start();

            $_SESSION['userName'] = $user[0]['name'];

        }

        $stmt = null;
    }

}

?>