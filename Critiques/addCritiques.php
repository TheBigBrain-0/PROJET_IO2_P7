<!DOCTYPE html>
<?php
    session_start();
    $bdd = new PDO('mysql:host=localhost;dbname=espace_membres;charset=utf8','nadim','Baya1934');
?>

<html>

<head>
	<meta charset="utf-8">
	<title>Nouvelle critique</title>
	<link rel="stylesheet" href="styleAddCritique.css">
</head>
<body>
		<nav>
			<ul>
				<li class="list-home"><a href="../Index.php"><img id="home" src="../Images_CSS/CSS.png"></a>
				</li>	
				<li class="list-Jeux"><a href="#">Jeux</a>
					<ul class="sousliste">
						<li><a href="../Jeux/Selection/Selection.php">Toute la sélection</a></li>
						<li><a href="../Jeux/Recenser/Recenser.php">Recenser</a></li>
					</ul>
				</li>
				<li class="list-Actus"><a href="../Actus/Actus.html">Actus</a>
					<ul class="sousliste">
						<li><a href="#">Toute les news</a></li>
						<li><a href="#">Articles et Chroniques récentes</a></li>
					</ul>
				</li>
				<li class="list-Critiques"><a href="critiques.php">Critiques</a>
				</li>
				<li class="list-Forum"><a href="../Forum/Forum.html">Forum</a>
				</li>
				<li class="list-Communauté"><a href="../Communaute/Communauté.html">Communauté</a>
					<ul class="sousliste">
						<li><a href="#">Vos Articles</a></li>
						<li><a href="#">Vos Critiques</a></li>
					</ul>
				</li>
				<li class="list-Moncompte"> <a href="../MonCompte/monCompte.php"><img id="pdp" src="../Images_CSS/pdp.png"> <?php if (isset($_SESSION['pseudo'])) { echo $_SESSION['pseudo']; } else { echo "Mon Compte"; } ?> </a>
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
        	

            <h2>Ajouter une nouvelle critique</h2>
            
            <form method="POST" action="Recenser.php">
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                Titre : <input class="champ" type="text" name="nom" placeholder="Entrer le titre ici"/>  
                
                <br>
                <br>
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                <label for="description">Ajouter une description :<br />
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   
                <textarea name="description" id="description"></textarea></label><br />        
    
                <br>
                <br>
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  
                Donner une note <select name="Note" size="1">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                </select> /20
            
            
            <br>
            <br>
            <br>
            <br>
            <br>
            <input id="ajouter" type="submit" name="ajout" value="Ajouter">
            </form>
            &nbsp &nbsp
            <div class = "erreur">
            <?php
                if(isset($erreur)){
                    echo '<font color="red">'.$erreur.'</font>';
                }
            ?>
            </div>
        </div>
</body>
</html> 