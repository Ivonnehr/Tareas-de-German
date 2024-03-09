<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bit de paridad</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            color: #000;
        }

        .container-hero
        {
            background-color: var(--background-color);
        }

        .container-navbar {
            background-color: #1B2631; 
            padding: 10px 0;
        }
      
    </style>
</head>

<body>
    <header>
        <div class="container-hero">
            <div class="container hero">
                <div class="customer-support">
                    <div class="Content-customer-support">
                    </div>
                </div>
                <div class="container-logo">
                </div>
                <div class="container-user">
                </div>
            </div>
        </div>
        <div class="container-navbar">
            <h1 style="color: #fff; margin-left: 500px;
             margin-top: 25px;">4886. bit de parida</h1>
        </div>
    </header>

        <center>
            <table border="2">
                <tr>
                    <td>Puntos</td>
                    <td>12.68</td>
                    <td>Límite de memoria</td>
                    <td>32 MiB</td>
                </tr>
                <tr>
                    <td>Límite de tiempo (caso)</td>
                    <td>1s</td>
                    <td>10 KiB</td>
                    <td>1m0s</td>
                </tr>
                <tr>
                    <td>Tamaño límite de entrada (bytes)</td>
                </tr>
            </table>
        </center>

        <h2>Descripción</h2>
        <p>
        Un bit de paridad es un dígito binario que indica si el número de bit<br>
         con un valor de 1 en un conjunto de bits es par o impar. Los bits de paridad <br>
         conforman el método de detección de errores más simple. Existen dos variantes de este método:<br>
            Bit de paridad par.<br>
            Bit de paridad impar.<br>
            En el caso de la paridad par, se cuentan el número de unos. Si el total es impar, el bit de paridad <br>
            se establece en uno y por tanto la suma del total anterior con este bit de paridad, daría par. <br>
            Si el conteo de bits uno es par, entonces el bit de paridad se deja en 0, pues ya es par.<br>
            Escribe un programa que sirva para añadir un bit de paridad par a una secuencia de bits.
        </p>
           
        <h2>Entrada</h2>
        <p>
        La entrada consiste de una sola línea con una secuencia de siete bits 0 o 1.
        </p>

        <h2>Salida</h2>
        <p>
        La salida es la misma secuencia de siete bits de la entrada más el bit de paridad par. Dicho bit de paridad se agrega al lado derecho.
        </p>
        <table border="1">
            <tr>
                <th>Entrada</th>
                <th>Salida</th>
            </tr>
            <tr>
                <td>1010001</td>
                <td>10100011</td>
            </tr>
            <tr>
                <td>1101001</td>
                <td>11010010</td>
            </tr>
            <tr>
                <td>0000000</td>
                <td>00000000</td>
            </tr>
            <tr>
                <td>1111111</td>
                <td>11111111</td>
            </tr>
        </table>
        <hr>
        <form action="bit.php" method="post">
        <input type="text" name="txtBit"><br>
        <input type="submit" value="Enviar"><br>
    </form>

                <?php

                    if($_POST)
                    {
                        $bit=$_POST['txtBit'];
                         $t=strlen($bit);
                        $cont=0;
                        $c=0;

                    for ($i=0; $i<$t; $i++) 
                    { 
                        if($bit[$i]== "0")
                        {
                            $cont=$cont+1; 
                        }
                        else if($bit[$i]== "1")
                        {
                            $c=$c+1;    
                        }

                    }
                    echo"Resultado: ";

                    if($cont>$c)
                    {
                        echo $bit;
                        echo "1";
                    }
                    else if($c > $cont)
                    {
                        echo $bit;
                        echo "0";
                    }   
                   }
                 ?>
        </div>
</body>
</html>