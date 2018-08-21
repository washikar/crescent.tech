<?php
include_once 'inc/session.php';
include_once 'inc/header.php';

use App\Classes\Showdata as showdata;
use App\classes\ContentUpload as upload;


//show data
$ob_uplaod = new showdata();
$id = $_SESSION['id'];
$data = $ob_uplaod->studentSingleData($id);

//upload data
$ob_request_upload = new upload();
if (!empty($_POST)) {
    $_POST['course_name']=$_GET['info'];
    $_POST['id']=$_SESSION['id'];
    $_POST['email']=$_SESSION['email'];
    $_POST['name']=$_SESSION['name'];
    $ob_request_upload->requestforCourse($_POST);
}

?>
    <header id="manubar">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="#">
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
                                    <a href="student_info.php" class="nav-link"><?= $data['name']; ?></a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link"><i class="fa fa-bell" aria-hidden="true"></i>
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
                <!--            bkash -->
                <div class="col-lg-2">
                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#bkash">
                        <img src="assets/images/bkash.png" alt="">
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="bkash" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                         aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Bkash Payment</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Bkash number: 01924511111 (Personal)</p>
                                    <form action="" method="post">
                                        <div class="form-group">
                                            <input type="hidden" value="bkash" name="payment_request">
                                            <input type="text" class="form-control" name="transaction_number" placeholder="Transaction number">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="deposited_amount" placeholder="Deposited Amount">
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn btn-custom">Submit</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--rocket-->
                <div class="col-lg-2">
                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#rooket">
                        <img src="assets/images/rocket.png" alt="">
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="rooket" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                         aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Rooket Payment</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Rooket number: 01924511111 (Personal)</p>
                                    <form action="" method="post">
                                        <div class="form-group">
                                            <input type="hidden" value="rooket" name="payment_request">
                                            <input type="text" class="form-control" name="transaction_number" placeholder="Transaction number">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="deposited_amount" placeholder="Deposited Amount">
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn btn-custom">Submit</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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