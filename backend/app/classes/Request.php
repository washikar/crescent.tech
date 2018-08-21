<?php

namespace App\classes;
use App\database\Database;

class Request
{
    public function requestData(){
        $request_check=0;

        $sql = "SELECT * FROM `payment_request` WHERE request_check='$request_check'";
        if (mysqli_query(Database::dbCon(), $sql)) {
            $queryResult = mysqli_query(Database::dbCon(), $sql);
            while ($row = mysqli_fetch_assoc($queryResult)) {
                $array[] = $row;

            }
            return $array;

        } else {
            die('Query Problem' . mysqli_error(Database::dbCon()));
        }

    }
    public function studnetAcitve($data)
    {
        $id = $data['id'];
        $request_check=$data['request_check'];

        $sql = "UPDATE `payment_request` SET `request_check`='$request_check' WHERE id='$id'";
        if (mysqli_query(Database::dbCon(), $sql)) {
            echo "<script> alert('Student active Successfuly');
                           window.history.back();
                 </script>";
        }

    }
    public function showTutorial($id){
        $request_check=1;
        $sql = "SELECT * FROM `payment_request`WHERE request_check='$request_check' AND user_id='$id'";
        if (mysqli_query(Database::dbCon(), $sql)) {
            $queryResult = mysqli_query(Database::dbCon(), $sql);
            while ($row = mysqli_fetch_assoc($queryResult)) {
                $array[] = $row;

            }
            return $array;

        } else {
            die('Query Problem' . mysqli_error(Database::dbCon()));
        }

    }

}