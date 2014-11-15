$(document).on('ready', function()
{
	//alert('whatever you want');
		
		var name = $('#name');
	name.val("AWEBO AWEBO AWEBO");
	name.change(function()
	{
		var midle_name = $("#midle_name");
		midle_name.val($(this).val());

	});

});