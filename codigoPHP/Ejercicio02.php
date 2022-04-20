<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 02</title>
        <style>
            h3{
                color:darkslateblue;
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
             * Desarrollo de un control de acceso con identificación del usuario basado en la función header() y en el uso de una tabla Usuario .
             */
            echo "<h3> *Desarrollo de un control de acceso con identificación del usuario basado en la función header() y en el uso de una tabla Usuario de la base de datos.*</h3>";
            
            
            if(!isset($_SERVER['PHP_AUTH_USER']) || (!isset($_SERVER['PHP_AUTH_PW']))){
                header('WWW-Authenticate: Basic realm="Mi dominio"');
                header('HTTP/1.0 401 Unauthorized');
                echo"<p style='background-color:red;'>Error ";
                exit;
            }else{
                try{
                    require_once '../config/confDBPDO.php';

                    $miDB= new PDO(HOST,USER,PASSWORD); //Objeto de la clase pdopara la conexion
                    $miDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //atributos por si aparecen errore

                    $usuarioIntroducido= $_SERVER['PHP_AUTH_USER']; //Guardo el usuario introducido
                    $passwordIntroducido= $_SERVER['PHP_AUTH_PW']; //Guardo el password introducido

                    $consulta ="SELECT T01_CodUsuario, T01_Password from T01_Usuario WHERE T01_CodUsuario='$usuarioIntroducido'";
                    $resultadoConsulta=$miDB->prepare($consulta); //Preparar la consulta
                    $resultadoConsulta->execute(); //Ejecutar la consulta

                    $oUsuario= $resultadoConsulta->fetchObject(); //El resultado de la consulta lo guarda en un objeto
                    if($resultadoConsulta->rowCount()>0){ //Si devuelve algo
                        $passwordIntroducidoEncriptado=hash("sha256", $usuarioIntroducido.$passwordIntroducido);
                        if(($oUsuario->T01_CodUsuario == $usuarioIntroducido) && ($oUsuario->T01_Password != $passwordIntroducidoEncriptado)){ //Si no coincide
                            header('WWW-Authenticate: Basic realm="Mi dominio"');
                            header('HTTP/1.0 401 Unauthorized');//Muestrar pagina de error
                            echo"<p style='background-color:red;'>Texto a enviar ";
                            exit;                        
                        }else{
                            echo"<p Hola $usuarioIntroducido</p>";
                            echo "<p>Su contraseña encriptrada es --> $passwordIntroducidoEncriptado</p>";
                        }
                    }
                }catch(PDOException $excepcion) {     //Pero se no se ha podido ejecutar saltara la excepcion
                    $codigoError = $excepcion->getCode();      //guardamos en una variable el error
                    $mensajeError = $excepcion->getMessage();//guardamos en una variable el mensaje del error 

                    echo "<p style='background-color:red'> Codigo de error: ".$codigoError;        //Mostramos el error
                    echo "<p style='background-color: red;'> Mensaje de error:". $mensajeError; //Mostramos el mensaje de error

                }finally{//Para finalizar cerramos la conexion a la base de datos
                     unset($miDB);
                }
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

