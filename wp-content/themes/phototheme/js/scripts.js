$(function() {	
	// Uncomment your chosen color option
	// $().layoutScout({
	// 	// color: 'lightColours'
	// 	color: 'darkColours'
	// 	// color: 'lightMono'
	// 	// color: 'darkMono'
	// });

	// Gallery slider
	$('a.back').on('click', function(e) {
			e.preventDefault();
			$(this).parent().next().css('display', 'block');
			$(this).parent().hide();
			
	});

	$('a.forward').on('click', function(e) {
			e.preventDefault();
			var thingy = $(this).parent().prev();
			$(this).parent().hide();
			thingy.show();
	});

});