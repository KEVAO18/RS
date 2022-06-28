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

	    $_SESSION['page'] = $ruta[0];

	    if ($_SESSION['user'] == "") {
	    	$this->outRoute($ruta, $serve, $appName, $autor);
	    }elseif ($_SESSION['user'] != "") {
	    	$this->inRoute($ruta, $serve, $appName, $autor);
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
	            include_once '../www/LogIn.php';
	            logIn($s, $n);
	            break;
	    }
	}

	public function inRoute($ruta = array(), $s, $n, $autor){

	    switch ($ruta[0]) {

	        case "dashboard":
	        	include_once '../www/logged/'.$ruta[0].'.php';
	        	dashboard();
	            break;

            case 'close':
            	include_once '../www/logged/'.$ruta[0].'.php';
            	close();
            	break;

        	case 'profile':
        		include '../www/logged/'.$ruta[0].'.php';
        		profile();
        		break;

	        case "e403":
	            echo $ruta[0];
	            break;

	        case "e404":
	            echo $ruta[0];
	            break;

	        default:
	            include_once '../www/LogIn.php';
	            echo $ruta[0];
	            break;
	    }
	}
}
?>