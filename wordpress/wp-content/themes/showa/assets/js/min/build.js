"use strict";

(function ($) {
  // Open nav menu slide
  // ----------------------------------------------------------------------------
  $('.menu-mobile').on('click', function () {
    $('.site-header').toggleClass('open');
  });

  if ($('#bannerHero').length > 0) {
    $('#bannerHero').owlCarousel({
      loop: true,
      margin: 0,
      nav: false,
      dots: true,
      items: 1
    });
  }

  if ($('#galeriaAreasComuns').length > 0) {
    $('#galeriaAreasComuns').owlCarousel({
      loop: true,
      margin: 0,
      nav: true,
      dots: true,
      items: 1
    });
  }

  if ($('#galeriaPrivativa').length > 0) {
    $('#galeriaPrivativa').owlCarousel({
      loop: true,
      margin: 0,
      nav: true,
      dots: true,
      items: 1
    });
  }

  if ($('#galeriaPlantas').length > 0) {
    $('#galeriaPlantas').owlCarousel({
      loop: true,
      margin: 0,
      nav: true,
      dots: true,
      items: 1
    });
  }

  if ($('#galeriaLocalizacao').length > 0) {
    $('#galeriaLocalizacao').owlCarousel({
      loop: true,
      margin: 0,
      nav: true,
      dots: true,
      items: 1
    });
  } // Animation
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
  }); // Scroll Smooth
  // ----------------------------------------------------------------------------

  $('a[href^="#"]').on('click', function (e) {
    e.preventDefault();
    var target = this.hash;
    var $target = $(target);
    $('html, body').animate({
      'scrollTop': $target.offset().top - 60
    }, 1000, 'swing');
  });
})(jQuery);

document.body.addEventListener('touchstart', function () {}, false);