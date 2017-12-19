<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Madskribent & Foodstylist">
<meta name="keywords" content="Madskribent, Foodstylist, Mad, Food, Kogebøger">
<meta name="author" content="Gitte Heidi">

<title>update: Gitte Heidi Madskribent & Foodstylist </title>
	
	<!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	
	<!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.min.css" rel="stylesheet">
	
	<!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

	
<link rel="stylesheet" type="text/css" href="css/stylesheet2.css">
	<link rel="stylesheet" type="text/css" href="css/stylesheet_hf2.css">
<link href="https://fonts.googleapis.com/css?family=Roboto:100" rel="stylesheet">

</head>

<body>
	
<?php
	if(empty($_SESSION['idAdmin_user'])){
		echo'Log ind for at se denne side';
		die();
	}
	
if($cmd = filter_input(INPUT_POST, 'cmd')){
	if($cmd == 'update') {
		$idBestil = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT) 
			or die('Missing/illegal id parameter');
		
		$antal = filter_input(INPUT_POST, 'antal') 
			or die('Missing/illegal antal parameter');
		
		$adresse = filter_input(INPUT_POST, 'adresse') 
			or die('Missing/illegal adresse parameter');
		
		$fNavn = filter_input(INPUT_POST, 'fNavn') 
			or die('Missing/illegal adresse parameter');
		
		$eNavn = filter_input(INPUT_POST, 'eNavn') 
			or die('Missing/illegal adresse parameter');
		
		$email = filter_input(INPUT_POST, 'email') 
			or die('Missing/illegal adresse parameter');
		
		require_once('db_con.php');
		$sql = 'UPDATE Bestil SET antal=?, adresse=?, fNavn=?, eNavn=?, email=? WHERE idBestil=?';
		$stmt = $con->prepare($sql);
		$stmt->bind_param('issssi', $antal, $adresse, $fNavn, $eNavn, $email, $idBestil);
		$stmt->execute();
		
		if($stmt->affected_rows > 0){
			echo 'Informationer blev ændret til '.$fNavn. ' ' .$eNavn. ' ' .$email. ' ' .$adresse. ' ' .$antal ;
		}
		else {
			echo 'Could not change';
		}	
	}
}



	if (empty($idBestil)){
		$idBestil = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT) 
			or die('Missing/illegal id parameter');	
	}
	require_once('db_con.php');
	$sql = 'SELECT antal, adresse, fNavn, eNavn, email FROM Bestil WHERE idBestil=?';
	$stmt = $con->prepare($sql);
	$stmt->bind_param('i', $idBestil);
	$stmt->execute();
	$stmt->bind_result($antal, $adresse, $fNavn, $eNavn, $email);
	while($stmt->fetch()){} 
?>


	<div class="editform">
<form  action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
	<fieldset>
 
    	<legend>Update Bestilling</legend>
		<label class="editer">Fornavn</label>
		<label class="editer">Efternavn</label>
		<label class="editer">Email</label>
		<label class="editer">Adresse</label>
		<label class="editer">Antal</label><br>
    	<input name="id" type="hidden" value="<?=$idBestil?>" />
		<input name="fNavn" type="text" placeholder="Fornavn" value="<?=$fNavn?>" />
		<input name="eNavn" type="text" placeholder="Efternavn" value="<?=$eNavn?>" />
		<input name="email" type="text" placeholder="Email" value="<?=$email?>" />
		<input name="adresse" type="text" placeholder="adresse" value="<?=$adresse?>" />
    	<input name="antal" type="text" placeholder="antal 1-10" value="<?=$antal?>" />
    	<button class="knappen" name="cmd" type="submit" value="update">Gem</button>
	</fieldset>
</form></div>

<button class="knappen" ><a href="bestil.php" >Tilbage</a></button>

</body>
</html>