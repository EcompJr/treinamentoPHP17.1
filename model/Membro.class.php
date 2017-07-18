<?php

require_once("../database/Connection.class.php");

class Membro {
    //php -S localhost:8080
    public $login = null;
    public $senha = null;
    public $id = null;

    function __construct($login, $senha){
        $this->login = $login;
        $this->senha = $senha;
    }

    function getLogin(){
        return $this->login;
    }

    function setLogin($login){
        $this->login = $login;
    }

    function getSenha(){
        return $this->senha;
    }

    function setSenha($senha){
        $this->senha = $senha;
    }

    function setId($id){
        $this->id = $id;
    }

    function auth(){
        $conn = Connection::getInstance();
        $query = "SELECT * FROM pcd_db WHERE login =  \"$this->login\" AND senha = \"$this->senha\"";
        $sql = $conn->query($query);
        $row = $sql->fetch(PDO::FETCH_ASSOC);
        return $row;
    }

}
?>