<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulota</title>
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
             margin-top: 25px;">Formulota</h1>
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
            Diseñar un programa que pregunte los valores de las variables x, y, z y evalúe la función f(x, y, z).
        </p>
        <h2>Entrada</h2>
        <p>
            El programa pedirá tres números, uno por renglón, estos podrán ser positivos, negativos o cero, y pudieran tener <br>
             decimales.
        </p>

        <h2>Salida</h2>
        <p>
            La respuesta, o salida a la consola, será el valor de la función f(x, y, z) redondeado a 6 decimales. <br>
            Nota: Se puede usar la función `toFixed(numero, decimales)` para ajustar la salida.
        </p>
        <table border="1">
            <tr>
                <th>Entrada</th>
                <th>Descripción</th>
                <th>Salida</th>
            </tr>
            <tr>
                <td>1 <br> 2 <br> 3 <br> </td>
                <td>0.235714</td>
                <td>0.235714285714286</td>
            </tr>
            <tr>
                <td>a <br> 5 <br> 6 <br> </td>
                <td>0.074477</td>
                <td>0.0744773519163764</td>
            </tr>
            <tr>
                <td>7 <br> 8 <br> 9 <br> </td>
                <td>0.044525</td>
                <td>0.0445247435713634</td>
            </tr>
        </table>
        <hr>
        <div class="form-container">
        <form action="formulota.php" method="post">
            <label for="num">Numero 1:</label>
            <input type="text" name="txtn1"> <br>
            <label for="num">Numero 2:</label>
            <input type="text" name="txtn2"> <br>

            <label for="num">Numero 3:</label>
            <input type="text" name="txtn3"> <br>

            <input type="submit" value="enviar"> <br>
            </form>
        </div>
            <?php
                if($_POST)
                {
                $a=$_POST["txtn1"];
                $b=$_POST["txtn2"];
                $c=$_POST["txtn3"];

                $f1=($a+$b)/(2*$a);
                $f2=(pow($a,3)+pow($b,3))/(($a*$a)+($b*$b));
                $f3=($a*$a)+($b*$b)+($c*$c);
                $ft=($f1+$f2)/($f3);
                echo round($ft,6);
            }
          ?>
    </main>
</body>
</html>