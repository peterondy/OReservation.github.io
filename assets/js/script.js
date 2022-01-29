$(document).ready(function(){
    jQuery.noConflict();

    $('.right-navbar').hide();
    $('.navbar-toggler').show();

    $('.navbar-toggler').on('click' , function () {
        $('.right-navbar').show();
        $('.navbar-toggler').hide();
    });
    
    $('#btn-close').on('click' , function () {
        $('.right-navbar').hide();
        $('.navbar-toggler').show();
    });

    //edit style of right navbar
    $(".right-navbar").css("z-index" , "3");

    //login style

    $("input#signup").on('click' , function(){
        $password = $("input#signinpass").val();
        $re_password = $("input#signin_re_pass").val();
        if($password == $re_password ){
            alert('success');
        }else{
            $("h4#errorMessage").addClass("alert alert-danger").html('password and re password not correct');
        }
    });


});
