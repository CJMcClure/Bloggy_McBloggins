<?php
  session_start();

  include './Models/sql.php';

  $mcuname = null;
  $mcpword = null;

  if($_POST['username'] != "")
  {
      $mcuname = $_POST['username'];
  }
  else
  {
    $username_error = '*Required';
  }

  if($_POST['password'] != "")
  {
      $mcpword = $_POST['password'];
  }
  else
  {
      $password_error = '*Required';
  }

  if($mcuname != null && $mcpword != null)
  {
    $sql_conn = new SQLib();

    $retval = $sql_conn->userLogin($mcuname, $mcpword);

    if($retval == false)
    {
      $password_error = '*Re-enter';
      $username_error = '*Re-enter';
    }
    else
    {
      $sql_conn->setSession($mcuname);

      header('Location: /Views/dashboard.php');
      
      exit;
    }
}

?>
