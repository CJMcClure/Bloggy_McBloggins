
<?
  if(file_exists('../Controllers/login.php'))
  {
    include '../Controllers/login.php';
  }
?>

<!DOCTYPEhtml>
<html>
<head>
  <title>McBloggins | Login</title>
</head>
<body>
  <form name='login' method='post' action="<? echo htmlspecialchars($_POST['PHP_SELF']); ?>">

    <label for='username'>Username</label>
    <span><? echo $username_error; ?></span>
    <input name='username' type='text'/>

    <label for='password'>Password</label>
    <span><? echo $password_error; ?></span>
    <input name='password' type='password'/>

    <input name='submit' type='submit' value='Login'/>
    <input name='register' type='submit' value='Register'/>

  </form>
</body>
</html>
