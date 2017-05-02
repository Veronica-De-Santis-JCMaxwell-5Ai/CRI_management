<?php
	$conn = mysqli_connect("localhost", "root", "")
		or die("Attenzione, errore. Server non trovato");
	$db = mysqli_select_db($conn, "cri")
		or die("Attenzione, errore. Database non trovato ");
	$comune = $_POST['Comune'];
	$indirizzo = $_POST['Indirizzo'];
	if(isset($_POST['Numero']))
	{
		$numero = $_POST['Numero'];
	}
	else $numero = "NULL";
	if(isset($_POST['Piano']))
	{
		$piano = $_POST['Piano'];
	}
	else $piano = "NULL";
	$nome = $_POST['Nome'];
	$cognome = $_POST['Cognome'];
	$codice = $_POST['Codice'];
	$allarme = $_POST['Allarme'];
	$allarme = $allarme.':00';
	$data_temp = $_POST['Data'];
	$data = date('Y-m-d', strtotime($data_temp));
	$query = "INSERT INTO `chiamate` VALUES ('$codice', '$comune', '$indirizzo', '$numero', '$piano', '$nome', '$cognome', '$allarme', '$data', '0');";
	//$query = mysqli_real_escape_string($conn, $query);
	$result = mysqli_query($conn, $query)
		or die("Attenzione, errore ". mysqli_error($conn));
	echo "<script>alert('Inserimento riuscito!'); location.replace('../home.html'); </script>";
?>
<html>
	<head>
		<title>Homepage</title>
		<link rel="stylesheet" type="text/css" href="/CSS/index.css">	
		<link rel="stylesheet" type="text/css" href="/CSS/table.css">
        <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
	</head>
	<body>
		<div style="background-color:#666;">
			<h1 align="center" style="color:#FFF;">CRI System</h1>
			<h4 align="center" style="color:#FFF;">Home Page</h4>
		</div>
		<dir>
			<button class="btn" onClick="location.replace('118Call.php');">CHIAMATA 118</button>
		</dir>
		<dir>
			<button class="btn" onclick="location.replace('openService.php');">SERVIZIO DI BASE</button>
		</dir>
		<dir>
			<button class="btn" onClick="location.replace('trasporti.php');">TRASPORTO</button>
		</dir>
		<dir>
			<button class="btn" onclick="location.replace('dialisi.php');">DIALISI</button>
		</dir>
	</body>
</html>
