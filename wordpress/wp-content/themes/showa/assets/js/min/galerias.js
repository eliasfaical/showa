(function($) {
  // Banner Home
  // -----------------------------------------------------------------
  // if ($('.slide_home').length > 0) {
  //   $('.slide_home').slick({
  //     dots: true,
  //     loop: true,
  //     infinite: true,
  //     speed: 300,
  //     slidesToShow: 1,
  //     adaptiveHeight: true,
  //     autoplay: true,
  //     autoplaySpeed: 6000,
  //   });
  // }

  // Slide Áreas comuns
  // -----------------------------------------------------------------
  // if ($('.galeria_areascomuns').length > 0) {
  //   $('.galeria_areascomuns').slick({
  //     slidesToShow: 1,
  //     slidesToScroll: 1,
  //     arrows: true,
  //     slidesToShow: 1,
  //     asNavFor: '.nav_areascomuns'
  //   });
  // }

  // if ($('.nav_areascomuns').length > 0) {
  //   $('.nav_areascomuns').slick({
  //     slidesToShow: 6,
  //     slidesToScroll: 1,
  //     asNavFor: '.galeria_areascomuns',
  //     dots: false,
  //     arrows: false,
  //     centerMode: false,
  //     focusOnSelect: true,
  //     responsive: [
  //       {
  //         breakpoint: 1200,
  //         settings: {
  //           slidesToShow: 4,
  //         }
  //       }, 
  //       {
  //         breakpoint: 768,
  //         settings: {
  //           slidesToShow: 3
  //         }
  //       }
  //     ]
  //   });
  // }

  // Slide Áreas privativa
  // -----------------------------------------------------------------
  if ($('.galeria_privativa').length > 0) {
    $('.galeria_privativa').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true,
      slidesToShow: 1,
      asNavFor: '.nav_privativa'
    });
  }

  if ($('.nav_privativa').length > 0) {
    $('.nav_privativa').slick({
      slidesToShow: 6,
      slidesToScroll: 1,
      asNavFor: '.galeria_privativa',
      dots: false,
      arrows: false,
      centerMode: false,
      focusOnSelect: true,
      responsive: [
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 4,
          }
        }, 
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 3
          }
        }
      ]
    });
  }

  // Slide Plantas
  // -----------------------------------------------------------------
  if ($('.galeria_plantas').length > 0) {
    $('.galeria_plantas').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true,
      slidesToShow: 1,
      asNavFor: '.nav_plantas'
    });
  }

  if ($('.nav_plantas').length > 0) {
    $('.nav_plantas').slick({
      slidesToShow: 6,
      slidesToScroll: 1,
      asNavFor: '.galeria_plantas',
      dots: false,
      arrows: false,
      centerMode: false,
      focusOnSelect: true,
      responsive: [
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 4,
          }
        }, 
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 3
          }
        }
      ]
    });
  }

  // Slide localizacao
  // -----------------------------------------------------------------
  if ($('.galeria_localizacao').length > 0) {
    $('.galeria_localizacao').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true,
      slidesToShow: 1,
      asNavFor: '.nav_localizacao'
    });
  }

  if ($('.nav_localizacao').length > 0) {
    $('.nav_localizacao').slick({
      slidesToShow: 6,
      slidesToScroll: 1,
      asNavFor: '.galeria_localizacao',
      dots: false,
      arrows: false,
      centerMode: false,
      focusOnSelect: true,
      responsive: [
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 4,
          }
        }, 
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 3
          }
        }
      ]
    });
  }

})(jQuery);
