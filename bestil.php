<?php session_start(); ?> 
<!DOCTYPE html>
<html lang="da">
<head>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Madskribent & Foodstylist">
<meta name="keywords" content="Madskribent, Foodstylist, Mad, Food, Kogebøger">
<meta name="author" content="Gitte Heidi">

<title>Bestillinger: Gitte Heidi Madskribent & Foodstylist </title>
	
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
<body id="body">

<?php
//$email = $_GET['booking_email'];
//$bnummer = $_GET['bookingnummer'];

require_once('db_con.php');

$sql = "SELECT Bestil.idBestil, Bestil.fNavn, Bestil.eNavn, Bestil.email, Bestil.adresse, Bestil.antal, Bog.titel, Bog.pris FROM Bestil, Bog GROUP BY Bestil.idBestil order by Bestil.idBestil desc;";
      $stmt = $con->prepare($sql);
      $stmt->bind_result($idBestil, $fNavn, $eNavn, $email, $adresse, $antal, $titel, $pris);
      $stmt->execute();
      
   
    if(isset($_POST['slet'])){
      $sql = "DELETE FROM Bestil WHERE idBestil = ?";
      $stmt = $con->prepare($sql);
      $stmt->bind_param('i', $idBestil);
      $stmt->execute();
		
          if ($stmt->affected_rows > 0){
            echo "<script type='text/javascript'>
              alert('Din bestilling er nu slettet');
            </script>";
          }
          else {
            echo "<script type='text/javascript'>alert('Kunne ikke slette din bestilling');</script>";
          }
        }
	
	if(empty($_SESSION['idAdmin_user'])){
		echo'Log ind for at se denne side';
	}
	else{
		echo ' Velkommen til bestillinger ' .$_SESSION['navnAdmin_user']. '<br><br>';
		
	while($stmt->fetch()){
	?>	  
	 
   
<table class="book">
  <tr>
    <th width='150px'>Titel </th>
    <th width='150px'>Fornavn </th>
    <th width='150px'>Efternavn </th>
    <th width='180px'>Email </th>
    <th width='180px'>Adresse </th>
    <th width='50px'>Antal </th>
 
  </tr>
	<tr>
		
		<td><?=$titel?> </td>
		<td><?=$fNavn?></td>
		<td><?=$eNavn?> </td>
		<td><?=$email?> </td>
    <td><?=$adresse?> </td>
		<td><?=$antal?></td>
    <td>
      <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <input type="hidden" value="<?=$idBestil?>" name="id">
		  <button class="slet" width='50px' name="submit" type="submit" value="del"><i class="fa fa-1x fa-trash" aria-hidden="true"></i></button>
		  <a class="edit" href="update.php?id=<?=$idBestil?>" ><i class="fa fa-1x fa-pencil" aria-hidden="true"></i></a>
        
      </form>
    </td>
	</tr>
</table>



 <?php } 
?> <button class="knappen" ><a href="logud.php">Log ud</a></button> <?php
	}
	

      if($submit = filter_input(INPUT_POST, 'submit')){
	if($submit == 'del') {
		
		$id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT) 
			or die('Missing/illegal id parameter');
		
		
		require_once('db_con.php');
		$sql = 'DELETE  FROM Bestil WHERE idBestil=?';
		$stmt = $con->prepare($sql);
		$stmt->bind_param('i', $id);
		$stmt->execute();
	
		if($stmt->affected_rows > 0){
			              echo "<script type='text/javascript'>
    		alert('Bestilling er nu slettet');
            </script>";

		
		}
		else {
			echo "<script type='text/javascript'>
    		alert('Bestilling kunne ikke slettes');
            </script>";
		}
	}
	else {
		die('Unknown cmd: '.$submit);
	}
	}

      
?>






</body>
</html>



