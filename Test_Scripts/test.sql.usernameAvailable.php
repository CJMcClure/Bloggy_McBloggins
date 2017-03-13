<!DOCTYPEhtml>
<html>
<head>
  <title>Username availability test</title>
</head>
<body>
  <?php
    echo "test.sql.php reached. \n\r";

     if(file_exists("../Models/sql.php"))
     {
       echo "file existence reached. \n\r";

        if((include "../Models/sql.php") == true)
        {
          echo "file include reached. \n\r";

          $username = '"cjmcclure"';

          $SQLib_instance = new SQLib();

          $response = $SQLib_instance->usernameAvailable($username);

          if($response == true)
          {
            echo 'true';
          }
          else
          {
            echo 'false';
          }
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
