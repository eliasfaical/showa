(function($) {

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
  });

  
  // Scroll Top
  // -------------------------------------------------------------------------
  $(window).on('scroll', function() {
    if ($(this).scrollTop() > 150) {
      $('.site-header').addClass('stick-header');
    } else {
      $('.site-header').removeClass('stick-header');
    }
  });


  // Maskedinput
  // -------------------------------------------------------------------------
  if ($('input[type="tel"]').length > 0) {
    $('input[type="tel"]').mask('(99) 9999-9999?9').focusout(function(event) {
      var target, phone, element;

      target  = (event.currentTarget) ? event.currentTarget : event.srcElement;
      phone   = target.value.replace(/\D/g, '');
      element = $(target);
      element.unmask();

      if( phone.length > 10) {
        element.mask("(99) 99999-999?9");
      } else {
        element.mask("(99) 9999-9999?9");
      }
    });
  }


  // Integrarção
  // -------------------------------------------------------------------------
  $('#wpcf7-f12-o1 .wpcf7-form').on('submit', function() {
    
    let dados = {
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

      KeyIntegradora:"9A35654C-E52F-4BA9-8B9D-1215FC1AE817",
    }

    console.log(dados);

    $.ajax({
      type: "POST",
      url: 'https://crm.anapro.com.br/webcrm/webapi/integracao/v2/CadastrarProspect',
      dataType: 'json',
      // contentType: 'application/json',
      headers: {
        'Content-Type':'application/json'
      },
      data: JSON.stringify(dados),
      success: function (data, textStatus, jQxhr) {
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
