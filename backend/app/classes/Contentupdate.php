<?php
/**
 * Created by PhpStorm.
 * User: Mohammad Ikbal
 * Date: 23-Jul-18
 * Time: 1:36 PM
 */

namespace App\classes;

use App\database\Database;

class Contentupdate
{
    public function headNewsUpdate($data)
    {
        $id = $data['id'];
        $description = $data['description'];
        $sql = "UPDATE `headnews` SET `description`='$description' WHERE id='$id'";
        if (mysqli_query(Database::dbCon(), $sql)) {
            echo "<script> alert('Your Information Update Successfuly');
                           location.replace('headnews.php');
                 </script>";
        }

    }

    public function courseListUpdate($data)
    {

        $id = $data['id'];
        $course_name = $data['course_name'];
        $instructor_name = $data['instructor_name'];
        $course_rate = $data['course_rate'];
        $description = $data['description'];
        $download_link = $data['download_link'];
        if (isset($_FILES['image']) && $_FILES['image']['size'] > 0) {
            $query = "SELECT * FROM `course_list` WHERE id='$id'";
            if (mysqli_query(Database::dbCon(), $query)) {
                $queryResult = mysqli_query(Database::dbCon(), $query);
                $row = mysqli_fetch_assoc($queryResult);
                $image = $row['course_image'];
                unlink("assets/images/course_image/" . $image);
            }
            $image = $_FILES['image'];
            $filename = 'Crecent' . '_' . rand(1, 1000) . '_' . time() . '.' . pathinfo($image['name'], PATHINFO_EXTENSION);
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
                            $sql = "UPDATE `course_list` SET `course_image`='$filename',`course_name`='$course_name',`instructor_name`='$instructor_name',`course_rate`='$course_rate',`description`='$description',`download_link`='$download_link' WHERE id=$id";
                            if (mysqli_query(Database::dbCon(), $sql)) {
                                move_uploaded_file($image['tmp_name'], $directory . $filename);
                                echo "<script> alert('Your Information Update Successfuly');
                            window.history.back();
                 </script>";

                            }

                        }
                    }
                }
            } else {
                die('Query Problem' . mysqli_error(Database::dbCon()));
            }
        } else {
            $sql = "UPDATE `course_list` SET `course_name`='$course_name',`instructor_name`='$instructor_name',`course_rate`='$course_rate',`description`='$description',`download_link`='$download_link' WHERE id=$id";
            if (mysqli_query(Database::dbCon(), $sql)) {
                echo "<script> alert('Your Information Update Successfuly');
                            window.history.back();
                 </script>";
            } else {
                die('Query Problem 1st' . mysqli_error(Database::dbCon()));
            }
        }


    }

    public function contactListUpdate($data)
    {

        $id = $data['id'];
        $mail = $data['mail'];
        $p_number = $data['p_number'];
        $website = $data['website'];
        $address = $data['address'];

        $sql = "UPDATE `contact` SET `mail`='$mail',`p_number`='$p_number',`web_address`='$website',`address`='$address' WHERE id='$id'";
        if (mysqli_query(Database::dbCon(), $sql)) {
            echo "<script> alert('Your Information Update Successfuly');
                           location.replace('contact.php');
                 </script>";

        } else {
            die('Query Problem' . mysqli_error(Database::dbCon()));
        }

    }


    public function studentInfoUpdate($data)
    {
        {
            $id = $data['id'];
            $name = $data['name'];
            $email = $data['email'];
            $p_number = $data['p_number'];
            $address = $data['address'];

            if (isset($_FILES['image']) && $_FILES['image']['size'] > 0) {
                $query = "SELECT * FROM `registrationform` WHERE id='$id'";
                if (mysqli_query(Database::dbCon(), $query)) {
                    $queryResult = mysqli_query(Database::dbCon(), $query);
                    $row = mysqli_fetch_assoc($queryResult);
                    $image = $row['image_name'];
                    unlink("assets/images/students/" . $image);
                }
                $image = $_FILES['image'];
                $filename = 'Student' . '_' . rand(1, 1000) . '_' . time() . '.' . pathinfo($image['name'], PATHINFO_EXTENSION);
                $directory = 'assets/images/students/';
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
                                $sql = "UPDATE `registrationform` SET `image_name`='$filename',`name`='$name',`email`='$email',`p_number`='$p_number',`address`='$address' WHERE id=$id";
                                if (mysqli_query(Database::dbCon(), $sql)) {
                                    move_uploaded_file($image['tmp_name'], $directory . $filename);
                                    echo "<script> alert('Your Information Update Successfuly');
                            window.history.back();
                 </script>";

                                }

                            }
                        }
                    }
                } else {
                    die('Query Problem' . mysqli_error(Database::dbCon()));
                }
            } else {
                $sql = "UPDATE `registrationform` SET `name`='$name',`email`='$email',`p_number`='$p_number',`address`='$address' WHERE id=$id";
                if (mysqli_query(Database::dbCon(), $sql)) {
                    echo "<script> alert('Your Information Update Successfuly');
                            window.history.back();
                 </script>";
                } else {
                    die('Query Problem 1st' . mysqli_error(Database::dbCon()));
                }
            }


        }


    }

    public function changeStudentPass($data)
    {
        $id = $data['id'];
        $pass = md5($data['pass']);
        $sql = "UPDATE `registrationform` SET `password`='$pass' WHERE id=$id";
        if (mysqli_query(Database::dbCon(), $sql)) {
            echo "<script> alert('Your Password Update Successfuly');
                            window.history.back();
                 </script>";
        } else {
            die('Query Problem 1st' . mysqli_error(Database::dbCon()));
        }

    }
 public function InstructorUpdate($data){
     {
         $id = $data['id'];
         $instructor_name = $data['instructor_name'];
         $education = $data['education'];
         $mail= $data['mail'];
         $p_number = $data['p_number'];
         $address = $data['address'];

         if (isset($_FILES['image']) && $_FILES['image']['size'] > 0) {
             $query = "SELECT * FROM `instructor` WHERE id='$id'";
             if (mysqli_query(Database::dbCon(), $query)) {
                 $queryResult = mysqli_query(Database::dbCon(), $query);
                 $row = mysqli_fetch_assoc($queryResult);
                 $image = $row['image'];

                 unlink("assets/images/instructor_image/" . $image);
             }
             $image = $_FILES['image'];
             $filename = 'Instructor_of_Crecent' . '_' . rand(1, 1000) . '_' . time() . '.' . pathinfo($image['name'], PATHINFO_EXTENSION);
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
                             $sql = "UPDATE `instructor` SET `image`='$filename',`instructor_name`='$instructor_name',`education`='$education',`mail`='$mail',`p_number`='$p_number',`address`='$address' WHERE id=$id";
                             if (mysqli_query(Database::dbCon(), $sql)) {
                                 move_uploaded_file($image['tmp_name'], $directory . $filename);
                                 echo "<script> alert('Your Information Update Successfuly');
                            window.history.back();
                 </script>";

                             }

                         }
                     }
                 }
             } else {
                 die('Query Problem' . mysqli_error(Database::dbCon()));
             }
         } else {
             $sql = "UPDATE  `instructor` SET `instructor_name`='$instructor_name',`education`='$education',`mail`='$mail',`p_number`='$p_number',`address`='$address' WHERE id=$id";
             if (mysqli_query(Database::dbCon(), $sql)) {
                 echo "<script> alert('Your Information Update Successfuly');
                            window.history.back();
                 </script>";
             } else {
                 die('Query Problem 1st' . mysqli_error(Database::dbCon()));
             }
         }


     }
 }
 public function CourseNameUpdate($data){
     $id = $data['id'];
     $course_name=$data['course_name'];
     $sql = "UPDATE `courses_name` SET `course_name`='$course_name' WHERE id=$id";
     if (mysqli_query(Database::dbCon(), $sql)) {
         echo "<script> alert('Your Information Update Successfuly');
                            window.history.back();
                 </script>";
     } else {
         die('Query Problem 1st' . mysqli_error(Database::dbCon()));
     }


 }
    public function TransactionNumberUpdate($data)
    {
        $id=$data['id'];

        $t_number = $data['t_number'];
        $t_name = $data['t_name'];
        $sql = "UPDATE `t_account` SET `t_number`='$t_number',`t_name`='$t_name' WHERE id='$id'";
        if (mysqli_query(Database::dbCon(), $sql)) {
            echo "<script> alert('Your Information Update Successfuly');
                           location.replace('t_account.php');
                 </script>";

        } else {
            die('Query Problem' . mysqli_error(Database::dbCon()));
        }

    }
}