<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1037. Juego de letras</title>    
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
            <h1 style="color: #fff; margin-left: 600px;
             margin-top: 25px;">1037. Juego de letras</h1>
        </div>
    </header>
    <main>
        <div class="tabla-container">
        <center>
            <table border=1>
                <thead>
                <tr>
                    <td>Puntos</td>
                    <td>11.93</td>
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
        <h2 >Descripción</h2>
        <p>
        En cierto juego de computadora cada letra del alfabeto recibe un valor numérico relativo a su posición en el te- <br>
        clado: las letras Q, A y Z reciben el valor 1 las letras W, S y X reciben el valor 2 y así sucesivamente. <br>
        Por ejemplo, la palabra UAM recibe como valor 7 + 1 + 7 = 15.
        </p>

        <h2>Entrada</h2>
        <p>Una cadena formada exclusivamente por letras mayúsculas de la A a la Z. La cadena no contendrá eñes, acentos <br>
         ni ningún otro símbolo..</p>

         <h2>Salida</h2>

         <p>Un numero entero.</p>
         </div>
        <center>
        <table border="1">
            <tr>
                <td>Entrada</td>
                <td>Salida</td>
            </tr>
            <tr>
                <td>UAM</td>
                <td>15</td>
            </tr>
        </table>
        <hr>
        <h2>Solución</h2>
        </center>
        <div class="contenido">
            <form  action="letras.php" method="post">
                <input type="text" class="texto" name="txtTexto"> <br>
                <input type="submit" value="Enviar"> <br>
            </form>
        </div>    
        <?php
        
        function sumarValores($texto)
        {
            $arr=array(
            'Q'=> 1,
            'W'=> 2,
            'E'=> 3,
            'R'=> 4,
            't'=> 5,
            'y'=> 6,
            'u'=> 7,
            'i'=> 8,
            'o'=> 9,
            'p'=> 0,
            'a'=> 1,
            's'=> 2,
            'd'=> 3,
            'f'=> 4,
            'g'=> 5,
            'h'=> 6,
            'j'=> 7,
            'k'=> 8,
            'l'=> 9,
            'z'=> 1,
            'x'=> 2,
            'c'=> 3,
            'v'=> 4,
            'b'=> 5,
            'n'=> 6,
            'm'=> 7
            );
        $texto=strtoupper($texto);
            $suma=0;

            for($i=0; $i<strlen($texto); $i++)
            {
                $letra=$texto[$i];
                if(array_key_exists($letra, $arr))
                {
                    $suma += $arr[$letra];
                }
            }
            return $suma;
        } 
        if($_POST)
        {
        $texto=$_POST["txtTexto"];
        $resultado=sumarValores($texto);
        echo "Suma de los valores es: ". $resultado;
        }

        ?>
                
    </main>
</body>
</html>





