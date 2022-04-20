<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 01</title>
        <style>
            h3{
                color:darkslateblue;
            }
            h1{
                font-size: 22px;
            }
            h2{
                text-align: center;
                font-weight: bold;
            }
            table{
                border: solid 2px black;
            }
            th{
                background: blue;
                color:white;
            }
            td{
                border: solid 1px black;
                background: bisque;
            }
        </style>
    </head>
    <body>
        <?php
            /*
             * @author: Johanna Herrero Pozuelo
             * Created on: 20/04/2022
             * Desarrollo de un control de acceso con identificación del usuario basado en la función header()..
            */
            echo "<h3> *Desarrollo de un control de acceso con identificación del usuario basado en la función header().*</h3>";
            
            
            if($_SERVER['PHP_AUTH_USER']!='admin' || $_SERVER['PHP_AUTH_PW']!='paso'){ //Si el usuario o la contraseña es distinto de paso o admin
                header('WWW-Authenticate: Basic realm="Mi dominio"');
                header('HTTP/1.0 401 Unauthorized');
                exit;
            }else{// Si el usuario y la contraseña son correctos mostramos los datos
                echo"<h1>Hola {$_SERVER['PHP_AUTH_USER']}.</h1>";
                echo "<h1>Introdujo {$_SERVER['PHP_AUTH_PW']} como su contraseña.</h1>";
            }
            
            //Mostrar variable $_SERVER
            echo "<br>";
            echo "<br>";
                echo "<h2>Variable SERVER</h2><br>";
                echo "<table>";
                echo"<tr>";
                echo"<th>Clave</th>";
                echo "<th>Valor</th>";
                echo "</tr>";
                foreach ($_SERVER as $clave => $valor) {
                   echo "<tr>";
                   echo "<td>$clave</td>";
                   echo "<td>$valor</td>";
                   echo "</tr>";
                }
                echo '</table>';
?>
    </body>
</html>

