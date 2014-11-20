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
			



		var a=$(this).val();
		var b=$(iva).val();
		var c=$(impuesto_extra).val();
		var d=$(total).val("");

		parseFloat(a);
		parseFloat(b);
		parseFloat(c);
		parseFloat(d);

		
		

		b=a*0.16;
		console.log(b);
		parseFloat(b);
		c=a*0.10;
		console.log(c);
		parseFloat(c);
		parseFloat(d);
		d=(parseFloat(a)+parseFloat(c)+parseFloat(b));
		
		console.log(d);
		$(iva).val(a*0.16);
		$(impuesto_extra).val(a*0.10);
		
		$(total).val(d);

	});





});