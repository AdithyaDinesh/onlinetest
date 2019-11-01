
	<div class="container-fluid row1">
		<div class="row ">
			<div class="col-md-4" id="login">
					<h3 class="text-center">Admin Login</h3><br>
				<form class="form-group" action="log.php" method="POST" id="acc">
					<input class="form-control" type="text" placeholder="Username" name="username">
					<input class="form-control" type="password" placeholder="Password" name="password">
					<input class="form-control" type="submit" name="submit" id="submit" value="Login">
				</form>
					<span class="text-center" style="margin-left:35%; color: red;"><?php #echo $_SESSION['adminerr'];?></span>
			</div>
			
		</div>
	</div>