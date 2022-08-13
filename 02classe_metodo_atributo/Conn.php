<?php

class Conn
{
    public $host;
    public $user; //"root";
    public $pass;
    public $dbname;
    public $port;
    public $connect = null;

    public function __construct(){

        /*
        Cole abaixo $hashOut
        */
        $hashOut = [
            "host" => "database-1.c5rwuxpdslhl.sa-east-1.rds.amazonaws.com",
            "user" => "admin",
            "pass" => "",
            "dbname" => "",
            "port" => 3306
        ];
        
        $this->host = $hashOut["host"];
        $this->user = $hashOut["user"];
        $this->pass = $hashOut["pass"];
        $this->dbname = $hashOut["dbname"];
    }
    public function conectar(){
        try{
            //Conexao com a porta
            //$this->connect = new PDO("mysql:host=" . $this->host . ";port=" . $this->port . ";dbname=" . $this->dbname, $this->user, $this->pass);

            //Conexao sem a porta
            $this->connect = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbname, $this->user, $this->pass);

            echo "Conexão realizada com sucesso!";
            return $this->connect;
        } catch (Exception $err){
            echo "Erro: Conexão não realizada com sucesso! Erro gerado: " . $err;
            //echo "Tente mais tarde ou entre em contado ...";
            return false;
        }
    }
}