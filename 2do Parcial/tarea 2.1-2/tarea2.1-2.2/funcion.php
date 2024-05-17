<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>11823. Evaluando Una Función Rara</title>    
    <style>
        *
        {
            padding: 3px;
        }
        body{
            background: linear-gradient(#691d30, #D6B094);
        }
        .contenido
        {
            text-align: center;
        }
        .texto {
        width: 200px; 
        height: 20px; 
        padding: 10px; 
        border: 2px solid; 
        border-radius: 5px;
        font-size: 16px; 
        }
    </style>
</head>

<body>
<header>
        <div class="container-navbar">
            <h1 style="color: #fff; margin-left: 700px;
             margin-top: 25px;">11823. Evaluando Una Función Rara</h1>
        </div>
    </header>
    <main>
        <div class="tabla-container">
        <center>
            <table border=1>
                <thead>
                <tr>
                    <td>Puntos</td>
                    <td>13.25</td>
                    <td>Límite de memoria</td>
                    <td>32 MiB</td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Límite de tiempo (caso)</td>
                    <td>1s</td>
                    <td>10 KiB</td>
                    <td>1m0s</td>
                </tr>
                </tbody>
                <tr>
                    <td>Tamaño límite de entrada (bytes)</td>
                </tr>
            </table>
          
            </div>
            <div class="contenido">
        <h2>Descripción</h2>
        <p>
        Evaluar de forma correcta f(x) dado el valor de x.
        </p>
        <img src="funcion.png" alt="">
        <h2>Entrada</h2>
        <p>Un entero, el valor a utilizar para evaluar x.
        </p>

         <h2>Salida</h2>

         <p>El resultado de f(x).</p>
         </div>
        <center>
        <table border="1">
            <tr>
                <td>Entrada</td>
                <td>Salida</td>
            </tr>
            <tr>
                <td>-78</td>
                <td>6162</td>
            </tr> <tr>
                <td>28</td>
                <td>-700</td>
            </tr>

        </table>
        <hr>
        <h2>Solución</h2>
        </center>
        <div class="contenido">
            <form  action="funcion.php" method="post">
                <input type="text" class="texto" name="txtnum"> <br>
                <input type="submit" value="Enviar"> <br>
            </form>
        </div>    
        <?php
        if($_POST)
        {
           
            function fx($x)
            {
                if($x<=0.0)
                {
                    $f=$x **2-$x;
                }
                else if($x>0)
                {
                    $f=-$x**2 + 3 * $x;
                }
                return $f;
            }
            $x=$_POST["txtnum"];
            $r=fx($x);
            echo "f(x) es: ", $r;
        }
        ?>
                
    </main>
</body>
</html>