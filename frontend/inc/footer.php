<section id="full_footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="footer_col">
                    <a href="index.php"><img src="contents/website/images/logo.png" class="img-responsive"
                                             alt="footer-logo"></a>
                    বিটকয়েন হচ্ছে Virtual Currency বা মুদ্রা। যেটা টাকা, ডলারের মত ধরা যায় না, ছোঁয়া যায় না। এর
                    ক্ষুদ্রতম একক হচ্ছে সাতোশি | এটা অনলাইনেই থাকে এবং অনলাইনেই লেন্দেন হয়। সবচেয়ে মজার ব্যাপার হলো
                    আপনার আর লেন্দেনকারীর মাঝে কোনো তৃতী পক্ষ থাকবে নাহ। এটি রাখতে এবং লেন্দেন করতে একটা ওয়ালেট প্রয়োজন।
                    ওয়ালেটের মধ্যে http://blockchain.info এবং http://Coinbase.com খুব জনপ্রিয়।
                    আপনি বিটকয়েন ঠিকানা এর সাহায্যে খুব সহজে লেন্দেন সম্পূর্ণ করতে পারবেন।

                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="footer_col">
                    <h4>যোগাযোগ</h4>
                    <?php
                    foreach ($show_contactus as $show_contact) {
                        ?>
                        <div class="contact_list">
                            <div>

                                <i class="fa fa-map-marker"></i>

                                <a href="tel:01990779843">
                                    <?= $show_contact['p_number']; ?>
                                </a>

                            </div>
                            <div class="margin"><i class="fa fa-phone"></i>
                                <a href="mailto:crescentbd.tech"><?= $show_contact['mail']; ?></a>
                            </div>
                            <div><i class="fa fa-globe"></i>
                                <a href="#" target="_blank"></a>
                                <a href="index.php"><?= $show_contact['web_address']; ?></a>
                            </div>

                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 clearfix">
                <div class="footer_col">
                    <h4>গুরুত্বপূর্ণ লিঙ্কসমূহ </h4>
                    <ul class="ftr_menu">
                        <li><a href="#">কোর্সসমূহ </a></li>
                        <li><a href="apply.php">রেজিস্ট্রেশন </a></li>
                        <li><a href="#"> ই-স্কুল টীম</a></li>
                        <li><a href="#">জিজ্ঞাসা</a></li>
                        <li><a href="#">টিউটোরিয়াল</a></li>
                        <li><a href="#">যোগাযোগ</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="footer_col">
                    <h4>নিউজলেটার </h4>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="আপনার ইমেইল ">
                        </div>

                        <div>
                            <button type="submit" class="btn btn-default">সাবস্ক্রাইব</button>
                        </div>
                    </form>
                    <h4>গুরুত্বপূর্ণ লিঙ্কসমূহ</h4>
                    <ul class="list-inline social_media">
                        <li><a href="#/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- footer part end -->
<footer class="footer_copyright">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 footer_text">
                <p>Copyright &copy; 2018. All Rights Reserved by <a href="index.php">crescentbd</a></p>
            </div>
        </div>
    </div>
</footer>
<!--  all js file  are linked here -->
<script src="contents/website/js/jquery-1.12.4.min.js"></script>
<script src="contents/website/js/bootstrap.min.js"></script>
<script src="contents/website/js/slick.min.js"></script>
<script src="contents/website/js/jquery.autoScrollTextTape.min.js"></script>
<script src="contents/website/js/form-validator.js"></script>
<script src="contents/website/js/main.js"></script>
<script type="text/javascript">
    $('.newsscroll').autoTextTape();
</script>
<script>
    $(function () {
        $("#register-form").validate({
            // Specify the validation rules
            rules: {
                name: "required",
                gender: "required",
                address: "required",
                course: "required",
                day: "required",
                time: "required",
                email: {
                    required: true,
                    email: true
                },
                phone: {
                    required: true,
                    minlength: 11,
                    maxlength: 18
                }
            },
            // Specify the validation error messages
            messages: {
                name: "Please enter your name",
                gender: "Please select your gender",
                address: "Please select your address",
                course: "Please select your course",
                day: "Please select your preferable day",
                time: "Please select your preferable time",
                email: {
                    required: "Please enter a valid email address"
                },
                phone: {
                    required: "Please enter phone number",
                    minlength: "Your Phone Number Invalid",
                    maxlength: "Your Phone Number Invalid"
                }
            },
            submitHandler: function (form) {
                form.submit();
            }
        });
    });
</script>
</body>
</html>