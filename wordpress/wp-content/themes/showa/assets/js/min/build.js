"use strict";

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

(function ($) {
  // Banner Home
  // -----------------------------------------------------------------
  if ($('.slide_home').length > 0) {
    $('.slide_home').slick({
      dots: true,
      loop: true,
      infinite: true,
      speed: 300,
      slidesToShow: 1,
      adaptiveHeight: true,
      autoplay: true,
      autoplaySpeed: 6000
    });
  } // Slide Áreas comuns
  // -----------------------------------------------------------------


  if ($('.galeria_areascomuns').length > 0) {
    var _$$slick;

    $('.galeria_areascomuns').slick((_$$slick = {
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true
    }, _defineProperty(_$$slick, "slidesToShow", 1), _defineProperty(_$$slick, "asNavFor", '.nav_areascomuns'), _$$slick));
  }

  if ($('.nav_areascomuns').length > 0) {
    $('.nav_areascomuns').slick({
      slidesToShow: 6,
      slidesToScroll: 1,
      asNavFor: '.galeria_areascomuns',
      dots: false,
      arrows: false,
      centerMode: false,
      focusOnSelect: true,
      responsive: [{
        breakpoint: 1200,
        settings: {
          slidesToShow: 4
        }
      }, {
        breakpoint: 768,
        settings: {
          slidesToShow: 3
        }
      }]
    });
  } // Slide Áreas privativa
  // -----------------------------------------------------------------


  if ($('.galeria_privativa').length > 0) {
    var _$$slick2;

    $('.galeria_privativa').slick((_$$slick2 = {
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true
    }, _defineProperty(_$$slick2, "slidesToShow", 1), _defineProperty(_$$slick2, "asNavFor", '.nav_privativa'), _$$slick2));
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
      responsive: [{
        breakpoint: 1200,
        settings: {
          slidesToShow: 4
        }
      }, {
        breakpoint: 768,
        settings: {
          slidesToShow: 3
        }
      }]
    });
  } // Slide Plantas
  // -----------------------------------------------------------------


  if ($('.galeria_plantas').length > 0) {
    var _$$slick3;

    $('.galeria_plantas').slick((_$$slick3 = {
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true
    }, _defineProperty(_$$slick3, "slidesToShow", 1), _defineProperty(_$$slick3, "asNavFor", '.nav_plantas'), _$$slick3));
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
      responsive: [{
        breakpoint: 1200,
        settings: {
          slidesToShow: 4
        }
      }, {
        breakpoint: 768,
        settings: {
          slidesToShow: 3
        }
      }]
    });
  } // Slide localizacao
  // -----------------------------------------------------------------


  if ($('.galeria_localizacao').length > 0) {
    var _$$slick4;

    $('.galeria_localizacao').slick((_$$slick4 = {
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true
    }, _defineProperty(_$$slick4, "slidesToShow", 1), _defineProperty(_$$slick4, "asNavFor", '.nav_localizacao'), _$$slick4));
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
      responsive: [{
        breakpoint: 1200,
        settings: {
          slidesToShow: 4
        }
      }, {
        breakpoint: 768,
        settings: {
          slidesToShow: 3
        }
      }]
    });
  }
})(jQuery);
"use strict";

(function ($) {
  // Animation
  // -------------------------------------------------------------------------
  ScrollReveal().reveal('.animateTop', {
    delay: 500,
    duration: 600,
    distance: '50px',
    origin: 'bottom',
    opacity: 0,
    interval: 100
  });
  ScrollReveal().reveal('.animateDown', {
    delay: 500,
    duration: 600,
    distance: '50px',
    origin: 'top',
    opacity: 0,
    interval: 100
  }); // Scroll Top
  // -------------------------------------------------------------------------

  $(window).on('scroll', function () {
    if ($(this).scrollTop() > 150) {
      $('.site-header').addClass('stick-header');
    } else {
      $('.site-header').removeClass('stick-header');
    }
  }); // Maskedinput
  // -------------------------------------------------------------------------

  if ($('input[type="tel"]').length > 0) {
    $('input[type="tel"]').mask('(99) 9999-9999?9').focusout(function (event) {
      var target, phone, element;
      target = event.currentTarget ? event.currentTarget : event.srcElement;
      phone = target.value.replace(/\D/g, '');
      element = $(target);
      element.unmask();

      if (phone.length > 10) {
        element.mask("(99) 99999-999?9");
      } else {
        element.mask("(99) 9999-9999?9");
      }
    });
  } // Integrarção
  // -------------------------------------------------------------------------


  $('#wpcf7-f12-o1 .wpcf7-form').on('submit', function () {
    var dados = {
      Key: "m6N_8OGtMEU1",
      CampanhaKey: "QbaoSMHQV-01",
      ProdutoKey: "kkzOGY9YF4k1",
      CanalKey: "48rFsyJQqAE1",
      Midia: "LP Showa",
      Peca: "Formulario",
      PessoaNome: $("#pessoaNome").val(),
      PessoaSobrenome: $("#pessoaSobrenome").val(),
      PessoaEmail: $("#pessoaEmail").val(),
      PessoaTelefones: $("#pessoaTelefone").val(),
      KeyIntegradora: "9A35654C-E52F-4BA9-8B9D-1215FC1AE817"
    };
    console.log(dados);
    $.ajax({
      type: "POST",
      url: 'https://crm.anapro.com.br/webcrm/webapi/integracao/v2/CadastrarProspect',
      dataType: 'json',
      // contentType: 'application/json',
      headers: {
        'Content-Type': 'application/json'
      },
      data: JSON.stringify(dados),
      success: function success(data, textStatus, jQxhr) {
        console.log(data);
        console.log(textStatus);
        console.log(jQxhr);
      }
    });
    return false;
  });
  /* Envia o primeiro formulário
  -------------------------------------------------------------------------- */
  // $('.wp-curso-geral').submit(function() {
  //   console.log('ETAPA 1');
  //   var dataparam = $('.wp-curso-geral').serialize();
  //   var nome_lead = $('.nome_lead').val();
  //   $.ajax({
  //     type: 'POST',
  //     async: true,
  //     data: dataparam,
  //     datatype: 'json',
  //     url: 'http://crm.anapro.com.br/webcrm/webapi/integracao/v2/CadastrarProspect',
  //     cache: true,
  //     global: false,
  //     beforeSend: function() {
  //       $('.loader1').show();
  //     },
  //     success: function(html) {
  //       $('.msg').html(html);
  //     },
  //     complete: function() {
  //       $('.loader1').hide();
  //     }
  //   });
  //   return false;
  // });
})(jQuery);

document.body.addEventListener('touchstart', function () {}, false);