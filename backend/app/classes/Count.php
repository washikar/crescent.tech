<?php
/**
 * Created by PhpStorm.
 * User: Mohammad Ikbal
 * Date: 29-Jul-18
 * Time: 4:24 PM
 */

namespace App\classes;
use App\database\Database;

//count the row
class Count
{
    public function countRow()
    {
        $count = 0;

        $sql = "SELECT * FROM payment_request WHERE request_check='0'";
        if (mysqli_query(Database::dbCon(), $sql)) {
            $queryResult = mysqli_query(Database::dbCon(), $sql);
            while ($row = mysqli_fetch_assoc($queryResult)) {
                $count++;
            }
            return $count;

        } else {
            die('Query Problem' . mysqli_error(Database::dbCon()));
        }

    }
    public function countRegistration()
    {
        $count = 0;

        $sql = "SELECT * FROM payment_request";
        if (mysqli_query(Database::dbCon(), $sql)) {
            $queryResult = mysqli_query(Database::dbCon(), $sql);
            while ($row = mysqli_fetch_assoc($queryResult)) {
                $count++;
            }
            return $count;

        } else {
            die('Query Problem' . mysqli_error(Database::dbCon()));
        }
    }
    public function countInstructor()
    {
        $count = 0;

        $sql = "SELECT * FROM instructor";
        if (mysqli_query(Database::dbCon(), $sql)) {
            $queryResult = mysqli_query(Database::dbCon(), $sql);
            while ($row = mysqli_fetch_assoc($queryResult)) {
                $count++;
            }
            return $count;

        } else {
            die('Query Problem' . mysqli_error(Database::dbCon()));
        }
    }
    public function countCourse()
    {
        $count = 0;

        $sql = "SELECT * FROM courses_name";
        if (mysqli_query(Database::dbCon(), $sql)) {
            $queryResult = mysqli_query(Database::dbCon(), $sql);
            while ($row = mysqli_fetch_assoc($queryResult)) {
                $count++;
            }
            return $count;

        } else {
            die('Query Problem' . mysqli_error(Database::dbCon()));
        }
    }

}