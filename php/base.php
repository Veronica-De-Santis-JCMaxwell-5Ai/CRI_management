<?php
	$code = $_POST['idcd'];
	$conn = mysqli_connect("localhost", "root", "")
		or die("Attenzione, errore. Server non trovato");
	$db = mysqli_select_db($conn, "cri")
		or die("Attenzione, errore. Database non trovato ");
	$query = "SELECT * FROM chiamate WHERE codice = '$code'";
	$result = mysqli_query($conn, $query)
		or die("Attenzione, errore ". mysqli_error($conn));
	$row = mysqli_fetch_array($result);
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
			<button class="btn" onclick="location.replace('../home.html');">SERVIZIO DI BASE</button>
			
			<div id = "base">
				<form method = "post" action = "updateCall.php">
				
					<div style="background-color:#666;">
						<h4 align="center" style="color:#FFF;">Info</h4>
					</div>
					<div class = "login-form">
						<div class = "control-group">
							<input type = "date" value = "<?php echo $row['data']; ?>" name = "Data" onFocus="this.value = ''" required>
						</div>
						<div class = "control-group">
							<input type = "text" value = "Sigla ambulanza" id = "Sigla" name = "Sigla" onFocus="this.value = ''" onchange = "deleteOnFocus('Sigla')"required>
						</div>
						<div class = "control-group">
							<input type = "text" value = "<?php echo $row['codice']; ?>" name = "Codice" id = "Codice" onFocus="this.value = ''" onchange="deleteOnFocus('Codice')" required>
						</div>
					</div>
					
					<div style="background-color:#666;">
						<h4 align="center" style="color:#FFF;">Equipaggio</h4>
					</div>
					<div class = "login-form">
						<div class = "control-group">
							<input type = "text" value = "Autista" name = "Autista" id = "Autista" onFocus="this.value = ''" onchange = "deleteOnFocus('Autista')" required>
						</div>
						<div class = "control-group">
							<input type = "text" value = "Barrelliere" name = "Barrelliere" id = "Barrelliere" onFocus="this.value = ''" onchange = "deleteOnFocus('Barrelliere')" required>
						</div>
						<div class = "control-group">
							<input type = "text" value = "Affiancato" name = "Affiancato" id = "Affiancato" onFocus="this.value = ''" onchange = "deleteOnFocus('Affiancato')" required>
						</div>
					</div>
					
					<div style="background-color:#666;">
						<h4 align="center" style="color:#FFF;">Localita'</h4>
					</div>
					<div class = "login-form">
						<div class = "control-group">
							<input type = "text" value = "<?php echo $row['localita']; ?>" name = "Localita" id = "Localita" onFocus="this.value = ''" onchange = "deleteOnFocus('Localita')" required>
						</div>
						<div class = "control-group">
							<input type = "text" value = "<?php echo $row['indirizzo']; ?>" name = "Indirizzo" id = "Indirizzo" onFocus="this.value = ''" onchange = "deleteOnFocus('Indirizzo')" required>
						</div>
					</div>
					<div style="background-color:#666;">
						<h4 align="center" style="color:#FFF;">Info paziente</h4>
					</div>
					<div class = "login-form">
						<div class = "control-group">
							<input type = "text" value = "<?php echo $row['nome']; ?>" name = "Nome" id = "Nome" onFocus="this.value = ''" onchange = "deleteOnFocus('Nome')" required>
						</div>
						<div class = "control-group">
							<input type = "text" value = "<?php echo $row['cognome']; ?>" name = "Cognome" id = "Cognome" onFocus="this.value = ''" onchange = "deleteOnFocus('Cognome')" required>
						</div>
						<div class = "control-group">
							<input type = "date" id = "Nascita" name = "dataNascita" onFocus="this.value = ''" onchange = "deleteOnFocus('Nascita')">
						</div>
						<div class = "control-group">
							<input type = "text" value = "Eta'" name = "eta" id = "Eta" onFocus="this.value = ''" onchange = "deleteOnFocus('Eta')" required>
						</div>
						<div class = "control-group">
							<input type = "text" value = "C.F." name = "CF" id = "CF" onFocus="this.value = ''" onchange = "deleteOnFocus('CF')" required>
						</div>
						<div class = "control-group">
							<input type = "text" value = "Residenza" name = "Residenza" id = "Residenza" onFocus="this.value = ''" onchange = "deleteOnFocus('Residenza')" required>
						</div>
						<div class = "control-group">
							<input type = "text" value = "Comune" name = "Comune" id = "Comune" onFocus="this.value = ''" onchange = "deleteOnFocus('Comune')" required>
						</div>
						<div class = "control-group">
							<input type = "text" value = "Cittadinanza" name = "Cittadinanza" id = "Cittadinanza" onFocus="this.value = ''" onchange = "deleteOnFocus('Cittadinanza')" required>
						</div>
					</div>
					
					<div style="background-color:#666;">
						<h4 align="center" style="color:#FFF;">Orari</h4>
					</div>
					<div class = "login-form">
						<div class = "control-group">
							<input type = "time" value = "<?php echo $row['allarme']; ?>" name = "Allarme" onFocus="this.value = ''" required>
						</div>
						<div class = "control-group">
							<input type = "time" name = "PartenzaSede" onFocus="this.value = ''" required>
						</div>
						<div class = "control-group">
							<input type = "time" name = "ArrivoTarget" onFocus="this.value = ''" required>
						</div>
						<div class = "control-group">
							<input type = "time" name = "PartenzaTarget" onFocus="this.value = ''" required>
						</div>
						<div class = "control-group">
							<input type = "time" name = "ArrivoOspedale" onFocus="this.value = ''" required>
						</div>
						<div class = "control-group">
							<input type = "time" name = "Operativo" onFocus="this.value = ''" required>
						</div>
					</div>
					
					<div class="control-group">
						<input class="btn btn-primary btn-large btn-block btnsub" type = "submit" id = "login" value = "Avanti">
					</div>
				</form>
			</div>
		</dir>
		<dir>
			<button class="btn" onClick="location.replace('trasporti.php');">TRASPORTO</button>
			<p id = "118">
			</p>
		</dir>
		<dir>
			<button class="btn" onclick="location.replace('dialisi.php');">DIALISI</button>
			<p id = "118">
			</p>
		</dir>
	</body>
</html>
