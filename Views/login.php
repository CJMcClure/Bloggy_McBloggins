<?php
if(isset($_POST['submit']))
{
    include './Controllers/login.php';
}
?>
<!DOCTYPEhtml>
<html>
<head>
  <title>McBloggins | Login</title>
</head>
<body>
  <h2>Welcome to McBloggins</h2>

  <form name='login' method='post' action="<?php echo htmlspecialchars($_POST['PHP_SELF']); ?>">

    <label for='username'>Username</label>
    <span><?php echo $username_error; ?></span>
    <input name='username' type='text'/>

    <label for='password'>Password</label>
    <span><?php echo $password_error; ?></span>
    <input name='password' type='password'/>

    <input name='submit' type='submit' value='Login'/>
    <a href='/Views/register.php'>Register</a>

  </form>
</body>
</html>
