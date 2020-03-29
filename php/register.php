<?php
  session_start();
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="">
	</head>
	<body>
		<h1>Want to be part of our updates news letters?
		Sign up below!</h1>
		<?php
			if (isset($_SESSION['message'])) {
			echo "<div id='error'>{$_SESSION['message']}</div>";
			unset($_SESSION['messsage']);
			}
		?>
		<form action="register_handler.php" method="post">
			<div>
				<label for="user">Email:</label>
				<input type="textbox" name="username" />
			</div>
			<div>
				<label for="pass">Password:</label>
				<input type="password" name="password" />
			</div>
			<div>
				<input type="submit" />
			</div>
		</form>
	</body>
</html>