
<html>
<head>
    <meta charset="UTF-8">
    <meta name="vieport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="estilo.css">
    <script type="text/javascript" src="js/jquery-2.1.1.js"></script>
    <script type="text/javascript" src="js/registrar_facturas.js"></script>
</head>
<body class='background'>
    <div class='jumbotron'><h1>Registro facturas;<h1></div>
    <div>
        <form action='regis_f.php' method='post';
            <div class='row'>
                <div class='col-md-3'></div>
                <div class='col-md-9'>
                    <div class='col-md-3'>Ingrese el monto</div>
                    <div class='col-md-3'><input id="amount" type="text" name="name" value=""/><br></div>

                </div>
            </div>
            <div class='row'>
                <div class='col-md-3'></div>
                <div class='col-md-9'>

                    <div class='col-md-3'>Ingrese iva</div>
                    <div class='col-md-3'><input id="iva" type="text" name="iva" value=""/><br></div>

                </div>
            </div>
            <br>
            <div class='row'>
                <div class='col-md-3'></div>
                <div class='col-md-9'>

                    <div class='col-md-3'>Ingrese impuesto extra</div>
                    <div class='col-md-3'><input id="impuesto_extra" type="text" name="impuesto_extra" value=""/><br><br></div>
                </div>
                <div class='col-md-3'></div>
                <div class='col-md-9'>
                    <div class='col-md-3'>Ingrese el total</div>
                    <div class='col-md-3'><input id="total" type="text" name="total" value=""/><br></div>

                  
            <div class='row'>
                <div class='col-md-3'></div>
                <div class='col-md-9'>

                    <div class='col-md-3'><input type="submit" value="Send" /><br></div>

                </div>
            </div>
        </form>
    </div>
</body>




</html>