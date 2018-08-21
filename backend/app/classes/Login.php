<?php
/**
 * Created by PhpStorm.
 * User: Mohammad Ikbal
 * Date: 22-Jul-18
 * Time: 9:27 PM
 */

namespace App\classes;

use App\database\Database;

class Login
{
    public function checkLogin($data)
    {
        $email = htmlentities($data['email']);
        $password = htmlentities(md5($data['pass']));
        $query = 'SELECT * FROM `admin`';
        if (mysqli_query(Database::dbCon(), $query)) {
            $queryResult = mysqli_query(Database::dbCon(), $query);
            while ($row = mysqli_fetch_assoc($queryResult)) {

                if ($row['email'] == $email) {
                    if ($sql = "SELECT * FROM `admin` WHERE email='$email' AND password='$password'") {
                        if (mysqli_query(Database::dbCon(), $sql)) {
                            $queryResult = mysqli_query(Database::dbCon(), $sql);
                            $user = mysqli_fetch_assoc($queryResult);
                            if ($user) {
                                try {
                                    session_start();
                                    $_SESSION['id'] = $user['id'];
                                    $_SESSION['email'] = $user['email'];
                                    $_SESSION['user_roll']=$user['user_roll'];
                                    header('Location:admin/index.php');

                                } catch (\Exception $e) {
                                    print_r($e);
                                    die('error');
                                }


                            } else {
                                header('Location:index.php?massage= "Your Mail and Password Do not match"');
//
                            }
                        } else {
                            die('Query Problem' . mysqli_error(Database::dbCon()));
                        }
                    } else {
                        die('Query Problem' . mysqli_error(Database::dbCon()));

                    }
                } else {
                    $query = 'SELECT * FROM `registrationform`';
                    if (mysqli_query(Database::dbCon(), $query)) {
                        $queryResult = mysqli_query(Database::dbCon(), $query);
                        while ($row = mysqli_fetch_assoc($queryResult)) {
                            if ($row['email'] == $email) {
                                if ($sql = "SELECT * FROM `registrationform` WHERE email='$email' AND password='$password'") {
                                    if (mysqli_query(Database::dbCon(), $sql)) {
                                        $queryResult = mysqli_query(Database::dbCon(), $sql);
                                        $user = mysqli_fetch_assoc($queryResult);
                                        if ($user) {
                                            try {
                                                session_start();
                                                $_SESSION['id'] = $user['id'];
                                                $_SESSION['email'] = $user['email'];
                                                $_SESSION['name'] = $user['name'];
                                                $_SESSION['user_roll']=$user['user_roll'];
                                                header('Location:student/index.php');

                                            } catch (\Exception $e) {
                                                print_r($e);
                                                die('error');
                                            }


                                        } else {
                                            header('Location:index.php?massage= "Your Mail and Password Do not match"');
//
                                        }
                                    } else {
                                        die('Query Problem' . mysqli_error(Database::dbCon()));
                                    }
                                } else {
                                    die('Query Problem' . mysqli_error(Database::dbCon()));

                                }
                            }
                            else {
                                header('Location:index.php?massage= "Enter the valid Mail"');
                            }
                        }
                    }
                }

            }

        }
// else {
//            header('Location:index.php?massage= "Enter the valid Mail"');
//        }


    }
}