$(document).on('ready', function()
{

var monto = $("#amount");
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
			



		var algo= parseFloat($(iva).val($(this).val()));
		algo=algo*0.16;
		var algo1=parseFloat($(impuesto_extra).val($(this).val()));
		algo1=algo1*0.10;
		var algo2=parseFloat($(this).val());
		
		var algo3= algo+algo1+algo2;


		$(total).val(algo3);


	});





});