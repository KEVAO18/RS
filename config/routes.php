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

	    session_start();

	    if (!isset($_SESSION['userRedS'])) {
	    	$this->outRoute($ruta, $serve, $appName, $autor);
	    }
	}

	public function outRoute($ruta = array(), $s, $n, $autor){
	    switch ($ruta[0]) {

	        case "Home":
	        	include_once '../www/'.$ruta[0].'.php';
	        	home();
	            break;

            case 'LogIn':
            	include_once '../www/'.$ruta[0].'.php';
            	logIn($s, $n);
            	break;

        	case 'SingUp':
        		include_once '../www/'.$ruta[0].'.php';
        		singUp($s, $n);
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