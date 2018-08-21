<?php
namespace App\database;
class Database{
   public static function dbCon(){
        $hostName='localhost';
        $userName='root';
        $passWord='';
        $dbName='crecent';
        $db_con=mysqli_connect($hostName,$userName,$passWord,$dbName);
        return $db_con;

       //$hostName='localhost';
//$userName='crescentbd_crecent';
//$passWord='~oGEDeVcAJOQ';
//$dbName='crescentbd_crecent';
//$db_con=mysqli_connect($hostName,$userName,$passWord,$dbName);
//return $db_con;
    }



}
?>