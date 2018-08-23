<?php
include_once 'inc/session.php';

use App\classes\ContentUpload as Content;
use App\classes\Showdata as showdata;
use App\classes\DeleteData as deletedata;
use App\classes\Contentupdate as update;

//insert contant
$ob_insert = new Content();
$ob_update = new update();
if (!empty($_POST)) {
    if (!empty($_POST['id'])) {
        $ob_update->TransactionNumberUpdate($_POST);

    } else {
        $ob_insert->TrasactionNumberAdd($_POST);
    }
}
//data show
$ob_show = new showdata();
$datas = $ob_show->fatchAllTransactionNumber();
//data delete
$ob_deletedata = new deletedata();
if (!empty($_GET['info'])) {
    $id = $_GET['info'];
    $ob_deletedata->deleteTransactionNumber($id);
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
            <li class="breadcrumb-item active">Tranaction Number</li>
        </ol>
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter Your Transaction Number"
                                           id="t_number" name="t_number">
                                </div>
                                <div class="form-group">
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="t_name" value="bkash">
                                            <img src="assets/images/logo/bkash.png" width="80" class="img-fluid" alt="">
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="t_name" value="rocket">
                                            <img src="assets/images/logo/rocket.png" class="img-fluid" width="80" alt="">
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-3">
        <h5 class="text-left text-info">Tranaction Number List</h5>
        <div class="table-responsive mt-3">
            <table class="table table-hover table-bordered">
                <tr>
                    <th>No</th>
                    <th>Transaction Number</th>
                    <th>Transaction Precess Name</th>
                    <th>Date</th>
                    <th class="text-center" colspan="2">Action</th>
                </tr>
                <?php
                $i = 0;
                foreach ($datas as $data) {
                    $i++;
                    ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?= $data['t_number'] ?></td>
                        <td><?php
                            if($data['t_name']=='bkash'){
                                ?>
                                <img src="assets/images/logo/bkash.png" class="img-fluid" width="80" alt="">
                            <?php
                            }
                            else{
                                ?>
                                <img src="assets/images/logo/rocket.png" class="img-fluid" width="80" alt="">
                                <?php
                            }?>

                        </td>
                        <td><?= $data['data'] ?></td>
                        <td>
                            <a onclick='javascript:confirmationDelete($(this));return false;'
                               href="t_account.php?info=<?= $data['id']; ?>" class="btn btn-danger">
                                Delete</a>
                        </td>
                        <td>
                            <a data-toggle="modal" data-target="#<?= $data['id'] ?>" class="btn btn-info"
                               style="color:#fff">Update</a>
                        </td>
                        <!--                            modal start-->
                        <div class="modal" id="<?= $data['id'] ?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Update the Tranaction Number List</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body text-center">
                                        <form action="" method="post">
                                            <div class="form-group">
                                                <input type="hidden" value="<?= $data['id']; ?>" name="id">
                                                <div class="form-group">
                                                    <input type="text" value="<?= $data['t_number']; ?>"
                                                           class="form-control" placeholder="Enter Your Mail Address"
                                                           id="t_number" name="t_number">
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" <?php if ($data['t_name']=='bkash') {echo "checked";}?> type="radio" name="t_name" value="bkash">
                                                            <img src="assets/images/logo/bkash.png" width="80" class="img-fluid" alt="">
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" <?php if ($data['t_name']=='rocket') {echo "checked";}?> type="radio" name="t_name" value="rocket">
                                                            <img src="assets/images/logo/rocket.png" class="img-fluid" width="80" alt="">
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-success">Submit</button>
                                                </div>
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
                ?>
            </table>
        </div>
    </div>
<?php
include_once 'inc/footer.php';
?>