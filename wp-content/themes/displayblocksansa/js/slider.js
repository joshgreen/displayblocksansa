

(function($) {
    // Inside of this function, $() will work as an alias for jQuery()
    // and other libraries also using $ will not be accessible under this shortcut


    // Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    slideshowSpeed: 10000,
    initDelay: 12000,
    pauseOnHover: true,
    controlsContainer: $(".custom-controls-container"),
    customDirectionNav: $(".custom-navigation a")
  });
});
})(jQuery);