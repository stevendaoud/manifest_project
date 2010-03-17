var Validation = {};

Validation.isFilledOut = function()
{
	var filledOut = true;
	
	var requiredFields = $('.required');
	requiredFields.each(function()
	{
		if($(this).val() === "")
		{
			filledOut = false;
		}
	});
	
	return filledOut;
};


Validation.colorBadInputs = function()
{
	var requiredFields = $('.required');
	requiredFields.each(function()
	{	
		if($(this).val() === "")
		{
			$(this).addClass('error');
			$(this).prev().html('You forgot to enter a ' + $(this).attr('id') +'!');
		}
		else
		{
			$(this).removeClass('error');
			$(this).prev().html('');
		}
	});
};