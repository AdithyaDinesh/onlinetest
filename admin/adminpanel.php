		<aside id="sidenav" class="col-md-2">

			<p>
				Logged In as : 
				<?php echo $_SESSION['admin']; ?>
				<a href="../logout.php">LOGOUT</a>
			</p>
			<div><a id="links" style="text-decoration: none; display: flex; flex-direction: row; justify-content: center; align-items: center; color: #fff;" href="index.php?navId=1"><i class="material-icons">help</i><span style="height: 4em; line-height: 4em; display: inline-block;">&nbsp;Question Bank</span></a></div>
			<div><a id="links" style="text-decoration: none; display: flex; flex-direction: row; justify-content: center; align-items: center; color: #fff;" href="index.php?navId=2"><i class="material-icons">add_circle</i><span style="height: 4em; line-height: 4em; display: inline-block;">&nbsp;Add Questain</span></a></div>
			<div><a id="links" style="text-decoration: none; display: flex; flex-direction: row; justify-content: center; align-items: center; color: #fff;" href="index.php?navId=3"><i class="material-icons">account_circle</i>&nbsp;View Users</a></div>
					</aside >
					<section class="col-md-10"><br>
						<?php
						$option=$_GET['navId'];
							switch ($option) {
								case '1': include 'qbank.php';
									break;
								case '2': include 'addQ.php';
									break;
								case '3': include 'viewusers.php';
									break;
								
								default: include 'qbank.php';
									# code...
									break;
							}
						?>
					
					</section>