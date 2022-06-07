<?php

class Cconexion{

    public static function ConexionBD(){

        $host='192.168.1.85';
        $dbname='Chinook';
        $username='sa';
        $pasword ='Tec12345.';
        $puerto=1433;
/*
        $host='DESKTOP-5U3P0Q1\MSSQLINSTANCE';
        //$host='localhost';
        $dbname='AdventureWorks2019';
        $username='sa';
        $pasword ='Tec12345.';
        $puerto=1433;
*/

        try{
            $conn = new PDO ("sqlsrv:Server=$host,$puerto;Database=$dbname",$username,$pasword);
            echo "Se conectó correctamen a la base de datos";
        }
        catch(PDOException $exp){
            echo ("No se logró conectar correctamente con la base de datos: $dbname, error: $exp");
            //echo "<h4>acaba error<h4>";
        }

        return $conn;
    }

}

?>