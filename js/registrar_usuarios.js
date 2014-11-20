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
      	return 0;
      }
   }
         
   return 1;
}
	
	name.change(function()
	{
		var nums;
	
	nums=(tiene_numeros($(this).val()));

	

	if(nums=1)
		console.log("no tiene numeros");
	
	
			if(nums=0)
			
			
				console.log("no tiene numeros");
			
		
		if($(this).val().length < 2)
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
					var nums;
	
	nums=tiene_numeros($(this).val());

	

	if(nums=1)
	

		console.log(" tiene numeros");
	//$(this).val("");
	
	if(nums=0)
		console.log("no tiene numeros");

					if($(this).val().length < 2)
					{

						alert("apellido muy corto");
						$(this).val("");
					}


				});

				last_name.change(function()
				{
					var nums;
	
	nums=tiene_numeros($(this).val());

	

	if(nums=1)
	
		console.log(" tiene numeros");
	
		//$(this).val("");
	
	if(nums=0)
		console.log("no tiene numeros");

					if($(this).val().length < 2)
					{

						alert("apellido muy corto");
						$(this).val("");
					}


				});
});