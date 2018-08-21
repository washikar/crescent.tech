<?php
include_once 'inc/session.php';
include_once 'inc/header.php';

use App\Classes\Showdata as showdata;
use App\classes\Contentupdate as update;
use App\classes\Request as request;


//show data
$ob_uplaod = new showdata();
$id = $_SESSION['id'];
$data = $ob_uplaod->studentSingleData($id);

//update data
$ob_infoupdate = new update();
if (!empty($_POST)) {
    if (!empty($_POST['pass'])) {
        $ob_infoupdate->changeStudentPass($_POST);
    } else {
        $ob_infoupdate->studentInfoUpdate($_POST);
    }


}
$ob_request = new request();
$request_datas = $ob_request->showTutorial($id);

?>
    <header id="manubar">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="index.php">
                            <img src="../../frontend/contents/website/images/logo.png" width="50" alt="">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a href="" class="nav-link"><?= $data['name']; ?></a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link"><i class="fa fa-bell" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="inc/logout.php">
                                        <i class="fa fa-sign-out"></i>
                                        Logout</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <section id="main_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <figure>
                                <img src="assets/images/students/<?= $data['image_name']; ?>" class="img-fluid"
                                     alt="<?= $data['image_name']; ?>">
                                <figcaption>
                                    <h3 class="text-info"><?= $data['name']; ?></h3>
                                    <h6><i class="fa fa-envelope" aria-hidden="true"></i>
                                        <?= $data['email']; ?></h6>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <!--                    Show Your Tutoral-->
                    <div class="card mt-4">
                        <div class="card-body">
                            <!-- Button to Open the Modal -->
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tutorial">
                                Show Your Tutoral
                            </button>
                            <!-- The Modal -->
                            <div class="modal" id="tutorial">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Tutorial</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <?php
                                            if (!empty($request_datas)) {
                                                foreach ($request_datas as $request_data) {
                                                    ?>
                                                    <p class="text-success"><?=$request_data['course_name'];?></p>
                                                    <a href="<?= $request_data['download_link'] ?>" target="_blank"><?= $request_data['download_link'] ?></a>
                                                    <?php
                                                }
                                            } else {
                                                echo 'Process is Going On';

                                            }
                                            ?>
                                        </div>

                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="text-danger">Update Your Information</h3>
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input type="hidden" name="id" value="<?= $data['id'] ?>">
                                    <!--                                <img src="assets/images/students/-->
                                    <? //=$data['image_name'];?><!--" class="img-fluid" alt="-->
                                    <? //=$data['image_name'];?><!--">-->
                                </div>
                                <div class="form-group">
                                    <input type="file" name="image" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="name" placeholder="নাম" value="<?= $data['name']; ?>"
                                           class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="ইমেল" value="<?= $data['email']; ?>"
                                           class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="p_number" placeholder="মোবাইল নাম্বর"
                                           value="<?= $data['p_number'];?>"
                                           class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="address" placeholder="ঠিকানা"
                                           value="<?= $data['address']; ?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn btn-custom">Submit</button>
                                </div>
                            </form>
                            <!-- Trigger the modal with a button -->
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Change
                                Password
                            </button>

                            <!-- Modal -->
                            <div id="myModal" class="modal fade" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Change Password</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>

                                        </div>
                                        <div class="modal-body">
                                            <form method="post" action="">
                                                <div class="form-group">
                                                    <input type="hidden" name="id" value="<?= $data['id'] ?>">
                                                    <input type="password" name="pass" placeholder="পাসওয়ার্ড"
                                                           value="<?= $data['password']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-group text-right">
                                                        <button class="btn btn btn-custom">Submit</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
include_once 'inc/footer.php';
?>