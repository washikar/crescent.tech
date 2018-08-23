<?php
/**
 * Created by PhpStorm.
 * User: Mohammad Ikbal
 * Date: 23-Jul-18
 * Time: 1:11 PM
 */

namespace App\classes;
use App\database\Database;

class DeleteData
{
    public function deleteHeadNews($id){

        $sql="DELETE FROM `headnews` WHERE id='$id'";
        if (mysqli_query(Database::dbCon(), $sql)) {
            echo "<script> alert('Your Information Delete Successfuly');
                            window.history.back();
                 </script>";
        }
        else {
            die('Query Problem' . mysqli_error(Database::dbCon()));
        }
    }
    public function deleteCourse($id){
        $query = "SELECT * FROM `course_list` WHERE id='$id'";
        if (mysqli_query(Database::dbCon(), $query)) {
            $queryResult = mysqli_query(Database::dbCon(), $query);
             $row = mysqli_fetch_assoc($queryResult);
                $image = $row['course_image'];
            unlink("assets/images/course_image/".$image);
        }

        $sql="DELETE FROM `course_list` WHERE id='$id'";
        if (mysqli_query(Database::dbCon(), $sql)) {
            echo "<script> alert('Your Information Delete Successfuly');
                            window.history.back();
                 </script>";
        }
        else {
            die('Query Problem' . mysqli_error(Database::dbCon()));
        }
    }
    public function deleteContactList($id){
        $sql="DELETE FROM `contact` WHERE id='$id'";
        if (mysqli_query(Database::dbCon(), $sql)) {
            echo "<script> alert('Your Information Delete Successfuly');
                            window.history.back();
                 </script>";
        }
        else {
            die('Query Problem' . mysqli_error(Database::dbCon()));
        }
    }
    public function deleteInstructor($id){
        $query = "SELECT * FROM `instructor` WHERE id='$id'";
        if (mysqli_query(Database::dbCon(), $query)) {
            $queryResult = mysqli_query(Database::dbCon(), $query);
            $row = mysqli_fetch_assoc($queryResult);
            $image = $row['image'];
            unlink("assets/images/instructor_image/".$image);
        }

        $sql="DELETE FROM `instructor` WHERE id='$id'";
        if (mysqli_query(Database::dbCon(), $sql)) {
            echo "<script> alert('Your Information Delete Successfuly');
                            window.history.back();
                 </script>";
        }
        else {
            die('Query Problem' . mysqli_error(Database::dbCon()));
        }
    }
    public function deleteCourseName($id){
        $sql="DELETE FROM `courses_name` WHERE id='$id'";
        if (mysqli_query(Database::dbCon(), $sql)) {
            echo "<script> alert('Your Information Delete Successfuly');
                            window.history.back();
                 </script>";
        }
        else {
            die('Query Problem' . mysqli_error(Database::dbCon()));
        }
        die();

    }
    public function deleteTransactionNumber($id){
        $sql="DELETE FROM `t_account` WHERE id='$id'";
        if (mysqli_query(Database::dbCon(), $sql)) {
            echo "<script> alert('Your Information Delete Successfuly');
                            window.history.back();
                 </script>";
        }
        else {
            die('Query Problem' . mysqli_error(Database::dbCon()));
        }
        die();

    }

}