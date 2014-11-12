
<html>
<head>
    <meta charset="UTF-8">
    <meta name="vieport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="animate.css">
</head>
<style type="text/css">
.jumbotron
{
    background-color: beige;
}
.background
{
    background-color: #FFFF5A;
}
h1
{
    text-align: center;
    font: bold 170% monospace;
}
</style>
<body class='background'>
    <div class='jumbotron'><h1>Registro Autos;<h1></div>
    <div>
        <form action='regis_a.php' method='post';
            <div class='row'>
                <div class='col-md-3'></div>
                <div class='col-md-9'>
                    <div class='col-md-3'>Ingrese el nombre</div>
                    <div class='col-md-3'><input type="text" name="name" value=""/><br></div>
                </div>
            </div>
            <div class='row'>
                <div class='col-md-3'></div>
                <div class='col-md-9'>
                    <div class='col-md-3'>Ingrese el color</div>
                    <div class='col-md-3'><input type="text" name="color" value=""/><br></div>
                </div>
            </div>
            <br>
            <div class='row'>
                <div class='col-md-3'></div>
                <div class='col-md-9'>
                    <div class='col-md-3'>Ingrese la marca</div>
                    <div class='col-md-3'><input type="text" name="mark" value=""/><br></div>
                </div>
            </div>
            <br>
            <div class='row'>
                <div class='col-md-3'></div>
                <div class='col-md-9'>
                    <div class='col-md-3'>Ingrese el modelo</div>
                    <div class='col-md-3'><input type="text" name="model" value=""/><br></div>
                </div>
            </div>
            <br>
            <div class='row'>
                <div class='col-md-3'></div>
                <div class='col-md-9'>
                    <div class='col-md-3'>Ingrese el año</div>
                    <div class='col-md-3'><input type="text" name="year" value=""/><br></div>
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