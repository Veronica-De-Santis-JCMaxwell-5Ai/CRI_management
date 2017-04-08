<?php
	$conn = mysqli_connect("localhost", "root", "")
		or die("Attenzione, errore. Server non trovato");
	$db = mysqli_select_db($conn, "cri")
		or die("Attenzione, errore. Database non trovato ");
	$number = 0;
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
			<button class="btn" onClick="location.replace('base.html');">SERVIZIO DI BASE</button>
			<div class = "base">
				<?php
					$query = "SELECT * FROM `chiamate` WHERE isClosed = 0";
					$result = mysqli_query($conn, $query)
						or die("Attenzione, errore ". mysqli_error($conn));
					if(count($result)==0)
					{
						echo "<div style='background-color:#666;'>
								<input class='btnsub' type = 'submit' id = 'login' value = 'Non ci sono servizi da chiudere!'>
							  </div>";
					}
					else
					{
						while($row = mysqli_fetch_array($result))
						{
							$code = $row['codice'];
							$localita = $row['localita'];
							$indirizzo = $row['indirizzo'];
							$nome = $row['nome'];
							$cognome = $row['cognome'];
							$allarme = $row['allarme'];
							
							echo "<form method = post action='base.php'>";
								echo "<input type='hidden' name='idbtn' id='idbtn$number' value = 'ciao'>";
								echo "<input type='hidden' name='idcd' id='idcd$number' value = '$code'>";
								echo "<div class='divTable'>";
									echo "<div class='divRow'>";
										echo "<div class='divCell' name='codice$number'>";
											echo $code;
										echo "</div>";
										echo "<div class='divCell' name='localita$number'>";
											echo $localita;
										echo "</div>";
										echo "<div class='divCell' name='indirizzo$number'>";
											echo $indirizzo;
										echo "</div>";
										echo "<div class='divCell'>";
											echo $row['numero'];
										echo "</div>";
										if($row["piano"] != "")
										{
											echo "<div class='divCell'>";
											echo $row['piano'];
											echo "</div>";
										}
										echo "<div class='divCell' name='nome$number'>";
											echo $nome;
										echo "</div>";
										echo "<div class='divCell' name='cognome$number'>";
											echo $cognome;
										echo "</div>";
										echo "<div class='divCell' name='allarme$number'>";
											echo $allarme;
										echo "</div>";
										echo "<div class='divCell'>";
											echo "<input type ='submit' value ='Modifica' id = $number onClick = setHiddenTag('$number')>";
										echo "</div>";
									echo "</div>";
								echo "</div>";	
							echo "</form>";
							$number++;
						}				
					}
				?>
			</div>
		</dir>
		<dir>
			<button class="btn" onClick="location.replace('trasporti.html');">TRASPORTO</button>
		</dir>
		<dir>
			<button class="btn" onclick="location.replace('dialisi.html');">DIALISI</button>
		</dir>
	</body>
</html>
