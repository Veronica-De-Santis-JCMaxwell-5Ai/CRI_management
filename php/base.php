<?php
$number = $_POST['number'];
echo "<script>alert($number);</script>";
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
			<button class="btn" onClick="location.replace('118Call.html');">CHIAMATA 118</button>
		</dir>
		<dir>
			<button class="btn" onclick="location.replace('home.html');">SERVIZIO DI BASE</button>
			
			<div id = "base">
				<div style="background-color:#666;">
					<h4 align="center" style="color:#FFF;">Info</h4>
				</div>
				<div class = "login-form">
					<div class = "control-group">
						<input type = "date" id="today" onFocus="this.value = ''" required>
					</div>
					<div class = "control-group">
						<input type = "text" value = "Sigla" onFocus="this.value = ''" required>
					</div>
					<div class = "control-group">
						<?php
							$code = $_POST['codice'];
							echo "<input type = text value=$code onFocus='this.value = ''' required>";
						?>
					</div>
				</div>
				<div style="background-color:#666;">
					<h4 align="center" style="color:#FFF;">Localita'</h4>
				</div>
				<div class = "login-form">
					<div class = "control-group">
						<input type = "text" value = "Comune" onFocus="this.value = ''" required>
					</div>
					<div class = "control-group">
						<input type = "text" value = "Indirizzo" onFocus="this.value = ''" required>
					</div>
				</div>
				<div style="background-color:#666;">
					<h4 align="center" style="color:#FFF;">Info paziente</h4>
				</div>
				<div class = "login-form">
					<div class = "control-group">
						<input type = "text" value = "Nome" onFocus="this.value = ''" required>
					</div>
					<div class = "control-group">
						<input type = "text" value = "Cognome" onFocus="this.value = ''" required>
					</div>
					<div class = "control-group">
						<input type = "date" onFocus="this.value = ''">
					</div>
					<div class = "control-group">
						<input type = "text" value = "Eta'" onFocus="this.value = ''" required>
					</div>
					<div class = "control-group">
						<input type = "text" value = "C.F." onFocus="this.value = ''" required>
					</div>
					<div class = "control-group">
						<input type = "text" value = "Residenza" onFocus="this.value = ''">
					</div>
					<div class = "control-group">
						<input type = "text" value = "Comune" onFocus="this.value = ''" required>
					</div>
					<div class = "control-group">
						<input type = "text" value = "Stato estero residenza" onFocus="this.value = ''" required>
					</div>
					<div class = "control-group">
						<input type = "text" value = "Cittadinanza" onFocus="this.value = ''">
					</div>
				</div>
				<div style="background-color:#666;">
					<h4 align="center" style="color:#FFF;">Orari</h4>
				</div>
				<div class = "login-form">
					<div class = "control-group">
						<input type = "time" onFocus="this.value = ''" required>
					</div>
					<div class = "control-group">
						<input type = "time" onFocus="this.value = ''" required>
					</div>
					<div class = "control-group">
						<input type = "time" onFocus="this.value = ''" required>
					</div>
					<div class = "control-group">
						<input type = "time" onFocus="this.value = ''" required>
					</div>
					<div class = "control-group">
						<input type = "time" onFocus="this.value = ''" required>
					</div>
					<div class = "control-group">
						<input type = "time" onFocus="this.value = ''" required>
					</div>
				</div>
				<div class="control-group">
                    <input class="btn btn-primary btn-large btn-block btnsub" type = "submit" id = "login" value = "Avanti">
                </div>
			</div>
		</dir>
		<dir>
			<button class="btn" onClick="location.replace('trasporti.html');">TRASPORTO</button>
			<p id = "118">
			</p>
		</dir>
		<dir>
			<button class="btn" onclick="location.replace('dialisi.html');">DIALISI</button>
			<p id = "118">
			</p>
		</dir>
	</body>
</html>