<?php include_once('inc/header.php');
//Show course
include_once('inc/nav.php');
include_once('inc/banner.php'); ?>
    <section id="full_blog">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section_heading">
                        <h3>কোর্সসমূহ</h3>
                    </div>
                </div>
            </div>
            <div class="row blog_slick">
                <?php
                foreach ($show_courses as $show_course) {
                                       ?>
                    <div class="col-sm-4">
                        <div class="single_blog text-center">
                            <div class="blog_img">
                                <img src="../backend/admin/assets/images/course_image/<?=$show_course['course_image']?>" class="img-responsive" alt="Web">
                            </div>
                            <div class="blog_description text-center">
                                <h4><?= $show_course['course_name']; ?></h4>
                                <ul class="list-inline">
                                    <li><a href="#"><i class="fa fa-user"></i><span> Conduct By:<?=$show_course['instructor_name'];?></span></a>
                                    </li>
                                </ul>
                                <div class="review">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="blog_text ">
                                    <p>
<!--                                        --><?//=$show_course['description'];?>
                                        <?= substr($show_course['description'], 0, 200) . '...'; ?>
                                    </p>
                                    <div class="blog_button">
                                        <a href="../backend/">ক্রয় করুন </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                } ?>

            </div>
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="blog_button text-capitalize">
                        <a href="#" target="_blank">browse all <i class="fa fa-spinner fa-spin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- comments part start -->
    <section id="comments_title">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-left">
                    <div class="section_heading">

                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="section_heading">
                        <h3>ই-স্কুল সম্পর্কে</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- full comments part start -->
    <div class="full_comments">
        <div class="comments_shape"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="commnnts_img">
                        <img src="contents/website/images/blog_comments_img.jpg" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="col-sm-6 comments_desc">
                    <p>
                        স্বাগত সবাইকে। বাংলাদেশের আইটি প্রশিক্ষণের পথিকৃৎ crescentbd আইটি নিয়ে এলো crescentbd -ই-
                        স্কুল। crescentbd-ই-স্কুল এসেছে আপনার ঘরে, আপনার জেলায়, আপনার শহরে।
                    </p>
                    <p>
                        আপনি চাই দেশেই থাকুন বা প্রবাসে, পাবেন সেরা প্রশিক্ষণ সেরা শিক্ষকদের হাতে। আমাদের রয়েছে আইটি
                        সেক্টরে ১০ বছরের ও বেশি প্রশিক্ষণ দানের অভিজ্ঞতা। আমরাই ২০১৪ সালে সর্বপ্রথম চালু করেছিলাম ২৫
                        জনের অনলাইন ব্যাচ crescentbd-ই-স্কুল।
                    </p>
                    <p>
                        যথেষ্ট সাফল্য পাবার পরেও আর ও ভালো কিছু উপহার দিতে ২বছর পরে সকলের অনুরোধ রক্ষার্থে আমরা পুনরায়
                        নিয়ে এসেছি সেরাদের সমন্বয়ে crescentbd-e-স্কুল। দূরত্ব চাই যতই থাকুক সেরা অনলাইন প্রশিক্ষণ
                        নিয়ে crescentbd-ই-স্কুল রইছে আপনার পাশে
                    </p>
                </div>
            </div>
        </div>
    </div>
    <section id="testimonial">
        <div id="comments_title">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-left">
                        <div class="section_heading">
                            <h3>কাদের জন্য</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 target">
                    <div class="row">
                        <div class="col-lg-4 p5 pl0">
                            <img src="contents/website/images/sliide1.jpg" class="img-responsive" alt="">
                        </div>
                        <div class="content col-md-8 col-sm-8 p5">
                            <h3>গৃহিণী</h3>
                            <p>
                                গৃহিণীরা ও তো হতে পারে গ্রাফিক ডিজাইনার কিংবা ওয়েব ডিজাইনার অথবা এসইও এক্সপার্ট। কিন্তু
                                তার প্রতিভা প্রকাশের সুযোগ পাচ্ছে না শুধু মাত্র দূরত্বের বাধায়।
                            </p>
                            <p>
                                এ সকল প্রতিবন্ধকতা দূর করার লক্ষ্যে গৃহিনীরা যেন ঘরে বসে তার কাজের অবসরে দক্ষ হয়ে
                                অনলাইন জগতে কাজ করতে পারেন সে জন্যই আমাদের crescentbd ই-স্কুল। crescentbd -e-স্কুল যা
                                একজন গৃহিনীকে করবে স্বাবলম্বী এবং আত্মনির্ভরশীল। পরিবারে যোগ করবে বাড়তি আয়।
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 target">
                    <div class="row">
                        <div class="col-lg-4 p5 pl0">
                            <img src="contents/website/images/sliide1.jpg" class="img-responsive" alt="">
                        </div>
                        <div class="content col-md-8 col-sm-8 p5">
                            <h3>গৃহিণী</h3>
                            <p>
                                গৃহিণীরা ও তো হতে পারে গ্রাফিক ডিজাইনার কিংবা ওয়েব ডিজাইনার অথবা এসইও এক্সপার্ট। কিন্তু
                                তার প্রতিভা প্রকাশের সুযোগ পাচ্ছে না শুধু মাত্র দূরত্বের বাধায়।
                            </p>
                            <p>
                                এ সকল প্রতিবন্ধকতা দূর করার লক্ষ্যে গৃহিনীরা যেন ঘরে বসে তার কাজের অবসরে দক্ষ হয়ে
                                অনলাইন জগতে কাজ করতে পারেন সে জন্যই আমাদের crescentbd ই-স্কুল। crescentbd -e-স্কুল যা
                                একজন গৃহিনীকে করবে স্বাবলম্বী এবং আত্মনির্ভরশীল। পরিবারে যোগ করবে বাড়তি আয়।
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 target">
                    <div class="row">
                        <div class="col-lg-4 p5 pl0">
                            <img src="contents/website/images/sliide1.jpg" class="img-responsive" alt="">
                        </div>
                        <div class="content col-md-8 col-sm-8 p5">
                            <h3>গৃহিণী</h3>
                            <p>
                                গৃহিণীরা ও তো হতে পারে গ্রাফিক ডিজাইনার কিংবা ওয়েব ডিজাইনার অথবা এসইও এক্সপার্ট। কিন্তু
                                তার প্রতিভা প্রকাশের সুযোগ পাচ্ছে না শুধু মাত্র দূরত্বের বাধায়।
                            </p>
                            <p>
                                এ সকল প্রতিবন্ধকতা দূর করার লক্ষ্যে গৃহিনীরা যেন ঘরে বসে তার কাজের অবসরে দক্ষ হয়ে
                                অনলাইন জগতে কাজ করতে পারেন সে জন্যই আমাদের crescentbd ই-স্কুল। crescentbd -e-স্কুল যা
                                একজন গৃহিনীকে করবে স্বাবলম্বী এবং আত্মনির্ভরশীল। পরিবারে যোগ করবে বাড়তি আয়।
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 target">
                    <div class="row">
                        <div class="col-lg-4 p5 pl0">
                            <img src="contents/website/images/sliide1.jpg" class="img-responsive" alt="">
                        </div>
                        <div class="content col-md-8 col-sm-8 p5">
                            <h3>গৃহিণী</h3>
                            <p>
                                গৃহিণীরা ও তো হতে পারে গ্রাফিক ডিজাইনার কিংবা ওয়েব ডিজাইনার অথবা এসইও এক্সপার্ট। কিন্তু
                                তার প্রতিভা প্রকাশের সুযোগ পাচ্ছে না শুধু মাত্র দূরত্বের বাধায়।
                            </p>
                            <p>
                                এ সকল প্রতিবন্ধকতা দূর করার লক্ষ্যে গৃহিনীরা যেন ঘরে বসে তার কাজের অবসরে দক্ষ হয়ে
                                অনলাইন জগতে কাজ করতে পারেন সে জন্যই আমাদের crescentbd ই-স্কুল। crescentbd -e-স্কুল যা
                                একজন গৃহিনীকে করবে স্বাবলম্বী এবং আত্মনির্ভরশীল। পরিবারে যোগ করবে বাড়তি আয়।
                            </p>
                        </div>
                    </div>
                </div>
            </div>


            <!--
                    <div class="content col-md-8 col-sm-8">
                                            <h3>গৃহিণী</h3>
                                            <p>
                                                গৃহিণীরা ও তো হতে পারে গ্রাফিক ডিজাইনার কিংবা ওয়েব ডিজাইনার অথবা এসইও এক্সপার্ট। কিন্তু তার প্রতিভা প্রকাশের সুযোগ পাচ্ছে না শুধু মাত্র দূরত্বের বাধায়।
                                            </p>
                                            <p>
                                                এ সকল প্রতিবন্ধকতা দূর করার লক্ষ্যে গৃহিনীরা যেন ঘরে বসে তার কাজের অবসরে দক্ষ হয়ে অনলাইন জগতে কাজ করতে পারেন সে জন্যই আমাদের crescentbd ই-স্কুল। crescentbd -e-স্কুল যা একজন গৃহিনীকে করবে স্বাবলম্বী এবং আত্মনির্ভরশীল। পরিবারে যোগ করবে বাড়তি আয়।
                                            </p>
                                        </div>
            -->
        </div>
    </section>
    <section id="faqs">
        <div id="comments_title">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-left">

                        <div class="section_heading">
                            <h3>জিজ্ঞাসা ও সমাধান</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="faqs_content">
            <div class="container">

                <div class="row">
                    <div class="col-md-8 col-xs-12">
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle active" data-toggle="collapse"
                                           data-parent="#accordion" href="#panel1"><i class="fa fa-chevron-down"></i>সরাসরি
                                            ক্লাসে যেভাবে শিখানো হয় অনলাইনে সেভাবে শিখতে পারবো কি?
                                        </a>
                                    </h4>

                                </div>
                                <div id="panel1" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <p>হ্যা, অবশ্যই আপনি তার চেয়ে ভালোভাবে শিখতে পারবেন।আপনি কোর্স তো অনলাইনে করছেন
                                            কিন্তু শিক্ষক কিন্তু পরিবর্তন হচ্ছে না। আমাদের প্রতিষ্ঠানের মডিউল এবং অনলাইন
                                            কোর্সের মডিউল একই হওয়ায় সরাসরি যেভাবে শিখতে পারবেন ঠিক একই ভাবে অনলাইনেও
                                            শিখতে পারবেন।</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                           href="#panel2"><i class="fa fa-chevron-down"></i>যে কোন জায়গা থেকে কোর্সটি
                                            করা যাবে কি?</a>
                                    </h4>

                                </div>
                                <div id="panel2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>দূরত্বকে জয় করার জন্যই আমাদের এই প্রচেষ্টা। বাংলাদেশের বিভিন্ন প্রান্ত থেকে
                                            শিক্ষার্থীরা আসেন আমাদের প্রতিষ্টানে। এমনও নজির আছে কুমিল্লা,
                                            ব্রাক্ষ্মনবাড়িয়া, মৌলভিবাজার থেকে শিক্ষার্থীরা এসেছেন আমাদের প্রতিষ্ঠানে
                                            এসেছেন এবং আজ তারা সফলও হয়েছেন। আপনার সময় আর এনার্জীকে সাশ্রয় করার জন্য
                                            আমাদের crescentbd E- School । শুধু আমাদের দেশ নয় দেশের বাইরে থেকেও আপনি
                                            অনলাইনের সহায়তায় আমাদের অনলাইন কোর্স করে সফল হতে পারেন।</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                           href="#panel3"><i class="fa fa-chevron-down"></i>অনলাইন কোর্সটি করতে আপনার কি
                                            কি ডিভাইস লাগবে?</a>
                                    </h4>
                                </div>
                                <div id="panel3" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>
                                            কম্পিউটার- আপনার একটি চলনসই কনফিগারেশনের কম্পিউটার হলেই চলবে ।
                                        </p>
                                        <p>
                                            হেডফোন- ডেস্কটপ কিম্পিউটার হলে একটি হেডফোন ও ওয়েব ক্যাম লাগবে।
                                        </p>
                                        <p>
                                            ইন্টারনেট সংযোগ- অনলাইন কোর্স কারতে হলে আপনার কম্পিউটারে অবশ্যই হাই স্পীড
                                            ইন্টারনেট সংযোগ থাকতে হবে । ১ এম বি পিএস হলে ভালো হয়।
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                           href="#panel4"><i class="fa fa-chevron-down"></i>আমাকে কম্পিউটার জানতে হবে
                                            কি?
                                        </a>
                                    </h4>
                                </div>
                                <div id="panel4" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>হ্যা কম্পিউটার সম্পর্কে আপনার ধারনা থাকতে তবে খুব যে পারদর্শী হতে হবে তা না।
                                            কম্পিউটার অন অফ করা , ইন্টারনেট ব্রাউজ করা এবং কিছু কী বোর্ড শর্টকাট জানলেই
                                            হবে।</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                           href="#panel5"><i class="fa fa-chevron-down"></i> প্রতিটি ক্লাসের জন্য কি
                                            লেকচার শিট পাওয়া যাবে?
                                        </a>
                                    </h4>
                                </div>
                                <div id="panel5" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>প্রতিটি ক্লাসে লিখিত নোটস দেওয়া হবে। সেখানে যেসব বিষয় ক্লাসে শিখানো হবে তা
                                            লিখিত আকারে থাকবে । প্রতিটি ক্লাসে যে লেকচার দেওয়া হবে এবং যে উদাহরণ দেওয়া
                                            হবে, তা কোর্সের ভিতরে লিখিত আকারেও থাকছে, শিক্ষার্থীরা ঐ লেখার কোন অংশ যদি
                                            বুঝতে না পারেন, তবে ঐ অংশ চিহ্নিত করে সরাসরি সেখান থেকে প্রশ্ন করতে পারেন।
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                           href="#panel6"><i class="fa fa-chevron-down"></i> প্ কোর্স সম্পৃক্ত Software
                                            গুলো কিভাবে ডাউনলোড করব?
                                        </a>
                                    </h4>
                                </div>
                                <div id="panel6" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>কোর্স সম্পর্কিত সকল সফটওয়্যারের লিংক আমাদের ক্লাসে দিয়ে দেওয়া হবে।আমরা টিম
                                            ভিউয়ার মাধ্যমে ইন্সটলেশন সাপোর্ট দিবো এবং এ সংক্রান্ত সকল সমস্যার সমাধান
                                            আপনি আমাদের প্রতিষ্ঠানে পেতে পারবেন।
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                           href="#panel7"><i class="fa fa-chevron-down"></i> ক্লাস মিস হলে কি করব?
                                            প্রতিটি ক্লাসের ভিডিও পাবো কি?
                                        </a>
                                    </h4>
                                </div>
                                <div id="panel7" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>প্রতিটি ক্লাসের ভিডিও ক্লাস শেষ হওয়ার পরবর্তী সময় দেওয়া থাকবে। ক্লাস মিস
                                            হলে ভিডিও দেখে নিতে পারবেন। আপনি কোন বিষয় বুঝতে সমস্যা হলে সাথে সাথে প্রশ্ন
                                            করতে পারবেন কিংবা রিপিট করার জন্য বলতে পারবেন। তবে এটা যেহেতু অনলাইন ক্লাস ও
                                            আপনি বাসায় বসে কাজ করবেন তাই ক্লাস মিস হবার কোন সুযোগ নেই। তবে আমাদের পক্ষ
                                            থেকে বিশেষ অনুরোধ থাকবে ইলেক্ট্রিসিটি বা ইন্টারনেটের সংযোগ এর সমস্যা ব্যাতীত
                                            যেন লাইভ ক্লাসে অনুপস্থিত না থাকি।
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                           href="#panel8"><i class="fa fa-chevron-down"></i> প্রতিটি ক্লাসের সোর্স ফাইল
                                            কি পাবো?
                                        </a>
                                    </h4>
                                </div>
                                <div id="panel8" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>প্রতিটি ক্লাসের সোর্স ফাইল সহজে ডাউনলোড করতে পারবেন। প্রতিটি ক্লাসে যে
                                            বিষয়গুলো আলোচনা করা হবে উক্ত ফাইল, সোর্স ফাইল, এবং প্রয়োজনীয় সবকিছু সাথে
                                            সাথে আমাদের সার্ভার থেকে ডাউন করতে পারবেন এবং প্র্যাকটিস করতে পারবেন।
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                           href="#panel9"><i class="fa fa-chevron-down"></i>কোন ধরনের বাড়ীর কাজ,
                                            অ্যাসাইনমেন্ট বা প্রোজেক্ট ওয়ার্ক রয়েছে কি ?
                                        </a>
                                    </h4>
                                </div>
                                <div id="panel9" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>প্রতিটি ক্লাসেই অ্যাসাইনমেন্ট , প্রাকটিস ফাইল জমা দিতে হবে।লেকচারে আলোচনা করা
                                            কিংবা প্র্যাকটিক্যালী দেখানো প্রজেক্ট ডাউনলোড করে প্র্যাকটিস করে পুনরায় জমা
                                            দিতে হবে । আমাদের শিক্ষকগণ উক্ত প্র্যাকটিস ফাইল দেখবেন এবং কোন ভুল থাকলে
                                            সেটা দেখিয়ে দিবেন প্রতিটি প্র্যাকটিস ফাইলে . . . . নাম্বার করে দেওয়া হবে ও
                                            সেই নাম্বার আপনার সার্টিফিকেট এবং ফলাফলেও যোগ হবে।
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                           href="#panel10"><i class="fa fa-chevron-down"></i>ট্রেনিং পারফর্মেন্স/
                                            রেজাল্ট কিভাবে নির্ধারণ করা হবে?

                                        </a>
                                    </h4>
                                </div>
                                <div id="panel10" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>নির্দিষ্ট ক্লাস শেষে পরীক্ষা, কুইজ অনুষ্ঠিত হবে এবং প্রাপ্ত নাম্বার অনুযায়ী
                                            শিক্ষার্থী র‍্যাংকিং/ গ্রেডিং করা হবে। বিষয়ভিত্তিক ক্লাস শেষে শিক্ষার্থীকে
                                            . . . . নাম্বারের পরীক্ষায় অংশ নিতে হবে । এছাড়াও সকল ক্লাস শেষে পুরো
                                            কোর্সের উপর . . . . নাম্বারের পরীক্ষা এবং . . . নাম্বারের
                                            প্রজেক্ট/এসাইনমেন্ট দেওয়া হবে। উক্ত পরীক্ষায় মোট কত নাম্বার পেল তার উপর
                                            ভিত্তি করে ঐ কোর্সে শিক্ষার্থীদের র‍্যাংকিং থাকবে। এছাড়াও সার্টিফিকেটেও
                                            সেটা দেখাবে।

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                           href="#panel11"><i class="fa fa-chevron-down"></i>কোর্স শেষে কিভাবে
                                            সার্টিফিকেট দেওয়া হবে? কিভাবে তার মূল্যায়ন হবে?

                                        </a>
                                    </h4>
                                </div>
                                <div id="panel11" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>নির্দিষ্ট ক্লাস শেষে পরীক্ষা, কুইজ অনুষ্ঠিত হবে এবং প্রাপ্ত নাম্বার অনুযায়ী
                                            শিক্ষার্থী র‍্যাংকিং/ গ্রেডিং করা হবে। বিষয়ভিত্তিক ক্লাস শেষে শিক্ষার্থীকে
                                            . . . . নাম্বারের পরীক্ষায় অংশ নিতে হবে । এছাড়াও সকল ক্লাস শেষে পুরো
                                            কোর্সের উপর . . . . নাম্বারের পরীক্ষা এবং . . . নাম্বারের
                                            প্রজেক্ট/এসাইনমেন্ট দেওয়া হবে। উক্ত পরীক্ষায় মোট কত নাম্বার পেল তার উপর
                                            ভিত্তি করে ঐ কোর্সে শিক্ষার্থীদের র‍্যাংকিং থাকবে। এছাড়াও সার্টিফিকেটেও
                                            সেটা দেখাবে।

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                           href="#panel12"><i class="fa fa-chevron-down"></i>চাকুরী ক্ষেত্রে কি কোন
                                            সুবিধা পাব?

                                        </a>
                                    </h4>
                                </div>
                                <div id="panel12" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>আমাদের অনলাইন কোর্সের উদ্দেশ্য হল আপনাকে কোয়ালিটি ট্রেনিং দিয়ে আউটসোর্সিং
                                            করানো । সে ক্ষেত্রে আউটসোর্সিং তো থাকছেই পাশাপাশি আপনি দেশের ভেতরে বিভিন্ন
                                            আইটি সেক্টরে অনেক কাজ করতে পারবেন। আপনারা জেনে হয়তবা খুশি হবেন যে
                                            ইন্টারন্যশনাল জব পোর্টাল EVERJOBS BD এর সাথে আমাদের ইন্সটিটিউটের MOU হয়েছে
                                            এজন্য আপনি যে সুবিধা সমূহ পাচ্ছেন তা হল- আপনি crescentbd-ই- স্কুলের
                                            শিক্ষার্থী হিসেবে পাচ্ছেন ২০০+ কর্পোরেট প্রতিষ্ঠানে সরাসরি আবেদন করার সুযোগ।
                                            যে কোন আইটি সংশ্লিষ্ট প্রতিষ্ঠানে নিয়োগ বিজ্ঞপ্তি আসলেই পাবেন সর্ব প্রথম
                                            নোটিফিকেশন পাবেন চাকুরী সংক্রান্ত প্রশিক্ষণ ও ওয়ার্কশপে অংশগ্রহণের বিশেষ
                                            সুযোগ।
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                           href="#panel13"><i class="fa fa-chevron-down"></i>মার্কেটপ্লেসে কাজ করার
                                            ক্ষেত্রে কোন ধরণের সহায়তা পাওয়া যাবে কি?

                                        </a>
                                    </h4>
                                </div>
                                <div id="panel13" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p> আমাদের কোর্স প্লানটিকে এমনভাবে সাজানো হয়েছে যেন কয়েকটি ক্লাসের পরে
                                            শিক্ষার্থীদের মার্কেটপ্লেসের সাথে পরিচয় করে দেওয়া হয় এবং মার্কেটপ্লেসে
                                            account কীভাবে করতে হবে ,কীভাবে কাজ করতে হয়, কীভাবে ক্লায়েন্টদের সাথে
                                            যোগাযোগ করতে হবে সে বিষয়ে সকল তথ্য আমাদের ক্লাসে জানানো হবে।এছাড়া আপনি যে
                                            কোন সমস্যায় আমাদের প্রতিষ্ঠানে এসে সব তথ্য নিয়ে যেতে পারবেন।
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                           href="#panel14"><i class="fa fa-chevron-down"></i>কোর্স শেষ হয়ে যাওয়ার পর
                                            কোর্স সংক্রান্ত কোন সমস্যা হলে কি করব?</a>
                                    </h4>
                                </div>
                                <div id="panel14" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>শুধু কোর্স চলাকালীন সময়ে নয় কোর্স শেষ হওয়ার পরও আপনি আপনার কাজ সংক্রান্ত
                                            যে কোন সমস্যায় আমাদের সাথে যোগাযোগ করতে পারবেন এবং আমরা তা সমাধান করার
                                            যথাসাধ্য চেষ্টা করব।
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                           href="#panel15"><i class="fa fa-chevron-down"></i>কোর্স ফি পরিশোধ করার উপায়
                                            কি?</a>
                                    </h4>
                                </div>
                                <div id="panel15" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>আপনি বিকাশ অথবা আপনার ব্যাংক অ্যকাউন্ট থেকে পরিশোধ করতে পারবেন এছাড়াও আপনি
                                            চাইলে আমাদের প্রতিষ্ঠানে নিজে এসেে কোর্স ফী পরিশোধ করে যেতে পারেন।
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                           href="#panel16"><i class="fa fa-chevron-down"></i>কোর্স ফি পরিশোধ করার উপায়
                                            কি?</a>
                                    </h4>
                                </div>
                                <div id="panel16" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>আপনি বিকাশ অথবা আপনার ব্যাংক অ্যকাউন্ট থেকে পরিশোধ করতে পারবেন এছাড়াও আপনি
                                            চাইলে আমাদের প্রতিষ্ঠানে নিজে এসেে কোর্স ফী পরিশোধ করে যেতে পারেন।
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                           href="#panel17"><i class="fa fa-chevron-down"></i>ফ্রিল্যান্সারদের জন্য কি
                                            কোন অফার থাকবে?</a>
                                    </h4>
                                </div>
                                <div id="panel17" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p> ফ্রিল্যান্সারদের জন্য তাদের অনলাইন প্রশিক্ষণ সম্পূর্ণ হবার পরে পরেও আমাদের
                                            বিশেষ টিম যে কোন কাজ করার সময় সমস্যা সমাধানে সার্বিক সহযোগিতা দিবে ঠিক একই
                                            ভাবে যেভাবে প্রশিক্ষণ চলাকালীন অনলাইনে প্রত্যেক প্রশিক্ষণার্থী পেয়েছে।
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                           href="#panel18"><i class="fa fa-chevron-down"></i> চাকরির ক্ষেত্রে কি ধরণের
                                            সুযোগ সুবিধা থাকবে?</a>
                                    </h4>
                                </div>
                                <div id="panel18" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>আমাদের অনলাইন কোর্সের উদ্দেশ্য হল আপনাকে কোয়ালিটি ট্রেনিং দিয়ে আউটসোর্সিং
                                            করানো । সে ক্ষেত্রে আউটসোর্সিং তো থাকছেই পাশাপাশি আপনি দেশের ভেতরে বিভিন্ন
                                            আইটি সেক্টরে অনেক কাজ করতে পারবেন। আপনারা জেনে হয়তবা খুশি হবেন যে
                                            ইন্টারন্যশনাল জব পোর্টাল EVERJOBS BD এর সাথে আমাদের ইন্সটিটিউটের MOU হয়েছে
                                            এজন্য আপনি যে সুবিধা সমূহ পাচ্ছেন তা হল- আপনি crescentbd-ই- স্কুলের
                                            শিক্ষার্থী হিসেবে পাচ্ছেন ২০০+ কর্পোরেট প্রতিষ্ঠানে সরাসরি আবেদন করার সুযোগ।
                                            যে কোন আইটি সংশ্লিষ্ট প্রতিষ্ঠানে নিয়োগ বিজ্ঞপ্তি আসলেই পাবেন সর্ব প্রথম
                                            নোটিফিকেশন পাবেন চাকুরী সংক্রান্ত প্রশিক্ষণ ও ওয়ার্কশপে অংশগ্রহণের বিশেষ
                                            সুযোগ।
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                           href="#panel19"><i class="fa fa-chevron-down"></i> চাআপনাদের সার্টিফিকেট কি
                                            সরকার কর্তৃক স্বীকৃত? সার্টিফিকেটের মূল্যায়ন আদৌ হবে তো?</a>
                                    </h4>
                                </div>
                                <div id="panel19" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>বিটকয়েন হচ্ছে Virtual Currency বা মুদ্রা। যেটা টাকা, ডলারের মত ধরা যায় না,
                                            ছোঁয়া যায় না। এর ক্ষুদ্রতম একক হচ্ছে সাতোশি | এটা অনলাইনেই থাকে এবং অনলাইনেই
                                            লেন্দেন হয়। সবচেয়ে মজার ব্যাপার হলো আপনার আর লেন্দেনকারীর মাঝে কোনো তৃতী
                                            পক্ষ থাকবে নাহ। এটি রাখতে এবং লেন্দেন করতে একটা ওয়ালেট প্রয়োজন।ওয়ালেটের
                                            মধ্যে http://blockchain.info এবং http://Coinbase.com খুব জনপ্রিয়।আপনি
                                            বিটকয়েন ঠিকানা এর সাহায্যে খুব সহজে লেন্দেন সম্পূর্ণ করতে পারবেন।
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 hidden-xs hidden-sm why-img">
                        <div class="">
                            <img src="contents/website/images/why-img.png" alt="why-img" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="full_review">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section_heading">
                        <h3>মন্তব্য</h3>

                    </div>
                </div>
            </div>
            <div class="row review_slick">
                <div class="col-sm-6">
                    <div class="client_review">
                        <div class="clit_brd">
                            <div class="client_introduce clearfix">
                                <div class="client_pic">
                                    <img src="contents/website/images/client01.png" class="img-responsive" alt="">

                                </div>
                                <h4>Maria</h4>
                                <div class="client_star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                                <p>
                                    student
                                </p>
                            </div>
                            <div class="client_desc">
                                Due to the distance and class timing I could not be able to attend the classes. Now
                                crescentbd e-school opens that scope to learn for us.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="client_review">
                        <div class="clit_brd">
                            <div class="client_introduce clearfix">
                                <div class="client_pic">
                                    <img src="contents/website/images/client01.png" class="img-responsive" alt="">

                                </div>
                                <h4>Maria</h4>
                                <div class="client_star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                                <p>
                                    student
                                </p>
                            </div>
                            <div class="client_desc">
                                Due to the distance and class timing I could not be able to attend the classes. Now
                                crescentbd e-school opens that scope to learn for us.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="client_review clearfix">
                        <div class="clit_brd">
                            <div class="client_introduce clearfix">
                                <div class="client_pic">
                                    <img src="contents/website/images/client01.png" class="img-responsive" alt="">

                                </div>
                                <h4>Maria</h4>
                                <div class="client_star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                                <p>
                                    student
                                </p>
                            </div>
                            <div class="client_desc">
                                Due to the distance and class timing I could not be able to attend the classes. Now
                                crescentbd e-school opens that scope to learn for us.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" id="memberModal" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel"
         aria-hidden="true">
        <div class="modal-dialog  modal-lg text-center">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h4 class="modal-title" id="memberModalLabel">
                        crescentbd ই স্কুল<span>১০০</span>জনকে দিচ্ছে
                    </h4>
                    <h2>ফুল ফ্রি স্কলারশিপ । </h2>
                    <p> স্কলারশিপ পেতে রেজিস্ট্রেশন করুন এখনই । </p>
                    <div class="submit_btn">
                        <a href="apply.php">
                            <button>রেজিস্ট্রেশন</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include_once('inc/footer.php'); ?>