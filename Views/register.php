<!DOCTYPEhtml>
<html>
<head>
  <title>McBloggins | Registration</title>
</head>
<body>
  <form name='registration' method='post' action='<? echo htmlspecialchars($_POST['PHP_SELF']); ?>'>
    <label for='first'>First
    <span><? echo $first_error; ?></span>
    <input name='first' type='text'/>
    </label>

    <label for='last'>Last
    <span><? echo $last_error; ?></span>
    <input name='last' type='text'/>
    </label>

    <label for='email'>Email
    <span><? echo $email_error; ?></span>
    <input name='email' type='email'/>
    </label>

    <label for='username'>Username
    <span><? echo $username_error; ?></span>
    <input name='username' type='text'/>
    </label>

    <label for='password'>Password
    <span><? echo $password_error; ?></span>
    <input name='password' type='password'/>
    </label>

    <label for='password_ver'>Verify Password
    <span><? echo $verify_error; ?></span>
    <input name='password_ver' type='password'/>
    </label>

    <input name='register' type='submit' value='Submit'>
  </form>
</body>
</html>
