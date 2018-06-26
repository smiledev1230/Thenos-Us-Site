// offcanvas menu 
$(document).ready(function () {
  
  //  Fix First Click Menu /
  $(document.body).on('click', '.megamenu [data-toggle="dropdown"], .verticalmenu [data-toggle="dropdown"]' ,function(){
        if(!$(this).parent().hasClass('open') && this.href && this.href != '#'){
            window.location.href = this.href;
        }
    });
  // Currency
  $('.currency .currency-select').on('click', function(e) {
    e.preventDefault();

    $('.currency input[name=\'code\']').attr('value', $(this).attr('data-name'));

    $('.currency').submit();
  });
  // Search
  $('#search input[name=\'search\']').parent().find('button').on('click', function() {
    url = $('base').attr('href') + 'index.php?route=product/search';
    var value = $('#search input[name=\'search\']').val();
    if (value) {
      url += '&search=' + encodeURIComponent(value);
    }
    location = url;
  });
  $('#search input[name=\'search\']').on('keydown', function(e) {
    if (e.keyCode == 13) {
      $('#search input[name=\'search\']').parent().find('button').trigger('click');
    }
  });

    // Search offcanvas
  $('#offcanvas-search input[name=\'search\']').parent().find('button').on('click', function() {
    url = $('base').attr('href') + 'index.php?route=product/search';
    var value = $('#offcanvas-search input[name=\'search\']').val();
    if (value) {
      url += '&search=' + encodeURIComponent(value);
    }
    location = url;
  });
  $('#offcanvas-search input[name=\'search\']').on('keydown', function(e) {
    if (e.keyCode == 13) {
      $('#offcanvas-search input[name=\'search\']').parent().find('button').trigger('click');
    }
  });

  $('[data-toggle="offcanvas"]').click(function () {
    $('.row-offcanvas').toggleClass('active')
  });

});

$(document).ready(function() {
    $('.product-zoom').magnificPopup({
          type: 'image',
          closeOnContentClick: true,
 
          image: {
            verticalFit: true
          }
    });

      $('.iframe-link').magnificPopup({
      type:'iframe'
    });
});


$(document).ready(function(){

    $('.dropdown-menu input').click(function(e) {
        e.stopPropagation();
    });

    // grid list switcher
    $("a.switcher").bind("click", function(e){
        e.preventDefault();
        var theid = $(this).attr("id");
        var row = $("#products");

        if($(this).hasClass("active")) {
            return false;
        } else {
            if(theid == "list-view"){
                $('#list-view').addClass("active");
                $('#grid-view').removeClass("active");

                // remove class list
                row.removeClass('product-grid');
                // add class gird
                row.addClass('product-list');
                
            }else if(theid =="grid-view"){
                $('#grid-view').addClass("active");
                $('#list-view').removeClass("active");

                // remove class list
                row.removeClass('product-list');
                // add class gird
                row.addClass('product-grid');

            }
        }
    });


    $(".quantity-adder .add-action").click( function(){
        if( $(this).hasClass('add-up') ) {  
            $("[name=quantity]",'.quantity-adder').val( parseInt($("[name=quantity]",'.quantity-adder').val()) + 1 );
        }else {
            if( parseInt($("[name=quantity]",'.quantity-adder').val())  > 1 ) {
                $("input",'.quantity-adder').val( parseInt($("[name=quantity]",'.quantity-adder').val()) - 1 );
            }
        }
    } );


    /****/
    $(document).ready(function() {
        $('.popup-with-form').magnificPopup({
              type: 'inline',
              preloader: false,
              focus: '#input-name',

              // When elemened is focused, some mobile browsers in some cases zoom in
              // It looks not nice, so we disable it:
              callbacks: {
                beforeOpen: function() {
                  if($(window).width() < 700) {
                    this.st.focus = false;
                  } else {
                    this.st.focus = '#input-name';
                  }
                }
              }
        });
    });

    
});

