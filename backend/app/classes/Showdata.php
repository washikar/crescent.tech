<?php
/**
 * Created by PhpStorm.
 * User: Mohammad Ikbal
 * Date: 23-Jul-18
 * Time: 12:59 AM
 */

namespace App\classes;

use App\database\Database;

class Showdata
{
    public function fatchAlldata()
    {
        $sql = 'SELECT * FROM `registrationform`';
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

    public function fatchAllHeadNews()
    {
        $sql = 'SELECT * FROM `headnews` ORDER BY id DESC';
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

    public function fatchAllCourseList()
    {
        $sql = 'SELECT * FROM `course_list` ORDER BY id DESC';
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

    public function fatchAllcontantList()
    {
        $sql = 'SELECT * FROM `contact` ORDER BY id DESC';
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

    public function studentData()
    {

        $sql = 'SELECT * FROM `registrationform` ORDER BY id DESC';
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

    public function studentSingleData($id)
    {

        $sql = "SELECT * FROM `registrationform` WHERE id='$id'";
        if (mysqli_query(Database::dbCon(), $sql)) {
            $queryResult = mysqli_query(Database::dbCon(), $sql);
            $row = mysqli_fetch_assoc($queryResult);
        } else {
            die('Query Problem' . mysqli_error(Database::dbCon()));
        }
        return $row;

    }
    public function fatchAllInstructor(){
        $sql = 'SELECT * FROM `instructor` ORDER BY id DESC';
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

    public function fatchAllCourses(){
        $sql = 'SELECT * FROM `courses_name` ORDER BY id DESC';
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