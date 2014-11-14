$(document).on('ready', function()
{
	//alert('whatever you want');
		var name = $('#name');
	name.val("AWEBO AWEBO AWEBO");
	name.change(function()
	{
		var color = $("#color");
		color.val($(this).val());

	});

});