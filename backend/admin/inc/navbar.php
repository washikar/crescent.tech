<?php
use App\classes\Count as Count;
//count the table
$ob_count=new count();

$t_count=$ob_count->countRow();
$registraion_count=$ob_count->countRegistration();
$instructor_count=$ob_count->countInstructor();
$course_count=$ob_count->countCourse();
?>
        <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler">
                    <i class="fa fa-fw fa-angle-left"></i>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item mr-1">
                <a href="request.php" class="nav-link">
                    <i class="fa fa-bell" aria-hidden="true"></i>
                    <span class="badge badge-light"><?=$t_count?></span>
                </a>
            </li>
            <li class="nav-item">
                <form class="form-inline my-2 my-lg-0 mr-lg-2">
                    <div class="input-group">
                        <input class="form-control" type="text" placeholder="Search for...">
                        <span class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
                    </div>
                </form>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                    <i class="fa fa-fw fa-sign-out"></i>Logout</a>
            </li>
        </ul>
    </div>
</nav>