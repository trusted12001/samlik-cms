jQuery(function($) {
  "use strict";
////////////////////////////////////////////////////////
///////////////preloader ///////////////////////////
////////////////////////////////////////////////////////

jQuery(window).load(function() { // makes sure the whole site is loaded
			jQuery('#status').fadeOut(); // will first fade out the loading animation
			jQuery('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
			jQuery('body').delay(350).css({'overflow':'visible'});
	});

////////////////////////////////////////////////////////
///////////////dropdown//////////////
////////////////////////////////////////////////////////

    jQuery(".dropdown").hover(            
            function() {
                jQuery('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
                jQuery(this).toggleClass('open');
                jQuery('b', this).toggleClass("caret caret-up");                
            },
            function() {
                jQuery('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
                jQuery(this).toggleClass('open');
                jQuery('b', this).toggleClass("caret caret-up");                
            });

////////////////////////////////////////////////////////
///////////////on scroll animation effects//////////////
////////////////////////////////////////////////////////


		new WOW().init();


////////////////////////////////////////////////////////
///////////////sticky//////////////
////////////////////////////////////////////////////////
		jQuery("#sticker").sticky({topSpacing:0});


////////////////////////////////////////////////////////
///////////////Parallax effects/////////////////////////
////////////////////////////////////////////////////////


jQuery('div.bgParallax').each(function(){
	var $obj = $(this);

	jQuery(window).scroll(function() {
		var yPos = -(jQuery(window).scrollTop() / $obj.data('speed')); 

		var bgpos = '50% '+ yPos + 'px';

		$obj.css('background-position', bgpos );
 
	}); 
});						


////////////////////////////////////////////////////////
///////////////back to top ///////////////////////////
////////////////////////////////////////////////////////



				var offset = 220;
				var duration = 500;
				jQuery(window).scroll(function() {
					if (jQuery(this).scrollTop() > offset) {
						jQuery('.back-to-top').fadeIn(duration);
					} else {
						jQuery('.back-to-top').fadeOut(duration);
					}
				});
				
				jQuery('.back-to-top').click(function(event) {
					event.preventDefault();
					jQuery('html, body').animate({scrollTop: 0}, duration);
					return false;
			});

//ISOTOPE FUNCTION - FILTER PORTFOLIO FUNCTION
	jQuery(window).load(function(){
		var $portfolio;
		var $portfolio_selectors;
		
		$portfolio = jQuery('.projects-items');
		$portfolio.isotope({
			itemSelector : 'li',
			layoutMode : 'fitRows'
		});
		$portfolio_selectors = jQuery('.projects-filter >li>a');
		$portfolio_selectors.on('click', function(){
			$portfolio_selectors.removeClass('active');
			jQuery(this).addClass('active');
			var selector = jQuery(this).attr('data-filter');
			$portfolio.isotope({ filter: selector });
			return false;
		});
	});

////////////////////////////////////////////////////////
///////////////gallery owl-carousel ///////////////////////////
////////////////////////////////////////////////////////

  jQuery("#client-carousel").owlCarousel({
 
    autoPlay: 6000, //Set AutoPlay to 3 seconds
 	pagination: false,
    items : 4,
    itemsDesktop : [1199,4],
    itemsDesktopSmall : [979,3],
 	navigation: true,
	  navigationText: [
      "<i class='fa fa-angle-left'></i>",
      "<i class='fa fa-angle-right'></i>"
      ]
  });
 
  jQuery("#twitter-carousel").owlCarousel({
  //Set AutoPlay to 3 seconds
 	pagination: false,
    singleItem:true,
 	navigation: true,
	  navigationText: [
      "<i class='fa fa-angle-left'></i>",
      "<i class='fa fa-angle-right'></i>"
      ]
  });

////////////////////////////////////////////////////////
///////////////prettyPhoto///////////////////////////
////////////////////////////////////////////////////////

jQuery("a.preview").prettyPhoto({
		social_tools: false
	});
	
////////////////////////////////////////////////////////
///////////////contact form ///////////////////////////
////////////////////////////////////////////////////////

jQuery("#contact-form").validate({
         ignore: ":hidden",
         rules: {
             yourname:{
                minlength: 2,
                maxlength: 30,
                required: true
            },
            email:{
                minlength: 2,
                required: true
            },
			
			message:{
                minlength: 3,
                maxlength: 300,
                required: true
            }
         },
		 submitHandler: function (form) {
            
             jQuery.ajax({
                 type: "POST",
                 url: "sendemail.php",
                 data: jQuery("#contact-form").serialize(),
					error:function(){
						//alert('asdasdasd');
						console.log('Some thing went wrong! :D');
						},
                 		success:function(data) {
						//alert(data);
						if(data=='fail'){
							jQuery('#errormessage').html("<label for='captcha_code' class='error'>Security Code was incorrect.</label>");
						}else{
							jQuery('.reg-form').html("<div id='message'></div>");
							 jQuery('#message').html("<h2> Thanks for Submitting your Message!</h2>")
								 .hide()
								 .fadeIn(1500, function (data) {
								 jQuery('#message').append("");
							 });
						}
                     
                 }
             });
             return false; // required to block normal submit since you used ajax
         }
     });
	});