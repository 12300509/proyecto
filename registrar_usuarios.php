<html>
<head>
    <meta charset="UTF-8">
    <meta name="vieport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
   <script src='js/jquery-2.1.1.js'></script>
    <script src='js/registrar_usuarios.js'></script>
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
 
    <div class='jumbotron'><h1>Registro Usuarios;<h1></div>
    <div>
        <form action='regis_p.php' method='post';
            <div class='row'>
                <div class='col-md-3'></div>
                <div class='col-md-9'>
                    <div class='col-md-3'>Ingrese el nombre(s)</div>
                    <div class='col-md-3'><input id="name" type="text" name="name" value=""/><br></div>
                </div>
            </div>
            <div class='row'>
                <div class='col-md-3'></div>
                <div class='col-md-9'>
                    <div class='col-md-3'>Ingrese el apellido paterno</div>
                    <div class='col-md-3'><input id='last_name' type="text" name="last_name" value=""/><br></div>
                </div>
            </div>
            <br>
            <div class='row'>
                <div class='col-md-3'></div>
                <div class='col-md-9'>
                    <div class='col-md-3'>Ingrese el apellido materno</div>
                    <div class='col-md-3'><input id="midle_name" type="text" name="midle_name" value=""/><br></div>
                </div>
            </div>
            <br>
            <div class='row'>
                <div class='col-md-3'></div>
                <div class='col-md-9'>
                    <div class='col-md-3'>Ingrese e-mail</div>
                    <div class='col-md-3'><input id="mail" type="text" name="mail" value=""/><br></div>
                </div>
            </div>
            <br>
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