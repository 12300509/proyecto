$(document).on('ready', function()
{

var monto = $("#monto");
var iva = $("#iva");
var impuesto_extra = $("#impuesto_extra");
var total = $("#total");


		function tiene_numeros(texto)
		{
			 for(i=0; i<texto.length; i++){
      if (numeros.indexOf(texto.charAt(i),0)!=-1){
      	return 0;
      }
   }
         
   return 1;
}
	
	monto.change(function()
	{
		var nums;
	
	

	

	
			
		
		if($(this).val().length < 2)
		{

			alert('monto muy corto');
			$(this).val("");
		}

		var algo=$(iva).val($(this).val()*.16);
		var algo1=$(impuesto_extra).val($(this).val()*.10);
		var algo2=$(this).val();
		
		$(total).val($(impuesto_extra).val()+$(iva).val()+$(this).val());

	});





});