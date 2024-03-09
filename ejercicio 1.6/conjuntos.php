<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sumando dos conjuntos</title>
    </style>
</head>
    <body>
        <center>
            <h1>2765. Sumando dos conjuntos</h1>
        </center>
        <div class="container-table">
            <center>
                <table border="1">
                    <tr>
                        <td>Puntos</td>
                        <td colspan="2">9.95</td>
                        <td>Límite de memoria</td>
                        <td>32 MiB</td>
                    </tr>
                    <tr>
                        <td>Límite de tiempo (caso)</td>
                        <td colspan="2">1s</td>
                        <td>Límite de tiempo (total)</td>
                        <td>1m0s</td>
                    </tr>
                    <tr>
                        <td>Tamaño límite de entrada (bytes)</td>
                        <td colspan="2">10 KiB</td>
                    </tr>
                </table>
            </center>
        </div>
        </header>
        <h3>Descripción</h3>
            <p>
            Dados dos conjuntos de enteros de tamaño N, imprimir el resultado de sumarlos. 1<=N<=100. Por ejemplo, sea
             <br> N=4: 
            <br>
            2 3 4 5 <br>
            6 7 1 3 <br>
            El resultado de sumarlos es: <br>
            8 10 5 8 <br>
            </p>
        <h3>Entrada</h3>
            <p>Tres números reales</p>
        <h3>Salida</h3>
            <p>Un número real representado el promedio de los tres números.</p>
        <hr>
            <h2>Ejemplo</h2>
        <table border=1>
            <td>10 9.5 9.0</td>
            <td>9.5</td>
            </tr>

        <?php
                $a=100;
                function arreglo($a)
                {
                    $conjunto = array();
                    for ($i = 1; $i <= $a; $i++) 
                    {
                        array_push($conjunto, rand(0, 10));
                    }
                    return $conjunto;
                }

                function Suma($conjunto) 
                {
                    return array_sum($conjunto);
                }
                
                $s = arreglo($a);
                $suma = Suma($s);

                $sm = arreglo($a);
                $sumas = Suma($sm);

                echo "Arreglo: " . implode(' ', $s) . "<br>";
                echo "Suma del Arreglo: $suma" . "<br>";

                echo "Arreglo 2: " . implode(' ', $sm) . "<br>";
                echo "Suma del Arreglo 2: $sumas" . "<br>";

                echo "Suma de los ambos arreglos: " . " ";
                
                for ($i = 0; $i < $a; $i++) 
                {
                    echo $s[$i] + $sm[$i] . " ";
                }
        ?>
  </body>
</html>