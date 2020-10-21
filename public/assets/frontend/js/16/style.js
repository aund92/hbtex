Array.prototype.unique = function() { var a = this.concat(); for(var i=0; i<a.length; ++i) { for(var j=i+1; j<a.length; ++j) { if(a[i] === a[j]) a.splice(j--, 1); } } return a;};
function setCookie(cname, cvalue, exdays) {var d = new Date();d.setTime(d.getTime() + (exdays*24*60*60*1000));var expires = "expires="+d.toUTCString();document.cookie = cname + "=" + cvalue + "; " + expires;}
function getCookie(cname) {var name = cname + "=";var ca = document.cookie.split(';');for(var i = 0; i < ca.length; i++) {var c = ca[i];while (c.charAt(0) == ' ') {c = c.substring(1);}if (c.indexOf(name) == 0) {return c.substring(name.length, c.length);}}return "";}
function regexMe(template,keys,values){for(i=0;i<keys.length;i++) template = template.replace(new RegExp("--"+keys[i]+"--","gm"),values[i]);return template;}
function mysqlDateToMyDate(input){return new Date(Date.parse(input)).toLocaleDateString('de-DE', {year: 'numeric',month: '2-digit',day: '2-digit'}).replace(/\./g, '/');}
function backToRegister(){
    jQuery('#basic-modal-content').modal('hide');
    jQuery('#authenModal').modal('show');
}
function backToLogin(){
    jQuery('#authenTitle').text('Đăng nhập');
    jQuery('#frmRegister').toggle(false).fadeOut(200);
    jQuery('#frmRegistered').toggle(false).fadeOut(200);
    jQuery('#frmLostPass').toggle(false).fadeOut(200);
    jQuery('#frmLogin').toggle(true).fadeIn(200);
    jQuery('#authenFooter').toggle(true).fadeIn(200);
}
function lostPassShow(){
    jQuery('#authenTitle').text('Quên mật khẩu');
    jQuery('#authenFooter').toggle(false).fadeOut(200);
    jQuery('#frmRegister').toggle(false).fadeOut(200);
    jQuery('#frmLogin').toggle(false).fadeOut(200);
    jQuery('#frmLostPass').toggle(true).fadeIn(200);
    jQuery.ajax({
        url:'/vi/ajax-lay-captcha-forgot.html',
        method:'GET',
        success:function(response){
            response = JSON.parse(response);
            jQuery('#htmlCaptcha').html(response[0]);
            //jQuery('#htmlCaptcha input').remove();
            //jQuery('#htmlCaptcha').append(response[0]);
            //jQuery('#htmlCaptcha img').attr('src',response[1]);
        }
    });
}
function registerShow(){
    jQuery('#authenTitle').text('Đăng ký');
    jQuery('#authenFooter').toggle(false).fadeOut(200);
    jQuery('#frmRegister').toggle(true).fadeIn(200);
    jQuery('#frmLogin').toggle(false).fadeOut(200);
    jQuery('#frmRegister button[type="submit"]').removeClass('disabled');
}
function goToInbox(response){
    jQuery('#registeredEmail').text(jQuery('#EmailRegister').val());
    jQuery('#authenTitle').text('Đăng ký thành công');
    jQuery('#goToInbox').attr('href','https://'+JSON.parse(response).linkToEmail);
    jQuery('#authenFooter').toggle(false).fadeOut(200);
    jQuery('#frmRegister').toggle(false).fadeOut(200);
    jQuery('#frmRegistered').toggle(true).fadeIn(200);
    //Hệ thống đã gửi đến một email xác nhận vào hộp thư quangiahopan2@gmail.com
    //Vui lòng lòng xác nhận email để hoàn thành các bước đăng ký tiếp theo/
    //Đi tới hòm thư

}
jQuery(function($){
    $('.single-item').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
});
    jQuery(window).scroll(function(event){
    var st = jQuery(window).scrollTop();
     if (st > 99)
     {
        jQuery(".navbar").addClass("navbar-fixed-top");
     }
     else
     {
        jQuery(".navbar").removeClass("navbar-fixed-top");
     }
    });


    jQuery(window).focus(function() {
        if(jQuery('#frmRegistered').is(':visible'))
            jQuery('#backToLogin').animate({zoom: '120%'}, "fast");
    });
    jQuery(window).focusout(function() {
        if(jQuery('#frmRegistered').is(':visible'))
            jQuery('#backToLogin').animate({zoom: '100%'}, "fast");
    });
    jQuery('#authenModal').on('show.bs.modal',function(event){
        if (event.relatedTarget){
            if (event.relatedTarget.dataset.modal == '#frmRegister') registerShow();
            else backToLogin();
        }
        return true;
    });
    jQuery('#modalChinhSach').click(function(event){
        event.preventDefault();
        jQuery('#authenModal').modal('hide');
        jQuery('#basic-modal-content').modal('show');
        jQuery('#ChinhSachDetail').slimScroll({height:'600px'});
    });
    //jQuery('#authenModal input[type=checkbox],#authenModal input[type=radio]').iCheck({
