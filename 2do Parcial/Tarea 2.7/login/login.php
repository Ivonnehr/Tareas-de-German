<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        
    </style>
</body>
</html>
<?php
    if($_POST)
    { 
        $login=$_POST['txtlogin'];
        $pass=$_POST['txtpassword'];

        $conexion=mysqli_connect('localhost', 'root', '121207hr12','sistema','3306');

        $consulta="select * from usuarios
        where login='$login' && password= sha1('$pass')"; 

        $resultado=mysqli_query($conexion, $consulta);

        echo "<table border=1>";
        while($mostrar=mysqli_fetch_array($resultado))
        {
            echo "<tr>";
            echo "<td>". $mostrar['login']. "</td>";
            echo "<td>". $mostrar['password']. "</td>";
            echo "</tr>";
        }
        
        mysqli_close($conexion);
    }
?>