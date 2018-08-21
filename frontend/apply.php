<?php include_once('inc/header.php');
use App\classes\ContentUpload as upload;

$ob_inset=new upload();
if (!empty($_POST)){
    $ob_inset->registrationFrom($_POST);
}

?>

<?php include_once('inc/nav.php'); ?>
    <section id="page_breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="breadcrumb_menu text-center text-uppercase">
                        <h3>রেজিস্ট্রেশন </h3>
                        <ol class="breadcrumb text-capitalize flato">
                            <li><a href="index.php">প্রথম পাতা </a></li>
                            <li class="active">রেজিস্ট্রেশন</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="register_assets">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h4>রেজিস্ট্রেশন করার জন্য যা যা থাকা আবশ্যক </h4>
                    <ul>
                        <li><img src="contents/website/images/regster_shape.png" class="" alt="shape">ন্যূনতম H.S.C পাশ
                            হতে
                            হবে
                        </li>
                        <li><img src="contents/website/images/regster_shape.png" class="" alt="shape">একটি PC/LAPTOP
                            থাকতে
                            হবে
                        </li>
                        <li><img src="contents/website/images/regster_shape.png" class="" alt="shape">ডেস্কটপ এর
                            ক্ষেত্রে
                            ওয়েব ক্যাম ও হেডফোন থাকতে হবে
                        </li>
                        <li><img src="contents/website/images/regster_shape.png" class="" alt="shape"> ইন্টারনেট স্পীড
                            ন্যূনতম ১ এমবিপিএস থাকতে হবে
                        </li>
                        <li><img src="contents/website/images/regster_shape.png" class="" alt="shape">কম্পিউটার চালনায়
                            বেসিক জ্ঞান থাকতে হবে
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="registration_form">
        <div class="container">
            <div class="row">
                <div class="register_form">
                    <div class="text-center">
                        <h4>রেজিস্ট্রেশন ফর্ম </h4>
                    </div>
                    <div class="col-md-4 col-md-offset-4">
                        <div class="well well-lg">
                            <form id="register-form" method="post" action="#" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <input type="file" name="image" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="name" placeholder="নাম" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="ইমেল " class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="p_number" placeholder="মোবাইল নাম্বর "
                                               class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="address" placeholder="ঠিকানা" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="pass" placeholder="পাসওয়ার্ড" class="form-control" required>
                                    </div>
                                    <div class="form-group  text-center submit_btn">
                                        <button type="submit">রেজিস্ট্রেশন</button>
                                    </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include_once('inc/footer.php'); ?>