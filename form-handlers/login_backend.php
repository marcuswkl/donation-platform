<?php
require_once './DbController.php';

if(isset($_POST['email']) && isset($_POST['pwd'])){
	
    $un_temp = sanitise($pdo,$_POST['email']);
    $pw_temp = sanitise($pdo,$_POST['pwd']);
    $query   = "SELECT * FROM user WHERE email=$un_temp";
    $result  = $pdo->query($query);

    if (!$result->rowCount()){
      echo "<script type='text/javascript'>alert('Please enter your email and password');</script>";
    }

    $row = $result->fetch();
    $un  = $row['name'];
    $pw  = $row['password'];
    $ty  = $row['type'];

    if (password_verify( $pw_temp, $pw))
    {
      session_start();

      $_SESSION['name'] = $fn;
      $_SESSION['type'] = $ty;

      if($_SESSION['type'] == 'donor'){
        echo "<script type='text/javascript'>alert('Login Successfully');</script>";
        echo "<script type='text/javascript'>window.location.href = './donor-home.php';</script>";
      }else if($_SESSION['type'] == 'fundraiser'){
        echo "<script type='text/javascript'>window.location.href = './fundraiser-home.php';</script>";
      }else{
        
      }

    }
    else echo "<script type='text/javascript'>alert('Incorrect username/ password');</script>";
  }


  function sanitise($pdo, $str)
  {
    $str = htmlentities($str);
    return $pdo->quote($str);
  }
?>
