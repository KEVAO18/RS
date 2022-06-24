<?php

function logIn($s, $n)
{
	?>
	<div class="container">
		<div class="row py-4-r">
			<div class="col-ms-12 col-md-2"></div>
			<div class="col-ms-12 col-md-8">
				<div class="card my-4 py-2-r px-2-r shadow">
					<h1 class="display-4 text-center">Welcome</h1>
					<form role="form" id="login_form">
					  <div class="mb-3">
					    <label for="user" class="form-label">User name</label>
					    <input type="email" class="form-control" id="user" aria-describedby="emailHelp">
					  </div>
					  <div class="mb-3">
					    <label for="pass" class="form-label">Password</label>
					    <input type="password" class="form-control" id="pass">
					  </div>
					  <div class="d-grid gap-2">
					  	<button type="submit" id="login_ok" class="btn btn-outline-dark btn-block">Submit</button>
					  </div>
					</form>
				</div>
			</div>
			<div class="col-ms-12 col-md-2"></div>
		</div>
	</div>
		<script>
		    $(document).on("ready", login());

		    function login(){
		      $("#login_ok").on("click", function(e){
		        e.preventDefault();
		        var frm = $("#login_form").serialize();
		        $.ajax({
		          type: "post",
		          url: "<?=$s?>/config/login.php",
		          dataType: "json",
		          data: frm
		        }).done(function (info) {
		        	if (info.status == 2) {
		        		Swal.fire(info.msg,'','error');
		        	} else {
		        		let ale = document.getElementById("login_form");
		        		ale.reset();
		        		Swal.fire(info.msg,'','success');
		        		window.location.href = '<?=$s?>/dashboard';
		        	}
		        })
		      });
		    }
		</script>
	<?php

	if ((isset($_SESSION['user_enc'])) && (password_verify($_SESSION['user'], $_SESSION['user_enc']))) {
		?>
		<script>
			window.location.href = '<?=$s?>/dashboard';
		</script>
		<?php
	}
}

?>