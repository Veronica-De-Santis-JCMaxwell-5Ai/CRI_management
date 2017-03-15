<?php
	$username = $_POST["username"];
	$password = $_POST["password"];
?>
<html>
	<head>
		<title>LOGIN</title>
		<link rel="stylesheet" type="text/css" href="../CSS/login.css">
		<script type="text/javascript" src="../js/utility.js"></script>
	</head>
	<body>
		<?php
			$conn = mysqli_connect("localhost", "root", "")
				or die("Attenzione, errore. Server non trovato");
			$username = mysqli_real_escape_string($conn, $username);
			$password = mysqli_real_escape_string($conn, $password);
			if($password == "Password" or $username == "Username")
			{
				echo "<script> alert('Attenzione, inserisci nome utente e password corretti!'); </script>";
				echo "<script> location.replace('../HTML/login.html'); </script>";
			} else {
				$db = mysqli_select_db($conn, "cri")
					or die("Attenzione, errore. Database non trovato ");
				$query = "SELECT *
						  FROM volontari
						  WHERE username == '$username' AND password == '$password'";
				$result = mysqli_query($conn, $query)
					or die("Attenzione, errore ". mysqli_errno);
				$count = mysqli_num_rows($result);
				if($count == 1)
				{
					$query = "SELECT level
							  FROM volontari
							  WHERE username == '$username' AND password == '$password'";
					$result = mysqli_query($query);
					switch($result)
					{
						case 1:
							echo "<script> location.replace('../HTML/baseHomepage.html'); </script>";
							break;
						case 2:
							echo "<script> location.replace('../HTML/tHomepage.html'); </script>";
							break;
						case 3:
							echo "<script> location.replace('../HTML/aHomepage.html'); </script>";
							break;
					}
				} else {
					echo "<script> alert('Username e password non esistenti'); </script>";
					echo "<script> location.replace('../HTML/login.html'); </script>";
				}
			}
		?>	
	</body>
</html>
