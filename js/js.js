cut_text = (function (){
	var maintel = $('.mu_first_phone');
	var arr = maintel.text().split(')');
	var span1 = $('<span>').addClass('mu_header_text1').text(arr[0] + ')');
	var span2 = $('<span>').addClass('mu_header_text2').text(arr[1]);

	maintel.html('');
	maintel.append(span1)
	.append(span2);

	var maintel2 = $('.mu_second_phone');
	var arr2 = maintel2.text().split(')');
	var span3 = $('<span>').addClass('mu_header_text1').text(arr2[0] + ')');
	var span4 = $('<span>').addClass('mu_header_text2').text(arr2[1]);

	maintel2.html('');
	maintel2.append(span3)
	.append(span4);
});

cut_text2 = (function (){
	var maintel = $('.mu_first_phone2');
	var arr = maintel.text().split(')');
	var span1 = $('<span>').addClass('mu_header_text1').text(arr[0] + ')');
	var span2 = $('<span>').addClass('mu_header_text2').text(arr[1]);

	maintel.html('');
	maintel.append(span1)
	.append(span2);

	var maintel2 = $('.mu_second_phone2');
	var arr2 = maintel2.text().split(')');
	var span3 = $('<span>').addClass('mu_header_text1').text(arr2[0] + ')');
	var span4 = $('<span>').addClass('mu_header_text2').text(arr2[1]);

	maintel2.html('');
	maintel2.append(span3)
	.append(span4);
});

cut_text3 = (function (){
	var maintel = $('.mu_first_phone_popub');
	var arr = maintel.text().split(')');
	var span1 = $('<span>').addClass('mu_popub_text1').text(arr[0] + ')');
	var span2 = $('<span>').addClass('mu_popub_text2').text(arr[1]);

	maintel.html('');
	maintel.append(span1)
	.append(span2);

	var maintel2 = $('.mu_second_phone_popub');
	var arr2 = maintel2.text().split(')');
	var span3 = $('<span>').addClass('mu_popub_text1').text(arr2[0] + ')');
	var span4 = $('<span>').addClass('mu_popub_text2').text(arr2[1]);

	maintel2.html('');
	maintel2.append(span3)
	.append(span4);
});
cut_text4 = (function (){
	var maintel = [];
	var maintel_count = $('.mu_first_phone_map').length;
	 for (m = 0; m < maintel_count; m++) {
	 	maintel[m] = $('.mu_first_phone_map').eq(m);
	 	var arr = maintel[m].text().split(')');
		var span1 = $('<span>').addClass('mu_map_text1').text(arr[0] + ')');
		var span2 = $('<span>').addClass('mu_map_text2').text(arr[1]);
		maintel[m].html('');
		maintel[m].append(span1).append(span2);
	 }
	 var maintel2 = [];
	var maintel_count2 = $('.mu_second_phone_map').length;
	 for (m = 0; m < maintel_count2; m++) {
	 	maintel2[m] = $('.mu_second_phone_map').eq(m);
	 	var arr2= maintel2[m].text().split(')');
		var span3 = $('<span>').addClass('mu_map_text1').text(arr2[0] + ')');
		var span4 = $('<span>').addClass('mu_map_text2').text(arr2[1]);
		maintel2[m].html('');
		maintel2[m].append(span3).append(span4);
	 }

});

$(document).ready(function(){
	
	cut_text();
	cut_text2();
	cut_text3();
	cut_text4();

	$('.mu_main_slider').slick({
        lazyLoad: 'ondemand',
        slidesToShow: 7,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 5000,
        prevArrow: '<a href="#" class="mu_arrow_prev1"><img src="/wp-content/themes/go2study/images/button-left.png"></a>',
        nextArrow: '<a href="#" class="mu_arrow_next1"><img src="/wp-content/themes/go2study/images/button.png"></a>',
    });

    $('.mu_select_1').SumoSelect();
    $('.mu_select_2').SumoSelect();


	$( ".mu_cont_col span").on( "click", function() {
		var a = $(this).parent().find('.mu_map_hide');
		var b = $(this).parent().parent().parent();
		var c = $(this).parent().find('.mu_cont_col');
		if (a.hasClass('active')) {
			a.removeClass('active');
			b.removeClass('active');
			c.removeClass('active');
		}	
		else{
			$('.mu_cont-wrapp').removeClass('active');
			$('.mu_map_hide').removeClass('active');
			$('.mu_cont_col').removeClass('active');
			a.addClass('active');
			b.addClass('active');
			c.addClass('active');
		}
	});

	$( ".mu_consult_popub").on( "click", function() {
		$('.mu_popub1_wrapper').removeClass('mu_hide');
	});

	$( ".mu_popub_close").on( "click", function() {
		$('.mu_popub1_wrapper').addClass('mu_hide');
	});
	$( ".mu_popub_close2").on( "click", function() {
		$('.mu_popub2_wrapper').addClass('mu_hide');
	});
	$('.mu_about_slider').slick({
        lazyLoad: 'ondemand',
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 5000,
        prevArrow: '<a href="#" class="mu_arrow_prev2"><img src="/wp-content/themes/go2study/images/button-left1.png"></a>',
        nextArrow: '<a href="#" class="mu_arrow_next2"><img src="/wp-content/themes/go2study/images/button1.png"></a>',
    });

    $('.mu-tab-list li a').click(function () {
        $('.mu-tab-list li a').removeClass('active');
        $(this).addClass('active');
	    $(this).closest('.mu-tab-wrap').find('.mu-tab-cont').addClass('mu-hidden');
	    $(this).parent().siblings().removeClass('mu-active');
	    var id = $(this).attr('href');
	    $(id).removeClass('mu-hidden');
	    $(this).parent().addClass('mu-active');
	    return false;
	});


    $('select.SlectBox').on('sumo:closed', function(sumo) {
    	window.location.replace($('select.SlectBox option:selected').val());
	});

	$( "#search_triger" ).click(function() {
	  $( "#search_form" ).submit();
	});


	if (typeof (setSity) === "function") setSity();

});
