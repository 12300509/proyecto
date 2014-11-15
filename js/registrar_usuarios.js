$(document).on('ready', function()
{
	
		var name = $('#name');
		var midle_name = $('#midle_name');
		var last_name = $('#last_name');
		var numeros="0123456789";
		var mail = $('#mail');


		function tiene_numeros(texto)
		{
			 for(i=0; i<texto.length; i++){
      if (numeros.indexOf(texto.charAt(i),0)!=-1){
      	alert('sin numeros');
      }
   }
         
   alert("nada");
}
	
	name.change(function()
	{
	tiene_numeros("$(this).value()");

		if($(this).val().length < 4)
		{

			alert('nombre muy corto');
			$(this).val("");
		}

	});

		mail.change(function()
		{

		if($("#mail").val().indexOf('@', 0) == -1 || $("#mail").val().indexOf('.', 0) == -1) {  
		            alert("mail incorrecto"); 
		            $(this).val(""); 
		            return false;  
		        } 

		});

			midle_name.change(function()
				{
					if($(this).val().length < 4)
					{

						alert("apellido muy corto");
						$(this).val("");
					}


				});

				last_name.change(function()
				{
					if($(this).val().length < 4)
					{

						alert("apellido muy corto");
						$(this).val("");
					}


				});
});