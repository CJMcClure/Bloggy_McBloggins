<!DOCTYPEhtml>
<html>
<head>
  <title>Blog User Test</title>
</head>
<body>
  <?
    echo "test.sql.createUserTable.php reached. \n\r";

     if(file_exists("../Models/sql.php"))
     {
       echo "file existence reached. \n\r";

        if((include "../Models/sql.php") == true)
        {
          echo "file include reached. \n\r";

          $username = 'mcstuffins';

          $password = 'password';

          $SQLib_instance = new SQLib();

          $SQLib_instance->createUserTable($username, $password);

          echo 'finished';
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
