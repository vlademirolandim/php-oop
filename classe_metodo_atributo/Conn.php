<?php

class Conn
{
    public $host = "localhost";
    public $user = "root";
    public $pass = "";
    public $dbname = "celke";
    public $port = 3306;
    public $connect = null;

    public function conectar(){
        try{
            //Conexao com a porta
            //$this->connect = new PDO("mysql:host=" . $this->host . ";port=" . $this->port . ";dbname=" . $this->dbname, $this->user, $this->pass);

            //Conexao sem a porta
            $this->connect = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbname, $this->user, $this->pass);

            //echo "Conexão realizada com sucesso!";
            return $this->connect;
        } catch (Exception $err){
            echo "Erro: Conexão não realizada com sucesso! Erro gerado: " . $err;
            //echo "Tente mais tarde ou entre em contado ...";
            return false;
        }
    }
}