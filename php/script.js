$(function(){
   
    //Gerais
    console.log("working")
    var msg = $('#msg');
    var forms = $('form');
    var botao = $('.j_button');
    var urlpost = '../php/crud.php';  
    botao.attr("type", "submit");
    forms.submit(function(){return false;
        console.log('enviado');
    });
      //Genericas  
    function loading(){
//        $("#painel").fadeOut();
//        $('.LoadingImage').show();
    };
      function sendfail(){
        msg.empty().html("Erro ao enviar");
    };
      function validationfail(data){
//        msg.empty().html("Camps com erros");
    };
       function success(data){
//        msg.empty().html(data);
    };
        function complet(){
//        $("#painel").fadeOut();
//        $('.LoadingImage').hide();
        
         
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
       
        $.ajax({
            data: dados, 
          success: function (data) {
                          var obj = jQuery.parseJSON(data);
                          var item = "";
                         item +=  "<strong>"+obj.msg+"</strong>";
                         msg.append(item);
                         msg.addClass(obj.typo);
                          //fim do laço         
                          msg.show();
                    },
            complete:  function(){
//                $('input[type="text"]').val("");
//                window.setTimeout(function(){window.location.reload()}, 3000);
            }
        });
    });
    
 $(document).on('click', '#config', function(){
    var id = 'id='+$(this).attr("alt");
    var acao = '&acao=selecionauser';
    var dados = id+acao;
    console.log(dados);
        $.ajax({
      type: "POST",
      dataType : "json",
      data: dados,
      beforeSend: function(){
        //$("#situacaoedi").append('<img src="img/ajax-loader.gif" class="center-block img-responsive">');
      },
      success: function (data){
      			//console.log(data);
//        $(data).each(function(index, value){
//              //atribuo os valores 
//            
//            $("#edinome").attr("value",value.nome);
//            $("#editelefone").attr("value",value.telefone);
//           	$("#ediendereco").attr("value",value.endereco);
//            $("#edidata").attr("value",value.data_pedido);
//            $("#edireferencia").text(value.referencia);
//            var id = value.id;
//            $("#update").attr("alt",id);
//          	$("#situacaoedi").empty();
//             
//        }); 
      }
    });
});   
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
});