jQuery(function(){
    if ($('.big-banner-box').length){
        setInterval(function(){
            $('.big-banner-box').each(function(){
                if (this.style.display==="none") $(this).slideDown();
                else $(this).slideUp();
            });
        },5000);
    }
    $.ajax({
        url: "/api/add_stat",
        method: 'POST',
        success: function (data) {
        }
    });
    if ($('.datetimepicker').length){
        $('.datetimepicker').datetimepicker({
          format:'d/m/Y',
          inline:false,
          timepicker:false,
        });
        if ($('.list-buy-product .datetimepicker').length){
            $('.list-buy-product .datetimepicker').on('change',function(){
                //if (this.name=="end_date")
                    $(this).parents('form').submit();
            });
        }
    }
    $('img').lazyload();
    $('body').delegate('[data-action="remind_event"],[data-action="unremind_event"]','click',function(e){
        e.preventDefault();
        remindEvent(this.dataset);
    });
//    $('[data-action="remind_event"],[data-action="unremind_event"]').click(function(e){
//        remindEvent(this.dataset);
//    });
    $('[data-action="more"]').click(function(){
        if (this.dataset.object && this.dataset.object == 'notification'){
            $.ajax({
                url: "/api/more",
                method: 'POST',
                data: this.dataset,
                success: function (data) {
                    if (data.html) $('[data-action="more"][data-return="'+data.object+'"]').append(data.html);
                    if (data.end) $('[data-action="more"][data-object="'+data.object+'"]').remove();
                }
            });
        }
    });
    if ($('.tags-input').length) {
        $('.tags-input').tagsinput({
            tagClass: function (item) {
                return 'label bg-success';
            },
            delimiter: '|',
            //maxTags: 5
        });
    }
    if ($('.select-search').length) {
        $('.select-search').select2({width:"100%"});
    }
    if ($('#home-slider').length && $('.all-departments').length){
        $('.all-departments').addClass('open');
    }
    $('[data-toggle="tooltip"]').tooltip();
    if ($('[data-action="select"]').length) {
        $('[data-action="select"]').each(function () {
            if ($(this).val()){
                $.ajax({
                    url: '/api/options',
                    data: {selected: this.value, object: this.dataset.child, required: this.dataset.required ? 1 : 0, select: this.dataset.select},
                    method: 'POST',
                    dataType: 'json',
                    success: function (response) {
                        $('[data-child-return="' + response.object + '"]').html(response.html);
                        if (response.select&&$('[data-child-return="' + response.object + '"]').find('option[value="'+response.select+'"]').length){
                            $('[data-child-return="' + response.object + '"]').val(response.select);
                        }
                        $('[data-child-return="' + response.object + '"]').select2({width:"100%"});
                    }
                });
            }
            $(this).on('change', function () {
                $.ajax({
                    url: '/api/options',
                    data: {selected: this.value, object: this.dataset.child, required: this.dataset.required ? 1 : 0, select: this.dataset.select},
                    method: 'POST',
                    dataType: 'json',
                    success: function (response) {
                        $('[data-child-return="' + response.object + '"]').html(response.html);
                        $('[data-child-return="' + response.object + '"]').select2({width:"100%"});
                    }
                });
            });
        });
    }
});