// Cart add remove functions
var cart = {
  'addcart': function(product_id, quantity) {
    $.ajax({
      url: 'index.php?route=checkout/cart/add',
      type: 'post',
      data: 'product_id=' + product_id + '&quantity=' + (typeof(quantity) != 'undefined' ? quantity : 1),
      dataType: 'json',
      success: function(json) {
        $('.alert, .text-danger').remove();

        if (json['redirect']) {
          location = json['redirect'];
        }

        if (json['success']) {
          $('#notification').html('<div class="alert alert-success"><i class="fa fa-check-circle"></i> ' + json['success'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');

          $('#cart-total').html(json['total']);

          $('html, body').animate({ scrollTop: 0 }, 'slow');

          $('#cart > ul').load('index.php?route=common/cart/info ul li');
        }
      }
    });
  },
  'update': function(key, quantity) {
    $.ajax({
      url: 'index.php?route=checkout/cart/edit',
      type: 'post',
      data: 'key=' + key + '&quantity=' + (typeof(quantity) != 'undefined' ? quantity : 1),
      dataType: 'json',
      beforeSend: function() {
        $('#cart > button').button('loading');
      },
      success: function(json) {
        $('#cart > button').button('reset');

        $('#cart-total').html(json['total']);

        if (getURLVar('route') == 'checkout/cart' || getURLVar('route') == 'checkout/checkout') {
          location = 'index.php?route=checkout/cart';
        } else {
          $('#cart > ul').load('index.php?route=common/cart/info ul li');
        }
      }
    });
  },
  'remove': function(key) {
    $.ajax({
      url: 'index.php?route=checkout/cart/remove',
      type: 'post',
      data: 'key=' + key,
      dataType: 'json',
      beforeSend: function() {
        $('#cart > button').button('loading');
      },
      success: function(json) {
        $('#cart > button').button('reset');

        $('#cart-total').html(json['total']);

        if (getURLVar('route') == 'checkout/cart' || getURLVar('route') == 'checkout/checkout') {
          location = 'index.php?route=checkout/cart';
        } else {
          $('#cart > ul').load('index.php?route=common/cart/info ul li');
        }
      }
    });
  }
}

var wishlist = {
  'addwishlist': function(product_id) {
    $.ajax({
      url: 'index.php?route=account/wishlist/add',
      type: 'post',
      data: 'product_id=' + product_id,
      dataType: 'json',
      success: function(json) {
        $('.alert').remove();

        if (json['success']) {
          $('#notification').html('<div class="alert alert-success"><i class="fa fa-check-circle"></i> ' + json['success'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');
        }

        if (json['info']) {
          $('#notification').html('<div class="alert alert-info"><i class="fa fa-info-circle"></i> ' + json['info'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');
        }

        $('#wishlist-total').html(json['total']);

        $('html, body').animate({ scrollTop: 0 }, 'slow');
      }
    });
  },
  'remove': function() {

  }
}

var compare = {
  'addcompare': function(product_id) {
    $.ajax({
      url: 'index.php?route=product/compare/add',
      type: 'post',
      data: 'product_id=' + product_id,
      dataType: 'json',
      success: function(json) {
        $('.alert').remove();

        if (json['success']) {
          $('#notification').html('<div class="alert alert-success"><i class="fa fa-check-circle"></i> ' + json['success'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');

          $('#compare-total').html(json['total']);

          $('html, body').animate({ scrollTop: 0 }, 'slow');
        }
      }
    });
  },
  'remove': function() {

  }
}
$(document).ready(function() {

//fix search popup
  $('.btn-group.search-focus').bind('click',function(e) {
        if($(this).hasClass('active')){
            $('.nav-search').removeClass('open');
            $(this).removeClass('active');
        }else{
            $(this).addClass('active');
            $('.nav-search').addClass('open');
            $('.nav-search .input-group input[type="text"]').focus();
        }
    });

    $('.nav-search .button-close').bind('click',function(e){
        if($('.btn-group.search-focus').hasClass('active')){
            $('.nav-search').removeClass('open');
            $('.btn-group.search-focus').removeClass('active');
        }
    });
  
});
//auto scroll category 
$(function () {
    if($('.page-category .sidebar .box.category.auto-scroll').length){
        var $sidebar = $(".box.category"),
            $window = $(window),
            offset = $sidebar.offset(),
            topPadding = 75;
        $window.scroll(function () {
            if ($window.scrollTop() > offset.top) {
                if ($window.scrollTop() < ($("footer").offset().top  - $sidebar.height() - topPadding )) {
                    $sidebar.stop().animate({
                        top: $window.scrollTop() - offset.top + topPadding
                    }, 1000);
                } 
            } else {
                $sidebar.stop().animate({
                    top: 0
                });
            }
        });
    }    
});

//Sticky Menu
$(document).ready(function() {
    var _menu_action = $('.main-menu').offset().top;
    var _is_menu_action = $('.main-menu').hasClass('no-fixed');
    var _enable_menu_fixed = $('body').hasClass('main-menu-fixed');

    var OC_Menu_Fixed = function(){
        "use strict";
        if(_enable_menu_fixed){

            var $mainmenu = $('.main-menu');
            if(!_is_menu_action){
                if( $(document).scrollTop() > _menu_action ){
                    $mainmenu.addClass('menu_fixed');
                }else{
                    $mainmenu.removeClass('menu_fixed');
                }
            }
        }
    }
    $(window).scroll(function(event) {
        OC_Menu_Fixed();
    });

   
});

