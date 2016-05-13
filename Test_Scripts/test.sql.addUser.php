<!DOCTYPEhtml>
<html>
<head>
  <title>Blog User Test</title>
</head>
<body>
  <?
    echo "test.sql.php reached. \n\r";

     if(file_exists("../Models/sql.php"))
     {
       echo "file existence reached. \n\r";

        if((include "../Models/sql.php") == true)
        {
          echo "file include reached. \n\r";

          $first = '"Jack"';
          $last = '"Casey"';
          $email = '"CaseyJMcClure@yahoo.com"';
          $username = '"cjmcclure"';
          $password = '"password"';

          $SQLib_instance = new SQLib();

          $SQLib_instance->addUser($first, $last, $email, $username, $password);
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
  ?>
</body>
</html>
