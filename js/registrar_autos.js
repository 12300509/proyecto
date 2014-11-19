$(document).on('ready', function()
{
	
		var name = $('#name');
		var color = $('#color');
		var mark = $('#mark');
		var model = $('#model');
		var year = $('#year'); 
		var numeros="0123456789";


		function tiene_numeros(texto)
		{
			var a=0;
			 for(i=0; i<texto.length; i++)
			 {
      				if (numeros.indexOf(texto.charAt(i),0)!=-1)
      					a++;
			 }
			 if(a>0)
      				return true;
      		 if(a==0)
      		 		return false;
		}
		function vacio(cad)
		{
			if(cad.length < 1)
			{
				console.log("El espacio está vacío");
				cad="";
			}
		}
		name.blur(function()
		{
			if(tiene_numeros("$(this).value()"))
				alert("Este espacio no admite numeros");
			vacio("$(this).value()");
		});

			color.blur(function()
				{
					if(tiene_numeros("$(this).value()"))
						alert("Este espacio no admite numeros");
					if($(this).val().length < 1)
					{

						alert('El espacio está vacío');
						$(this).val("");
					}


				});

				mark.blur(function()
				{
					if(tiene_numeros("$(this).value()"))
						alert("Este espacio no admite numeros");
					if($(this).val().length < 1)
					{

						alert('El espacio está vacío');
						$(this).val("");
					}


				});
				model.blur(function()
				{
					if(tiene_numeros("$(this).value()"))
						alert("Este espacio no admite numeros");
					if($(this).val().length < 1)
					{

						alert('El espacio está vacío');
						$(this).val("");
					}


				});
				year.blur(function()
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
