$(document).ready(function()
{
	$('.menu a').click(function(e)
	{
		e.preventDefault();
		
		sectionSelector = $(this).data('section');
		$(window).scrollTo($(sectionSelector), 500);
	});
	
	$('.categories a').click(function(e)
	{
		e.preventDefault();
		
		var imagesTab = $(this).data('imagesTab');
		
		$('#gallery .images ul').hide();
		$(imagesTab).show();
	});
	
	$("section#contact form").validate(
	{
		onkeyup: false,
		onclick: false,
		onfocusout: false,
		showErrors: function(errorMap, errorList)
		{
			$("p.success").hide();
			$("p.error").show();
		},
		submitHandler: function(form)
		{
			$.ajax({
                type: "POST",
                url: 'processForm.php',
                data: $(form).serialize(),
                success: function(data, textStatus, jqXHR)
                {
                	$("p.error").hide();
                	$("p.success").show();
                }
			});
		}
	});
});