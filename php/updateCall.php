<?php
	$conn = mysqli_connect("localhost", "root", "")
		or die("Attenzione, errore. Server non trovato");
	$db = mysqli_select_db($conn, "cri")
		or die("Attenzione, errore. Database non trovato ");
	$data_temp = $_POST['Data'];
	$data = date('Y-m-d', strtotime($data_temp));
	$sigla = $_POST['Sigla'];
	$codice = $_POST['Codice'];
	
	$autista = $_POST['Autista'];
	$barrelliere1 = $_POST['Barrelliere'];
	$barrelliere2 = $_POST['Affiancato'];
	
	$localita = $_POST['Localita'];
	$indirizzo = $_POST['Indirizzo'];
	$nome = $_POST['Nome'];
	$cognome = $_POST['Cognome'];
	$dataNascita_temp = $_POST['dataNascita'];
	$dataNascita = date('Y-m-d', strtotime($dataNascita_temp));
	$eta = $_POST['eta'];
	$cf = $_POST['CF'];
	$residenza = $_POST['Residenza'];
	$comune = $_POST['Comune'];
	$cittadinanza = $_POST['Cittadinanza'];
	
	$allarme = $_POST['Allarme'];
	$allarme = $allarme.':00';
	$partenzaS = $_POST['PartenzaSede'];
	$partenzaS = $partenzaS.':00';
	$arrivoT = $_POST['ArrivoTarget'];
	$arrivoT = $arrivoT.':00';
	$partenzaT = $_POST['PartenzaTarget'];
	$partenzaT = $partenzaT.':00';
	$arrivoO = $_POST['ArrivoOspedale'];
	$arrivoO = $arrivoO.':00';
	$operativo = $_POST['Operativo'];
	$operativo = $operativo.':00';
	$query = "UPDATE chiamate SET 'isClosed' = '1' WHERE 'codice' = '$codice'";
	$result = mysqli_query($conn, $query)
		or die("Attenzione, errore ". mysqli_error($conn));
		
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
	
	$query = "INSERT INTO emergenza VALUES('$codice','$sigla','$allarme','$partenzaS','$arrivoT','$partenzaT','$arrivoO','$operativo','$cf','$autista','$barrelliere1','$barrelliere2');";
	$result = mysqli_query($conn, $query)
		or die("Attenzione errore ". mysqli_error($conn));
		
	$query = "INSERT INTO pazienti 
	echo "<script>alert('Inserimento riuscito!'); location.replace('../home.html'); </script>";
?>
<html>
	<head>
		<title>Homepage</title>
		<link rel="stylesheet" type="text/css" href="/CSS/index.css">	
		<link rel="stylesheet" type="text/css" href="/CSS/table.css">
        <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
		<script type="text/javascript" src="/js/utility.js"></script>
	</head>
	<body>
		<div style="background-color:#666;">
			<h1 align="center" style="color:#FFF;">CRI System</h1>
			<h4 align="center" style="color:#FFF;">Home Page</h4>
		</div>
		<dir>
			<button class="btn" onclick="location.replace('118Call.php');">CHIAMATA 118</button>
		</dir>
		<dir>
			<button class="btn" onclick="location.replace('openService.php');">SERVIZIO DI BASE</button>
		</dir>
		<dir>
			<button class="btn" onClick="location.replace('trasporti.php');">TRASPORTO</button>
		</dir>
		<dir>
			<button class="btn" onclick="location.replace('dialisi.html');">DIALISI</button>
		</dir>
	</body>
</html>
