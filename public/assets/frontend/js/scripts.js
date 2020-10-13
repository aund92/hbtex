Array.prototype.clean = function (deleteValue = '') {
    for (var i = 0; i < this.length; i++) {
        if (this[i] == deleteValue) {
            this.splice(i, 1);
            i--;
        }
    }
    return this;
};
Array.prototype.unique = function () {
    var a = this.concat();
    for (var i = 0; i < a.length; ++i) {
        for (var j = i + 1; j < a.length; ++j) {
            if (a[i] === a[j])
                a.splice(j--, 1);
        }
    }
    return a;
};
Array.prototype.remove = function () {
    var what, a = arguments, L = a.length, ax;
    while (L && this.length) {
        what = a[--L];
        while ((ax = this.indexOf(what)) !== -1) {
            this.splice(ax, 1);
        }
    }
    return this;
};
function remindEvent(event_data) {
    var elm_id = event_data.id;
    $.ajax({
        url: "/api/" + event_data.action,
        method: 'POST',
        data: event_data,
        success: function (data) {
            handleResponse(data);
            $('[data-replacement][data-id="' + elm_id + '"]').text($('[data-replacement][data-id="' + elm_id + '"]').data('replacement'));
        }
    });
}
function setCookie(cname, cvalue, exdays = 3) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + "; " + expires;
}
function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}
function resetForm(selector) {
    $(selector).find('input,textarea').val('');
}
function loadingInit(options) {
    loadingEnd(options);
    $('body').prepend('<div id="loader-wrapper"><div id="loader"></div><div class="loader-section section-left"></div><div class="loader-section section-right"></div></div>');
}
function loadingEnd(options) {
    if (options) {
        if (options.modal_close === false) {
        } else
            $('.modal').modal('hide');
    } else
        $('.modal').modal('hide');
    $('#loader-wrapper').remove();
}
var scrollToElement = function (el, ms) {
    var speed = (ms) ? ms : 600;
    $('html,body').animate({
        scrollTop: $(el).offset().top - 200
    }, speed);
}
function switchSearch(from, module) {
    var tmp = location.href.split('?');
    if (tmp.length == 2)
        location.href = '/' + module + '/danh-sach.html?' + tmp[tmp.length - 1];
    else
        location.href = '/' + module + '/danh-sach.html';
}
// function handleResponse(response, options) {
//     loadingEnd(options);
//     if (response.sw_options) {
//         if (response.callback) {
//             if (response.callback == "createAccOnRFQ") {
//                 swal(response.sw_options, function (isConfirm) {
//                     if (isConfirm) {
//                         $('[name="buy_product_id"]').attr('value', response.buy_product_id);
//                         createAccOnRFQWithBuyProductID();
//                     }
//                 });
//             }
//         } else
//             swal(response.sw_options);
//     } else {
//         if (response.redirect) {
//             if (response.timeout) {
//
//             } else {
//                 location.reload();
//             }
//         }
//         if (response.mess || response.message) {
//             if (typeof (options) !== "undefined" && typeof (options.is_toastr) !== "undefined" && options.is_toastr === true) {
//                 if (response.error === false || response.success)
//                     toastr.success(response.mess || response.message);
//                 else
//                     toastr.warning(response.mess || response.message);
//             } else {
//                 if (response.error === false || response.success)
//                     swal("", response.mess || response.message, "success");
//                 else
//                     swal("", response.mess || response.message, "error");
//             }
//         }
//     }
// }
function clearSession() {
    $.ajax({
        url: "/api/clear_session",
        method: 'POST',
        success: function (data) { }
    });
}
function showModal(elm) {
    $('.modal:visible').modal('hide');
    $('#' + elm).modal('show');
}
$(document).ready(function () {
    if ($('[data-reverse-dom]').length) {
        var html = [];
        $('[data-reverse-dom]').find('> div').each(function () {
            console.log($(this).find('.month').text(), $(this).find('.day').text());
            html.push(this.outerHTML);
        });
        $('[data-reverse-dom]').html(html.reverse().join(''));
    }
    $('[data-form="ajax"]').submit(function (e) {
        e.preventDefault();
        $(this).find('input[pattern]').trigger('blur');
        if (this.id === 'rfquotation') {
            if ($('#rfquotation [name="product_name"]').val().length == 0) {
                toastr.warning(lang_pack.msg_product_name_missing);
                return false;
            }
            var content = $(this).find('textarea').val();
            if ($('#rfquotation .tiny-init').length) {
                var content_id = $('#rfquotation .tiny-init')[0].id;
                content = tinyMCE.get(content_id).getContent();
                $('#' + content_id).val(content);
            } else {
                $(this).find('textarea[name="content"]').val(content);
            }
            if (content.length == 0) {
                toastr.warning(lang_pack.msg_content_missing);
                return false;
            }
            if ($('#rfquotation input[pattern]').length && ($('#rfquotation .validation-error-label').length || !$('#rfquotation .validation-valid-label').length || $('#rfquotation input[pattern]').length !== $('#rfquotation .validation-valid-label').length)) {
                toastr.warning(lang_pack.msg_field_pattern_failed);
                return false;
            }
        }
        if ($(this).attr('id') === 'modal-form-send-contact-supplier') {
            if ($('#modal-form-send-contact-supplier [name="subject"]').val().length == 0) {
                toastr.warning(lang_pack.msg_subject_missing);
                return false;
            }
            var content_id = $('#modal-form-send-contact-supplier .tiny-init')[0].id;
            var content = tinyMCE.get(content_id).getContent();
            if (content.length == 0) {
                toastr.warning(lang_pack.msg_content_missing);
                return false;
            }
            if ($('#modal-form-send-contact-supplier input[pattern]').length && ($('#rfquotation .validation-error-label').length || !$('#modal-form-send-contact-supplier .validation-valid-label').length || $('#modal-form-send-contact-supplier input[pattern]').length !== $('#modal-form-send-contact-supplier .validation-valid-label').length)) {
                toastr.warning(lang_pack.msg_field_pattern_failed);
                return false;
            }
            $('#' + content_id).val(content);
        }
        if ($(this).attr('id') === 'modal-form-send-contact-buyer') {
            if ($('#modal-form-send-contact-buyer [name="subject"]').val().length == 0) {
                toastr.warning(lang_pack.msg_subject_missing);
                return false;
            }
            var content_id = $('#modal-form-send-contact-buyer .tiny-init')[0].id;
            var content = tinyMCE.get(content_id).getContent();
            if (content.length == 0) {
                toastr.warning(lang_pack.msg_content_missing);
                return false;
            }
            if ($('#modal-form-send-contact-buyer input[pattern]').length && ($('#rfquotation .validation-error-label').length || !$('#modal-form-send-contact-buyer .validation-valid-label').length || $('#modal-form-send-contact-buyer input[pattern]').length !== $('#modal-form-send-contact-buyer .validation-valid-label').length)) {
                toastr.warning(lang_pack.msg_field_pattern_failed);
                return false;
            }
            $('#' + content_id).val(content);
        }
        loadingInit();
        $.ajax({
            url: this.action,
            method: this.method,
            contentType: false, processData: false,
            data: new FormData(this),
            success: function (resp) {
                handleResponse(resp);
                $('.sweet-alert .lead').html($('.sweet-alert .lead').text());
            }, error: function (resp) {
                loadingEnd();
            },
        });
    });
    tinymce.init({
        selector: '.tiny-init',
        height: 250,
        theme: 'modern',
        plugins: 'print preview autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount imagetools contextmenu colorpicker textpattern help',
        toolbar1: 'fontselect fontsizeselect formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
        image_advtab: false,
        cleanup: true,
        content_css: [
            'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700',
        ],

    });
    $('body').delegate('[data-action="logout"]', 'click', function (e) {
        e.preventDefault();
        swal({title: lang_pack.confirm_logout, type: "warning", showCancelButton: true,
            confirmButtonText: lang_pack.logout,
            cancelButtonText: lang_pack.btn_cancel}, function (isConfirm) {
            if (isConfirm)
                location.href = '/logout.html';
        });
    });
    $('#modal-login').on('show.bs.modal', function (e) {
        if (e.relatedTarget) {
            dataset = e.relatedTarget.dataset;
            if (dataset.pending) {
                setCookie('event_pending', dataset.key);
            }
        }
    });
    $('#modal-send-contact-supplier').on('show.bs.modal', function (e) {
        if (e.relatedTarget) {
            dataset = e.relatedTarget.dataset;
            $('#modal-send-contact-supplier .modal-title a').text(dataset.company_name);
            $('#modal-send-contact-supplier .modal-title a').attr('href', dataset.url);
            for (var p in dataset) {
                if ($('#modal-send-contact-supplier [data-field="' + p + '"].hidden').length) {
                    if (dataset[p].length)
                        $('#modal-send-contact-supplier [data-field="' + p + '"].hidden').removeClass('hidden');
                }
                if ($('[data-field="' + p + '"]').length) {
                    if (p == 'company_name' || p == 'contact_name')
                        $('[data-field="' + p + '"]').attr('href', dataset.url);
                    if ($('#modal-send-contact-supplier [data-field="' + p + '"]')[0].nodeName === 'INPUT')
                        $('#modal-send-contact-supplier [data-field="' + p + '"]').val(dataset[p]);
                    else
                        $('#modal-send-contact-supplier [data-field="' + p + '"]').text(dataset[p]);
                }
            }
        }
    });
    $('#modal-send-contact-buyer').on('show.bs.modal', function (e) {
        if (e.relatedTarget) {
            dataset = e.relatedTarget.dataset;
            for (var p in dataset) {
                if ($('#modal-send-contact-buyer [data-field="' + p + '"].hidden').length) {
                    if (dataset[p].length)
                        $('#modal-send-contact-buyer [data-field="' + p + '"].hidden').removeClass('hidden');
                }
                if ($('[data-field="' + p + '"]').length) {
                    if (p == 'company_name' || p == 'contact_name')
                        $('[data-field="' + p + '"]').attr('href', dataset.url);
                    if ($('#modal-send-contact-buyer [data-field="' + p + '"]').length && $('#modal-send-contact-buyer [data-field="' + p + '"]')[0].nodeName === 'INPUT')
                        $('#modal-send-contact-buyer [data-field="' + p + '"]').val(dataset[p]);
                    else
                        $('#modal-send-contact-buyer [data-field="' + p + '"]').text(dataset[p]);
                }
            }
        }
    });
    $('#modal-term-of-usage').on('show.bs.modal', function (e) {
        $.ajax({
            url: '/api/get_tou',
            method: 'get', dataType: 'json',
            success: function (response) {
                $('#modal-term-of-usage .modal-body').html(response.html);
            },
            error: function () {
                loadingEnd();
            }
        });

    });
    $('[data-action="send-contact-supplier"]').click(function (e) {
        event.preventDefault();
        $(this).parents('form').find('input[pattern]').trigger('blur');
        if ($('#form-send-contact-supplier [name="subject"]').val().length == 0) {
            toastr.warning(lang_pack.msg_subject_missing);
            return false;
        }
        var content_id = $('#form-send-contact-supplier .tiny-init')[0].id;
        var content = tinyMCE.get(content_id).getContent();
        if (content.length == 0) {
            toastr.warning(lang_pack.msg_content_missing);
            return false;
        }
        if ($('#form-send-contact-supplier input[pattern]').length && (!$('#form-send-contact-supplier .validation-valid-label').length || $('#form-send-contact-supplier input[pattern]').length !== $('#form-send-contact-supplier .validation-valid-label').length)) {
            toastr.warning(lang_pack.msg_field_pattern_failed);
            return false;
        }
        $('#' + content_id).val(content);
        loadingInit({"modal_close": false});
        $.ajax({
            url: '/api/send_message_contact_supplier',
            method: 'POST',
            data: new FormData($('#form-send-contact-supplier')[0]),
            processData: false, contentType: false,
            success: function (response) {
                if (typeof (response) === "undefined")
                    return;
                handleResponse(response, {"modal_close": (response.success === true ? true : false), "is_toastr": (response.error === true ? true : false)});
                if (response.newuser === 'true') {
                    swal({
                        title: lang_pack.contact_success,
                        text: lang_pack.register_success_email_check,
                        type: "success",
                        showCancelButton: true,
                        confirmButtonClass: "btn-success btn-go-mail",
                        confirmButtonText: lang_pack.go_to_email,
                        cancelButtonText: lang_pack.close,
                        closeOnConfirm: false
                    });
                } else {
                    $('.sweet-alert .lead').html($('.sweet-alert .lead').text());
                }

            },
            error: function () {
                loadingEnd();
            }
        });
    });
     $('body').delegate('.btn-go-mail', 'click', function () {
        var email = $('#modal-send-contact-supplier input[name="email"]').val();
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
    $('[data-action="send-contact-buyer"]').click(function (e) {
        $(this).find('input[pattern]').trigger('blur');
        event.preventDefault();
        if ($('#form-send-contact-buyer [name="subject"]').val().length == 0) {
            toastr.warning(lang_pack.msg_subject_missing);
            return false;
        }
        if ($('#form-send-contact-buyer [name="content"]').val().length == 0) {
            toastr.warning(lang_pack.msg_content_missing);
            return false;
        }
        loadingInit();
        $.ajax({
            url: '/api/send_contact_buyer',
            method: 'POST',
            data: new FormData($('#form-send-contact-buyer')[0]),
            processData: false, contentType: false,
            success: function (response) {
                loadingEnd();
                handleResponse(response);
            }
        });
    });
    $('#modal-form-send-contact-buyer input[pattern]:not([type="email"]),#modal-form-send-contact-supplier input[pattern]:not([type="email"]),#form-send-contact-supplier input[pattern]:not([type="email"]),#rfquotation input[pattern]:not([type="email"])').blur(function () {
        var reg = new RegExp($(this).attr('pattern'));
        var valid = reg.test(this.value);
        $(this).parent().find('.validation-error-label').remove();
        $(this).parent().find('.validation-valid-label').remove();
        $(this).parent().append(valid ? '<label class="validation-valid-label"></label>' : '<label class="validation-error-label"></label>');
        if (!valid)
            $(this).attr('title', this.dataset.error).attr('data-toggle', 'tooltip').tooltip();
        else if ($(this).attr('data-original-title'))
            $(this).tooltip('dispose');
    });
    $('#modal-form-send-contact-buyer input[pattern][type="email"],#modal-form-send-contact-supplier input[pattern][type="email"],#form-send-contact-supplier input[pattern][type="email"],#rfquotation input[pattern][type="email"]').blur(function () {
        var valid = isValidEmail(this.value);
        if (valid) {
            var curent_url = window.location.href;
            var elm = this;
            $.ajax({
                url: '/api/check_email_exists',
                method: 'POST',
                data: {email: this.value},
                dataType: 'json',
                success: function (response) {
                    if (response.error === true) {
                        valid = false;
                        $(elm).parent().find('.validation-error-label').remove();
                        $(elm).parent().find('.validation-valid-label').remove();
                        $(elm).parent().append(valid ? '<label class="validation-valid-label"></label>' : '<label class="validation-error-label"></label>');
                        if (!valid) {
                            swal({
                                title: response.message,
                                type: "error",
                                showCancelButton: false,
                                confirmButtonText: 'OK'
                            }, function (isConfirm) {
                                if (isConfirm)
                                    location.href = '/dang-nhap.html?url_back='+curent_url;
                            });
                            $(elm).attr('title', response.message || response.dataset.error).attr('data-toggle', 'tooltip').tooltip();
                        } else if ($(elm).attr('data-original-title'))
                            $(elm).tooltip('dispose');
                    }
                }
            });
        }
        $(this).parent().find('.validation-error-label').remove();
        $(this).parent().find('.validation-valid-label').remove();
        $(this).parent().append(valid ? '<label class="validation-valid-label"></label>' : '<label class="validation-error-label"></label>');
        if (!valid)
            $(this).attr('title', this.dataset.error).attr('data-toggle', 'tooltip').tooltip();
        else if ($(this).attr('data-original-title'))
            $(this).tooltip('dispose');
    });
    $("#btnSearch").on('click', function (e) {
        e.preventDefault();
        if (!$('#searchTag').val().trim().length) {
            $('#searchTag').focus();
            toastr.warning(lang_pack.keyword_must_not_empty);
            return false;
        } else if ($('#searchTag').val().trim().match(/(\/|\'|\"|NULL|null|<|>|--|-->)/i)) {
            $('#searchTag').val('');
            toastr.warning(lang_pack.not_valid_character_search);
            $('#searchTag').attr('title', lang_pack.not_valid_character_search).attr('data-toggle', 'tooltip').tooltip();
            return false;
        } else if ($('#searchTag').attr('data-original-title')) {
            $('#searchTag').tooltip('dispose');
        }
        var keyword = $('#searchTag').val();
        var link = $('[name="poscats"] option:selected').data('route');
        var type = $('.bootstrap-select').val();
        location.href = link + '?keyword=' + keyword + '&type=' + type;
    });
    $("#searchNews").autocomplete({
        source: function (request, response) {
            var type = $('[name="type"]').val();
            var keyword = $("#searchNews").val();
            $.ajax({
                url: "/api/autocomplete_news",
                method: 'POST',
                data: {
                    type: type,
                    keyword: keyword
                },
                success: function (data) {
                    response(data);
                }
            });
        },
        minLength: 2
    });
    $.ajaxSetup({
        error: function (resp) {
            console.log(resp);
        }
    });
    $('.back-modal').click(function () {
        $(this.dataset.target).modal('show');
        $('.modal:not(' + this.dataset.target + ')').modal('hide');
    });
    if ($('.zoom_01').length)
        $('.zoom_01').elevateZoom({
            zoomType: "inner",
            cursor: "crosshair",
            zoomWindowFadeIn: 500,
            zoomWindowFadeOut: 750
        });
    if ($(".styled").length && $.fn.uniform) {

        $(".styled").uniform({
            radioClass: 'choice',
        });
        if ($('.list-buy-product .styled[type="checkbox"][name="is_most_suite"]').length) {
            $('.list-buy-product .styled[type="checkbox"][name="is_most_suite"]').on('change', function () {
                $(this).parents('form').submit();
            });
        }
    }
    $('#frmSubscriber').submit(function (e) {
        e.preventDefault();
        $.ajax({
            url: this.action,
            data: {email: $(this).find('input[name="email"]').val()},
            method: 'POST',
            dataType: 'json',
            success: function (response) {
                handleResponse(response);
            },
            error: function () {
                loadingEnd();
            }
        });
    });
    $('body').delegate('.btn-confirm-upgrade', 'click', function (e) {
        loadingInit();
        $.ajax({
            url: "/api/request_upgrade_gold",
            method: "POST",
            success: function (response) {
                loadingEnd();
                handleResponse(response);
            },
            error: function (res) {
                loadingEnd();
            }
        });
    });
    $('[data-action="upgrade"]').click(function () {
        var elm = this;
        toastr.info(lang_pack.confirm_upgrade + "?<br /><br /><button type='button' class='btn btn-confirm-upgrade btn-info'>OK</button>", '', {closeButton: true});
    });
    $('[data-action="upgrade-confirm"]').click(function () {
        e.preventDefault();
        swal({
            title: "",
            text: lang_pack.confirm_upgrade,
            showCancelButton: true,
            cancelButtonText: lang_pack.close,
            confirmButtonText: lang_pack.confirm_upgrade,
            closeOnConfirm: false,
        }, function (isConfirm) {
            if (isConfirm)
                $.ajax({
                    url: '/api/upgrade_gold',
                    type: "POST",
                    dataType: 'json',
                    success: function (response) {
                        handleResponse(response);
                    }
                });
        });
    });
    $('[data-action="upgrade_gold"]').click(function (e) {
        e.preventDefault();
        swal({
            title: "",
            text: lang_pack.confirm_upgrade,
            showCancelButton: true,
            cancelButtonText: lang_pack.close,
            confirmButtonText: lang_pack.confirm_upgrade,
            closeOnConfirm: false,
        }, function (isConfirm) {
            if (isConfirm)
                $.ajax({
                    url: '/api/upgrade_gold',
                    type: "POST",
                    dataType: 'json',
                    success: function (response) {
                        handleResponse(response);
                    }
                });
        });
    });
    $('#session-notification').click(function () {
        $.ajax({
            url: '/api/notification_viewed',
            type: "POST",
            data: {data: $('.btn-notification').parent().find('.dropdown-menu a[data-value]').map(function () {
                    return {key: this.dataset.type_id + '-' + this.dataset.value};
                }).get()},
            success: function (response) {
            }
        });
    });
    if ($('#frmSearchSidebar').length) {
        $('body').delegate('#frmSearchSidebar .country', 'click', function () {
            loadingInit();
            setTimeout(function () {
                $('#frmSearchSidebar').submit();
            }, 500);
        });
    }
    if ($("#keyword_booth").length)
        $("#keyword_booth").autocomplete({
            source: function (request, response) {
                var type = $('[name="type"]').val() || 4;
                var keyword = $("#keyword_booth").val();
                $.ajax({
                    url: "/api/autocomplete_booth",
                    method: 'POST',
                    data: {
                        type: type,
                        booth: $('[name="booth"]').val(),
                        keyword: keyword
                    },
                    success: function (data) {
                        response(data);
                    }
                });
            },
            minLength: 2
        });
    jQuery('#searchGo').click(function () {
        if (!$('#keyword_booth').val().length)
            $('#keyword_booth').focus();
        else
            location.href = (location.href.replace(/\?{0,}\%keyword=[^\&]{0,}/gm, '') + '&keyword=' + $('#keyword_booth').val().replace(/ /gm, '+')).replace(/\.html\&/gm, '.html?&');
    });
});
