<?php

use App\classes\Showdata as showdata;

$ob_Video = new showdata();
$tableName = 'video_list';
$datas = $ob_Video->fatchAlldata();
if (!empty($_GET['info'])) {
    $id = $_GET['info'];
    $ob_Video->deletedata($id);
}
?>
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">My Dashboards</li>
        </ol>
        <!-- Icon Cards-->
        <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-primary o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-fw fa-graduation-cap"></i>
                        </div>
                        <div class="mr-5">Total Student Apply: <?=$t_count?></div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="#">
              </span>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-warning o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-fw fa-user"></i>
                        </div>
                        <div class="mr-5">Total Registration: <?=$registraion_count?></div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="#">
              </span>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-success o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-fw fa-user-circle"></i>
                        </div>
                        <div class="mr-5">Total Instructor: <?=$instructor_count?></div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="#">
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-danger o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-fw fa-book"></i>
                        </div>
                        <div class="mr-5">Total Courses: <?=$course_count?></div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="#">
                    </a>
                </div>
            </div>
        </div>
        <!-- Example DataTables Card-->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table"></i> All Student Information
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Mail</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $i = '0';
                        foreach ($datas as $data) {
                            $i = $i + 1;

                        ?>
                        <tr>
                            <th><?= $i; ?></th>
                            <th><?= $data['name']; ?></th>
                            <th><?= $data['email']; ?></th>
                        </tr>
                        <?php
                        } ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>