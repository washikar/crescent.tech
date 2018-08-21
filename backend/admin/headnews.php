<?php
include_once 'inc/session.php';

use App\classes\ContentUpload as Content;
use App\classes\Showdata as showdata;
use App\classes\DeleteData as deletedata;
use App\classes\Contentupdate as update;



//Show all data
$ob_showdata = new showdata();
$datas = $ob_showdata->fatchAllHeadNews();



//data insert
$ob = new Content();
$ob_update=new update();
if (!empty($_POST)) {
    if (!empty($_POST['id'])){
        $ob_update->headNewsUpdate($_POST);
    }
    else{
        $ob->headNewsUpload($_POST);
    }
}
//data delete
$ob_deletedata = new deletedata();
if (!empty($_GET['info'])) {
    $id = $_GET['info'];
    $ob_deletedata->deleteContactList($id);
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
            <li class="breadcrumb-item active">Head News</li>
        </ol>
        <div class="row">
            <div class="col-lg-4">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="comment">Head News:</label>
                        <textarea class="form-control" name="description" rows="3" id="comment"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <h5 class="text-info">Show The Head News</h5>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>NO</th>
                    <th>Description</th>
                    <th>Upload Date</th>
                    <th class="text-center" colspan="2">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $i = 0;
                if (!empty($datas)) {
                    foreach ($datas as $data) {
                        $i = $i + 1;
                        ?>
                        <tr>
                            <td><?= $i ?></td>
                            <td><?= $data['description'] ?></td>
                            <td><?= $data['date'] ?></td>
                            <td>
                                <a onclick='javascript:confirmationDelete($(this));return false;'
                                   href="headnews.php?info=<?= $data['id']; ?>" class="btn btn-danger">
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
                                            <h4 class="modal-title">Update the Head News</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body text-center">
                                            <form method="post" action="">
                                                <div class="form-group">
                                                    <input type="hidden" name="id" value="<?= $data['id'] ?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <textarea class="form-control" name="description" rows="3" id="comment"><?= $data['description'] ?></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-success">Submit</button>
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
                } else {
                    echo "<p class='text-danger'>", "Data is empty Please Enter The Data", "</p>";
                }
                ?>

                </tbody>
            </table>
        </div>
    </div>
<?php
include_once 'inc/footer.php'; ?>