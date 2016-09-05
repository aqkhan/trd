/**
 * Created with JetBrains PhpStorm.
 * User: Rashid Ali
 * Date: 8/22/16
 * Time: 3:13 PM
 * To change this template use File | Settings | File Templates.
 */

// ajax js
$(document).ready(function(){

    //main category ajax
    $(document).on('input','#main-categories', function(){
       // var id = $(this).val();
        var data = {
            'action': 'get_child_parent'
           // 'id': id
        };
        $.post(ajaxurl, data, function(response) {
            $('#sub-categories').html(response);
        });
    });

    // sub-category ajax
    $('#sub-categories').on('keyup', function(e){
        e.preventDefault();
        var cat_id = $(this).val();
        var data = {
            'action': 'house_posts',
            'cat_id': cat_id
        };
        $.post(ajaxurl, data, function(response) {
            $('.singal-house-detail').html(response);
        });
    });

    // ACF values  js
    $(document).on('click','#post-submit', function(e){
        e.preventDefault();
        var all_data = [];
        var living = $('#living-room').val();
        var houses_price = $('#houses-price').val();
        var id = $('.post-id').val();
        var kitchen = $('#kitchen').val();
        var hall = $('#hall').val();
        var dinning = $('#dinning-room').val();
        var guest = $('#guest-room').val();
        var wash = $('#wash-room').val();
        var store = $('#store').val();
        var laundry = $('#laundry-room').val();
        var servant = $("input[name*='servant']:checked").val();
        var gallery = $("input[name*='gallery']:checked").val();
        var basement= $("input[name*='basement']:checked").val();
        var study = $("input[name*='study']:checked").val();
        var work = $("input[name*='work']:checked").val();
        var swimming = $("input[name*='swimming']:checked").val();
        var sun = $("input[name*='sun']:checked").val();
        var library = $("input[name*='library']:checked").val();
        var garden = $("input[name*='garden']:checked").val();
        var garage = $("input[name*='garage']:checked").val();
        var furnished = $("input[name*='furnished']:checked").val();
        var rent = $("input[name*='rent']:checked").val();
        var data = {
            'action': 'post_submit',
            'living': living,
            'kitchen': kitchen,
            'laundry': laundry,
            'hall': hall,
            'dinning': dinning,
            'guest': guest,
            'houses_price': houses_price,
            'wash': wash,
            'store': store,
            'servant': servant,
            'gallery': gallery,
            'basement': basement,
            'study': study,
            'work': work,
            'swimming': swimming,
            'library': library,
            'garden': garden,
            'garage': garage,
            'furnished': furnished,
            'rent': rent,
            'id' : id
        };
        $.post(ajaxurl, data, function(response) {
            alert('post submitted');
            console.log(response);
        });
    });

    // search ajax
    $(document).on('slidechange, change, click',".price-detail, .rom-change, .house-check, #search-btn", function(){
        var search_id = $('#fltr-search').val();
       // var slider_range = $('#amount').val();
        var rom_check = $("input[name*='rom-check']:checked").val();
        var house_check = $("input[name*='house-check']:checked").val();
        var price_detail = $("input[name*='price-detail']:checked").val();
        var data = {
            'action': 'search_posts',
            'rom_check': rom_check,
            'search_id': search_id,
            'house_check': house_check,
            'price_detail': price_detail

        };
        $.post(ajaxurl, data, function(response) {
            $('.filter-posts').html(response);
        });
    });

    // price range
    $( function() {
        $( "#slider-range" ).slider({
            range: true,
            min: 0,
            max: 10000,
            values: [ 0, 10000 ],
            slide: function( event, ui ) {
                $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
            }
        });
        $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
            " - $" + $( "#slider-range" ).slider( "values", 1 ) );
    } );


//    function f () {
//        $(".rom-change").prop("checked", !$(".rom-change").is(":checked"));
//    }
//    setInterval(f, 1000);

});