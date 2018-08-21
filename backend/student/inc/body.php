<?php

use App\Classes\Showdata as showdata;

$ob_showdata = new showdata();

$id = $_SESSION['id'];
$data = $ob_showdata->studentSingleData($id);

$subject_shows = $ob_showdata->fatchAllCourseList();


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
                                <a href="student_info.php" class="nav-link"><?= $data['name']; ?></a>
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
            <?php
            foreach ($subject_shows as $subject_show) {
                ?>
                <div class="col-lg-4 text-center">
                    <div class="card">
                        <img src="../admin/assets/images/course_image/<?= $subject_show['course_image']?>" class="card-img-top" alt="Web">
                        <div class="card-body">
                            <h4><?= $subject_show['course_name']; ?></h4>
                            <p><i class="fa fa-user"></i> Conduct By: <?= $subject_show['instructor_name']; ?></p>
                            <div class="thaka">
                                <h5>4,000 TK</h5>
                            </div>
                            <h6 class="card-text">
                                <?= substr($subject_show['description'], 0, 200) . '...'; ?>
                            </h6>
                            <a href="request_send.php?info=<?= $subject_show['course_name'];?>" class="btn btn-custom mt-3">ক্রয় করুন</a>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</section>