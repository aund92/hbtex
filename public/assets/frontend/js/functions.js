
function createAccOnRFQ() {
    loadingInit();
    $.ajax({
        url: '/api/register',
        method: 'POST', contentType: false, processData: false,
        data: new FormData($('#rfquotation')[0]),
        success: function (resp) {
            loadingEnd();
            if (resp.error == false) {
                swal({
                    title: lang_pack.register_success_email_check,
                    type: "success",
                    showCancelButton: true,
                    confirmButtonClass: "btn-success btn-go-mail-2",
                    confirmButtonText: lang_pack.go_to_email,
                    cancelButtonText: lang_pack.close,
                    closeOnConfirm: false
                });
            } else {
                swal({
                    type: 'error',
                    title: resp.message
                })
            }
        }
    });
}
function isValidEmail(str) {
    if (str) {
        var n = new RegExp(/(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/);
        return n.test(str);
    }
    return false;
}
function enableBtn(elm) {
    $(elm).attr('disabled', false);
}
;
function getUpcomingEvents() {
    $.ajax({
        url: '/api/upcoming_events',
        dataType: 'json',
        success: function (resp) {
            if (resp.success && resp.records.length && resp.records[0]) {
                var x = toastr.info(resp.records[0].name);
                /*for (i = 0; i < resp.records.length; i++) {
                 if (resp.records[i].id) {
                 if ($('[data-action="remind_event"][data-id="' + resp.records[i].id + '"]').length) {
                 $('[data-action="remind_event"][data-id="' + resp.records[i].id + '"]').text($('[data-action="remind_event"][data-id="' + resp.records[i].id + '"]').data('replacement'));
                 $('[data-action="remind_event"][data-id="' + resp.records[i].id + '"]').attr('data-action', 'unremind_event');
                 }
                 }

                 }*/
            }
        }
    });
}
window.fbAsyncInit = function () {
    FB.init({
        appId: '285025768967343',
        autoLogAppEvents: true,
        xfbml: true,
        version: 'v3.1'
    });
};

(function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) {
        return;
    }
    js = d.createElement(s);
    js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
function share(elm) {
    if (!elm)
        return;
    FB.ui({
        method: 'share',
        href: elm.href,
    }, function (response) {});
}
String.prototype.replaceAll = function (find, replace) {
    var str = this;
    return str.replace(new RegExp(find.replace(/[-\/\\^$*+?.()|[\]{}]/g, '\\$&'), 'g'), replace);
};
function fillTemplate(data, template) {
    var row_template = template;
    for (var prop in data) {
        if (data.hasOwnProperty(prop)) {
            row_template = row_template.replace('\[' + prop.toUpperCase() + '\]', data[prop]);
            row_template = row_template.replace('\[' + prop.toUpperCase() + '\]', data[prop]);
        }
    }
    return row_template;
}
function getNewsNEvent() {
    $.ajax({
        url: '/api/news_n_event',
        method: 'GET',
        dataType: 'json',
        success: function (resp) {
            var html = '';
            var template = $('[data-load="ajax"][data-module="news"]').data('template');
            for (var i = 0; i < resp.news.length; i++) {
                html += fillTemplate(resp.news[i], template);
            }
            $('[data-load="ajax"][data-module="news"]').html(html);
            var html = '';
            var template = $('[data-load="ajax"][data-module="events"]').data('template');
            for (var i = 0; i < resp.events.length; i++) {
                html += fillTemplate(resp.events[i], template);
            }
            $('[data-load="ajax"][data-module="events"]').html(html);
        }
    });
}
jQuery(function () {
    $('.banner').click(function (e) {
        e.preventDefault();
        var link = $(this).attr('href');
        var id = $(this).data('id');
        $.ajax({
            url: '/api/count_advertisment/' + id,
            method: 'GET',
            success: function (response) {
                if (response.error === false) {
                    console.log('123123');
                    window.open(link, '_blank');
                }
            }
        });

    });
    if (window.location.href.match(/keyword=/)) {
        if (window.location.href.match(/keyword=[^&]+/)) {
            var keyword = decodeURIComponent(window.location.href.match(/keyword=[^&]+/)[0].replace(/keyword=/gm, '')).replace(/\+/gm, ' ');
            console.log(keyword);
            $(".single-product h4, .single-product .description-p, .single-product .description, .supplier-info .description, .supplier-info h4").mark(keyword, {className: 'highlight', diacritics: true, separateWordSearch: true});
        }
        if (window.location.href.match(/is_most_suite=[^&]+/) && $('.product_item').length && $('[data-source]').length && $('[data-source]').data('source').length) {
            $(".buy-product-item a").mark($('[data-source]').data('source'), {className: 'highlight', separateWordSearch: true, diacritics: true});
        }
    }
    if ($('#frmSearchSidebar .scroll').length) {
        $('#frmSearchSidebar .scroll').each(function () {
            if ($(this).find('> label').length > 10 || $(this).hasClass('always-scroll')) {
                $(this).slimScroll({
                    height: '350px'
                });
            }
        });
    }
    if ($('[data-load="ajax"][data-module="news"]').length) {
        getNewsNEvent();
    }
    getUpcomingEvents();
    $("#loginForm").validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 6
            }
        },
        messages: {
            email: {
                required: lang_pack.required_email,
                email: lang_pack.validate_email
            },
            password: {
                required: lang_pack.required_password,
                minlength: lang_pack.minlength_password
            }
        },
        submitHandler: function (form) {
            $(form).append('<input name="event_pending" type="hidden" value="' + getCookie('event_pending') + '"/>');
            $.ajax({
                url: form.action,
                type: form.method,
                data: $(form).serialize(),
                success: function (response) {
                    if (response.error == false) {
                        var url_string = window.location.href;
                        var url = new URL(url_string);
                        var url_back = url.searchParams.get("url_back");
                        swal('', lang_pack.login_success, 'success');
                        $('.modal').modal('hide');
                        if ($('#loginForm').data('module') === 'homepage') {
                            window.setTimeout(function () {
                                location.href = '/admin';
                            }, 1000);
                        } else {
                            if (url_back == null) {
                                window.setTimeout(function () {
                                    location.reload();
                                }, 1000);
                            } else {
                                window.setTimeout(function () {
                                    location.href = url_back;
                                }, 1000);
                            }

                        }
                        /**/
                    } else {
                        $("#loginForm").parent().find('.alert-error').show();
                        var arlet = '<div class="alert bg-danger alert-styled-left"><button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button><span class="text-semibold error">' + response.mess + '</span></div>';
                        $("#loginForm").parent().find('.alert-error').html(arlet);
                    }
                }
            });
        }
    });
    $("#registerForm").validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 6
            },
            password_confirm: {
                required: true,
                minlength: 6,
                equalTo: "#password"
            },
            fullname: {
                required: true,
            },
            contact_mobile: {
                required: true,
            }
        },
        messages: {
            email: {
                required: lang_pack.required_email,
                email: lang_pack.validate_email
            },
            password: {
                required: lang_pack.required_password,
                minlength: lang_pack.minlength_password
            },
            password_confirm: {
                required: lang_pack.required_password_confirm,
                minlength: lang_pack.minlength_password,
                equalTo: lang_pack.confirm_password,
            },
            fullname: {
                required: lang_pack.required_fullname
            },
            contact_mobile: {
                required: lang_pack.required_phone
            }
        },
        submitHandler: function (form) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('input[name="_token"]').val()
                }
            });
            loadingInit();
            $.ajax({
                url: form.action,
                type: form.method,
                data: $(form).serialize(),
                success: function (response) {
                    loadingEnd();
                    if (response.error == false) {
                        swal({
                            title: lang_pack.register_success,
                            text: lang_pack.register_success_email_check,
                            type: "success",
                            showCancelButton: true,
                            confirmButtonClass: "btn-success btn-go-mail",
                            confirmButtonText: lang_pack.go_to_email,
                            cancelButtonText: lang_pack.close,
                            closeOnConfirm: false
                        });
                    } else {
                        swal('', response.mess, 'error');
                    }
                }, error: function (resp) {
                    loadingEnd();
                }
            });
        }
    });
    $('body').delegate('.btn-go-mail', 'click', function () {
        var email = $('#modal-register input[name="email"]').val();
        if ($('#frmRegister').length)
            sp = email = $('#frmRegister input[name="email"]').val();
        var sp = email.match(/\@([^\.]+)/gm);
        if (sp) {
            sp = email.match(/\@([^\.]+)/gm)[0].replace('@', '');
            if (sp === 'gmail')
                window.open('https://mail.google.com/');
            else if (sp)
                window.open('https://google.com/search?&q=' + sp);
        }
    });
    $("#frmRegister").validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            contact_mobile: {
                required: true,
            }
        },
        messages: {
            email: {
                required: lang_pack.required_email,
                email: lang_pack.validate_email
            },
            contact_mobile: {
                required: lang_pack.required_phone
            }
        },
        submitHandler: function (form) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('input[name="_token"]').val()
                }
            });
            loadingInit();
            $.ajax({
                url: form.action,
                type: form.method,
                data: $(form).serialize(),
                success: function (response) {
                    loadingEnd();
                    if (response.error == false) {
                        swal({
                            title: lang_pack.register_success,
                            text: lang_pack.register_success_email_check,
                            type: "success",
                            showCancelButton: true,
                            confirmButtonClass: "btn-success btn-go-mail",
                            confirmButtonText: lang_pack.go_to_email,
                            cancelButtonText: lang_pack.close,
                            closeOnConfirm: false
                        });
                    } else {
                        swal('', response.mess, 'error');
                    }
                }, error: function (resp) {
                    loadingEnd();
                }
            });
        }
    });
    $("#forgetForm").validate({
        rules: {
            email: {
                required: true,
                email: true
            }
        },
        messages: {
            email: {
                required: lang_pack.required_email,
                email: lang_pack.validate_email
            }
        },
        submitHandler: function (form) {
            loadingInit();
            $.ajax({
                url: form.action,
                type: form.method,
                data: $(form).serialize(),
                success: function (response) {
                    loadingEnd();
                    if (response.error == false) {
                        swal('', response.mess, 'success');
                        setTimeout(function () {
                            //location.reload(true);
                        }, 2000);
                    } else {
                        swal('', response.mess, 'error');/*
                         $('.alert-error').show();
                         var arlet = '<div class="alert bg-danger alert-styled-left"><button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button><span class="text-semibold error">' + response.mess + '</span></div>';
                         $('.alert-error').html(arlet);*/
                    }
                }, error: function () {
                    loadingEnd();
                }
            });
        }
    })
    $('.view-all-child').click(function () {
        $(this).prev().find('ul').css('overflow-y', 'initial').css('max-height', 'initial');
        $(this).remove();
    });
    $('.list-buy-product .select-search').on('select2:select', function () {
        $(this).parents('form').submit();
    });
    $('.list-buy-product .select-search').on('select2:unselecting', function (e) {
        $(this).val($(this).val().remove(e.params.args.data.id));
        $(this).parents('form').submit();
    });
    $('[name="page"]').on('keydown', function (e) {
        if (e.keyCode == 13) {
            var val = parseInt(this.value, 10);
            loadingInit();
            var v1 = window.location.href.replace(/\#/gm, '').replace(/\.html$/, '.html?page=' + val).replace(/page=\d+/gm, '');
            window.location.href = v1 + (v1.match(/\.html$/) ? '?' : '&') + 'page=' + val;
        }
    });
    if ($('.social-network li.fb').length) {
        $('.social-network li.fb').click(function (e) {
            e.preventDefault();
            share();/*
             if ($(this).index()==1) $(this).parents('.share-post').find('div').eq(1)[0].click();
             else $(this).parents('.share-post').find('div').eq(2)[0].click();*/
        });
    }
    if ($('.social-network li.gg').length) {
        $('.social-network li.gg').click(function (e) {
            e.preventDefault();
            window.open($(this).find('a[href]').attr('href'),
                    'kcfinder_image', 'status=0, toolbar=0, location=0, menubar=0, ' +
                    'directories=0, resizable=1, scrollbars=0, width=400, height=600');
        });
    }
    if ($('.register[data-redirect]').length) {
        setTimeout(function () {
            location.href = $('.register[data-redirect]').data('redirect');
        }, 1000);
    }
});
