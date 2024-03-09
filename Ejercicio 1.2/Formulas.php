<html>
    <head>
        <body>
            <header>
                <div>
                        <h1 style="text-align: center;">12618. Practicando con formulas</h1>
                    </div>
                        <table border="1">
                            <tr>
                                <td>Puntos</td>
                                <td style="text-align: center;">16.79</td>
                                <td>Límite de memoria</td>
                                <td>32 MiB</td>
                            </tr>
                            <tr>
                                <td>Límite de tiempo (caso)</td>
                                <td style="text-align: center;">1s</td>
                                <td>Límite de tiempo (total)</td>
                                <td>1m0s</td>
                            </tr>
                            <tr>
                                <td>Tamaño límite de entrada (bytes)</td>
                                <td style="text-align: center;">10 KiB</td>
                            </tr>
                        </table>
                    </div>
                    <h2>Descripción</h2>
                    <p>Dado un valor real a quieres resolver una serie de ecuaciones hasta obtener el valor de z.</p>
                    <p>
                        x=3a+15 <br>
                        y=x+3/x+1 <br>
                        z=5x+7y/axy <br>
                    </p>
                    <h2>Entrada</h2>
                    <p>Un real a Puedes suponer que 1≤ a ≤100.</p>
                    <h2>Salida</h2>
                    <p>Un real que sea el valor de z impreso con tres puntos decimales. </p>
                    <h2>Ejemplo</h2>
                    <table border="1">
                        <tr>
                            <td>33.562</td>
                            <td>0.148</td>
                        </tr>
                        <tr>
                            <td>72.569</td>
                            <td>0.069</td>
                        </tr>
                        <tr>
                            <td>64.835</td>
                            <td>0.077</td>
                        </tr>
                    </table>
                    <h3>Resultado</h3>
                    <hr>
        </header>
    </body>
</head>
</html>
           <?php
            $a = 33.562;
            $x = 3 * $a + 15;
            $y = $x + 3 / ($x + 1);
            $z = (5 * $x + 7 * $y) / ($a * $x * $y);
            echo number_format($z, 3);
        ?>