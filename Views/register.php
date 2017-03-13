<?php
  if(isset($_POST['register_now']))
  {
    include '../Controllers/register.php';
  }
?>
<!DOCTYPEhtml>
<html>
<head>
  <title>McBloggins | Registration</title>
</head>
<body>
  <h2>Welcome to Registration</h2>

  <form name='registration' method='post' action='<?php echo htmlspecialchars($_POST['PHP_SELF']); ?>'>
    <label for='first'>First
    <span><?php echo $first_error; ?></span>
    <input name='first' type='text'/>
    </label>

    <label for='last'>Last
    <span><?php echo $last_error; ?></span>
    <input name='last' type='text'/>
    </label>

    <label for='email'>Email
    <span><?php echo $email_error; ?></span>
    <input name='email' type='email'/>
    </label>

    <label for='username'>Username
    <span><?php echo $username_error; ?></span>
    <input name='username' type='text'/>
    </label>

    <label for='password'>Password
    <span><?php echo $password_error; ?></span>
    <input name='password' type='password'/>
    </label>

    <label for='password_ver'>Verify Password
    <span><?php echo $verify_error; ?></span>
    <input name='password_ver' type='password'/>
    </label>

    <input name='register_now' type='submit' value='Submit'>
  </form>
</body>
</html>
