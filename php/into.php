<?php
	$username = $_POST["username"];
	$password = $_POST["password"];
?>
<html>
	<head>
		<title>LOGIN</title>
		<link rel="stylesheet" type="text/css" href="/CSS/login.css">
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
				echo "<script> location.replace('../index.html'); </script>";
			} else {
				$db = mysqli_select_db($conn, "cri")
					or die("Attenzione, errore. Database non trovato ");
				$query = "SELECT *
						  FROM volontari
						  WHERE username = '$username' AND password = '$password'";
				$result = mysqli_query($conn, $query)
					or die("Attenzione, errore ". mysqli_error($conn));
				$count = mysqli_num_rows($result);
				if($count == 1)
				{
					$query = "SELECT level
							  FROM volontari
							  WHERE username = '$username' AND password = '$password'";
					$result = mysqli_query($conn, $query);
					echo "<script> location.replace('../home.html'); </script>";
				} else {
					echo "<script> alert('Username e password non esistenti'); </script>";
					echo "<script> location.replace('../index.html'); </script>";
				}
			}
		?>	
	</body>
</html>