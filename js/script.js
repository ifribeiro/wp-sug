var $carousel = $('.carousel.produtos');
  // bind event listener first
  $carousel.on('ready.flickity', function() {
    $('<div id="esquerda"></div>').insertAfter(".flickity-prev-next-button.previous");
    $('<div id="direita"></div>').insertAfter(".flickity-prev-next-button.next");
  });
  
  $carousel.flickity();
  
$(document).ready(function(){
  $('.nav-item').on('click', function(){
    if($(window).width() <= 991){
        $('.navbar-toggler').click();
    } 
    
  });
 

  $('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top - 100
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {            
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });

  $(function(){
		var carouselEl = $('.carousel');
    var carouselItems = carouselEl.find('.carousel-item');
    var qntSlides = carouselItems.length;
    $("#qntSlides").text(qntSlides);
		carouselEl.carousel({ interval: 2000}).on('slid.bs.carousel', function (event) {
      var slideAtual = carouselItems.siblings('.active').index()+1;
			$("#slideAtual").text(slideAtual);
		})
  })
  
  var scrollTop = 0;
  $(window).scroll(function(){
    scrollTop = $(window).scrollTop();
     $('.counter').html(scrollTop);
    
    if (scrollTop >= 50) {
      $('#ul-navbar').addClass('scrolled-nav');
      $('#container-maior').addClass('bg-white')
    } else if (scrollTop < 50) {
      $('#ul-navbar').removeClass('scrolled-nav');
      $('#container-maior').removeClass('bg-white')
    } 
    
  }); 
});






  