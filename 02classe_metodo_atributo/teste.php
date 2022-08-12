<?php

class Conn
{
    public $host = "database-1.c5rwuxpdslhl.sa-east-1.rds.amazonaws.com";
    public $user = "admin"; //"root";
    public $pass = "testvla2022";
    public $dbname = "testvla";
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

    public function exec( $sql ){
        $this->connect->exec( $sql );
    }

}

$conn = new Conn();
$conn->conectar();
$conn->exec( file_get_contents( "celke.sql" , __DIR__ ) );