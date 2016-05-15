<?
if(isset($_POST['submit']))
{
  if(file_exists('../Controllers/login.php'))
  {
     if((include '../Controllers/login.php') == true)
     {
       $username = $_POST['username'];
       $password = $_POST['password'];


     }
     else
     {
         echo "File not included.";
     }
  }
  else
  {
    echo "File doesn't exist!";
  }
}

if(isset($_POST['register']))
{
  if(file_exists('../Views/register.php'))
  {
     if((include '../Views/register.php') == true)
     {
       $path_host = $_SERVER['HTTP_HOST'];
       $path_dir  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
       $path_file = 'register.php';
       header("Location: http://$path_host$path_dir/$path_file");
       exit;
     }
     else
     {
         echo "File not included.";
     }
  }
  else
  {
    echo "File doesn't exist!";
  }
}
?>
