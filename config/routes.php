<?php
/**
 * 
 */
class routes{
	

	function __construct($serve, $appName, $autor){
	    
	    $ruta = array();
	    if (isset($_GET["p"])) {
	        $p = $_GET["p"];
	        $ruta = explode("/", $p);
	    }

	    switch ($ruta[0]) {

	        case "Home":
	        	include_once '../www/'.$ruta[0].'.php';
	        	home();
	            break;

            case 'LogIn':
            	include_once '../www/'.$ruta[0].'.php';
            	logIn();
            	break;

        	case 'SingUp':
        		include_once '../www/'.$ruta[0].'.php';
        		singIn();
        		break;

	        case "e403":
	            echo $ruta[0];
	            break;

	        case "e404":
	            echo $ruta[0];
	            break;

	        default:
	            include "../web/views/e404.php";
	            e404($serve);
	            break;
	    }
	}
}
?>