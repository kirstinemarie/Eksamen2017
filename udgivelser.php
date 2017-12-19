<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Madskribent & Foodstylist med fokus på udvikling af Madopskrifter, ernæring og styling">
<meta name="keywords" content="Madskribent, Foodstylist, Mad, Food, Kogebøger, sundhed, opskrifter, Gitte, Heidi, Gitte Heidi, Rasmussen, Gitte Rasmussen, Gitte Heidi Rasmussen, kager, slankekure, kogebogsforfatter, udvikling af opskrifter, udvikling af tips og ideer, inspiration til middagsbordet">
<meta name="author" content="Gitte Heidi Rasmussen ">

	<link rel="icon" href="img/green-logo-lille.png">
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
	

	<link href="https://fonts.googleapis.com/css?family=Roboto:700" rel="stylesheet">

	
<link rel="stylesheet" type="text/css" href="css/stylesheet2.css">
	<link rel="stylesheet" type="text/css" href="css/stylesheet_hf2.css">

<style>header.masthead{
	background-image: ;
}
</style>	

</head>

<body>
	<?php
	require('header.php');?>
	
	
	<?php
	//inkludere alt indhold fra filen db_con.php i denne fil 
require_once('db_con.php');	
	     
      /* When you click BOOK */
     if(isset($_POST['cmd'])){
     $Bog_idBog = filter_input(INPUT_POST, 'Bog_idBog', FILTER_VALIDATE_INT) or die('missing did');
     $fNavn = filter_input(INPUT_POST, 'fNavn', FILTER_SANITIZE_STRING) or die('missing fNavn');
     $eNavn = filter_input(INPUT_POST, 'eNavn', FILTER_SANITIZE_STRING) or die('missing eNavn');
     $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL) or die('missing mail');
     $adresse = filter_input(INPUT_POST, 'adresse', FILTER_SANITIZE_STRING) or die('missing adresse');
	$antal = filter_input(INPUT_POST, 'antal', FILTER_VALIDATE_INT) or die('missing antal');
     

$subject = 'Bestilling';
$message = 'Kære' .$fNavn. '<br>Tak for din bestilling af bogen Vintermad der varmer';
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($email, $subject, $message, $headers);


    
      $sql = "INSERT INTO Bestil(fNavn, eNavn, email, adresse, antal, Bog_idBog) VALUES(?,?,?,?,?,?)";
      $stmt = $con->prepare($sql);
      $stmt->bind_param('ssssii', $fNavn, $eNavn, $email, $adresse, $antal, $Bog_idBog);
      $stmt->execute();
		  
 

     
        if ($stmt->affected_rows > 0){
            echo "<script type='text/javascript'>
                    alert('Tak for din bestilling');
                  </script>";;
          }
          else {
            echo "<script type='text/javascript'>alert('Kunne ikke oprette din bestilling');</script>";
          }
	 }
	?>
	
	
    <section class="p-0" id="portfolio">
      <div class="container-fluid p-0">
        <div class="row no-gutters popup-gallery">
			
			<div class="container">
        <div class="row">
          <div class="col-lg-12 text-center overtekst">
            <h2 class="section-heading txmobil">Udgivelse</h2>
            
          </div>
        </div>
      </div>
			
          <div class="col-lg-3 col-sm-6 bog firstbook">
            <a class="portfolio-box" href="img/bog.png">
              <img alt="kogebog madskribent" class="img-fluid" src="img/bog.png" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Kogebog
                  </div>
                  <div class="project-name">
                    Efterårsmad
                  </div>
                </div>
              </div>
            </a>
			  </div>
			
	<div id="overlay">		
		
  <div id="texts">
	<span class="close cursor" onclick="off()">&times;</span>
	  <img class="formfoto" alt="kogebog madskribent" src="img/Bog.png">
	  <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
			<input class="input-bred" type="hidden" name="Bog_idBog" value="1">
		  <h10>Efterårsmad der rusker og rykker</h10><br>
            <label class="screenread-only">Fornavn</label>
            <input class="input-bred" type="text" name="fNavn" placeholder="Fornavn" required><br>
            <label class="screenread-only">Efternavn</label>
            <input class="input-bred" type="text" name="eNavn" placeholder="Efternavn" required><br>
            <label class="screenread-only">Email</label>
            <input class="input-bred" type="email" name="email" placeholder="E-mail" required><br>
            <label class=" adresse screenread-only">Adresse</label>
            <input class="input-bred" type="text" name="adresse" placeholder="Vejnavn nr, postnummer By" required><br>
			  <label class="screenread-only">Antal</label>
		  
    <select id="antal" type="text" name="antal" required>
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
    </select>

			  <div class="modal-footer">

            <input class="book-tour input-bred" name="cmd" type="submit" value="Bestil">
        	
          </form></div></div>
</div>


	 
	<div class="col-lg-4 col-sm-6 bogtx mobile" >
		<h3 class="mb-3">Efterårsmad der rusker og rykker </h3><br>
              <p class="text-muted mb-0 bogtext"><i>af Inge Skovdal & Gitte Heidi Rasmussen</i><br><br>Det bugner med dejlige råvarer i efteråret; æbler, pærer, svampe, græskar, vildt, krydderurter, tomater og hyldebær for blot at nævne nogle. Denne kogebog giver inspiration til, hvordan vi kan omdanne alle disse råvarer til god mad, smukke dekorationer og småsysler med børnene.</p><br>
			<h7>300,-</h7><br>
  <button class="btn btn-light btn-xl sr-button bestil" onclick="on()">Bestil</button>
</div>
		
	  
</div>
	
		  </section>		
			

	<!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>
		  
		  
<script>
function on() {
    document.getElementById("overlay").style.display = "block";
}

function off() {
    document.getElementById("overlay").style.display = "none";
}
</script>
		  <?php
	require('Footer.php');?>
</body>
</html>
