
(function ($) {
    $('.validate_form').click(function(){
            var email=$('#email').val();
            var pass=$('#password').val();
            var captcha=$('#captcha').val();
            var captcha_code=$('captcha_code').val();
            // alert(captcha);
    
    if(email == ''){
        alert('Email Cant be Empty');
    }
    if(pass == ''){
        alert('Password Cant be Empty');
    }
});
})(jQuery);