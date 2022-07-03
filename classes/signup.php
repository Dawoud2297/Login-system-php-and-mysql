<?php
class Signup extends Dbh{
    protected function checkUser($email){
        $stmt = $this->connect()->prepare('SELECT email FROM indUser WHERE email = ?;');
        if(!$stmt->execute(array($email))){
            $stmt = null;
            header('location : ../index.php?error=StmtError');
            exit();
        }
        $resultCheck;
        if($stmt->rowCount() > 0){
            $resultCheck = false;
        }else{
            $resultCheck = true;
        }
        return $resultCheck;
    }

    protected function setUser($userName, $email, $pwd){
        $stmt = $this->connect()->prepare('INSERT INTO indUser (name, email, password) VALUES (?,?,?);');
        $hashedPass = password_hash($pwd, PASSWORD_DEFAULT);

        if(!$stmt->execute(array($userName,$email,$hashedPass))){
            $stmt = null;
            header('location : ../signupform.php?error=insertStmtError');
            exit();
        }
        $stmt = null;
    }
}
?>