<?php

	//CONNECT TO MY BDD
	include 'includes/config.php';
	//INCLUDE MY PHP
	/*include 'includes/new.php'; */
	include 'includes/test.php';

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Home</title>
		<link rel="stylesheet" href="src/css/style.css" />
	</head>
	<body>
		<div class="container">

						<!-- CREATE FORM TO INPUT NEW TASKS-->
			<form class="form_style" action="#" method="post">
					<div class="new_task">
						<label for="tache">Tâche</label>
						<input type="text" name="tache" placeholder="Nom de la tâche" id="tache">
						<br>
					</div>
					<div class="new_task">
						<label for="executant">Executant</label>
						<input type="text" name="executant" placeholder="Chargé de la tâche" id="executant">
						<br>
					</div>
					<div class="new_task">
						<label for="descriptif">Description</label>
						<textarea cols="50" rows="10" name="descriptif" placeholder="Décrivez la tâche" id="descriptif"></textarea>
					</div>
					<div class="new_task">
						<label for="date_ajout">Date de la création*</label>
						<input type="date_ajout" name="date_ajout" id="date_ajout">
						<span id="date">*Ne pas remplir si vous voulez la date actuelle</span>
					</div>
			
					<div class="new_task">
						<label for="etat">Avancée
							<input type="radio" name="etat" value="done"  id="done" checked>Done
						</label>
						<label for="new_task">
							<input type="radio" name="etat" value="not done" id="not done">Not done
						</label>
						<br>
					</div>

					<div class="new_task">
						<input type="reset" value="Recommencer">
						<input type="submit" value="Envoyer">
					</div>
			</form>
			
			<!-- FOOTER-->
			<footer>
				<div class="footer">
					<p>Mentions légales</p>
					<p>By Eva Jamen</p>
					<p>Hetic</p>
				</div>
			</footer>
		</div>
	</body>
</html>	<title>Home</title>
		<link rel="stylesheet" href="src/css/style.css" />
	</head>
	<body>
		<div class="container">
			
				<div class="footer">
					<p>Mentions légales</p>
					<p>By Eva Jamen</p>
					<p>Hetic</p>
				</div>
			</footer>
		</div>
	</body>
</html>