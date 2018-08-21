(function ($) {
    "use strict";
    // error massage hide js
    $(".error_massage p").delay(2500).fadeOut();

   // Check the  mail validation
    function checkEmailAddress() {
        var parttern = new RegExp(/^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i);
        if (parttern.test($('#email').val())) {
            $('#emailtext').text('');
        }
        else {
            $('#emailtext').text('Enter the Valid Email');
        }
    }
    $('#email').blur(function () {
        checkEmailAddress();
    });
    $('#email').keyup(function () {
        checkEmailAddress();
    });
    $('#email').mousemove(function () {
        $('#emailtext').text('');
    });



})(jQuery);
