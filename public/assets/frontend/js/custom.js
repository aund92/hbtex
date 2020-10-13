function loadSaleProduct(){
    $('.best-seller-pro-active').owlCarousel({
        loop: false,
        nav: true,
        dots: false,
        smartSpeed: 1500,
        navText: ["<i class='lnr lnr-arrow-left'></i>", "<i class='lnr lnr-arrow-right'></i>"],
        margin: 10,
        responsive: {
            0: {
                items: 1,
                autoplay: true,
                smartSpeed: 500
            },
            450: {
                items: 2
            },
            768: {
                items: 3
            },
            992: {
                items: 4
            },
            1200: {
                items: 6
            }
        }
    })
    $('.best-seller-pro-active img').lazyload();
}
function loadBuyProduct(){
    $('.buy-product').owlCarousel({
        loop: false,
        nav: true,
        dots: false,
        smartSpeed: 1500,
        navText: ["<i class='lnr lnr-arrow-left'></i>", "<i class='lnr lnr-arrow-right'></i>"],
        margin: 10,
        responsive: {
            0: {
                items: 1,
                autoplay: true,
                smartSpeed: 500
            },
            450: {
                items: 2
            },
            768: {
                items: 3
            },
            992: {
                items: 4
            },
            1200: {
                items: 4
            }
        }
    })
    $('.buy-product img').lazyload();
}
// function loadSupplier(){
//     $('.suplier')
//         .on('changed.owl.carousel initialized.owl.carousel', function (event) {
//             $(event.target)
//                 .find('.owl-item').removeClass('last')
//                 .eq(event.item.index + event.page.size - 1).addClass('last');
//         }).owlCarousel({
//             loop: false,
//             nav: true,
//             dots: false,
//             smartSpeed: 1000,
//             navText: ["<i class='lnr lnr-arrow-left'></i>", "<i class='lnr lnr-arrow-right'></i>"],
//             margin: 10,
//             responsive: {
//                 0: {
//                     items: 1,
//                     autoplay: true,
//                     smartSpeed: 500
//                 },
//                 768: {
//                     items: 3
//                 },
//                 992: {
//                     items: 3
//                 },
//                 1200: {
//                     items: 3
//                 }
//             }
//         })
//     $('.suplier img').lazyload();
// }
function loadProductCateFilter(){
    $('[data-ajax][data-template="tplProductCateFilter"].scroll').each(function(){
        if ($(this).find('label').length > 10 || $(this).hasClass('always-scroll')){
            $(this).slimScroll({
                height: '350px'
            });
        }
    });
}
function loadProductRegionFilter(){
    $('[data-ajax][data-template="tplProductRegionFilter"].scroll').each(function(){
        if ($(this).find('label').length > 10 || $(this).hasClass('always-scroll')){
            $(this).slimScroll({
                height: '350px'
            });
        }
    });
}
function loadProductMemberTypeFilter(){
    $('[data-ajax][data-template="tplProductMemberTypeFilter"].scroll').each(function(){
        if ($(this).find('label').length > 10 || $(this).hasClass('always-scroll')){
            $(this).slimScroll({
                height: '350px'
            });
        }
    });
}
function loadProductMadeFilter(){
    $('[data-ajax][data-template="tplProductMadeFilter"].scroll').each(function(){
        if ($(this).find('label').length > 10 || $(this).hasClass('always-scroll')){
            $(this).slimScroll({
                height: '350px'
            });
        }
    });
}
function loadSupplierCateFilter(){
    $('[data-ajax][data-template="tplSupplierCateFilter"].scroll').each(function(){
        if ($(this).find('label').length > 10 || $(this).hasClass('always-scroll')){
            $(this).slimScroll({
                height: '350px'
            });
        }
    });
}
function loadSupplierMemberTypeFilter(){
    $('[data-ajax][data-template="tplSupplierMemberTypeFilter"].scroll').each(function(){
        if ($(this).find('label').length > 10 || $(this).hasClass('always-scroll')){
            $(this).slimScroll({
                height: '350px'
            });
        }
    });
}
function loadSupplierProvinceFilter(){
    $('[data-ajax][data-template="tplSupplierProvinceFilter"].scroll').each(function(){
        if ($(this).find('label').length > 10 || $(this).hasClass('always-scroll')){
            $(this).slimScroll({
                height: '350px'
            });
        }
    });
}
$(document).ready(function () {
    loadBuyProduct();
    if ($('[data-ajax][data-template="tplSaleProduct"]').length){
        $.ajax({
            url: '/api/get-sale-product',
            method: 'GET',
            success: function (response) {
                var src_template = $('[data-ajax][data-template="tplSaleProduct"] .template-hidden')[0].outerHTML;
                var html = '';
                for(var i=0;i<response.length;i++){
                    var template = src_template;
                    template = template.replace(/template-hidden hidden/gm,'template');
                    template = template.replace(/\[ID\]/gm,response[i].id);
                    template = template.replace(/\[IMAGE\]/gm,response[i].image);
                    template = template.replace(/\[NAME\]/gm,response[i].name);
                    template = template.replace(/\[URL\_SUPPLIER\]/gm,response[i].url_supplier);
                    template = template.replace(/\[URL\]/gm,response[i].url);
                    template = template.replace(/\[ALIAS\]/gm,response[i].alias);
                    template = template.replace(/\[MADE\_FLAG\]/gm,response[i].made_flag);
                    template = template.replace(/\[MADE\_NAME\]/gm,response[i].made_name);
                    template = template.replace(/\[COMPANY\_ALIAS\]/gm,response[i].company_alias);
                    template = template.replace(/\[COMPANY\_NAME\]/gm,response[i].company_name);
                    template = template.replace(/\[CONTACT\_NAME\]/gm,response[i].contact_name);
                    template = template.replace(/\[PRICE\]/gm,response[i].price);
                    html += template;
                }
                $('[data-ajax][data-template="tplSaleProduct"]').html(html);
                loadSaleProduct();
            }
        });
    }
//    if ($('[data-ajax][data-template="tplBuyProduct"]').length){
//        $.ajax({
//            url: '/api/get-buy-product',
//            method: 'GET',
//            success: function (response) {
//                var src_template = $('[data-ajax][data-template="tplBuyProduct"] .template-hidden')[0].outerHTML;
//                var html = '';
//                for(var i=0;i<response.length;i++){
//                    var template = src_template;
//                    template = template.replace(/template-hidden hidden/gm,'template');
//                    template = template.replace(/\[ID\]/gm,response[i].id);
//                    template = template.replace(/\[IMAGE\]/gm,response[i].image);
//                    template = template.replace(/\[NAME\]/gm,response[i].name);
//                    template = template.replace(/\[URL\_SUPPLIER\]/gm,response[i].url_supplier);
//                    template = template.replace(/\[URL\]/gm,response[i].url);
//                    template = template.replace(/\[ALIAS\]/gm,response[i].alias);
//                    template = template.replace(/\[MADE\_FLAG\]/gm,response[i].made_flag);
//                    template = template.replace(/\[MADE\_NAME\]/gm,response[i].made_name);
//                    template = template.replace(/\[COMPANY\_ALIAS\]/gm,response[i].company_alias);
//                    template = template.replace(/\[COMPANY\_NAME\]/gm,response[i].company_name);
//                    template = template.replace(/\[CONTACT\_NAME\]/gm,response[i].contact_name);
//                    html += template;
//                }
//                $('[data-ajax][data-template="tplBuyProduct"]').html(html);
//                loadBuyProduct();
//            }
//        });
//    }
//     if ($('[data-ajax][data-template="tplSupplier"]').length){
//         $.ajax({
//             url: '/api/get-supplier',
//             method: 'GET',
//             success: function (response) {
//                 var src_template = $('[data-ajax][data-template="tplSupplier"] .template-hidden')[0].outerHTML;
//                 var html = '';
//                 for(var i=0;i<response.length;i++){
//                     if (i%2===0) html += '<div class="double-product">';
//                     console.log(response[i]);
//                     var template = src_template;
//                     template = template.replace(/template-hidden hidden/gm,'template');
//                     template = template.replace(/\[GOLD_RENDER\]/gm,response[i].gold_render);
//                     template = template.replace(/\[ID\]/gm,response[i].id);
//                     template = template.replace(/\[COMPANY_NAME\]/gm,response[i].company_name);
//                     template = template.replace(/\[COMPANY_LOGO\]/gm,response[i].company_logo);
//                     template = template.replace(/\[URL\]/gm,response[i].url);
//                     html += template;
//                     if (i%2===1) html += '</div>';
//                 }
//                 $('[data-ajax][data-template="tplSupplier"]').html(html);
//                 // loadSupplier();
//             }
//         });
//     }
//     if ($('[data-ajax][data-template="tplProductCateFilter"]').length){
//         $.ajax({
//             url: '/api/get-product-cate-filter',
//             method: 'GET',
//             success: function (response) {
//                 var src_template = $('[data-ajax][data-template="tplProductCateFilter"]').parent().find('.template-hidden')[0].outerHTML;
//                 var src_child_template = $('[data-ajax][data-template="tplProductCateFilter"]').parent().find('.template-child-hidden')[0].outerHTML;
//                 var html = '';
//                 for(var i=0;i<response.length;i++){
//                     var template = src_template;
//                     template = template.replace(/template-hidden hidden/gm,'template');
//                     template = template.replace(/\[ID\]/gm,response[i].id);
//                     var found = false;
//                     var temp_loc = location.href+'&';
//                     temp_loc.split('&').map(function(item){
//                         if (!found && (item+'&').indexOf('category_arr%5B%5D='+response[i].id+'&') >=0) found = true;
//                     })
//                     template = template.replace(/\[checked\_render\]/gm,found ? 'checked="checked"' : '');
//                     template = template.replace(/\[COUNT_FORMAT\]/gm,response[i].count.toLocaleString());
//                     template = template.replace(/\[HAS_SUB\]/gm,response[i].children && response[i].children.length ? 'true' : 'false');
//                     template = template.replace(/\[COUNT\]/gm,response[i].count);
//                     template = template.replace(/\[NAME\]/gm,response[i].name);
//                         var html_children = '';
//                         if (response[i].children){
//                             html_children += '<ul>';
//                             var rendered  = [];
//                             for(var j in response[i].children){
//                                 rendered.push(response[i].children[j]);
//                             }
//                             for(var j=0;j<rendered.length;j++){
//                                 var child_template = src_child_template;
//                                 child_template = child_template.replace(/template-child-hidden hidden/gm,'template-child');
//                                 found = false;
//                                 var temp_loc = location.href+'&';
//                                 temp_loc.split('&').map(function(item){
//                                     if (!found && (item+'&').indexOf('category_arr%5B%5D='+rendered[j].id+'&') >=0) found = true;
//                                 })
//                                 child_template = child_template.replace(/\[checked\_render\]/gm,found ? 'checked="checked"' : '');
//                                 child_template = child_template.replace(/\[ID\]/gm,rendered[j].id);
//                                 child_template = child_template.replace(/\[COUNT_FORMAT\]/gm,rendered[j].count.toLocaleString());
//                                 child_template = child_template.replace(/\[COUNT\]/gm,rendered[j].count);
//                                 child_template = child_template.replace(/\[NAME\]/gm,rendered[j].name);
//                                 html_children += child_template;
//                             }
//                             html_children += '</ul>';
//                         }
//                     template = template.replace(/\[CHILDREN_RENDER\]/gm,html_children);
//                     html += template;
//                 }
//                 $('[data-ajax][data-template="tplProductCateFilter"]').html(html);
//                 loadProductCateFilter();
//             }
//         });
//     }
//     if ($('[data-ajax][data-template="tplProductRegionFilter"]').length){
//         $.ajax({
//             url: '/api/get-product-region-filter',
//             method: 'GET',
//             success: function (response) {
//                 var src_template = $('[data-ajax][data-template="tplProductRegionFilter"]').parent().find('.template-hidden')[0].outerHTML;
//                 var src_child_template = $('[data-ajax][data-template="tplProductRegionFilter"]').parent().find('.template-child-hidden')[0].outerHTML;
//                 var html = '';
//                 for(var i=0;i<response.length;i++){
//                     var template = src_template;
//                     template = template.replace(/template-hidden hidden/gm,'template');
//                     var found = false;
//                     var temp_loc = location.href+'&';
//                     temp_loc.split('&').map(function(item){
//                         if (!found && (item+'&').indexOf('province_arr%5B%5D='+response[i].id+'&') >=0) found = true;
//                     })
//                     template = template.replace(/\[checked\_render\]/gm,found ? 'checked="checked"' : '');
//                     template = template.replace(/\[ID\]/gm,response[i].id);
//                     template = template.replace(/\[COUNT_FORMAT\]/gm,response[i].count.toLocaleString());
//                     template = template.replace(/\[HAS_SUB\]/gm,response[i].children && response[i].children.length ? 'true' : 'false');
//                     template = template.replace(/\[COUNT\]/gm,response[i].count);
//                     template = template.replace(/\[NAME\]/gm,response[i].name);
//                         var html_children = '';
//                         if (response[i].children){
//                             html_children += '<ul>';
//                             var rendered  = [];
//                             for(var j in response[i].children){
//                                 rendered.push(response[i].children[j]);
//                             }
//                             for(var j=0;j<rendered.length;j++){
//                                 var child_template = src_child_template;
//                                 child_template = child_template.replace(/template-child-hidden hidden/gm,'template-child');
//                                 found = false;
//                                 var temp_loc = location.href+'&';
//                                 temp_loc.split('&').map(function(item){
//                                     if (!found && (item+'&').indexOf('province_arr%5B%5D='+rendered[j].id+'&') >=0) found = true;
//                                 })
//                                 child_template = child_template.replace(/\[checked\_render\]/gm,found ? 'checked="checked"' : '');
//                                 child_template = child_template.replace(/\[ID\]/gm,rendered[j].id);
//                                 child_template = child_template.replace(/\[COUNT_FORMAT\]/gm,rendered[j].count.toLocaleString());
//                                 child_template = child_template.replace(/\[COUNT\]/gm,rendered[j].count);
//                                 child_template = child_template.replace(/\[NAME\]/gm,rendered[j].name);
//                                 html_children += child_template;
//                             }
//                             html_children += '</ul>';
//                         }
//                     template = template.replace(/\[CHILDREN_RENDER\]/gm,html_children);
//                     html += template;
//                 }
//                 $('[data-ajax][data-template="tplProductRegionFilter"]').html(html);
//                 loadProductRegionFilter();
//             }
//         });
//     }
//     if ($('[data-ajax][data-template="tplProductMemberTypeFilter"]').length){
//         $.ajax({
//             url: '/api/get-product-member-type-filter',
//             method: 'GET',
//             success: function (response) {
//                 var src_template = $('[data-ajax][data-template="tplProductMemberTypeFilter"').parent().find('.template-hidden')[0].outerHTML;
//                 var html = '';
//                 for(var i=0;i<response.length;i++){
//                     var template = src_template;
//                     var found = false;
//                     var temp_loc = location.href+'&';
//                     temp_loc.split('&').map(function(item){
//                         if (!found && (item+'&').indexOf('member_type_arr%5B%5D='+response[i].id+'&') >=0) found = true;
//                     })
//                     template = template.replace(/template-hidden hidden/gm,'template');
//                     template = template.replace(/\[ID\]/gm,response[i].id);
//                     template = template.replace(/\[checked_render\]/gm,found ? 'checked="checked"' : '');
//                     template = template.replace(/\[COUNT_FORMAT\]/gm,response[i].count.toLocaleString());
//                     template = template.replace(/\[COUNT\]/gm,response[i].count);
//                     template = template.replace(/\[NAME\]/gm,response[i].name);
//                     html += template;
//                 }
//                 $('[data-ajax][data-template="tplProductMemberTypeFilter"]').html(html);
//                 loadProductMemberTypeFilter();
//             }
//         });
//     }
//     if ($('[data-ajax][data-template="tplProductMadeFilter"]').length){
//         $.ajax({
//             url: '/api/get-product-made-filter',
//             method: 'GET',
//             success: function (response) {
//                 var src_template = $('[data-ajax][data-template="tplProductMadeFilter"').parent().find('.template-hidden')[0].outerHTML;
//                 var html = '';
//                 for(var i=0;i<response.length;i++){
//                     if (!response[i].count) continue;
//                     var template = src_template;
//                     template = template.replace(/template-hidden hidden/gm,'template');
//                     var found = false;
//                     var temp_loc = location.href+'&';
//                     temp_loc.split('&').map(function(item){
//                         if (!found && (item+'&').indexOf('made_arr%5B%5D='+response[i].id+'&') >=0) found = true;
//                     })
//                     template = template.replace(/\[ID\]/gm,response[i].id);
//                     template = template.replace(/\[checked_render\]/gm,found ? 'checked="checked"' : '');
//                     template = template.replace(/\[COUNT_FORMAT\]/gm,response[i].count.toLocaleString());
//                     template = template.replace(/\[COUNT\]/gm,response[i].count);
//                     template = template.replace(/\[NAME\]/gm,response[i].name);
//                     html += template;
//                 }
//                 $('[data-ajax][data-template="tplProductMadeFilter"]').html(html);
//                 loadProductMadeFilter();
//             }
//         });
//     }
    if ($('[data-ajax][data-template="tplSupplierCateFilter"]').length){
        $.ajax({
            url: '/api/get-supplier-cate-filter',
            method: 'GET',
            success: function (response) {
                var src_template = $('[data-ajax][data-template="tplSupplierCateFilter"]').parent().find('.template-hidden')[0].outerHTML;
                var html = '';
                for(var i=0;i<response.length;i++){
                    var template = src_template;
                    template = template.replace(/template-hidden hidden/gm,'template');
                    template = template.replace(/\[ID\]/gm,response[i].id);
                    var found = false;
                    var temp_loc = location.href+'&';
                    temp_loc.split('&').map(function(item){
                        if (!found && (item+'&').indexOf('category_arr%5B%5D='+response[i].id+'&') >=0) found = true;
                    })
                    template = template.replace(/\[checked\_render\]/gm,found ? 'checked="checked"' : '');
                    template = template.replace(/\[COUNT_FORMAT\]/gm,response[i].count.toLocaleString());
                    template = template.replace(/\[COUNT\]/gm,response[i].count);
                    template = template.replace(/\[NAME\]/gm,response[i].name);
                    html += template;
                }
                $('[data-ajax][data-template="tplSupplierCateFilter"]').html(html);
                loadSupplierCateFilter();
            }
        });
    }
//     if ($('[data-ajax][data-template="tplSupplierMemberTypeFilter"]').length){
//         $.ajax({
//             url: '/api/get-supplier-member-type-filter',
//             method: 'GET',
//             success: function (response) {
//                 var src_template = $('[data-ajax][data-template="tplSupplierMemberTypeFilter"]').parent().find('.template-hidden')[0].outerHTML;
//                 var html = '';
//                 for(var i=0;i<response.length;i++){
//                     var template = src_template;
//                     template = template.replace(/template-hidden hidden/gm,'template');
//                     template = template.replace(/\[ID\]/gm,response[i].id);
//                     var found = false;
//                     var temp_loc = location.href+'&';
//                     temp_loc.split('&').map(function(item){
//                         if (!found && (item+'&').indexOf('member_type_arr%5B%5D='+response[i].id+'&') >=0) found = true;
//                     })
//                     template = template.replace(/\[checked\_render\]/gm,found ? 'checked="checked"' : '');
//                     template = template.replace(/\[COUNT_FORMAT\]/gm,response[i].count.toLocaleString());
//                     template = template.replace(/\[COUNT\]/gm,response[i].count);
//                     template = template.replace(/\[NAME\]/gm,response[i].name);
//                     html += template;
//                 }
//                 $('[data-ajax][data-template="tplSupplierMemberTypeFilter"]').html(html);
//                 loadSupplierMemberTypeFilter();
//             }
//         });
//     }
//     if ($('[data-ajax][data-template="tplSupplierProvinceFilter"]').length){
//         $.ajax({
//             url: '/api/get-supplier-province-filter',
//             method: 'GET',
//             success: function (response) {
//                 var src_template = $('[data-ajax][data-template="tplSupplierProvinceFilter"]').parent().find('.template-hidden')[0].outerHTML;
//                 var src_child_template = $('[data-ajax][data-template="tplSupplierProvinceFilter"]').parent().find('.template-child-hidden')[0].outerHTML;
//                 var html = '';
//                 for(var i=0;i<response.length;i++){
//                     var template = src_template;
//                     template = template.replace(/template-hidden hidden/gm,'template');
//                     var found = false;
//                     var temp_loc = location.href+'&';
//                     temp_loc.split('&').map(function(item){
//                         if (!found && (item+'&').indexOf('province_arr%5B%5D='+response[i].id+'&') >=0) found = true;
//                     })
//                     template = template.replace(/\[checked\_render\]/gm,found ? 'checked="checked"' : '');
//                     template = template.replace(/\[ID\]/gm,response[i].id);
//                     template = template.replace(/\[COUNT_FORMAT\]/gm,response[i].count.toLocaleString());
//                     template = template.replace(/\[HAS_SUB\]/gm,response[i].children && response[i].children.length ? 'true' : 'false');
//                     template = template.replace(/\[COUNT\]/gm,response[i].count);
//                     template = template.replace(/\[NAME\]/gm,response[i].name);
//                         var html_children = '';
//                         if (response[i].children){
//                             html_children += '<ul>';
//                             var rendered  = [];
//                             for(var j in response[i].children){
//                                 rendered.push(response[i].children[j]);
//                             }
//                             for(var j=0;j<rendered.length;j++){
//                                 var child_template = src_child_template;
//                                 child_template = child_template.replace(/template-child-hidden hidden/gm,'template-child');
//                                 found = false;
//                                 var temp_loc = location.href+'&';
//                                 temp_loc.split('&').map(function(item){
//                                     if (!found && (item+'&').indexOf('province_arr%5B%5D='+rendered[j].id+'&') >=0) found = true;
//                                 })
//                                 child_template = child_template.replace(/\[checked\_render\]/gm,found ? 'checked="checked"' : '');
//                                 child_template = child_template.replace(/\[ID\]/gm,rendered[j].id);
//                                 child_template = child_template.replace(/\[COUNT_FORMAT\]/gm,rendered[j].count.toLocaleString());
//                                 child_template = child_template.replace(/\[COUNT\]/gm,rendered[j].count);
//                                 child_template = child_template.replace(/\[NAME\]/gm,rendered[j].name);
//                                 html_children += child_template;
//                             }
//                             html_children += '</ul>';
//                         }
//                     template = template.replace(/\[CHILDREN_RENDER\]/gm,html_children);
//                     html += template;
//                 }
//                 $('[data-ajax][data-template="tplSupplierProvinceFilter"]').html(html);
//                 loadSupplierProvinceFilter();
//             }
//         });
//     }
    $('body').delegate('#add-cart','click',function(){
        var id = $(this).data('id');
        var parent = $(this).parent();
        parent.preloader();
        $.ajax({
            url: '/api/add-cart',
            method: 'POST',
            data: {id: id},
            success: function (response) {
                if (response.error === false) {
                    parent.preloader('remove');
                    $('.total-pro').html(response.count);
                    handleResponse(response);
                    $('.sweet-alert .lead').html($('.sweet-alert .lead').text());
                }
            }
        });
    })
    function totalPrice() {
        var sum = 0;
        var price = 0;
        var quantity = 0;
        $('.quantity').each(function () {
            price = $(this).data('price');
            quantity = $(this).val();
            sum = sum + price * quantity;
        });
        sum = parseInt(sum).toLocaleString();
        $('.total-price').html(sum);

    }
    totalPrice();
    $('.quantity').change(function () {
        totalPrice();
    });
//    Search
    $("#searchTag").autocomplete({
        source: function (request, response) {
            var type = $('[name="poscats"]').val();
            var keyword = $("#searchTag").val();
            $.ajax({
                url: "/api/autocomplete",
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
    $('.filter-menu').click(function () {
        $(this).parent().find('aside').slideToggle();
    });

});
