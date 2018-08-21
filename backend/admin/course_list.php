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
        $ob_update->courseListUpdate($_POST);
    }
    else{
        //insert value
        $ob_insert->CourseUpload($_POST);
    }
}

//show all data
$ob_showdata = new showdata();
$datas = $ob_showdata->fatchAllCourseList();
$course_name=$ob_showdata->fatchAllCourses();
$instructor_name=$ob_showdata->fatchAllInstructor();
//data delete

$ob_delete= new deletedata();
if (!empty($_GET['info'])) {
    $id = $_GET['info'];
    $ob_delete->deleteCourse($id);
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
            <li class="breadcrumb-item active">Course List</li>
        </ol>
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="text-info">Upload The Course List</h5>
                    </div>
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="file" name="image" class="form-control" id="course_image"
                                       required>
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="course_name" required>
                                    <?php  if (!empty($course_name)) {

                                        foreach ($course_name as $name) {
                                            ?>
                                            <option class="form-control" value="">Enter The Couser Name</option>
                                            <option class="form-control" value="<?=$name['course_name'];?>"><?=$name['course_name'];?></option>
                                        <?php }
                                    }else{
                                        echo "Data Not found";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="instructor_name" required>
                                    <?php  if (!empty($instructor_name)) {


                                        foreach ($instructor_name as $instructor) {
                                            ?>
                                            <option class="form-control" value="">Enter The Instructor Name</option>
                                            <option class="form-control" value="<?=$instructor['instructor_name'];?>"><?=$instructor['instructor_name'];?></option>
                                        <?php }
                                    }else{
                                        echo "Data Not found";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" name="course_rate" class="form-control"
                                       placeholder="Enter The Course Price" required>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                    <textarea class="form-control" id="description" rows="5" name="description"
                                              required></textarea>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="download_link" name="download_link" placeholder="Enter The Download Link" required>
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
                    <th>Image</th>
                    <th>Course Name</th>
                    <th>Instructor Name</th>
                    <th>Description</th>
                    <th>Uplaod Date</th>
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
                            <td><img src="assets/images/course_image/<?= $data['course_image']; ?>" class="img-fluid"
                                     width="80" alt="Course Image"></td>
                            <td><?= $data['course_name'] ?></td>
                            <td><?= $data['course_name'] ?></td>
<!--                            <td>--><?//= mb_substr($data['description'],0,50,"utf-8");?><!--...</td>-->
                            <td><?= $data['instructor_name'] ?></td>
                            <td><?= $data['date'] ?></td>
                            <td><a style="float: left" onclick='javascript:confirmationDelete($(this));return false;'
                                   href="course_list.php?info=<?= $data['id']; ?>" class="btn btn-danger">
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
                                                    <img src="assets/images/course_image/<?= $data['course_image']; ?>" class="img-fluid"
                                                         width="80" alt="Course Image">
                                                </div>
                                                <div class="form-group">
                                                    <input type="file"  name="image" class="form-control" id="course_image">
                                                </div>
                                                <div class="form-group">
                                                    <label for="course_image">Course Name:</label>
                                                    <select class="form-control" name="course_name">
                                                        <?php  if (!empty($course_name)) {

                                                            foreach ($course_name as $name) {
                                                                ?>
                                                                <option class="form-control" value="<?=$data['course_name']?>"><?=$data['course_name']?></option>
                                                                <option class="form-control" value="<?=$name['course_name'];?>"><?=$name['course_name'];?></option>
                                                            <?php }
                                                        }else{
                                                            echo "Data Not found";
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="instructor_name">Instructor Name:</label>
                                                    <select class="form-control" name="instructor_name">
                                                        <?php  if (!empty($instructor_name)) {


                                                            foreach ($instructor_name as $instructor) {
                                                                ?>
                                                                <option class="form-control" value="<?=$data['instructor_name'];?>"><?=$data['instructor_name'];?></option>
                                                                <option class="form-control" value="<?=$instructor['instructor_name'];?>"><?=$instructor['instructor_name'];?></option>
                                                            <?php }
                                                        }else{
                                                            echo "Data Not found";
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="instructor_name">Course Rate:</label>
                                                    <input type="text" id="course_rate" value="<?=$data['course_rate'];?>" name="course_rate" class="form-control"
                                                           placeholder="Enter Course Price">
                                                </div>
                                                <div class="form-group">
                                                    <label for="description"> Description:</label>
                                    <textarea class="form-control" id="description" rows="5" name="description"
                                              required><?=$data['description'];?></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" value="<?=$data['download_link'];?>" class="form-control" id="download_link" name="download_link">
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