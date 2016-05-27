<!DOCTYPEhtml>
<html>
<head>
  <title>Username availability test</title>
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

          $username = 'KimmyMcClure';

          $SQLib_instance = new SQLib();

          $SQLib_instance->userSendBlog($username, $title, $date, $body);

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
