<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>TAREA 3</title>
</head>
<body>
        <div>
            <h1>Tarea 3: Salinas Rojas Carlos Fernando</h1>
            <br>
        </div>
        <br>

        <h1>EJERCICIO 1</h1>
        <br>
        <div class="container">
            <div id="contenedorDate" class="col-12">
                <form action="fibo.php" method="POST">
                    <label for="n">Introduce un numero para la serie de fibonacci: </label>
                    <input type="text" name="n"><br>
                    <input class="btn btn-info" type="submit" value="Enviar">
                </form>
            </div>
        </div>
        <br>
        <br>
        


        <h1>EJERCICIO 2</h1>
        <br>
        <div class="container">
            <div class="row">
                    <div id="contenedorDate" class="col-12">
                        <div id="DatosEst">
                                <form action="tabla.php" method="GET">
                                    <h4>INTRODUZCA VALORES PARA: </h4>
                                    <h6>Para (I) filas y (J) columnas</h6>
                                    <label for="filas">I: <input type="text" name="filas"></label></br>
	                                <label for="columnas">J: <input type="text" name="columnas"></label></br>
	                                <input class="btn btn-info" type="submit" value="enviar">
                                </form>
                        </div>
                    </div>
            </div> 
        </div>

</body>
</html>