$(document).ready(function()
{
	$('.menu a').click(function(e)
	{
		e.preventDefault();
		
		sectionSelector = $(this).data('section');
		$(window).scrollTo($(sectionSelector), 500);
	});
});