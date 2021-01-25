<?php
class Login{
    private $conn;
    public $email;
    public $password;

    public function __construct(Conexion $conn)
    {
        $this->conn=$conn;

    }
    public function setEmail(string $email){
        $this->email=$email;

    }
    public function setPassword(string $password){
        $this->password=$password;
    }
    public function signIn(){
        $query="SELECT*FROM rusuario WHERE usuario = '$this->email' AND pass='sha1($this->password)' AND estado='1'";
        $this->conn->query($query);
        if($this->conn->affected_rows>0){
            return true;
        }else{
            return false; 
        }
    }
  
}



?>