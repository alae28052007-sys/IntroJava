<!DOCTYPE html>
<html>
    <body> 
    <head>
		<title>QCM</title>
		<meta charset="utf-8">
		<meta name="QCM" content="Testez vos connaissances sur le football avec notre QCM interactif au bar Footx. Répondez aux questions et découvrez si vous êtes un vrai fan de foot!">
		<meta name="keywords" content="QCM, football, quiz, bar Footx, questions, interactif, fan de foot">
		<link rel="stylesheet" href="cssbar.css">

	<script language="javascript" type="text/javascript">
		function goldenboy2021() {
				alert("Voici la première question du QCM:");
			var rep=prompt("quel joueur a gagné le bolden boy en 2021?");
			if (rep=="Pedri" || rep=="pedri" || rep=="PEDRI" || rep=="Pedri Gonzalez" || rep=="pedri gonzalez" || rep=="PEDRI GONZALEZ") {
				alert("bonne réponse!");
			} else {
				alert("mauvaise réponse, la bonne réponse est Pedri Gonzalez");
			}
		}
		function championsleague2021() {
				alert("Voici la deuxième question du QCM:");
			var rep2=prompt("quel club a gagné la ligue des champions en 2021?");
			if (rep2=="Chelsea" || rep2=="chelsea" || rep2=="CHELSEA") {
				alert("bonne réponse!");
			} else {
				alert("mauvaise réponse, la bonne réponse est Chelsea");
			}
		}
		function equipepref() {
				alert('votre equipe préferée est '+document.getElementById("texte2").value+' quel bon choix d equipe!');
		}
		function ucl() {
				document.getElementById('image').src='images/ucl.jpg';
		}
		function cdm() {
				document.getElementById('image').src='images/cdm.jpg';
		}
		function cdmclub() {
				document.getElementById('image').src='images/cdmclub.jpg';
		}
		function ballondor() {
				document.getElementById('image').src='images/ballondor.jpg';
		}
		function bravo() {
				alert("bravo vous avez cliqué sur la bonne image!");
		}
		function dommage() {
				alert("dommage vous avez cliqué sur la mauvaise image!");
		}
		function bonnerep() {
	
			var reponse=0;
			if (document.getElementById('messi').checked){
				reponse=reponse+1;
			}		
			if (document.getElementById('Dembele').checked){
				reponse=reponse+1;
			}
			if (document.getElementById('joueurb').selectedIndex==1){
				reponse=reponse+1;
			}
			if ( (document.getElementById('Barcelone').checked) && (document.getElementById('RealMadrid').checked) && !(document.getElementById('PSG').checked) && !(document.getElementById('ManchesterCity').checked) && !(document.getElementById('BayernMunich').checked) && !(document.getElementById('Liverpool').checked) ){
				reponse=reponse+1;
			}alert("Voici votre score au QCM:");
			alert("vous avez eu "+reponse+" bonnes réponses sur 4");
		}
		</script>
		
	</head>
    <?php include 'nav.php'; ?>
    <form>
			<fieldset>
				<legend>Formulaire et QCM</legend>
					<div class="champ">
					<label for="nom">Nom:</label>
					<input type="text" id="nom" name="nom" required/>
					</div>
					<div class="champ">
					<label for="prenom">Prénom:</label>
					<input type="text" id="prenom" name="prenom" required/>
					<br>
					<label for="ville">ville?</label>
					<select id="ville1" name="ville">
						<option value="paris">Paris</option>
						<option value="lyon">Lyon</option>
						<option value="marseille">Marseille</option>
						<option value="toulouse">Toulouse</option>
						<option value="autre">Autre</option>
					</select>
					</div>
					<div class="champ">
					<label for="age">Âge:</label>
					<input type="number" min="0" max="100" id="age" name="age" required/>
					</div>
					<div class="champ">
					<br><h1>Questions:</h1>
					<p>Qui est le joueur avec le plus de ballon d'ors? </p>
					<input type="radio" id="messi" name="plusdebdor" value="messi"/>

					<label for="messi">Messi</label>
					<input type="radio" id="ronaldo" name="plusdebdor" value="ronaldo"/>
					<label for="ronaldo">Ronaldo</label>
					<input type="radio" id="Pele" name="plusdebdor" value="pele"/>
					<label for="Pele">Pele</label>
					</div>
					<div class="champ">
					<br><p>Qui etait le dernier gagnant du ballon d'or?</p>
					<input type="radio" id="Messi2" name="gagnantbdor" value="Messi"/>
					<label for="Messi">Messi</label>
					<input type="radio" id="Dembele" name="gagnantbdor" value="dembele"/>
					<label for="Dembele">Dembele</label>
					<input type="radio" id="Yamal" name="gagnantbdor" value="Yamal"/>
					<label for="Yamal">Yamal</label>
					</div>
					<div class="champ">
					<br><p>Quel joueur a gagnée le trophée du meilleur buteur la derniere saison?</p>
					<label for="Joueurb">joueurB?</label>
					<select id="joueurb" name="joueurb">
						<option> </option>
						<option id="mbappee" name="bonnerep" value="mbappé">Mbappée</option>
						<option id="haaland" name="haalnd" value="haaland">Haaland</option>
						<option id="Raphinha" name="Raphinha" value="Raphinha">Raphinha</option>
						<option id="yamal" name="yamal" value="Yamal">Yamal</option>
						<option id="ronaldo" name="ronaldo" value="ronaldo">Ronaldo</option>
					</select>
					</div>
					<br>
					<div class="champ">
					<p>Quels clubs sont espagnols?</p>
					<input type="checkbox" id="PSG" name="PSG" value="PSG"/>
					<label for="PSG">PSG</label>
					<input type="checkbox" id="RealMadrid" name="realmadrid" value="RealMadrid"/>
					<label for="RealMadrid">Real Madrid</label>
					<input type="checkbox" id="Barcelone" name="barcelone" value="Barcelone"/>
					<label for="Barcelone">Barcelone</label>
					<input type="checkbox" id="ManchesterCity" name="ManchesterCity" value="ManchesterCity"/>
					<label for="ManchesterCity">Manchester City</label>
					<input type="checkbox" id="BayernMunich" name="BayernMunich" value="BayernMunich"/>
					<label for="BayernMunich">Bayern Munich</label>
					<input type="checkbox" id="Liverpool" name="Liverpool" value="Liverpool"/>
					<label for="Liverpool">Liverpool</label>
					</div>
					<br><input type="submit" value="Envoyer" onclick="bonnerep()"/>
					
			</fieldset>
		</form>
	<div>Cliquez pour acceder a la 1ere question du QCM!<br>
	<input type="button" value="cliquer" onclick="goldenboy2021()"/>
	</div>
	<div>Cliquez pour acceder a la 2eme question du QCM!<br>
	<input type="text" id="texte1" onclick="championsleague2021()"/>
	</div>
	<div>Votre équipe préférée?<br>
	<input type="text" id="texte2"></div>
	<div>
	<input type="button" value="valider" onclick="equipepref()"/>	
	</div>
	
	<div>quelle est le trophée de la ligue des champions?<br>
	<img id="imageucl" src="images/ucl.jpg" onclick="bravo()" width="200"/>
	<br>
	<h4>ou</h4>
	<img id="imagecdm" src="images/cdm.jpg" onclick="dommage()" width="200" />
	<br>
	</div>
	<div>quelle est le trophée de la coupe du monde des clubs?<br>
	<img id="imagecdmclub" src="images/cdmclub.jpg" onclick="bravo()" width="200"/>
	<br>
	<h4>ou</h4>
	<img id="imagecdm2" src="images/cdm.jpg" onclick="dommage()" width="200" />
	<br>
    </body>
</html>