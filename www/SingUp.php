<?php

function singUp($s, $n){
	?>
	<div class="container">
		<div class="row py-3-r">
			<div class="col-ms-12 col-md-2"></div>
			<div class="col-ms-12 col-md-8">
				<div class="card my-4 py-2-r px-2-r shadow">
					<h1 class="display-4 text-center color-negro">Welcome</h1>
					<form role="form" id="login_form">
					  <div class="mb-3">
						<label for="name" class="form-label color-negro">Name</label>
						<input type="name" class="form-control" id="name" aria-describedby="nameHelp" name="name">
					  </div>
					  <div class="mb-3">
					    <label for="last" class="form-label color-negro">Last name</label>
					    <input type="last" class="form-control" id="last" aria-describedby="lastHelp" name="last">
					  </div>
					  <div class="mb-3">
					    <label for="user" class="form-label color-negro">User name</label>
					    <input type="user" class="form-control" id="user" aria-describedby="userHelp" name="user">
					  </div>
					  <div class="mb-3">
					    <label for="pass" class="form-label color-negro">Password</label>
					    <input type="password" class="form-control" id="pass" name="pass">
					  </div>
					  <div class="mb-3">
					    <label for="repass" class="form-label color-negro">re-Password</label>
					    <input type="password" class="form-control" id="repass" name="repass">
					  </div>
					  <div class="mb-3">
					    <label for="email" class="form-label color-negro">E-mail</label>
					    <input type="mail" class="form-control" id="email" aria-describedby="emailHelp" name="email">
					  </div>
					  <div class="d-grid gap-2">
					  	<button type="submit" id="login_ok" class="btn btn-outline-dark btn-block">Submit</button>
					  </div>
					  <p class="text-center pt-1-r color-negro"><small>You have an account? <a class="text-decoration-none color-negro" href="<?=$s?>/LogIn">LogIn</a></small></p>
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
		          url: "<?=$s?>/config/singUp.php",
		          dataType: "json",
		          data: frm
		        }).done(function (info) {
		        	if (info.status == 1) {
		        		let ale = document.getElementById("login_form");
		        		ale.reset();
		        		Swal.fire(info.msg,'','success');
		        	} else {
		        		Swal.fire(info.msg,'','error');
		        	}
		        })
		      });
		    }
		</script>
	<?php
}

?>