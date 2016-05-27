<?
session_start();

include '../Models/sql.php';

$my_form_errors = 0;

if($_POST['first'] != null)
{
  $f = $_POST['first'];
}
else
{
  $my_form_errors++;
  $first_error = '*Required';
}

if($_POST['last'] != null)
{
  $l = $_POST['last'];
}
else
{
  $my_form_errors++;
  $last_error = '*Required';
}

if($_POST['email'] != null)
{
  $e = $_POST['email'];
}
else
{
  $my_form_errors++;
  $email_error = '*Required';
}

if($_POST['username'] != null)
{
  $u = $_POST['username'];
}
else
{
  $my_form_errors++;
  $username_error = '*Required';
}

if($_POST['password'] != null)
{
  $p = $_POST['password'];
}
else
{
  $my_form_errors++;
  $password_error = '*Required';
}

if($_POST['password_ver'] != null)
{
  $pv = $_POST['password_ver'];
}
else
{
  $my_form_errors++;
  $verify_error = '*Required';
}

if($my_form_errors == 0)
{
  if($pv != $p)
  {
    $verify_error = '*Password doesn\'t match';
  }
  else
  {
    $SQLib = new SQLib();
    $inUse = $SQLib->emailInUse($e);

    if($inUse != false)
    {
      $email_error = '*Email exists';
    }
    else
    {
      $unameAvail = $SQLib->usernameAvailable($u);

      if($unameAvail != true)
      {
        $username_error = '*Username exists';
      }
      else
      {
        $userAdded = $SQLib->addUser($f, $l, $e, $u, $p);

        if($userAdded == true)
        {
            $SQLib->userSetup($u, $p);

            $data = ['uN' => $u, 'uF' => $f, 'uL' => $l, 'uE' => $e];

            $_SESSION['u_data'] = $data;

            header('Location: ./dashboard.php');

            exit;
        }
        else
        {
            echo 'Add User Failed';
        }
      }
    }
  }
}
else
{
  return;
}

?>
