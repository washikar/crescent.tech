<?php
include_once 'inc/session.php';

use App\classes\Request as Request;


$ob_show = new Request();
$datas = $ob_show->requestData();
//active the class
if(!empty($_POST)){
    $ob_show->studnetAcitve($_POST);

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
    </div>
    <div class="container mt-5">
        <div class="table-responsive">
            <h5 class="text-info">Show The Course List</h5>
            <table class="table table-hover table-bordered table-light">
                <tr>
                    <th>Name</th>
                    <th>Payment Way</th>
                    <th>Transaction Number</th>
                    <th>Deposited Amout</th>
                    <th>User Name</th>
                    <th>Mail</th>
                    <th>Date</th>
                    <th>Manage</th>
                </tr>
                <?php
                $i = 0;
                if (!empty($datas)) {
                    foreach ($datas as $data) {
                        ?>
                        <tr>
                            <td><?= $data['payment_way'] ?></td>
                            <td><?= $data['transaction_number'] ?></td>
                            <td><?= $data['deposited_amount'] ?></td>
                            <td><?= $data['name'] ?></td>
                            <td><?= $data['mail'] ?></td>
                            <td><?= $data['course_name'] ?></td>
                            <td><?= $data['date'] ?></td>
                            <td>
                                <form action="" method="post">
                                    <input type="hidden" name="id" value="<?= $data['id'] ?>">
                                    <input type="hidden" name="request_check" value="1">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-info">Active</button>
                                    </div>
                                </form>
                            </td>
                        </tr>
                        <?php
                    }
                } else {
                    echo "<p class='text-danger'>", "Data is empty", "</p>";
                } ?>
            </table>
        </div>
    </div>
<?php
include_once 'inc/footer.php'; ?>