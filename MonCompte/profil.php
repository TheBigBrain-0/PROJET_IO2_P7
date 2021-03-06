<!DOCTYPE html>
<?php
	session_start();
	$bdd = new PDO('mysql:host=localhost;dbname=espace_membres;charset=utf8','nadim','Baya1934');
	if(isset($_GET['id']) AND $_GET['id'] > 0){
		$getid = intval($_GET['id']);
		$requser = $bdd->prepare('SELECT * FROM espace_membres WHERE id = ?');
		$requser->execute(array($getid));
		$userinfo = $requser->fetch();
	}
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Se connecter aux 80's</title>
		<link rel="stylesheet" href="styleProfil.css">
	</head>
	<body class="barre">
		<nav>
			<ul>
				<li class="list-home"><a href="../Index.php"><img id="home" src="../Images_CSS/CSS.png"></a>
				</li>	
				</li>
				<li class="list-Jeux"><a href="#">Jeux</a>
					<ul class="sousliste">
						<li><a href="../Jeux/Selection/Selection.php">Toute la selection</a></li>
						<li><a href="../Jeux/Recenser/Recenser.php">Recenser</a></li>
					</ul>
				</li>
				<li class="list-Actus"><a href="#">Articles</a>
					<ul class="sousliste">
						<li><a href="../Communaute/Article/Article.php">Tous vos articles</a></li>
					</ul>
				</li>
				<li class="list-Critiques"><a href="../Critiques/critiques.php">Critiques</a>
				</li>
				<li class="list-Forum"><a href="Forum.html">Forum</a>
				</li>
				<li class="list-Communauté"><a href="#">Communauté</a>
					<ul class="sousliste">
						<li><a href="../Communaute/Article/Article.php">Vos Articles</a></li>
						<li><a href="../Critiques/critiques.php">Vos Critiques</a></li>
					</ul>
				</li>
				<li class="list-Moncompte"><a href="monCompte.php"><img id="pdp" src="../Images_CSS/pdp.png"><?php if (isset($_SESSION['pseudo'])) { echo $_SESSION['pseudo']; } else { echo "Mon Compte"; } ?> </a>
				</li>		
			</ul>
		</nav>
	</body>
	<body class="sansbarre">
		<div class="profil">
			<hr/>
			<ul>
				<li><h3>Se connecter</h3></li>
			</ul>
			<hr/>
			<ul class="debut">
				<li><h3>Profil de <?php echo $userinfo['pseudo'];?></h3></li>
			</ul>
			<hr/>
			<br/>
			<div class="desc">
				Pseudo = <?php echo $userinfo['pseudo']; ?>
				<br>
				Mail = <?php echo $userinfo['mail']; ?>
			</div>
<?php
			if(isset($_SESSION['id']) && $userinfo['id'] == $_SESSION['id']){
?>
				<div id="edit" align="center"><a href="#">Editer mon profil</a>
					&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
				<a href="deconnexion.php">Se déconnecter</a></div>
<?php
			}
?>
		</div>
	</body>

</html>
