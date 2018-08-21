<?php
include_once 'inc/session.php';

use App\classes\ContentUpload as content;
use App\classes\Showdata as showdata;
use App\classes\DeleteData as deletedata;
use App\classes\Contentupdate as update;


$ob_insert = new content();
//update the data
$ob_update=new update();

if(!empty($_POST)){
    if (!empty($_POST['id'])){
        $ob_update->CourseNameUpdate($_POST);
    }
    //insert value
    else{
        $ob_insert->CourseNameUpload($_POST);
    }
}

//show all data
$ob_showdata = new showdata();
$datas = $ob_showdata->fatchAllCourses();
//data delete

$ob_delete= new deletedata();
if (!empty($_GET['info'])) {
    $id = $_GET['info'];
    $ob_delete->deleteCourseName($id);
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
            <li class="breadcrumb-item active">Course Add</li>
        </ol>
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="text-info">Upload The Course</h5>
                    </div>
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="text" name="course_name" class="form-control" placeholder="Enter The Course Name">
                            </div>
                            <div class="form-group">

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
            <h5 class="text-info">Show The Course List</h5>
            <table class="table table-hover table-bordered table-light">
                <tr>
                    <th>No</th>
                    <th>Course Name</th>
                    <th class="text-center" colspan="2">Action</th>
                </tr>
                <?php
                $i=0;
                if (!empty($datas)) {

                    foreach ($datas as $data) {
                        $i++
                        ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $data['course_name'] ?></td>
                            <td><a style="float: left" onclick='javascript:confirmationDelete($(this));return false;'
                                   href="course_name.php?info=<?= $data['id']; ?>" class="btn btn-danger">
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
                                        <div class="modal-body text-center">
                                            <form action="" method="post" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <input type="hidden" name="id" value="<?=$data['id']?>">
                                                    <label for="course_image">Course Name:</label>
                                                    <input type="hidden" name="">
                                                    <input type="text" id="course_name" name="course_name" class="form-control"
                                                           value="<?=$data['course_name']?>" placeholder="Enter Course Name" required>
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