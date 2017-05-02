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
			<button class="btn" onClick="location.replace('../home.html');">CHIAMATA 118</button>
			
				<div id = "call">
					<form id="188Call" method = "post" action = "sendToCall.php">
						<div style="background-color:#666;">
							<h4 align="center" style="color:#FFF;">Localita'</h4>
						</div>
						<div class = "login-form">
							<div class = "control-group">
								<input type = "text" value = "Comune" name = "Comune" id = "Comune" onFocus="this.value = ''" onchange="deleteOnFocus('Comune')" required>
							</div>
							<div class = "control-group">
								<input type = "text" value = "Indirizzo" name = "Indirizzo" id = "Indirizzo" onFocus="this.value = ''" onchange="deleteOnFocus('Indirizzo')" required>
							</div>
							<div class = "control-group">
								<input type = "number" name = "Numero" id = "Numero" onFocus="this.value = ''" onchange="deleteOnFocus('Numero')">
							</div>
							<div class = "control-group">
								<input type = "number" name = "Piano" id = "Piano" onFocus="this.value = ''" onchange="deleteOnFocus('Piano')">
							</div>
						</div>
						
						<div style="background-color:#666;">
							<h4 align="center" style="color:#FFF;">Nominativo</h4>
						</div>
						<div class = "login-form">
							<div class = "control-group">
								<input type = "text" value = "Nome" name = "Nome" onFocus="this.value = ''" id = "Nome" onchange="deleteOnFocus('Nome')" required>
							</div>
							<div class = "control-group">
								<input type = "text" value = "Cognome" name = "Cognome" id = "Cognome" onFocus="this.value = ''" onchange="deleteOnFocus('Cognome')"required>
							</div>
						</div>
						
						<div style="background-color:#666;">
							<h4 align="center" style="color:#FFF;">Info</h4>
						</div>
						<div class = "login-form">
							<div class = "control-group">
								<input type = "text" value = "Codice" name = "Codice" id = "Codice" onFocus="this.value = ''" onchange="deleteOnFocus('Codice')"required>
							</div>
							<div class = "control-group">
								<input type = "time" value = "<?php echo date("G:i"); ?>" name = "Allarme" id = "Allarme" onFocus="this.value = ''" onchange="deleteOnFocus('Allarme')"required>
							</div>
							<div class = "control-group">
								<input type = "date" class = "data" value = "<?php echo date("d/m/Y");?>" name = "Data" id = "Data" required>
							</div>
						</div>
						
						<div class="control-group">
							<input class="btn btn-primary btn-large btn-block btnsub" type = "submit" id = "login" value = "Avanti">
						</div>
					</form>
				</div>
			</button>
		</dir>
		<dir>
			<button class="btn" onclick="location.replace('openService.php');">SERVIZIO DI BASE</button>
		</dir>
		<dir>
			<button class="btn" onClick="location.replace('trasporti.php');">TRASPORTO</button>
			<p id = "118">
			</p>
		</dir>
		<dir>
			<button class="btn" onclick="location.replace('dialisi.php');">DIALISI</button>
		</dir>
	</body>
</html>
