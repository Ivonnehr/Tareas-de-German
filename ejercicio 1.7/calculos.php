<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculos condicionales</title>
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
             margin-top: 25px;">7050. Cálculos condicionales</h1>
        </div>
    </header>

    <main>
        <center>
            <table border="2">
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
            Eres muy bueno evaluando fórmulas y realizando cálculos directos, pero te cuesta trabajo decidir en qué situaciones se <br>
            deben hacer qué operaciones. Un compañero te sugirió un ejercicio de cálculo mental que consiste en, dado un número inicial N, <br>
            realizar las siguientes operaciones en el orden indicado y con aritmética entera:
        </p>
            <ol>
                <li >
                    Si el valor actual de "N" es par, divídelo entre 2. En caso contrario, súmale 1. <br>
                </li>
                <li>
                    Si el valor actual de "N" tiene tres o más cifras, divídelo entre 100. Pero si tiene exactamente dos cifras, divídelo entre 10. <br>
                </li>
                <li>
                    Si el valor actual de "N" es un múltiplo de tres, réstale uno.
                </li>
            </ol>
        <h2>Entrada</h2>
        <p>
            Un entero N puedes suponer que 1 &lt; N &lt; 1000
        </p>

        <h2>Salida</h2>
        <p>
            Dos enteros que correspondan con el valor final de N y el número de veces que N fue modificado respectivamente.
        </p>
        <table border="1">
            <tr>
                <th>Entrada</th>
                <th>Salida</th>
            </tr>
            <tr>
                <td>7</td>
                <td>8 1</td>
            </tr>
        </table>
        <hr>
        <div class="form-container">
            <form action="calculos.php" method="post">
                <h2>Calculos</h2>
                <label for="num">Un numero:</label>
                <input type="text" id="num" name="num">

                <input type="submit" value="Enviar"> <br>
            </form>
            <?php
                if($_POST)
                {
                    $a=$_POST["num"];
                    $b=0;
                    if ($a%2==0)
                    {
                        $a/=2;
                        $b++;    
                    }
                    else
                    {
                        $a+=1;
                        $b++;
                    }

                    if($a%3==0)
                    {
                        $a-=1;
                        $b++;
                    }
                    echo $a . " " . $b;
                }
            ?>
        </div>
    </main>
</body>
</html>