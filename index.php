<!DOCTYPE html>

<html>
    <head>
        <title>Johanna Herrero Pozuelo</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <style>
	@import url('http://fonts.cdnfonts.com/css/04b30');
	@import url('http://www.fontsaddict.com/fontface/mario-kart-ds-regular.ttf');
			/* 
				Author     : johanna Herrero Pozuelo
				
			*/
			
body{
	font-family:OCR A Std, monospace;
	/*background-image: url(images/retro4.jpg); */
     /* background-image: url("https://acegif.com/wp-content/gif/snwflks-5.gif"); */
	background-repeat:no-repeat;
	background-color:rgb(215, 185, 250);
        background-size: cover;
	
}
/* caja titulo */
h2{ 
	font-family: '04b', sans-serif;
	text-shadow: black 0.1em 0.1em 0.2em;
	text-align:center;
	padding:10px;
	color:crimson;
	background-color:blueviolet;
	margin-top:0%;
	border: 8px dotted blue;
}
h2:nth-of-type(2){
        font-size: 18px;
        width: 140px;height: 20px;
        border: none;
        border-radius: 50%;
}
h2:nth-of-type(2) a{
    text-decoration: none;
    color:red;
}
/*caja debajo de titulo*/
			
.ver, .play{
    margin-left:25px;
    display: inline-block;
}

table {
	margin: 4rem auto;
	table-layout: fixed;
	width: 80%;
	height:100px;
	color:white;
	border-collapse: collapse;
	border: 4px solid black;
	text-align:left;
	padding:2px;
        font-weight: bold;
}
td{
        background: darkorchid;
	text-align:left;
        font-weight: bold;
	border: 4px solid black;width:90px;
}
th{
        background: darkorchid;
        border: 4px solid black;
}
footer{
       background: blueviolet;
       border-radius: 5px 5px 5px 5px;
       font-weight: bold;
       position: fixed;
       bottom: -1px;
       width: 100%;
       height: 60px;
       color: black;
       text-align: center;
       padding: 2px;
       vertical-align: middle;
}
a img{
        display: flex;
	margin:auto;
	width:35px;
	height:35px;
}
strong{
        font-size: 20px;
}
strong a{
        color:black;
        text-decoration: none;
}
strong a:hover{
        color:blue;
}
.t2{
        margin-top: 40px;
        background: darkblue;
        text-align: center;
        font-size: 32px;
}
.t2:hover{
    background:green;
    color: fuchsia;
}
#especial{
    color:yellow;
    font-size: 20px;
}
.t2{
    margin-top: 40px;
    background: darkblue;
    text-align: center;
    font-size: 32px;
}
.t2 a{
    text-decoration: none;
    color: white;
}
.t2:hover{
    background:green;
    color: fuchsia;
}
		</style>
    </head>
    <body>
        <header>
            <h2>PROYECTO TEMA5 </h2> 
            <h2><a href="../212ProyectoDWES/indexProyectoDWES.php" >VOLVER</a></h2>
	<div class="caja1"></div>
	</header> 
        <main>
		<table class="t1">
                <tr>
                    <th> Crear BD Desarrollo<a href="mostrarCodigo/mostrarSCreacion.php" ><img src="../images/codigo.png" class="ver" width="40" height="40"></a></th>
                    <th>Cargar Desarrollo<a href="mostrarCodigo/mostrarSCarga.php"><img src="../images/codigo.png" class="ver" width="40" height="40"></a></th>
                    <th>Borrar Desarrollo<a href="mostrarCodigo/mostrarSBorrado.php"><img src="../images/codigo.png" class="ver" width="40" height="40"></a></th>
                </tr>
                <tr>
                    <th>Crear BD Explotacion<a href="scriptDB/CrearDAW212DBProyectoTema5EX.php"><img src="../images/ver.png" class="ver" width="40" height="40"></a><a href="mostrarCodigo/mostrarSCrearEx.php" ><img src="../images/codigo.png" class="play" width="30" height="30" ></td></th>
                    <th>Cargar Explotacion<a href="scriptDB/CargaInicialDAWDBProyectoTema5EX.php"><img src="../images/ver.png" class="ver" width="40" height="40"></a><a href="mostrarCodigo/mostrarSCargarEx.php"><img src="../images/codigo.png" class="play" width="30" height="30" ></td></th>
                    <th>Borrar Explotacion<a href="scriptDB/BorraDAW212DBProyectoTema5EX.php"><img src="../images/ver.png" class="ver" width="40" height="40"></a><a href="mostrarCodigo/mostrarSBorrarEx.php"><img src="../images/codigo.png" class="play" width="30" height="30" ></td></th>
                </tr>
            </table>
		<table class="default">
                    <tr class="c1">
                      <th class="p1">0. Mostrar el contenido de las variables superglobales y phpinfo().</th>
                        <td><a href="codigoPhp/Ejercicio00.php">
			<img src="../images/ver.png" class="ver" width="40" height="40" ></td>
                        <td><a href="mostrarCodigo/mEjercicio00.php" >
			<img src="../images/codigo.png" class="play" width="30" height="30" ></td>
                    </tr>
                    <tr>
			<th>1. Desarrollo de un control de acceso con identificación del usuario basado en la función header().</th>
                        <td><a  href="codigoPhp/Ejercicio01.php" >
                            <img src="../images/ver.png" class="ver" width="40" height="40" ></td>
                            <td><a href="mostrarCodigo/mEjercicio01.php"  >
			<img src="../images/codigo.png" class="play" width="30" height="30" ></td>
                    </tr>
                    <tr>
			<th>2. Desarrollo de un control de acceso con identificación del usuario basado en la función header() y en el uso de una tabla “Usuario” de la base de datos. (PDO). </th>
                        <td><a  href="codigoPhp/Ejercicio02.php" >
			<img src="../images/ver.png" class="ver" width="40" height="40" ></td>
                        <td><a href="mostrarCodigo/mEjercicio02.php" >
			<img src="../images/codigo.png" class="play" width="30" height="30" ></td>
                    </tr>
		</table>
                <table class="t2">
                        <tr>
                            <th><a href="../212LoginLogoutTema5/indexInicio.php">LOGIN LOGOUT TEMA5</a></th>
                            <!--<th><a href="../LoginLogoffTema5/codigoPHP/LogIn.php">APLICACIÓN TEMA5</a></th>-->
                        </tr>
                </table>
        </main>
         <footer>
        2021-2022 I.E.S. Los sauces. ©Todos los derechos reservados. <strong> <a href="http://daw212.sauces.local/">Johanna Herrero Pozuelo</a></strong>
            <a href="https://github.com/JohannaHPSauces/212ProyectoTema5" target="blank"><img src="../images/git.png" alt="" class="git"></a>
        </footer>	
    </body>
</html>
