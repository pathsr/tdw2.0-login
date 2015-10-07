<?php /* esto inicia un bloque de codigo php*/
	

	$user = $_GET['usuario'];	
	$pass = $_GET['contraseña'];	/*pass nos permite guardar la contraseña en la variable */

    $loginok = false;   /*sirve para saber si el usuario y clave son validos o no. si es falso quiere decir que el usuario o el pasword no son validos. Si es true entonces el user y pass son permitidos*/
    $uservalidok = false;   /*sirve para saber si el $user existe o no*/
    $passok = false;     /*sirve para saber si el password es correcto o no*/


/*lista de usuarios validos*/
    $usuarios = array("rctorr","zuave","uriel","aura","k", "Perlis", "path");
    $passwords = array("12357tor", "123456ve", "12345678", "1234aura", "123456ka", "555123pe", "00012pat");
        
/*para acceder a un elemento del array se usa: $usuarios[0] -> "rctorr"
$usuarios [3]-> aura */
    for($i=0; $i<=6; $i+=1) {
    /*comparar la variable $user con cada elemnto de la lista de usuarios*/
    if($usuarios[$i] == $user) {
        /*este bloque se ejecuta si la condicion es verdadera y eso es cuando el usuario escribio un user valido*/
        if($passwords[$i] == $pass){
                /*el pass del usuario es correcto*/
            $loginok = true;
            $uservalidok = true;
            $passok = true;
            break;
        } else  {
        /*cuando el pass es incorreccto*/
        $loginok = false;
        $passok = false; 
    }
    }else{
        /*llegamos aqui, por que el usuario escribio un $user que no es valido*/
        $loginok = false;
        $uservalidok = false; 
    }
} /*termina el for*/

    /*recorrer el array de usuarios en busqueda del usuario divino $user*/
		/*si usuario y clave no coinciden entonces terminamos y enviamos un mensaje de error*/
	/*if($user !="rctorr" || $pass!="1234567"){	*/
        
        /*  $loginok <- true    cuando el user y pass son validos o correctos
            $loginok <- false   cuando el user y el passs no som validos*/
        if(!$loginok) {
        /*tenemos que entrar a este bloque cuando el usuario no seaif congi valido*/
	       echo "lo siento hermano no estas autorizado";
        } else { /*inicia bloque autorizado*/

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
