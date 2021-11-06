<?php 

require_once './DbController.php';

  if(isset($_POST['username']) && isset($_POST['pwd'])){
	
	$myusername = sanitise($pdo,$_POST['username']);
	$mypassword = sanitise($pdo,$_POST['pwd']);
	$mypassword = password_hash($mypassword, PASSWORD_DEFAULT);
	$email      = sanitise($pdo,$_POST['email']);
	$tbl_name = 'user';
	$validation = data_validation($_POST['username'], "/^[a-z\d_]{5,20}$/" , "username");
  	$validation .= data_validation($_POST['pwd'], '/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{6,12}$/', "password- at least one letter, at least one number, and there have to be 6-12 characters");
 	$validation .= data_validation($_POST['email'],  "/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/" , "email");
	
  
	if($validation==""){

	$user = $_POST['ans'];  
	if ($user == "donor") {          
		$query = "INSERT INTO $tbl_name (userid, name, email, password, type) 
        VALUES(NULL,$myusername, $email, '$mypassword', 'donor')";
        
        $result = $pdo->query($query);
		echo "<script type='text/javascript'>alert('Registered Successfully');</script>";
		echo "<script type='text/javascript'>window.location.href = './login.php';</script>";

	}else{
		$query = "INSERT INTO $tbl_name (userid, name, email, password, type) 
        VALUES(NULL,$myusername, $email, '$mypassword', 'fundraiser')";
        
        $result = $pdo->query($query);
		echo "<script type='text/javascript'>window.location.href = './fundraiser-registration.php';</script>";
	}
}
	else{
	echo $validation;}
}

   function sanitise($pdo, $str)
  {
    $str = htmlentities($str);
    return $pdo->quote($str);
  }	
  
  function data_validation($data, $data_pattern, $data_type)
  {
	  if(preg_match($data_pattern, $data)) {
		  return "";
	  }
	  else {
      echo "<script type='text/javascript'>alert('invalid data for $data_type');</script>";
	  echo("<script>window.location = './registration.php';</script>");
	  }
  }
?>
