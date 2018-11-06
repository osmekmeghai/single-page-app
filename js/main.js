/** NAV BAR CHANGE AFTER SCROLL **/
$(window).scroll(function() {
	if($(document).scrollTop() >= 50) {
		$('nav').addClass('sticky')
	}
	else {
		$('nav').removeClass('sticky')
	}
});


  $(document).ready(function() {

	var headerHeight = $()

	$('.scroll').click(function(e) {

		var linkHref = $(this).attr('href');

		$('html, body').animate({
			scrollTop: $(linkHref).offset().top - 70
		}, 1000)

		e.preventDefault();


	});
});

