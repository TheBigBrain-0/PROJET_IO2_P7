<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Toute la sélection</title>
	<link rel="stylesheet" href="styleCritiques.css">
</head>
<body>
		<nav>
			<ul>
				<li class="list-home"><a href="../Index.html"><img id="home" src="../Images_CSS/CSS.png"></a>
				</li>	
				</li>
				<li class="list-Jeux"><a href="#">Jeux</a>
					<ul class="sousliste">
						<li><a href="../Jeux/Selection/Selection.php">Toute la sélection</a></li>
						<li><a href="../Jeux/Recenser/Recenser.php">Recenser</a></li>
					</ul>
				</li>
				<li class="list-Actus"><a href="Actus.html">Actus</a>
					<ul class="sousliste">
						<li><a href="#">Toute les news</a></li>
						<li><a href="#">Articles et Chroniques récentes</a></li>
					</ul>
				</li>
				<li class="list-Critiques"><a href="critiques.php">Critiques</a>
				</li>
				<li class="list-Forum"><a href="Forum.html">Forum</a>
				</li>
				<li class="list-Communauté"><a href="Communauté.html">Communauté</a>
					<ul class="sousliste">
						<li><a href="#">Vos Articles</a></li>
						<li><a href="#">Vos Critiques</a></li>
					</ul>
				</li>
				<li class="list-Moncompte"><a href="../MonCompte/monCompte.php"><img id="pdp" src="../Images_CSS/pdp.png">Mon Compte</a>
				</li>		
			</ul>
		</nav>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<div class="form">          	
            <form class="formulaire" action="">
               <input class="champ" type="text" placeholder="Tapez votre recherche ici"/>
               <input id="rechbouton" class="bouton" type="button" value="rechercher"/>      
            </form>
        </div>
        <div class="Selection">
        	<h2>Toutes les critiques</h2>
               <form class="formulaire" action="">
               <input class="champ" type="text" placeholder="Tapez votre recherche ici"/>
               <input id="rechbouton" class="bouton" type="button" value="rechercher"/>      
            </form>
        	<h3>Filtrer par : </h3>
        	<br>
        	<div class="Filtres Jeux">
        		&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
        		Date de sortie <select name="croissant" size="1">
        			<option value="1"> choisir </option>
        			<option value="2">plus anciennce</option>
        			<option value="3">plus récente</option>
        		</select> 
        		&nbsp &nbsp &nbsp | &nbsp &nbsp &nbsp
        		Note <select name="date" size="1">
        			<option value="1">choisir</option>
        			<option value="2">meilleur</option>
        			<option value="3">pire</option>
        		</select>
        		&nbsp &nbsp &nbsp | &nbsp &nbsp &nbsp
        		Plateforme <select name="Plateforme" size="1">
        			<option value="1">choisir</option>
        			<option value="2">PC</option>
        			<option value="3">PS4</option>
        			<option value="4">XboxOne</option>
        			<option value="5">PS3</option>
        			<option value="6">Xbox360</option>
        			<option value="7">PS2</option>
        			<option value="8">Xbox</option>
        		</select>
        		&nbsp &nbsp &nbsp | &nbsp &nbsp &nbsp
               Jeu <form class="formJeu" action="">
               <input class="formJeu" type="text" placeholder="Tapez votre recherche ici"/>
               <input id="rechJeu" class="bouton" type="button" value="rechercher"/>      
            	</form>
        	</div>
        	<br>
        	<div class="liste Jeux">
        		<ul>
        			<li>Test jeu 1</li>
        			<li>Test jeu 2</li>
        			<li>Test jeu 3</li>
        		</ul>
        	</div>
        </div>
</body>
</html>