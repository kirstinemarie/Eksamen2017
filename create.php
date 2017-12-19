<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>create</title>
</head>

<body>

<?php
	
	if(filter_input(INPUT_POST, 'submit')){
		
	$navnAdmin_user = filter_input(INPUT_POST, 'navn')
		or die('Missing/illegal navn parameter');
		
	$kodeAdmin_user = filter_input(INPUT_POST, 'kode')
		or die('Missing/illegal kode parameter');
		
		$kodeAdmin_user = password_hash($kodeAdmin_user, PASSWORD_DEFAULT);
		
		echo 'Opretter bruger <br>' .$navnAdmin_user.' : '.$kodeAdmin_user;
		
		require_once('db_con.php');
		
		$sql = 'INSERT INTO Admin_user (navnAdmin_user, kodeAdmin_user) VALUES(?, ?)';
		
		$stmt = $con->prepare($sql);
		$stmt->bind_param('ss', $navnAdmin_user, $kodeAdmin_user);
		$stmt->execute();
		
		if($stmt->affected_rows > 0){
			echo 'user'.$navnAdmin_user.'created :)';
		}
		else {
			echo 'could not create user - does he exist??';
		}
	
		
		//$sql = 'select id, des from xyz where n=? aw na=?;
		//$stmt = $link->prepare($sql);
		
		
	
	}
	?>

<form action="<?=$_SERVER['PHP_SELF']?>" method="post">


		
		<input type="text" name="navn"  placeholder="brugernavn" required>
			
		<input type="password" name="kode" placeholder="password" required>
		
	
		<input type='submit' id="send" value="opret" name="submit">
		
		</div>
		</div>
	
	</form>


</body>
</html>