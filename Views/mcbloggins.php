<?
  echo "<h2>Welcome to McBloggins</h2>";

  if(file_exists('./Views/login.php'))
  {
    include './Views/login.php';
  }
  else
  {
    echo 'Login file doesn\'t exist.';
  }
?>
