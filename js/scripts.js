$(function(){
	$('nav.mobile').click(function(){
		var listaMenu = $('nav.mobile ul');

		if(listaMenu.is(':hidden') == true){
			var icone = $('.botao-menu-mobile').find('i')
			//var icone = $('.botao-menu-mobile i')
			icone.removeClass('fa-solid fa-bars')
			icone.addClass('fa-solid fa-x')
		}	
		else{
			var icone = $('.botao-menu-mobile').find('i')
			icone.removeClass('fa-solid fa-x')
			icone.addClass('fa-solid fa-bars')
		
		}
			
		listaMenu.slideToggle();


		//OUTROS METODOS

		//abrir atravesdo fadein
		/*
		if(listaMenu.is(':hidden') == true)
			listaMenu.fadeIn();
		else
			listaMenu.fadeOut();
	*/	


		/*
		if(listaMenu.is(':hidden') == true)
			//listaMenu.show();
			listaMenu.css('display','block');
		else
			//listaMenu.fadeOut();
			listaMenu.css('display','none');
		*/

	});

	if ($('target').length >0) {
		//O elemento existe, portanto precisamos dar o scroll em algum elemento

		var elemento = '#'+$('target').attr('target');
		var divScroll = $(elemento).offset().top;
		$('html,body').animate({'scrollTop':divScroll},1000);


	}



})

