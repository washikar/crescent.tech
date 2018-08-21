<body>
<a class="totop"><i class="fa fa-angle-double-up"></i></a>
<header id="full_header">
    <div class="container">
        <div class="row">
            <div class="col-sm-1 col-xs-3"><span style="margin-right: 10px">বার্তা</span><i class="fa fa-caret-right" aria-hidden="true"></i></div>
            <div class="col-sm-11 col-xs-9">
                <!--                                পবিত্র ঈদ উপলক্ষে crescentbd ৩০% ছাড়  পবিত্র ঈদ উপলক্ষে crescentbd ৩০% ছাড়  পবিত্র ঈদ উপলক্ষে crescentbd ৩০% ছাড়  পবিত্র ঈদ উপলক্ষে crescentbd ৩০% ছাড় পবিত্র ঈদ উপলক্ষে crescentbd ৩০% ছাড় পবিত্র ঈদ উপলক্ষে crescentbd ৩০% ছাড় পবিত্র ঈদ উপলক্ষে crescentbd ৩০% ছাড়</div>-->
                <marquee style="cursor: pointer;" behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
                   <?php
                   foreach ($head_newses as $head_news){
                    echo "*",$head_news['description'];
                   }
                   ?>
                </marquee>
            </div>
        </div>
</header>
<nav class="navbar navbar-default " data-spy="affix" data-offset-top="197">
    <div class="container-fluid main_nav">
        <div class="container">
            <div class="row">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="col-sm-3">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="logo_part" href="index.php"> <img src="contents/website/images/logo.png" class="img-responsive" alt="logo-img"></a>
                    </div>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="col-sm-9 pl0 pr0">
                    <div class="collapse row navbar-collapse main_ul" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav text-center">
                            <li class="dropdown">
                                <a href="index.php">প্রথম পাতা</a>

                            </li>
                            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">কোর্সসমূহ  <span class="caret"></span> </a>
                                <ul class="dropdown-menu maindrop_menu">
                                    <li><a href="course.php">গ্রাফিক ডিজাইন</a></li>
                                    <li><a href="course.php">ওয়েব ডিজাইন অ্যান্ড ডেভেলপমেন্ট</a></li>
                                    <li><a href="course.php">ডিজিটাল মার্কেটিং</a></li>
                                    <li><a href="course.php">ভিডিও এডিটিং</a></li>
                                </ul>
                            </li>
                            <li><a href="#">ই-স্কুল টীম </a></li>
                            <li><a href="apply.php">রেজিস্ট্রেশন</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ই-স্কুল সম্পর্কে <span class="caret"></span></a>
                                <ul class="dropdown-menu maindrop_menu">
                                    <li><a href="#">কাদের জন্য</a></li>
                                    <li><a href="#">টিউটোরিয়াল</a></li>
                                    <li><a href="#">জিজ্ঞাসা</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.php">যোগাযোগ</a></li>
                            <li><a href="../backend/">লগইন</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>