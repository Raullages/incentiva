$(document).ready(function(){



	/*Informações que serão exibidas no quadro "INFORMAÇÕES"
	--REALIZA A BUSCA VIA AJAX NA PÁGINA STATUS.PHP E RETORNA VIA AJAX */

	$('.teste').bind('click', function(){
		var informacao = $(this).attr('id');

		$.ajax({
				url: 'status.php',
				type: 'GET',
				data: 'codigo='+informacao,
				success: function (data) {
					$('.box1').html(data);
				}
			});
		});

	/*------------------------------------------------------------------------------*/
	/*DELETAR O ITEM DA TABELA */

	$('.bt-excluir').bind('click', function() {
		var valor = $(this).attr('id');
		var excluir = confirm("Deseja realmente excluir Projeto ?");
		if(excluir){
			alert('Item excluido com sucesso');
			location.href='../excluir.php?codigo='+valor;
		}else{
			alert('Cancelado pelo usuário');
		}
	});


	/*------------------------------------------------------------------------------*/
/*Comentario*/
   $('.adicionar').bind('click', function(){

   	// 	$('.comentario').slideToggle('slow');
   	// 	$('.comentario textarea').focus();
   	// 	$('body').css('position','fixed');
   	// 	$('body').css('overflow-y','scroll');


   });

   $('.cancelar').bind('click',function(){
   		$('.comentario').slideToggle('slow');
   		$('body').css('position','relative');

   });

   $('.adicionar').bind('click', function(){
    	var comentario = $(this).attr('value');

				$.post('Testando.php',{teste: comentario},function(data){
					$('.comentario').html(data)
				});

    });




/*IMAGEM COM EMAILS DA ABA SERVIÇOS*/
   $('.rodape #email').bind('click', function(){

   		$('.bg-img').fadeIn('slow');
   		$('.emails').fadeIn('slow');

   });
   $('.bg-img').bind('click',function(){

   		$('.emails').fadeOut('slow');
   		$(this).fadeOut('slow');
   		$('.cadastrar-novo-projeto').fadeOut('slow');
   });





	 $('.teste').bind('mouseover',function(){
		 $(this).css('background-color','#eee');
		 $(this).css('color','#000');
		 $(this).css('cursor','pointer');

			 $(this).bind('mouseout',function(){
				  $(this).css('background-color','#fff');
					$(this).css('color','#000');
					$(this).css('cursor','default');
					$(this).css('z-index','0');

			 });
	 });

	 $('.editar').bind('mouseover',function(){
		 $(this).css({
       color: 'red',

     });
      $(this).bind('mouseout',function(){
        $(this).css({
          color: '#337ab7'
        });
      })

	 })





});
