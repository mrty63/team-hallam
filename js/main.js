$('.burgerMenu').on('click', function(ev){
	ev.preventDefault();
	$(this).toggleClass('animateBurger');
	$('nav').slideToggle('fast');
});
$(window).on('resize', function(ev){
	//console.info(window.innerWidth);
	if(window.innerWidth > 600){
		$('nav ul').attr('style','');	
	};
});