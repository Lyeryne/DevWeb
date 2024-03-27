<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<?php
			$user=$_SESSION["user"];
			echo "Bonjour, $user";
		?>
	</body>
</html>