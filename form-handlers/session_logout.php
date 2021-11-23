<?php 
  session_start();

  if (isset($_SESSION['type']))
  {
    $name = htmlspecialchars($_SESSION['type']);
    
    destroy_session_and_data();
    
    echo "<script type='text/javascript'>alert('Logout Successfully');</script>";
    echo "<script type='text/javascript'>window.location.href = '../login.php';</script>";
  }
  
  function destroy_session_and_data()
{
   unset($_SESSION['type']);
   $_SESSION = array();
   session_unset();
   setcookie(session_name(), '', time() - 2592000, '/');
   session_destroy();
}

?>
