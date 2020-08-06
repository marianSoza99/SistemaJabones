<body class="grey lighten-4">
	<nav class="white z-depth-100">
		<div class="container">
			<a href="index.php"class="brand-logo brand-text center">Sistema de Jabones</a>
			<ul id="nav-mbile" class="right hide-on-small-and-down">
			<?php
				if(!isset($_SESSION['usuario'])){
					echo '<l1><a href="Signin.php" style="margin-top:10%;margin-bottom:10%" class="btn brand-register z-depth-0">Sign in</a></l1>';
				}else{
					if($_SESSION['usuario']===''){
						echo '<l1><a href="Signin.php" style="margin-top:10%;margin-bottom:10%" class="btn brand-register z-depth-0">Sign in</a></l1>';
					}else{
						echo '<l1><a href="backend/controller.php?action=logout" style="margin-top:10%;margin-bottom:10%" class="btn brand-register z-depth-0">Log out</a></l1>';
					}
				}
			?>
			
			</ul>
		</div>
	</nav>
