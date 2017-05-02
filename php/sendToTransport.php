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
			<button class="btn" onClick="location.replace('trasporti.html');">TRASPORTO</button>
		</dir>
		<dir>
			<button class="btn" onclick="location.replace('dialisi.html');">DIALISI</button>
		</dir>
	</body>
</html>
<?php
	$conn = mysqli_connect("localhost", "root", "")
		or die("Attenzione, errore. Server non trovato");
	$db = mysqli_select_db($conn, "cri")
		or die("Attenzione, errore. Database non trovato ");
	$query = "SELECT COUNT(*) AS id FROM trasporti";
	$result = mysqli_query($conn, $query)
		or die("Attenzione, errore ". mysqli_error($conn));
	$row = mysqli_fetch_array($result);
	$codT = $row['id'];
	$codT++;
	$autista = $_POST['Autista'];
	$barrelliere1 = $_POST['Barrelliere'];
	$barrelliere2 = $_POST['Affiancato'];
	$nome = $_POST['Nome'];
	$cognome = $_POST['Cognome'];
	$dataNascita_temp = $_POST['DataNascita'];
	$dataNascita = date('Y-m-d', strtotime($dataNascita_temp));
	$cf = $_POST['CF'];
	$nazionalita = $_POST['Nazionalita'];
	$comune = $_POST['Comune'];
	$indirizzo = $_POST['Indirizzo'];
	$dataTrasporto_temp = $_POST['DataTrasporto'];
	$dataTrasporto = date('Y-m-d', strtotime($dataTrasporto_temp));
	$sigla = $_POST['SiglaAmbulanza'];
	$orario = $_POST['Orario'];
	$orario = $orario.':00';
	$trasportatoDa = $_POST['TrasportoDa'];
	$trasportatoA = $_POST['TrasportoA'];
	
	$query = "SELECT matricola FROM volontari WHERE cognome = '$autista'";
	$result = mysqli_query($conn, $query)
		or die("Attenzione, errore ". mysqli_error($conn));
	$row = mysqli_fetch_array($result);
	$autista = $row['matricola'];
	
	$query = "SELECT matricola FROM volontari WHERE cognome = '$barrelliere1'";
	$result = mysqli_query($conn, $query)
		or die("Attenzione, errore ". mysqli_error($conn));
	$row = mysqli_fetch_array($result);
	$barrelliere1 = $row['matricola'];
	
	$query = "SELECT matricola FROM volontari WHERE cognome = '$barrelliere2'";
	$result = mysqli_query($conn, $query)
		or die("Attenzione, errore ". mysqli_error($conn));
	$row = mysqli_fetch_array($result);
	$barrelliere2 = $row['matricola'];
		
	$query = "INSERT INTO trasporti VALUES($codT, '$dataTrasporto', $sigla, '$orario', '$trasportatoDa', '$trasportatoA', '$cf', $autista, $barrelliere1, $barrelliere2);";
	$result = mysqli_query($conn, $query)
		or die("Attenzione, errore ". mysqli_error($conn));
	
	$query = "SELECT COUNT(*) AS isThere FROM pazienti WHERE cf = '$cf';";
	$result = mysqli_query($conn, $query)
		or die("Attenzione, errore ". mysqli_error($conn));
	$row = mysqli_fetch_array($result);
	if($row['isThere'])
	{
		$query = "INSERT INTO pazienti VALUES('$nome', '$cognome', '$dataNascita', $cf', '$indirizzo', '$comune', '$nazionalita');";
		$result = mysqli_query($conn, $query)
			or die("Attenzione, errore ". mysqli_error($conn));
	}
	echo "<script>alert('Inserimento riuscito!'); location.replace('../home.html'); </script>";
?>
