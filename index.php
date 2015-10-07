<?php /* esto inicia un bloque de codigo php*/
	

	$user = $_GET['usuario'];	
	$pass = $_GET['contraseña'];	/*pass nos permite guardar la contraseña en la variable */

		/*si usuario y clave no coinciden entonces terminamos y enviamos un mensaje de error*/
	if($user !="rctorr" || $pass!="1234567"){	
	echo "lo siento hermano no estas autorizado";
	}else{ /*inicia bloque autorizado*/

/*si llegamos hasta aqui, es porque el usuario es valedor y continuamos*/
/* esto inicia un bloque de codigo php*/
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
     <link rel="stylesheet" href="css/main.css"> 
   <title>Base</title>
</head>

<body>
    	<header> <!-- encabezado -->
                <aside> <span class="naranja">Mi primer login</span> </aside>
                <nav>
                    <a class="activo" href="index.html">Inicio</a>
                    |   
                    <a href=" ">Ingresar</a>
                    |
                    <a href=" ">Nuevo usuario</a>
                </nav>
    	</header>

        <div id="contenido">
		<p>Felicidades, bienvenido a mi mundo!<p>
        </div>  <!--termina contenido-->

        <footer> 
             <p>Copyleft:TDW2.0</p>
        </footer>
    
</body>
</html>

<?php
}/*termina bloque autorizado*/
?>
