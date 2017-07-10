( function( $ ) {
    var offset = $('#principal').offset().top;
    var $meuMenu = $('#principal'); // guardar o elemento na memoria para melhorar performance
    $(document).on('scroll', function () {

        if (offset <= $(window).scrollTop()-100) {
            $meuMenu.addClass('fixar');

        } else {
            $meuMenu.removeClass('fixar animated fadeInDown');

        }
    });

  	$(function() {

        $('.videoWrapper').click(function () {
            $('.videoWrapper iframe').css("pointer-events", "auto");
        });

	});
	$( '.btTerms' ).on( 'click', showTerms );
	$( '.btPolitics' ).on( 'click', showPolitics );

	function showPolitics()
	{
		$( '.politics' ).fadeIn();
		$( 'html,body' ).addClass( 'no-scroll' );
		$( '.terms' ).find( '.close' ).on( 'click', closeLegals );
	}


	function showTerms()
	{
		$( '.legals' ).fadeIn();
		$( 'html,body' ).addClass( 'no-scroll' );
		$( '.terms' ).find( '.close' ).on( 'click', closeLegals );
	}

	function closeLegals()
	{
		$( '.terms' ).fadeOut();
		$( 'html,body' ).removeClass( 'no-scroll' );
	}

	$('.input-yn').on('change',function(){
		if($(this).val() == 'Sim'){
			$(".form-data").removeClass('animated fadeInUp');
			$('.form-data').css('display','none');
			$('.form-foto').css('display','block');
			$(".form-foto").addClass('animated fadeInUp');
		}else if($(this).val() == 'Não'){
			$(".form-foto").removeClass('animated fadeInUp');
			$('.form-foto').css('display','none');
			$('.form-data').css('display','block');
			$(".form-data").addClass('animated fadeInUp');
		}
	})

	$('.ref-com').on('mouseenter',function(){
	   $('.e2').attr("class", "animated fadeInUp");
		setTimeout(
		  function() 
		  {
		  	$('.e4').attr("class", "animated fadeInUp");
		  	$('.e5').attr("class", "animated fadeInUp");
		  }, 500);
	});

	$('.ref-apt').on('mouseenter',function(){
	    $('.f1').attr("class", "animated fadeInUp");
		setTimeout(
		  function() 
		  {
		  	$('.f2').attr("class", "animated fadeInUp");
		  	$('.f4').attr("class", "animated fadeInUp");
		  }, 500);
	});

	$('.ref-res').on('mouseenter',function(){
	  	$('.g2').attr("class", "animated fadeInUp");
	  	$('.g3').attr("class", "animated fadeInDown");
	});

	$(window).scroll(function() {
	

	});

} )( jQuery );