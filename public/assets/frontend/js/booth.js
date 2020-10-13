$(document).ready(function () {
    $('#modal-send-contact-supplier-at-booth').on('show.bs.modal', function (e) {
        dataset = $('a[href="#modal-send-contact-supplier-at-booth"]');
        $('#modal-send-contact-supplier-at-booth .modal-title a').text(dataset.data('company_name'));
        $('#modal-send-contact-supplier-at-booth .modal-title a').attr('href', dataset.data('url'));
        $('#modal-send-contact-supplier-at-booth [data-field="id"]').val(dataset.data('id'));
    });
    $('[data-action="send-contact-supplier-at-booth"]').click(function (e) {
        event.preventDefault();
        $.ajax({
            url: '/api/send_message_contact_supplier',
            method: 'POST',
            data: new FormData($('#form-send-contact-supplier-at-booth')[0]),
            processData: false, contentType: false,
            success: function (response) {
                if (typeof (response) === "undefined")
                    return;
                alert(response.message);
                if (response.success === true) {
                    $('#modal-send-contact-supplier-at-booth').modal('hide');
                }
            }
        });
    });
    var bodyWidth = $('body').width();
    var containerWidth = $('.container').width();
    var position = (bodyWidth + containerWidth) / 2 + 10;
    if ($('.img-left').length) {
        $('.img-left').css('right', position);
    }
    if ($('.img-right').length) {
        $('.img-right').css('left', position);
    }
    $('#modal-send-contact-supplier').on('show.bs.modal', function (e) {
        if (e.relatedTarget) {
            dataset = e.relatedTarget.dataset;
            for (var p in dataset) {
                if ($('#modal-send-contact-supplier [data-field="' + p + '"].hidden').length) {
                    if (dataset[p].length)
                        $('#modal-send-contact-supplier [data-field="' + p + '"].hidden').removeClass('hidden');
                }
                if ($('[data-field="' + p + '"]').length) {
                    if (p == 'company_name' || p == 'contact_name')
                        $('[data-field="' + p + '"]').attr('href', dataset.url);
                    if ($('#modal-send-contact-supplier [data-field="' + p + '"]').length && $('#modal-send-contact-supplier [data-field="' + p + '"]')[0].nodeName === 'INPUT')
                        $('#modal-send-contact-supplier [data-field="' + p + '"]').val(dataset[p]);
                    else
                        $('#modal-send-contact-supplier [data-field="' + p + '"]').text(dataset[p]);
                }
            }
        }
    });
    $('[data-action="send-contact-supplier"]').click(function (e) {
        event.preventDefault();
        $.ajax({
            url: '/api/send_message_contact_supplier',
            method: 'POST',
            data: new FormData($('#form-send-contact-supplier')[0]),
            processData: false, contentType: false,
            success: function (response) {
                if (typeof (response) === "undefined")
                    return;
                alert(response.message);
                if (response.success === true) {
                    $('#modal-send-contact-supplier').modal('hide');
                }
            }
        });
    });
})

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
    // Can also be used with $(document).ready()
    $(window).load(function() {
        $('.flexslider').flexslider({
            animation: "slide",
            controlNav: "thumbnails"
        });
    });
});
