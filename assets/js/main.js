(function ($) {
	"use strict";

    jQuery(document).ready(function($){


		$(".searchIcon").click(function(){
			$(".searchBar").addClass("showSearch")
		})

		$(".remove").click(function(){
			$(".searchBar").removeClass("showSearch")
		})



       
 /*---------- menu js start---------*/  
     $('.stellarnav').stellarNav({
		theme: 'dark',
		breakpoint: 660,
		position: 'static',
		phoneBtn: false,
		locationBtn: false,
		sticky:false,
		showArrows:true,
		openingSpeed: 500,
		closingDelay: 500,
               
    });
        
        window.onscroll = function() {myFunction()};

			var header = document.getElementById("myHeader");
			var sticky = header.offsetTop;

			function myFunction() {
			  if (window.pageYOffset > sticky) {
			    header.classList.add("sticky");
			  } else {
			    header.classList.remove("sticky");
			  }
			}
        
/*---------- menu js End---------*/  


	
        
   $(".itpolly_led_active").owlCarousel({
    		loop:true,
    		dots:true,
    		nav:true,
            margin:20,
    	    autoplay:true,
            smartSpeed: 1000,
            autoplayTimeout:5000,
            navText:["<i Class='las la-angle-left'></i>", 
          			"<i Class='las la-angle-right'></i>"],
    		responsiveClass: true,
			responsive: {
			  0: {
				items: 1,
			  },
			  480: {
				items: 1,
			  },
			  768: {
				items: 1,
			  },
			  1000: {
				items:1,
			  }
			}

    	});
        
                   

        
   
		$(".photoSlider-active").owlCarousel({
    		loop:true,
    		dots:true,
    		nav:true,
    	    autoplay:true,
            smartSpeed: 1000,
            autoplayTimeout:5000,
            navText:["<i Class='las la-angle-left'></i>", 
          			"<i Class='las la-angle-right'></i>"],
    		responsiveClass: true,
			responsive: {
			  0: {
				items: 1,
			  },
			  480: {
				items: 1,
			  },
			  768: {
				items: 1,
			  },
			  1000: {
				items:1,
			  }
			}

		});
	
        
   
		$(".secFour-slider").owlCarousel({
    		loop:true,
    		dots:true,
    		nav:false,
			margin:10,
    	    autoplay:true,
            smartSpeed: 1000,
            autoplayTimeout:5000,
            navText:["<i Class='las la-angle-left'></i>", 
          			"<i Class='las la-angle-right'></i>"],
    		responsiveClass: true,
			responsive: {
			  0: {
				items: 1,
			  },
			  480: {
				items: 2,
			  },
			  768: {
				items: 3,
			  },
			  1000: {
				items:4,
			  }
			}

		});
	


$('.homeGallery').owlCarousel({
	loop:false,
	margin:10,
	items:1,
	nav:true,
	dots:false,
	autoplay:true,
	smartSpeed: 1000,
	autoplayTimeout:5000,
	navText:["<i Class='las la-angle-left'></i>", 
			"<i Class='las la-angle-right'></i>"],

  });


  $('.homeGallery1').owlCarousel({
	loop:true,
	margin:10,
	nav:false,
	items:6,
	dots:true,
	center: true,
	autoplay:true,
	smartSpeed: 1000,
	autoplayTimeout:5000,
	responsiveClass: true,
	responsive: {
	  0: {
		items: 3,
	  },
	  480: {
		items: 3,
	  },
	  768: {
		items: 4,
	  },
	  1000: {
		items:6,
	  }
	}
	
  });



  $('.themeGallery').magnificPopup({
	type: 'image',
mainClass: 'mfp-with-zoom', 
gallery:{
			enabled:true
		},

zoom: {
	enabled: true, 

	duration: 500, // duration of the effect, in milliseconds
	easing: 'ease-in-out', // CSS transition easing function

	opener: function(openerElement) {

	return openerElement.is('img') ? openerElement : openerElement.find('img');
}
}

});
                

       $("img.lazyload").lazyload();
        
	   $( "#wordpress" ).datepicker({ dateFormat: "yymmdd",       changeMonth: true,
	   changeYear: true });
 

 
        $('.popup').magnificPopup({
            type: 'iframe'
          });
      
     // Modal js start *******
	 $('.modal-live').magnificPopup({
		type:'inline',
		closeBtnInside:true,
		autoFocusLast: true,
		focus:".modal-titles",
	  });

        
        
        $(window).scroll(function(){
		        if ($(this).scrollTop() > 100) {
		            $('.scrollToTop').fadeIn();
		        } else {
		            $('.scrollToTop').fadeOut();
		        }
		    });

		    //Click event to scroll to top
		    $('.scrollToTop').on('click', function(){
		        $('html, body').animate({scrollTop : 0},800);
		        return false;
		    });
        
//        

    });



jQuery('select[name="bd_division"]').on('change', function () {
    var sel_div = jQuery(this).val();
    jQuery('select[name="bd_district"] option').css('display', 'none');
    jQuery('select[name="bd_district"]').val('');
    jQuery('select[name="bd_thana"]').val('');

    jQuery('select[name="bd_district"] .dist-' + sel_div).css('display', 'block');
});

jQuery('select[name="bd_district"]').on('change', function () {
    var sel_div = jQuery(this).val();
    jQuery('select[name="bd_thana"] option').css('display', 'none');
    jQuery('select[name="bd_thana"]').val('');

    jQuery('select[name="bd_thana"] .thana-' + sel_div).css('display', 'block');
});

jQuery('.dist_news_srch').on('click', function () {
    var div_data = '',
        dist_data = '';
    if (jQuery('select[name="bd_division"] option:selected').attr('data-val'))
        div_data = jQuery('select[name="bd_division"] option:selected').attr('data-val');

    if (jQuery('select[name="bd_district"] option:selected').attr('data-val'))
        dist_data = jQuery('select[name="bd_district"] option:selected').attr('data-val');

    var thana_data = jQuery('select[name="bd_thana"]').val();

    if (div_data == '') {
        alert('please select the division first');
        jQuery('select[name="bd_division"]').focus();
        return false;
    }

    URL = div_data;
    if (dist_data != '') URL = dist_data;
    if (thana_data != '') URL = thana_data;
    window.location.href = URL;

    return false;
});




}(jQuery));	