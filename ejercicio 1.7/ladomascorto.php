<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El lado mas corto</title>
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
                <h1 style="color: #fff; margin-left: 600px;
                margin-top: 25px;">El lado mas corto</h1>
            </div>
        </header>

        <main>
            <center>
                <table border="1">
                    <tr>
                        <td>Puntos</td>
                        <td>23.98</td>
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
                Escribe un programa que, dadas las coordenadas de los vértices de un cuadrilátero, calcule la longitud de su lado más corto.
            </p>
            <h2>Entrada</h2>
            <p>
            Ocho reales x1, x2 , x3, x4, y1, y2, y3, y4. Puedes suponer que 0 ≤ xi, yi ≤ 100 y que los vértices se listan orde-<br>
            nados en el sentido de las manecillas del reloj.
            </p>

            <h2>Salida</h2>
            <p>
            Un real que sea la longitud del lado más corto del cuadrilátero. Tu programa se considerará correcto si el valor<br>
             calculado es razonablemente cercano a la respuesta exacta.
            </p>
            <table border="1">
                <tr>
                    <td>Entrada</td>
                    <td>Salida</td>
                </tr>
                <tr>
                    <td>10.1 10.2 <br>
                        20.2 10.3 <br>
                        22.3 4.1 <br>
                        7.5 0.9 <br>
                    </td>
                    <td>6.545991</td>
                </tr>
            </table>

            <div>
                <form action="ladomascorto.php" method="post">
                    <div>
                        Número 1:
                            <input type="text" name="txtnum1"> <br>
                            Número 2:
                            <input type="text" name="txtnum2"> <br>
                            Número 3:
                            <input type="text" name="txtnum3"> <br>
                            Número 4:
                            <input type="text" name="txtnum4"> <br>
                        </div>
                        <div>
                        Número 5:
                            <input type="text" name="txtnum5"> <br>
                            Número 6:
                            <input type="text" name="txtnum6"> <br>
                            Número 7:
                            <input type="text" name="txtnum7"> <br>
                            Número 8:
                            <input type="text" name="txtnum8"> <br>
                        </div>
                        <input type="submit" value="Enviar"> <br>
                    </form>
                    <?php
                        if($_POST)
                        {
                        $x1=$_POST["txtnum1"];
                        $y1=$_POST["txtnum2"];
                        $x2=$_POST["txtnum3"];
                        $y2=$_POST["txtnum4"];
                        $x3=$_POST["txtnum5"];
                        $y3=$_POST["txtnum6"];
                        $x4=$_POST["txtnum7"];
                        $y4=$_POST["txtnum8"];
                
                        $a=sqrt(($x2-$x1)*($x2-$x1)+($y2-$y1)*($y2-$y1));
                        $b=sqrt(($x3-$x2)*($x3-$x2)+($y3-$y2)*($y3-$y2));
                        $c=sqrt(($x4-$x3)*($x4-$x3)+($y4-$y3)*($y4-$y3));
                        $d=sqrt(pow($x1-$x4,2)+pow($y1-$y4,2));
                            if($a<$b and $a<$c and $a<$d)
                            {
                                echo round($a,6);
                            }

                            else if($b<$c and $b<$d)
                            {
                                echo round($b,6);
                            }

                            else if($c<$d)
                            {
                                echo round($c,6);
                            }

                            else
                            {
                                echo round($d,6);
                            }

                        }
                ?>
            </div>
        </main>
    </body>
</html>