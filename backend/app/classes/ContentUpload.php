<?php
/**
 * Created by PhpStorm.
 * User: Mohammad Ikbal
 * Date: 23-Jul-18
 * Time: 12:40 PM
 */

namespace App\classes;

use App\database\Database;

class ContentUpload
{
    public function headNewsUpload($data)
    {

        $description = $data['description'];
        $date = (date("d-m-y", time()));
        $sql = "INSERT INTO `headnews`(`id`, `description`, `date`) VALUES ('','$description','$date')";
        if (mysqli_query(Database::dbCon(), $sql)) {
            echo "<script> alert('Your Information Upload Successfuly');
                            window.history.back();
                 </script>";
        }
    }


    public function CourseUpload($data)
    {
        $image = $_FILES['image'];
        $filename = 'Crecent' . '_' . rand(1, 1000) . '_' . time() . '.' . pathinfo($image['name'], PATHINFO_EXTENSION);
        $course_name = $data['course_name'];
        $instructor_name = $data['instructor_name'];
        $course_rate = $data['course_rate'];
        $description = $data['description'];
        $download_link = $data['download_link'];
        $date = (date("d-m-y", time()));

        $directory = 'assets/images/course_image/';
        $imageUrl = $directory . $filename;
        $fileType = pathinfo($filename, PATHINFO_EXTENSION);
        $check = getimagesize($_FILES['image']['tmp_name']);
        if ($check) {
            if (file_exists($imageUrl)) {
                echo "<script> alert('This image already exist. Please select another one. Try Agin');</script>";
            } else {
                if ($_FILES['image']['size'] > 2000000) {

                    echo "<script> alert('Sorry, Your image size is to large. Try Agin')</script>";
                } else {
                    if ($fileType != 'jpg' && $fileType != 'jpeg' && $fileType != 'png') {
                        echo "<script> alert('Image tye is not supported. Please Use jpg of png. Try Agin');</script>";
                    } else {
                        $sql = "INSERT INTO `course_list`(`id`, `course_image`, `course_name`, `instructor_name`,`course_rate`, `description`,`download_link`, `date`) VALUES ('','$filename','$course_name','$instructor_name','$course_rate','$description','$download_link','$date')";
                        if (mysqli_query(Database::dbCon(), $sql)) {
                            move_uploaded_file($image['tmp_name'], $directory . $filename);
                            echo "<script> alert('Your Information Upload Successfuly');
                            window.history.back();
                 </script>";

                        }

                    }
                }
            }
        } else {
            die('Query Problem' . mysqli_error(Database::dbCon()));
        }
    }

    public function contactAddressUpload($data)
    {
        $mail = $data['mail'];
        $p_number = $data['p_number'];
        $website = $data['website'];
        $address = $data['address'];
        $date = (date("d-m-y", time()));
        $sql = "INSERT INTO `contact`(`id`, `mail`, `p_number`, `web_address`, `address`, `data`) VALUES ('','$mail','$p_number','$website','$address','$date')";
        if (mysqli_query(Database::dbCon(), $sql)) {
            echo "<script> alert('Your Information Upload Successfuly');
                            window.history.back();
                 </script>";
        }
    }


    public function registrationFrom($data)
    {
        $image = $_FILES['image'];
        $filename = 'Crecent' . '_' . rand(1, 1000) . '_' . time() . '.' . pathinfo($image['name'], PATHINFO_EXTENSION);
        $name = $data['name'];
        $email = $data['email'];
        $p_number = $data['p_number'];
        $address = $data['address'];
        $pass = md5($data['pass']);
        $user_roll = 2;
        $date = (date("d-m-y", time()));
        $directory = '../backend/student/assets/images/students/';
        $imageUrl = $directory . $filename;
        $fileType = pathinfo($filename, PATHINFO_EXTENSION);
        $check = getimagesize($_FILES['image']['tmp_name']);
        if ($check) {
            if (file_exists($imageUrl)) {
                echo "<script> alert('This image already exist. Please select another one. Try Agin');</script>";
            } else {
                if ($_FILES['image']['size'] > 2000000) {

                    echo "<script> alert('Sorry, Your image size is to large. Try Agin')</script>";
                } else {
                    if ($fileType != 'jpg' && $fileType != 'jpeg' && $fileType != 'png') {
                        echo "<script> alert('Image tye is not supported. Please Use jpg of png. Try Agin');</script>";
                    } else {
                        $sql = "INSERT INTO `registrationform`(`id`, `image_name`, `name`, `email`, `p_number`, `address`,`date`,`user_roll`, `password`) VALUES ('','$filename','$name','$email','$p_number','$address','$date','$user_roll','$pass')";
                        if (mysqli_query(Database::dbCon(), $sql)) {
                            move_uploaded_file($image['tmp_name'], $directory . $filename);
                            echo "<script> alert('Your Information Upload Successfuly');
                            window.history.back();
                 </script>";

                        }

                    }
                }
            }
        } else {
            die('Query Problem' . mysqli_error(Database::dbCon()));
        }


    }