//          checkboxClass: 'icheckbox_square-blue',
//          radioClass: 'iradio_square-blue',
//          increaseArea: '20%' // optional
//    });

    jQuery('#AcceptTerms').on('ifChanged',function acceptTermsChanged(){
        //console.log('Changed');
        if (this.checked) jQuery('#frmRegister button[type="submit"]').removeAttr('disabled');
        else jQuery('#frmRegister button[type="submit"]').prop('disabled','true');
    });
    //jQuery('[data-toggle="tooltip"]').tooltip({placement:'right'});
    try{
        jQuery('#frmRegister').validator().on('submit',function(event){
            event.preventDefault();
            if (jQuery('#frmRegister .has-error').length > 0 || jQuery('#frmRegister .has-success').length == 0) {
                jQuery('#frmRegister .has-error input:first').focus();
            } else {
                jQuery('#authenModal .modal-content').append("<div id='pace-login-container'><style>#pace-login {width: 140px;height: 300px;position: fixed;top: -90px;right: -20px;z-index: 2000;-webkit-transform: scale(0);-moz-transform: scale(0);-ms-transform: scale(0);-o-transform: scale(0);transform: scale(0);opacity: 0;-webkit-transition: all 2s linear 0s;-moz-transition: all 2s linear 0s;transition: all 2s linear 0s;}#pace-login.pace-active {-webkit-transform: scale(.25);-moz-transform: scale(.25);-ms-transform: scale(.25);-o-transform: scale(.25);transform: scale(.25);opacity: 1;}#pace-login .pace-activity {width: 140px;height: 140px;border-radius: 70px;background: #29d;position: absolute;top: 0;z-index: 1911;-webkit-animation: pace-bounce 1s infinite;-moz-animation: pace-bounce 1s infinite;-o-animation: pace-bounce 1s infinite;-ms-animation: pace-bounce 1s infinite;animation: pace-bounce 1s infinite;}#pace-login .pace-progress {position: absolute;display: block;left: 50%;bottom: 0;z-index: 1910;margin-left: -30px;width: 60px;height: 75px;background: rgba(20, 20, 20, .1);box-shadow: 0 0 20px 35px rgba(20, 20, 20, .1);border-radius: 30px / 40px;-webkit-transform: scaleY(.3) !important;-moz-transform: scaleY(.3) !important;-ms-transform: scaleY(.3) !important;-o-transform: scaleY(.3) !important;transform: scaleY(.3) !important;-webkit-animation: pace-compress .5s infinite alternate;-moz-animation: pace-compress .5s infinite alternate;-o-animation: pace-compress .5s infinite alternate;-ms-animation: pace-compress .5s infinite alternate;animation: pace-compress .5s infinite alternate;}@-webkit-keyframes pace-bounce {0% {top: 0;-webkit-animation-timing-function: ease-in;}40% {}50% {top: 140px;height: 140px;-webkit-animation-timing-function: ease-out;}55% {top: 160px;height: 120px;border-radius: 70px / 60px;-webkit-animation-timing-function: ease-in;}65% {top: 120px;height: 140px;border-radius: 70px;-webkit-animation-timing-function: ease-out;}95% {top: 0;-webkit-animation-timing-function: ease-in;}100% {top: 0;-webkit-animation-timing-function: ease-in;}}@-moz-keyframes pace-bounce {0% {top: 0;-moz-animation-timing-function: ease-in;}40% {}50% {top: 140px;height: 140px;-moz-animation-timing-function: ease-out;}55% {top: 160px;height: 120px;border-radius: 70px / 60px;-moz-animation-timing-function: ease-in;}65% {top: 120px;height: 140px;border-radius: 70px;-moz-animation-timing-function: ease-out;}95% {top: 0;-moz-animation-timing-function: ease-in;}100% {top: 0;-moz-animation-timing-function: ease-in;}}@keyframes pace-bounce {0% {top: 0;animation-timing-function: ease-in;}50% {top: 140px;height: 140px;animation-timing-function: ease-out;}55% {top: 160px;height: 120px;border-radius: 70px / 60px;animation-timing-function: ease-in;}65% {top: 120px;height: 140px;border-radius: 70px;animation-timing-function: ease-out;}95% {top: 0;animation-timing-function: ease-in;}100% {top: 0;animation-timing-function: ease-in;}}@-webkit-keyframes pace-compress {0% {bottom: 0;margin-left: -30px;width: 60px;height: 75px;background: rgba(20, 20, 20, .1);box-shadow: 0 0 20px 35px rgba(20, 20, 20, .1);border-radius: 30px / 40px;-webkit-animation-timing-function: ease-in;}100% {bottom: 30px;margin-left: -10px;width: 20px;height: 5px;background: rgba(20, 20, 20, .3);box-shadow: 0 0 20px 35px rgba(20, 20, 20, .3);border-radius: 20px / 20px;-webkit-animation-timing-function: ease-out;}}@-moz-keyframes pace-compress {0% {bottom: 0;margin-left: -30px;width: 60px;height: 75px;background: rgba(20, 20, 20, .1);box-shadow: 0 0 20px 35px rgba(20, 20, 20, .1);border-radius: 30px / 40px;-moz-animation-timing-function: ease-in;}100% {bottom: 30px;margin-left: -10px;width: 20px;height: 5px;background: rgba(20, 20, 20, .3);box-shadow: 0 0 20px 35px rgba(20, 20, 20, .3);border-radius: 20px / 20px;-moz-animation-timing-function: ease-out;}}@keyframes pace-compress {0% {bottom: 0;margin-left: -30px;width: 60px;height: 75px;background: rgba(20, 20, 20, .1);box-shadow: 0 0 20px 35px rgba(20, 20, 20, .1);border-radius: 30px / 40px;animation-timing-function: ease-in;}100% {bottom: 30px;margin-left: -10px;width: 20px;height: 5px;background: rgba(20, 20, 20, .3);box-shadow: 0 0 20px 35px rgba(20, 20, 20, .3);border-radius: 20px / 20px;animation-timing-function: ease-out;}}</style><div id='pace-login' class='pace pace-active'><div class='pace-progress' data-progress='50' data-progress-text='50%' style='-webkit-transform: translate3d(50%, 0px, 0px); -ms-transform: translate3d(50%, 0px, 0px); transform: translate3d(50%, 0px, 0px);'><div class='pace-progress-inner'></div></div><div class='pace-activity'></div></div></div>");
                jQuery.ajax({
                    url:'/vi/ajax-thanh-vien-dang-ky.html',data:new FormData(jQuery('#frmRegister')[0]),
                    type:'POST',contentType:false,processData:false,
                    success:function(response){
                        // var member_id = JSON.parse(response)[0].id;
                        // setCookie('member_id',member_id,1);
                        // jQuery('#btnMemberId').val(member_id);
                        // jQuery('#pace-login-container').remove();
                        // var longta = requestTookLong(requestTimes.unique(),true);
                        // var longti = window.setInterval(function(){
                        //     var oldCookie = JSON.parse(getCookie('dang-tin-nhanh'));
                        //     if (oldCookie.length == indexSaved) {console.log('breaking');window.clearInterval(longti);}
                        //     for(i=0;i<oldCookie.length;i++){
                        //         var indexToBeSaved = jQuery('input[name="id[]"][value="'+oldCookie[i]+'"]').attr('data-order');
                        //         jQuery('.posted-item[data-order="'+indexToBeSaved+'"] .fa-pencil').click();
                        //         jQuery('.posted-item[data-order="'+indexToBeSaved+'"] .fa-save').click();
                        //         indexSaved += 1;
                        //     }
                        // },longta > 10000 ? 10000 : (longta < 3000 ? 3000 : longta));
                        jQuery('#pace-login').remove();
                        if (response == 'ERROR') bootbox.alert('Đăng ký không thành công vì có lỗi xảy ra trên hệ thống!');
                        else goToInbox(response);
                    }
                })
            }
        });
        jQuery('#frmLogin').validator().on('submit',function(event){
            event.preventDefault();
            if (jQuery('#frmLogin .has-error').length > 0 || jQuery('#frmLogin .has-success').length == 0) {
                jQuery('#frmLogin .has-error input:first').focus();
            } else {
                jQuery('#authenModal .modal-content').append("<div id='pace-login-container'><style>#pace-login {width: 140px;height: 300px;position: fixed;top: -90px;right: -20px;z-index: 2000;-webkit-transform: scale(0);-moz-transform: scale(0);-ms-transform: scale(0);-o-transform: scale(0);transform: scale(0);opacity: 0;-webkit-transition: all 2s linear 0s;-moz-transition: all 2s linear 0s;transition: all 2s linear 0s;}#pace-login.pace-active {-webkit-transform: scale(.25);-moz-transform: scale(.25);-ms-transform: scale(.25);-o-transform: scale(.25);transform: scale(.25);opacity: 1;}#pace-login .pace-activity {width: 140px;height: 140px;border-radius: 70px;background: #29d;position: absolute;top: 0;z-index: 1911;-webkit-animation: pace-bounce 1s infinite;-moz-animation: pace-bounce 1s infinite;-o-animation: pace-bounce 1s infinite;-ms-animation: pace-bounce 1s infinite;animation: pace-bounce 1s infinite;}#pace-login .pace-progress {position: absolute;display: block;left: 50%;bottom: 0;z-index: 1910;margin-left: -30px;width: 60px;height: 75px;background: rgba(20, 20, 20, .1);box-shadow: 0 0 20px 35px rgba(20, 20, 20, .1);border-radius: 30px / 40px;-webkit-transform: scaleY(.3) !important;-moz-transform: scaleY(.3) !important;-ms-transform: scaleY(.3) !important;-o-transform: scaleY(.3) !important;transform: scaleY(.3) !important;-webkit-animation: pace-compress .5s infinite alternate;-moz-animation: pace-compress .5s infinite alternate;-o-animation: pace-compress .5s infinite alternate;-ms-animation: pace-compress .5s infinite alternate;animation: pace-compress .5s infinite alternate;}@-webkit-keyframes pace-bounce {0% {top: 0;-webkit-animation-timing-function: ease-in;}40% {}50% {top: 140px;height: 140px;-webkit-animation-timing-function: ease-out;}55% {top: 160px;height: 120px;border-radius: 70px / 60px;-webkit-animation-timing-function: ease-in;}65% {top: 120px;height: 140px;border-radius: 70px;-webkit-animation-timing-function: ease-out;}95% {top: 0;-webkit-animation-timing-function: ease-in;}100% {top: 0;-webkit-animation-timing-function: ease-in;}}@-moz-keyframes pace-bounce {0% {top: 0;-moz-animation-timing-function: ease-in;}40% {}50% {top: 140px;height: 140px;-moz-animation-timing-function: ease-out;}55% {top: 160px;height: 120px;border-radius: 70px / 60px;-moz-animation-timing-function: ease-in;}65% {top: 120px;height: 140px;border-radius: 70px;-moz-animation-timing-function: ease-out;}95% {top: 0;-moz-animation-timing-function: ease-in;}100% {top: 0;-moz-animation-timing-function: ease-in;}}@keyframes pace-bounce {0% {top: 0;animation-timing-function: ease-in;}50% {top: 140px;height: 140px;animation-timing-function: ease-out;}55% {top: 160px;height: 120px;border-radius: 70px / 60px;animation-timing-function: ease-in;}65% {top: 120px;height: 140px;border-radius: 70px;animation-timing-function: ease-out;}95% {top: 0;animation-timing-function: ease-in;}100% {top: 0;animation-timing-function: ease-in;}}@-webkit-keyframes pace-compress {0% {bottom: 0;margin-left: -30px;width: 60px;height: 75px;background: rgba(20, 20, 20, .1);box-shadow: 0 0 20px 35px rgba(20, 20, 20, .1);border-radius: 30px / 40px;-webkit-animation-timing-function: ease-in;}100% {bottom: 30px;margin-left: -10px;width: 20px;height: 5px;background: rgba(20, 20, 20, .3);box-shadow: 0 0 20px 35px rgba(20, 20, 20, .3);border-radius: 20px / 20px;-webkit-animation-timing-function: ease-out;}}@-moz-keyframes pace-compress {0% {bottom: 0;margin-left: -30px;width: 60px;height: 75px;background: rgba(20, 20, 20, .1);box-shadow: 0 0 20px 35px rgba(20, 20, 20, .1);border-radius: 30px / 40px;-moz-animation-timing-function: ease-in;}100% {bottom: 30px;margin-left: -10px;width: 20px;height: 5px;background: rgba(20, 20, 20, .3);box-shadow: 0 0 20px 35px rgba(20, 20, 20, .3);border-radius: 20px / 20px;-moz-animation-timing-function: ease-out;}}@keyframes pace-compress {0% {bottom: 0;margin-left: -30px;width: 60px;height: 75px;background: rgba(20, 20, 20, .1);box-shadow: 0 0 20px 35px rgba(20, 20, 20, .1);border-radius: 30px / 40px;animation-timing-function: ease-in;}100% {bottom: 30px;margin-left: -10px;width: 20px;height: 5px;background: rgba(20, 20, 20, .3);box-shadow: 0 0 20px 35px rgba(20, 20, 20, .3);border-radius: 20px / 20px;animation-timing-function: ease-out;}}</style><div id='pace-login' class='pace pace-active'><div class='pace-progress' data-progress='50' data-progress-text='50%' style='-webkit-transform: translate3d(50%, 0px, 0px); -ms-transform: translate3d(50%, 0px, 0px); transform: translate3d(50%, 0px, 0px);'><div class='pace-progress-inner'></div></div><div class='pace-activity'></div></div></div>");
                jQuery.ajax({
                    url:'/vi/ajax-thanh-vien-dang-nhap.html',data:new FormData(jQuery('#frmLogin')[0]),
                    type:'POST',contentType:false,processData:false,
                    success:function(response){
                        jQuery('#pace-login-container,#pace-login').remove();
                        if (response > 0) {
                            jQuery('#btnMemberId').val(response);jQuery('[data-is-guest]').attr('data-is-guest',false);
                            if (jQuery('#from_id').length) jQuery('#from_id').attr('value',response);
                            setCookie('member_id',response,1);
                            var mod = jQuery('#authenModal')[0].dataset.mod;
                            if (mod == 'dang-tin-nhanh'){
                                var longti = window.setInterval(function(){
                                    var oldCookie = JSON.parse(getCookie('dang-tin-nhanh'));
                                    if (oldCookie.length == indexSaved) {window.clearInterval(longti);}
                                    for(i=0;i<oldCookie.length;i++){
                                        var indexToBeSaved = jQuery('input[name="id[]"][value="'+oldCookie[i]+'"]').attr('data-order');
                                        jQuery('.posted-item[data-order="'+indexToBeSaved+'"] .fa-pencil').click();
                                        jQuery('.posted-item[data-order="'+indexToBeSaved+'"] .fa-save').click();
                                        indexSaved += 1;
                                    }
                                },3000);
                            }else if(mod == 'su-kien' && eventPending){
                                jQuery('[data-init-action]').removeAttr('href');
                                jQuery('[data-init-action]').attr('data-action',jQuery('[data-init-action]').attr('data-init-action'));
                                jQuery.ajax({
                                    type:'POST',
                                    data: {id:eventKey},
                                    url:'/vi/ajax-nhac-nho-su-kien.html',
                                    success:function(response){
                                        if (response == 'true')
                                            toastr.success('Đánh dấu nhắc nhở sự kiện thành công!');
                                    }
                                });
                            }
                            //if (!contactPending) bootbox.alert('Đăng nhập thành công!');
                            if (!contactPending && !eventPending && (mod == '' || jQuery('#authenModal')[0].dataset.mod == 'su-kien' || jQuery('#authenModal')[0].dataset.mod == 'chao-mua' || jQuery('#authenModal')[0].dataset.mod == 'chao-ban' || jQuery('#authenModal')[0].dataset.mod == 'nha-cung-cap' || jQuery('#authenModal')[0].dataset.mod == 'dang-tin-nhanh')){
                                location.reload();
                            }
                            if (contactPending && (jQuery('#authenModal')[0].dataset.mod == 'chao-mua' || jQuery('#authenModal')[0].dataset.mod == 'chao-ban' || jQuery('#authenModal')[0].dataset.mod == 'nha-cung-cap' || jQuery('#authenModal')[0].dataset.mod == 'dang-tin-nhanh')) jQuery('#contactBuyerModal').modal('show');
                            if (jQuery('#authenModal')[0].dataset.mod == 'dang-tin-nhanh'){
                                bootbox.alert('Đăng nhập thành công! Bạn có thể tiếp tục quá trình đăng tin tìm mua!');
                            }
                            jQuery('#authenModal').modal('hide');
                        }
                        else bootbox.alert('Đăng nhập không thành công!');
                    }
                })
            }
        });
        jQuery('#frmLostPass').validator().on('submit',function(event){
            event.preventDefault();
            if (jQuery('#frmLostPass .has-error').length > 0 || jQuery('#frmLostPass .has-success').length == 0) {
                jQuery('#frmLostPass .has-error input:first').focus();
            } else {
                jQuery('#authenModal .modal-content').append("<div id='pace-login-container'><style>#pace-login {width: 140px;height: 300px;position: fixed;top: -90px;right: -20px;z-index: 2000;-webkit-transform: scale(0);-moz-transform: scale(0);-ms-transform: scale(0);-o-transform: scale(0);transform: scale(0);opacity: 0;-webkit-transition: all 2s linear 0s;-moz-transition: all 2s linear 0s;transition: all 2s linear 0s;}#pace-login.pace-active {-webkit-transform: scale(.25);-moz-transform: scale(.25);-ms-transform: scale(.25);-o-transform: scale(.25);transform: scale(.25);opacity: 1;}#pace-login .pace-activity {width: 140px;height: 140px;border-radius: 70px;background: #29d;position: absolute;top: 0;z-index: 1911;-webkit-animation: pace-bounce 1s infinite;-moz-animation: pace-bounce 1s infinite;-o-animation: pace-bounce 1s infinite;-ms-animation: pace-bounce 1s infinite;animation: pace-bounce 1s infinite;}#pace-login .pace-progress {position: absolute;display: block;left: 50%;bottom: 0;z-index: 1910;margin-left: -30px;width: 60px;height: 75px;background: rgba(20, 20, 20, .1);box-shadow: 0 0 20px 35px rgba(20, 20, 20, .1);border-radius: 30px / 40px;-webkit-transform: scaleY(.3) !important;-moz-transform: scaleY(.3) !important;-ms-transform: scaleY(.3) !important;-o-transform: scaleY(.3) !important;transform: scaleY(.3) !important;-webkit-animation: pace-compress .5s infinite alternate;-moz-animation: pace-compress .5s infinite alternate;-o-animation: pace-compress .5s infinite alternate;-ms-animation: pace-compress .5s infinite alternate;animation: pace-compress .5s infinite alternate;}@-webkit-keyframes pace-bounce {0% {top: 0;-webkit-animation-timing-function: ease-in;}40% {}50% {top: 140px;height: 140px;-webkit-animation-timing-function: ease-out;}55% {top: 160px;height: 120px;border-radius: 70px / 60px;-webkit-animation-timing-function: ease-in;}65% {top: 120px;height: 140px;border-radius: 70px;-webkit-animation-timing-function: ease-out;}95% {top: 0;-webkit-animation-timing-function: ease-in;}100% {top: 0;-webkit-animation-timing-function: ease-in;}}@-moz-keyframes pace-bounce {0% {top: 0;-moz-animation-timing-function: ease-in;}40% {}50% {top: 140px;height: 140px;-moz-animation-timing-function: ease-out;}55% {top: 160px;height: 120px;border-radius: 70px / 60px;-moz-animation-timing-function: ease-in;}65% {top: 120px;height: 140px;border-radius: 70px;-moz-animation-timing-function: ease-out;}95% {top: 0;-moz-animation-timing-function: ease-in;}100% {top: 0;-moz-animation-timing-function: ease-in;}}@keyframes pace-bounce {0% {top: 0;animation-timing-function: ease-in;}50% {top: 140px;height: 140px;animation-timing-function: ease-out;}55% {top: 160px;height: 120px;border-radius: 70px / 60px;animation-timing-function: ease-in;}65% {top: 120px;height: 140px;border-radius: 70px;animation-timing-function: ease-out;}95% {top: 0;animation-timing-function: ease-in;}100% {top: 0;animation-timing-function: ease-in;}}@-webkit-keyframes pace-compress {0% {bottom: 0;margin-left: -30px;width: 60px;height: 75px;background: rgba(20, 20, 20, .1);box-shadow: 0 0 20px 35px rgba(20, 20, 20, .1);border-radius: 30px / 40px;-webkit-animation-timing-function: ease-in;}100% {bottom: 30px;margin-left: -10px;width: 20px;height: 5px;background: rgba(20, 20, 20, .3);box-shadow: 0 0 20px 35px rgba(20, 20, 20, .3);border-radius: 20px / 20px;-webkit-animation-timing-function: ease-out;}}@-moz-keyframes pace-compress {0% {bottom: 0;margin-left: -30px;width: 60px;height: 75px;background: rgba(20, 20, 20, .1);box-shadow: 0 0 20px 35px rgba(20, 20, 20, .1);border-radius: 30px / 40px;-moz-animation-timing-function: ease-in;}100% {bottom: 30px;margin-left: -10px;width: 20px;height: 5px;background: rgba(20, 20, 20, .3);box-shadow: 0 0 20px 35px rgba(20, 20, 20, .3);border-radius: 20px / 20px;-moz-animation-timing-function: ease-out;}}@keyframes pace-compress {0% {bottom: 0;margin-left: -30px;width: 60px;height: 75px;background: rgba(20, 20, 20, .1);box-shadow: 0 0 20px 35px rgba(20, 20, 20, .1);border-radius: 30px / 40px;animation-timing-function: ease-in;}100% {bottom: 30px;margin-left: -10px;width: 20px;height: 5px;background: rgba(20, 20, 20, .3);box-shadow: 0 0 20px 35px rgba(20, 20, 20, .3);border-radius: 20px / 20px;animation-timing-function: ease-out;}}</style><div id='pace-login' class='pace pace-active'><div class='pace-progress' data-progress='50' data-progress-text='50%' style='-webkit-transform: translate3d(50%, 0px, 0px); -ms-transform: translate3d(50%, 0px, 0px); transform: translate3d(50%, 0px, 0px);'><div class='pace-progress-inner'></div></div><div class='pace-activity'></div></div></div>");
                jQuery.ajax({
                    url:'/vi/ajax-thanh-vien-quen-mat-khau.html',data:new FormData(jQuery('#frmLostPass')[0]),
                    type:'POST',contentType:false,processData:false,
                    success:function(response){
                        jQuery('#pace-login-container').remove();
                        if (response) {bootbox.alert(response); backToLogin();}
                        else bootbox.alert('Yêu cầu gửi không thành công!');
                    }
                })
            }
        });
    }catch(e){console.log('');}
    if (jQuery("#btn-send")[0]) jQuery("#btn-send").click(function (event) {
        if (jQuery('#content_contact').val().length == 0){
            event.preventDefault();
            toastr.warning('Nội dung thư không được để trống');
            return false;
        }
        jQuery.ajax({
            url: '/vi/ajax-send-mail.html',
            type: 'post',
            data: { id_product: jQuery('#id_product').val(), type: 1, content: jQuery('#content_contact').val(), subject: jQuery('#title-reply').val(), from: jQuery('#from_id').val(), to: jQuery('#to_id').attr('data-value') },
            success: function (result) {
                toastr.options = {positionClass: "toast-top-center",onclick: function () { window.open("http://project.hbtex.vn/vi/hop-thu.html","_blank"); } };
                if (result) toastr.success('Yêu cầu của bạn đã được gửi tới nhà cung cấp, vui lòng chờ và theo dõi thông tin trả lời của người bán tại Hộp thư');
                jQuery('#contactBuyerModal').modal('hide');
            }
        });
    });
    jQuery('#authenModal').on('show.bs.modal',function(event){
        contactPending = jQuery('[data-is-guest]')[0].dataset.isGuest == 'true';
        contactKey = jQuery('[data-is-guest]')[0].dataset.key;
        jQuery('#authenTitle').removeClass('hidden');
        jQuery('#frmLogin').toggle(true);
    });
    jQuery('#contactBuyerModal').on('show.bs.modal',function(event){
        var elm = event.relatedTarget ? event.relatedTarget : jQuery('[data-is-guest][data-key="'+contactKey+'"]')[0];
        if (elm.dataset.isGuest=='true'){
            event.preventDefault();
            jQuery('#authenModal').modal('show');
            return false;
        }
        jQuery('#to_id').attr('data-value',elm.dataset.toId);
        jQuery('#to_id').attr('title',elm.dataset.contact);
        jQuery('#to_id').val(elm.dataset.contact);
        jQuery('#title-reply').val(elm.dataset.reply);
        jQuery('#company_name').html(elm.dataset.contact);
        jQuery('#content_contact').data("wysihtml5").editor.setValue('');
        jQuery('#content_contact').focus();
    });
})
