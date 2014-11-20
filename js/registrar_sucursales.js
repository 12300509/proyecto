$(document).on('ready', function()
{
	
		var name = $('#name');
		var address = $('#address');
		var phone = $('#phone');
		var numeros="0123456789";
		
		function tiene_numeros(texto)
		{
			var a=0;
			 for(i=0; i<texto.length; i++)
			 {
      				if (numeros.indexOf(texto.charAt(i),0)!=-1)
      				a++;
      				if(a>0)
      					i=texto.length;
			 }
			 reuturn a;
		}
		name.change(function()
		{
			if(tiene_numeros("$(this).value()"))
				alert("Este espacio no admite numeros");
		if($(this).val().length < 1)
		{

			alert('El espacio está vacío');
			$(this).val("");
		}

	});

			address.change(function()
				{
					if($(this).val().length < 1)
					{

						alert('El espacio está vacío');
						$(this).val("");
					}
				});
				phone.change(function()
				{
					if(!(tiene_numeros("$(this).value()")))
						alert("Este espacio no admite caracteres");
					if($(this).val().length < 1)
					{

						alert('El espacio está vacío');
						$(this).val("");
					}
				});
});
