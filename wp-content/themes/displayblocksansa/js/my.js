(function($) {

    // Menu rotate

    $('.menu-toggle').click(function() {
      $( this ).toggleClass( "rotate" );
    });

    $(document).ready(function () {
        initTopButton();
    });

    function initTopButton() {
        var $ = jQuery;
        $("#back-top").hide();
        $(function () {
            $(window).scroll(function () {
                if ($(this).scrollTop() > 100) {
                    $('#back-top').fadeIn();
                } else {
                    $('#back-top').fadeOut();
                }
            });
            $('#back-top a').click(function () {
                $('body,html').animate({
                    scrollTop: 0
                }, 800);
                return false;
            });
        });
    }


var headerView = function () {
    var scroll = $(window).scrollTop();
    if (scroll <= 115) {
        $("body").removeClass("compact");
    } else {
        $("body").addClass("compact");
    }
}
headerView();
$(window).scroll(function () {
    headerView();
});


$(".entry-title a,.entry-title,.detail h3,span.company").each(function() {
  var wordArray = $(this).text().split(" ");
  if (wordArray.length > 1) {
    wordArray[wordArray.length-2] += "&nbsp;" + wordArray[wordArray.length-1];
    wordArray.pop();
    $(this).html(wordArray.join(" "));
  }
});


    $(document).ready(function () {
        $("#fadeIn").addClass("animated fadeInDown");
    });

    $("#emailItems li").each(function() {

        $(".email-design-main").hover(function() {
        $(this).find(".caption").addClass("active-item");
      }, function() {
        $(this).find(".caption").removeClass("active-item");
      }
    );

    });

// Equal height columns
equalheight = function(container){

var currentTallest = 0,
     currentRowStart = 0,
     rowDivs = new Array(),
     $el,
     topPosition = 0;
 $(container).each(function() {

   $el = $(this);
   $($el).height('auto')
   topPostion = $el.position().top;

   if (currentRowStart != topPostion) {
     for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
       rowDivs[currentDiv].height(currentTallest);
     }
     rowDivs.length = 0; // empty the array
     currentRowStart = topPostion;
     currentTallest = $el.height();
     rowDivs.push($el);
   } else {
     rowDivs.push($el);
     currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
  }
   for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
     rowDivs[currentDiv].height(currentTallest);
   }
 });
}

$(window).load(function() {
  equalheight('.pricing section, .price-module, .how-module, .testimonial-module');
});


$(window).resize(function(){
  equalheight('.pricing section, .price-module, .how-module, .testimonial-module');
});

$('p').each(function() {
    var $this = $(this);
    if($this.html().replace(/\s|&nbsp;/g, '').length == 0)
        $this.remove();
});



$('#emailItems').magnificPopup({
  delegate: 'a', // child items selector, by clicking on it popup will open
  type: 'image'
  // other options
});



$('.BlogPopUp').magnificPopup({
  // child items selector, by clicking on it popup will open
  type: 'image'
  // other options
});



// Load slider

$(window).load(function() {
  // When the page has loaded
  $(".hero").fadeIn(2000);
});






$(window).load(function() {
  setTimeout(
    function()
    {
      $( "#siteNotification" ).addClass( "animated fadeOutUp", function() {
          // Animation complete.
        });
      $( "#content" ).addClass( "compacted", function() {
          // Animation complete.
        });

    }, 5000);
});


$( "notificationHover" )
  .mouseenter(function() {
    $( this ).addClass( "there");
  })
  .mouseleave(function() {
    $( this ).addClass( "animated fadeOutUp");
  });


$( "#clickme" ).click(function() {

});


//


})(jQuery);

