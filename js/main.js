$(function(){

	$("#btn_menu").click(function(){
		$(".menu").slideToggle();
	});




	$(".b1-carousel").owlCarousel({
        singleItem: true,
        navigation: false,
        pagination: true,
        navigationText: false,
        lazyLoad: false,
        autoPlay: 3000,
        stopOnHover: true,
        rewindNav: true,
 	});
	
	$(".b3_carousel").owlCarousel({
        items: 3,
        itemsDesktop: [1199,3],
        itemsDesktopSmall: [979,2],
        itemsTablet: [768,1],
        navigation: true,
        pagination: false,
        navigationText: false,
 });
	$(".b4_carousel").owlCarousel({
        items: 3,
        itemsDesktop: [1199,3],
        itemsDesktopSmall: [979,2],
        itemsTablet: [768,1],
        navigation: true,
        pagination: false,
        navigationText: false,
 });

	$(".b5_carousel").owlCarousel({
        items: 3,
        itemsDesktop: [1199,3],
        itemsDesktopSmall: [979,2],
        itemsTablet: [768,1],
        navigation: true,
        pagination: false,
        navigationText: false,
 });
        
        $(".box_1_carousel").owlCarousel({
        items: 3,
        itemsDesktop: [1199,3],
        itemsDesktopSmall: [979,2],
        itemsTablet: [768,1],
        navigation: true,
        pagination: false,
        navigationText: false,
 });
	$(".box_2_carousel").owlCarousel({
        items: 3,
        itemsDesktop: [1199,3],
        itemsDesktopSmall: [979,2],
        itemsTablet: [768,1],
        navigation: true,
        pagination: false,
        navigationText: false,
 });
        $(".box_3_carousel").owlCarousel({
        items: 3,
        itemsDesktop: [1199,3],
        itemsDesktopSmall: [979,2],
        itemsTablet: [768,1],
        navigation: true,
        pagination: false,
        navigationText: false,
 });
	$(".box_4_carousel").owlCarousel({
        items: 3,
        itemsDesktop: [1199,3],
        itemsDesktopSmall: [979,2],
        itemsTablet: [768,1],
        navigation: true,
        pagination: false,
        navigationText: false,
 });
	$(".box_5_carousel").owlCarousel({
        items: 3,
        itemsDesktop: [1199,3],
        itemsDesktopSmall: [979,2],
        itemsTablet: [768,1],
        navigation: true,
        pagination: false,
        navigationText: false,
 });

        $(".box_6_carousel").owlCarousel({
        items: 3,
        itemsDesktop: [1199,3],
        itemsDesktopSmall: [979,2],
        itemsTablet: [768,1],
        navigation: true,
        pagination: false,
        navigationText: false,
 });
 
  $(".box_7_carousel").owlCarousel({
        items: 3,
        itemsDesktop: [1199,3],
        itemsDesktopSmall: [979,2],
        itemsTablet: [768,1],
        navigation: true,
        pagination: false,
        navigationText: false,
 });

  $('#blocktrackbar').trackbar({
                onMove : function(){
                    document.getElementById("start-price").value = this.leftValue;
                    document.getElementById("end-price").value = this.rightValue;
                },
                width : 160,
                leftLimit : 100,
                leftValue : 100,
                rightLimit : 2000,
                rightValue : 1500,
                roundUp : 100
        });

});