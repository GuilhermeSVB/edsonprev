$(function(){
   
    //Gerais
    console.log("working")
    var msg = $('#msg');
    var forms = $('form');
    var botao = $('.j_button');
    var urlpost = '../../php/crud.php';  
    botao.attr("type", "submit");
    forms.submit(function(){return false;
        console.log('enviado');
    });
      //Genericas  
    function loading(){
        $("#painel").fadeOut();
        $('.LoadingImage').show();
    };
      function sendfail(){
        msg.empty().html("Erro ao enviar");
    };
      function validationfail(data){
        msg.empty().html("Camps com erros");
    };
       function success(data){
        msg.empty().html(data);
    };
        function complet(){
        $("#painel").fadeOut();
        $('.LoadingImage').hide();
        
         
    };
    
    
    // config ajax
    $.ajaxSetup({
        url: urlpost,
        type: 'POST',
        beforeSend: loading,
        error: sendfail     
    });
    
    var cadastro = $('form[name="cadastro"]');
    cadastro.submit(function(){
        var dados = $(this).serialize();
        var acao = '&acao=cadastrouser';
        var dados = dados+acao;
        $.ajax({
            data: dados, 
            success: function(resposta){
                msg.append( "<p>"+resposta+"</p>" );
                msg.show();
            },
            complete:  function(){
                $('input[type="text"]').val("");
                //window.setTimeout(function(){window.location.reload()}, 3000);
            }
        });
    });
    
    
});