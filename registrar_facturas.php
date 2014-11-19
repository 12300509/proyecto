
<html>
<head>
    <meta charset="UTF-8">
    <meta name="vieport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <script type="text/javascript" src="js/jquery-2.1.1.js"></script>
    <script type="text/javascript" src="js/registrar_autos.js"></script>
</head>
<body class='background'>
    <div class='jumbotron'><h1>Registro facturas;<h1></div>
    <div>
        <form action='regis_a.php' method='post';
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
                    <div class='col-md-3'>Ingrese el iva</div>
                    <div class='col-md-3'><input id="iva" type="text" name="color" value=""/><br></div>
                </div>
            </div>
            <br>
            <div class='row'>
                <div class='col-md-3'></div>
                <div class='col-md-9'>
                    <div class='col-md-3'>Ingrese el impuesto extra</div>
                    <div class='col-md-3'><input id="extra_tax" type="text" name="mark" value=""/><br></div>
                </div>
            </div>
            <br>
            <div class='row'>
                <div class='col-md-3'></div>
                <div class='col-md-9'>
                    <div class='col-md-3'>Ingrese el to</div>
                    <div class='col-md-3'><input id="model"type="text" name="model" value=""/><br></div>
                </div>
            </div>
            <br>
            <div class='row'>
                <div class='col-md-3'></div>
                <div class='col-md-9'>
                    <div class='col-md-3'>Ingrese el año</div>
                    <div class='col-md-3'><input id="year" type="text" name="year" value=""/><br></div>
                </div>
            </div>
            <br>
            <div class='row'>
                <div class='col-md-3'></div>
                <div class='col-md-9'>
                    <div class='col-md-3'><input type="submit" value="Enviar" /><br></div>
                </div>
            </div>
        </form>
    </div>
</body>



</html>