    public function requestforCourse($data)
    {
        $user_id = $data['id'];
        $payment_way = $data['payment_request'];
        $transaction_number = $data['transaction_number'];
        $deposited_amount = $data['deposited_amount'];
        $name = $data['name'];
        $mail = $data['email'];
        $course_name = $data['course_name'];
        $date = (date("d-m-y", time()));
        $request_check = 0;


        $sql = "SELECT * FROM `course_list` WHERE course_name='$course_name'";
        if (mysqli_query(Database::dbCon(), $sql)) {
            $queryResult = mysqli_query(Database::dbCon(), $sql);
            $row = mysqli_fetch_assoc($queryResult);
        } else {
            die('Query Problem3' . mysqli_error(Database::dbCon()));
        }

        $download_link = $row['download_link'];


        $sql = "INSERT INTO `payment_request`(`id`, `payment_way`, `transaction_number`, `deposited_amount`,`user_id`,`name`, `mail`, `course_name`, `download_link`, `date`,`request_check`) VALUES ('','$payment_way','$transaction_number','$deposited_amount','$user_id','$name','$mail','$course_name','$download_link','$date','$request_check')";
        if (mysqli_query(Database::dbCon(), $sql)) {
            echo "<script> alert('Your Information Upload Successfuly');
                            window.history.back();
                 </script>";
        }
    }

    //    instructor upload

    public function InstructorUpload($data)
    {
        $image = $_FILES['image'];
        $filename = 'Instructor_of_Crecent' . '_' . rand(1, 1000) . '_' . time() . '.' . pathinfo($image['name'], PATHINFO_EXTENSION);
        $instructor_name=$data['instructor_name'];
        $education=$data['education'];
        $mail=$data['mail'];
        $p_number=$data['p_number'];
        $address=$data['address'];
        $date = (date("d-m-y", time()));

        $directory = 'assets/images/instructor_image/';
        $imageUrl = $directory . $filename;
        $fileType = pathinfo($filename, PATHINFO_EXTENSION);
        $check = getimagesize($_FILES['image']['tmp_name']);
        if ($check) {
            if (file_exists($imageUrl)) {
                echo "<script> alert('This image already exist. Please select another one. Try Agin');</script>";
            } else {
                if ($_FILES['image']['size'] > 2000000) {

                    echo "<script> alert('Sorry, Your image size is to large. Try Agin')</script>";
                } else {
                    if ($fileType != 'jpg' && $fileType != 'jpeg' && $fileType != 'png') {
                        echo "<script> alert('Image tye is not supported. Please Use jpg of png. Try Agin');</script>";
                    } else {
                        $sql = "INSERT INTO `instructor`(`id`, `image`, `instructor_name`, `education`, `mail`, `p_number`, `address`, `date`) VALUES ('','$filename','$instructor_name','$education','$mail','$p_number','$address','$date')";
                        if (mysqli_query(Database::dbCon(), $sql)) {
                            move_uploaded_file($image['tmp_name'], $directory . $filename);
                            echo "<script> alert('Your Information Upload Successfuly');
                            window.history.back();
                 </script>";

                        }

                    }
                }
            }
        } else {
            die('Query Problem' . mysqli_error(Database::dbCon()));
        }


    }
    public function CourseNameUpload($data){
        $course_name=$data['course_name'];
        $sql="INSERT INTO `courses_name`(`course_name`) VALUES ('$course_name')";
        if (mysqli_query(Database::dbCon(), $sql)) {
            echo "<script> alert('Your Information Upload Successfuly');
                            window.history.back();
                 </script>";
        }
    }
    public function TrasactionNumberAdd($data){
        {

            $t_number = $data['t_number'];
            $t_name = $data['t_name'];
            $date = (date("d-m-y", time()));
            $sql = "INSERT INTO  `t_account`(`id`, `t_number`, `t_name`, `data`) VALUES ('','$t_number','$t_name','$date')";
            if (mysqli_query(Database::dbCon(), $sql)) {
                echo "<script> alert('Your Information Upload Successfuly');
                            window.history.back();
                 </script>";
            }
        }
    }
}
