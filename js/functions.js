//jQuery(document).ready(function() {

//	var widgetOffset = jQuery(".sidewidget").offset().top;
	
//	jQuery(window).scroll(function() {
//		var scrollPos = jQuery(window).scrollTop();

//		if (scrollPos >= widgetOffset) {
//			jQuery(".sidewidget").addClass("offset-by-four fixed");
//		} else {
//			jQuery(".sidewidget").removeClass("offset-by-four fixed");
//		}

//	});

//	});



  $(document).ready(function() {
     
      $("#owl-demo").owlCarousel({
     
          autoPlay: 7000,
          navigation : false, // Show next and prev buttons
          slideSpeed : 300,
          paginationSpeed : 400,
          singleItem:true
     
          // "singleItem:true" is a shortcut for:
          // items : 1, 
          // itemsDesktop : false,
          // itemsDesktopSmall : false,
          // itemsTablet: false,
          // itemsMobile : false
     
      });

      // Responsive Navigation Menu 

        jQuery(".menu-trigger").click(function() {

            jQuery(".hidden-nav").slideToggle();

        });

    });


 $(document).ready(function() {

     var res = jQuery(window).width();
     //jQuery(".status").html(res);

       if (res < 1236) {
       
      jQuery(".bits").addClass("eleven");
      jQuery(".bits").removeClass("three");
      
     } else if (res > 1236) {
     
      jQuery(".bits").addClass("three");
      jQuery(".bits").removeClass("eleven");
     
      
     }

  jQuery(window).resize(function() {

     var res = jQuery(window).width();

     if (res < 1236) {
      jQuery(".bits").addClass("eleven");
      jQuery(".bits").removeClass("three");
     } else if (res > 1236) {
      jQuery(".bits").addClass("three");
      jQuery(".bits").removeClass("eleven");
     }

  });



  });
