<?php
include_once 'inc/session.php';

use App\classes\ContentUpload as content;
use App\classes\Showdata as showdata;
use App\classes\DeleteData as deletedata;
use App\classes\Contentupdate as update;

//insert value
$ob_insert = new content();
//update the data
$ob_update=new update();
if(!empty($_POST)){
    if (!empty($_POST['id'])){
        $ob_update->InstructorUpdate($_POST);
    }
    else{
        $ob_insert->InstructorUpload($_POST);
    }
}
//show all data
$ob_showdata = new showdata();
$datas = $ob_showdata->fatchAllInstructor();
//data delete

$ob_delete= new deletedata();
if (!empty($_GET['info'])) {
    $id = $_GET['info'];
    $ob_delete->deleteInstructor($id);
}

include_once 'inc/header.php';
include_once 'inc/sidebar.php';
include_once 'inc/navbar.php';
?>
    <div class="content-wrapper">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Instructor Update</li>
        </ol>
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="text-info">Upload The Instructor</h5>
                    </div>
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="file" name="image" class="form-control" id="course_image"
                                       required>
                            </div>
                            <div class="form-group">
                                <input type="text" id="instructor_name" name="instructor_name" class="form-control"
                                       placeholder="Enter Instructor Name" required>
                            </div>
                            <div class="form-group">
                                <input type="text" id="education" name="education" class="form-control"
                                       placeholder="Enter Education Qualification" required>
                            </div>
                            <div class="form-group">
                                <input type="text" id="mail" name="mail" class="form-control"
                                       placeholder="Enter Mail" required>
                            </div>
                            <div class="form-group">
                                <input type="text" id="p_number" name="p_number" class="form-control"
                                       placeholder="Enter Phone Number" required>
                            </div>
                            <div class="form-group">
                                <input type="text" id="address" name="address" class="form-control"
                                       placeholder="Enter Address" required>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="table-responsive">
            <h5 class="text-info">Show The Instructor List</h5>
            <table class="table table-hover table-bordered table-light">
                <tr>
                    <th>No</th>
                    <th>Image</th>
                    <th>Instructor Name</th>
                    <th>Education Qualification</th>
                    <th>Mail</th>
                    <th>Phone Number</th>
                    <th>Address</th>
                    <th class="text-center" colspan="2">Action</th>
                </tr>
                <?php
                $i=0;
                if (!empty($datas)) {

                    foreach ($datas as $data) {
//                        print_r($datas);
//                        die;
                        $i++
                        ?>
                        .
                        <tr>
                            <td><?= $i; ?></td>
                            <td><img src="assets/images/instructor_image/<?= $data['image'];?>" width="80" alt="Instructor Image" alt="">
                            </td>
                            <td><?= $data['instructor_name'] ?></td>
                            <td><?= $data['education'] ?></td>
                            <td><?= $data['p_number'] ?></td>
                            <td><?= $data['mail'] ?></td>
                            <td><?= $data['date'] ?></td>
                            <td><a style="float: left" onclick='javascript:confirmationDelete($(this));return false;'
                                   href="add_instructor.php?info=<?= $data['id']; ?>" class="btn btn-danger">
                                    Delete</a>
                            </td>
                            <td><a  data-toggle="modal" data-target="#<?= $data['id'] ?>" class="btn btn-info"
                                    style="color:#fff">Update</a></td>
                            <!--  modal start-->
                            <div class="modal" id="<?= $data['id']?>">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Update the Head News</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body text-left">
                                            <form action="" method="post" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <input type="hidden" name="id" value="<?=$data['id']?>">
                                                    <img src="assets/images/instructor_image/<?= $data['image']; ?>" class="img-fluid"
                                                         width="80" alt="Course Image">
                                                </div>
                                                <div class="form-group">
                                                    <input type="file" name="image" class="form-control" id="course_image">
                                                </div>
                                                <div class="form-group">
                                                    <label>Name:</label>
                                                    <input class="form-control" type="text" value="<?= $data['instructor_name'] ?>" name="instructor_name">
                                                </div>
                                                <div class="form-group">
                                                    <label>Education Qualification:</label>
                                                    <input class="form-control" type="text" value="<?= $data['education'] ?>" name="education">
                                                </div>
                                                <div class="form-group">
                                                    <label>Mail:</label>
                                                    <input class="form-control" type="text" value="<?= $data['mail'] ?>" name="mail">
                                                </div>
                                                <div class="form-group">
                                                    <label>Phone Number:</label>
                                                    <input class="form-control" type="text" value="<?= $data['p_number'] ?>" name="p_number">
                                                </div>
                                                <div class="form-group">
                                                    <label>Address:</label>
                                                    <input class="form-control" type="text" value="<?= $data['address'] ?>" name="address">
                                                </div>
                                                <div class="form-group">
                                                    <button class="btn btn-success">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- The Modal -->
                        </tr>
                        <?php
                    }
                }
                else{
                    echo "<p class='text-danger'>","No data Found Please Ensert the Data","</p>";
                }
                ?>

            </table>
        </div>
    </div>
<?php
include_once 'inc/footer.php'; ?>