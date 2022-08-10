<?php

class Conn
{
    public $host = "db-mysql-testes.c5rwuxpdslhl.sa-east-1.rds.amazonaws.com";
    public $user = "admin"; //"root";
    public $pass = "aletheia2006";
    public $dbname = "db-mysql-testes";
    public $port = 3306;
    public $connect = null;

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