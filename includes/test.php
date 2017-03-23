<?php
	//INPUT NEW TASKS IN MY TABLE OF MY BDD

	//Array to check errors
	$error = array();
	
	if(!empty($_POST)) {
		// Retrieve data
		$tache		= trim($_POST['tache']);
		$executant	= trim($_POST['executant']);
		$descriptif 	= trim($_POST['descriptif']);
		$date_ajout		= trim($_POST['date_ajout']);
		$etat			= trim($_POST['etat']);
		
		// Check empty data to fill the error array
		if(empty($tache))
			$error['tache']		= 'should not be empty';
		if(empty($executant))
			$error['executant']	= 'should not be empty';
		if(empty($descriptif))
			$error['descriptif']		= 'should not be empty';
		if(empty($etat))
			$error['etat']	= 'should not be empty';
		
		// Any error
		if(empty($error)) {
			// Fill the table with currently set date
			if(empty($date_ajout)) {
				//Define currently set date
				$_POST['date_ajout'] = date("j/n/Y h:i", time());
				
				//Prepare the request
				$prepare = $pdo->prepare('INSERT INTO to_do_list (tache, executant, descriptif, etat) VALUES (:tache, :executant, :descriptif, :etat)');
				
				$prepare->bindValue('tache', $_POST['tache']);
				$prepare->bindValue('executant', $_POST['executant']);
				$prepare->bindValue('descriptif', $_POST['descriptif']);
				$prepare->bindValue('etat', $_POST['etat']);
			
				//Execute the request and alert to confirm the registering
				$prepare->execute();
				
				echo "<script>alert(\"La tâche a été créee\")</script>"; 
			}
			
			// Handle the date to fill the table
			else {
				//Prepare the request
				$prepare = $pdo->prepare('INSERT INTO to_do_list (tache, executant, descriptif, date_ajout, etat) VALUES (:tache, :executant, :descriptif, :date_ajout, :etat)');
				
				$prepare->bindValue('tache', $_POST['tache']);
				$prepare->bindValue('executant', $_POST['executant']);
				$prepare->bindValue('descriptif', $_POST['descriptif']);
				$prepare->bindValue('date_ajout', $_POST['date_ajout']);
				$prepare->bindValue('etat', $_POST['etat']);
		
				//Execute the request and alert to confirm the registering
				$prepare->execute();
				
				echo "<script>alert(\"La tâche a été créee\")</script>"; 
			}
		}
		
		//Reset form by filling with default values	
		$_POST['tache']		= '';
		$_POST['executant']	= '';
		$_POST['descriptif']	= '';
		$_POST['date_ajout']		= '';
		$_POST['etat']		= '';
	}

	else {
		//Reset form by filling with default values	
		$_POST['tache']		= '';
		$_POST['executant']	= '';
		$_POST['descriptif']	= '';
		$_POST['date_ajout']		= '';
		$_POST['etat']		= '';
	}