<?php

	function close(){
		$_SESSION['user'] = "";
		$_SESSION['status'] = 0;
		?>
		<script>
		    window.location.href = 'LogIn';
		</script>
		<?php
	}

?>