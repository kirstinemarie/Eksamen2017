<?php session_start();

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Madskribent & Foodstylist">
<meta name="keywords" content="Madskribent, Foodstylist, Mad, Food, Kogebøger">
<meta name="author" content="Gitte Heidi">

<title>login: Gitte Heidi Madskribent & Foodstylist </title>
	
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

<body class="logind">


<?php 
	if(filter_input(INPUT_POST, 'submit')){
		
	$navnAdmin_user = filter_input(INPUT_POST, 'navnAdmin_user')
		or die('Missing/illegal navn parameter');
		
	$kode = filter_input(INPUT_POST, 'kode')
		or die('Missing/illegal kode parameter');
		
	require_once('db_con.php');
		
	$sql= 'SELECT idAdmin_user, kodeAdmin_user FROM Admin_user WHERE navnAdmin_user=?';
		
	$stmt = $con->prepare($sql);
		
	$stmt->bind_param('s', $navnAdmin_user);
		
	$stmt->execute();
		
	$stmt->bind_result($idAdmin_user, $kodehash);
	
		
	
while($stmt->fetch()){		
	}
			
		if(password_verify($kode, $kodehash)){
			echo "<script>window.open('bestil.php','_self')</script>";
			$_SESSION['idAdmin_user'] = $idAdmin_user;
			$_SESSION['navnAdmin_user'] = $navnAdmin_user;
		}
		else{
			echo 'illegal username/password combination' .$navnAdmin_user .$kode .$kodehash;
		}}
	
	?>
	
	<div class="login">
<form action="<?=$_SERVER['PHP_SELF']?>" method="post">


		
		<input type="text" name="navnAdmin_user"  placeholder="Brugernavn" required>
			
		<input type="password" name="kode" placeholder="Kode" required>
		
	
		<input type='submit' id="send" value="log ind" name="submit">
		
	</div></div>
		</div>
	
	</form>
	</div>
</body>
</html>