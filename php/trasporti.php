<html>
	<head>
		<title>Homepage</title>
		<link rel="stylesheet" type="text/css" href="/CSS/index.css">	
		<link rel="stylesheet" type="text/css" href="/CSS/table.css">
        <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
		<script type="text/javascript" src="../js/utility.js"></script>
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
			<button class="btn" onclick="location.replace('../home.html');">TRASPORTI</button>
			<div id = "trasporti">
				<form method = "post" action = "sendToTransport.php">
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
							<input type = "text" value = "Affiancato" name = "Affiancato" id = "Affaincato" onFocus="this.value = ''" onchange = "deleteOnFocus('Affiancato')" >
						</div>
					</div>
					<div style="background-color:#666;">
						<h4 align="center" style="color:#FFF;">Info paziente</h4>
					</div>
					<div class = "login-form">
						<div class = "control-group">
							<input type = "text" value = "Nome" name = "Nome" id = "Nome" onFocus="this.value = ''" onchange = "deleteOnFocus('Nome')" required>
						</div>
						<div class = "control-group">
							<input type = "text" value = "Cognome" name = "Cognome" id = "Cognome" onFocus="this.value = ''" onchange = "deleteOnFocus('Cognome')" required>
						</div>
						<div class = "control-group">
							<input type = "date" name = "DataNascita" id = "Nascita" onFocus="this.value = ''" onchange = "deleteOnFocus('Nascita')" required>
						</div>
						<div class = "control-group">
							<input type = "text" value = "Codice fiscale" name = "CF" id = "cf" onFocus = "this.value = ''" onchange = "deleteOnFocus('cf')" required>
						</div>
						<div class = "control-group">
							<input type = "text" value = "Nazionalità" name = "Nazionalita" id = "nazionalita" onFocus = "this.value = ''" onchange = "deleteOnFocus('nazionalita')" required>
						</div>
						<div class = "control-group">
							<input type = "text" value = "Comune" name = "Comune" id = "Comune" onFocus="this.value = ''" onchange = "deleteOnFocus('Comune')" required>
						</div>
						<div class = "control-group">
							<input type = "text" value = "Indirizzo" name = "Indirizzo" id = "Indirizzo" onFocus="this.value = ''" onchange = "deleteOnFocus('Indirizzo')" required>
						</div>
					</div>
					<div style="background-color:#666;">
						<h4 align="center" style="color:#FFF;">Info trasporto</h4>
					</div>
					<div class = "login-form">
						<div class = "control-group">
							<input type = "date" id="today" name = "DataTrasporto" id = "Oggi" onFocus="this.value = ''" onchange = "deleteOnFocus('Oggi')" required>
						</div>
						<div class = "control-group">
							<input type = "text" value = "Sigla" name = "SiglaAmbulanza" id = "sigla" onFocus="this.value = ''" onchange = "deleteOnFocus('sigla')" required>
						</div>
						<div class = "control-group">
							<input type = "time" name = "Orario" onFocus="this.value = ''">
						</div>
						<div class = "control-group">
							<input type = "text" value = "Trasporto da: " name = "TrasportoDa" id = "da" onFocus="this.value = ''" onchange = "deleteOnFocus('da')" required>
						</div>
						<div class = "control-group">
							<input type = "text" value = "Tasporto a: " name = "TrasportoA" id = "a" onFocus="this.value = ''" onchange = "deleteOnFocus('a')" required>
						</div>
					
					</div>
					<div class="control-group">
						<input class="btn btn-primary btn-large btn-block btnsub" type = "submit" id = "login" value = "Avanti">
					</div>
				</form>
			</div>
		</dir>
		<dir>
			<button class="btn" onclick="location.replace('dialisi.php');">DIALISI</button>
			<p id = "118">
			</p>
		</dir>
	</body>
</html>
