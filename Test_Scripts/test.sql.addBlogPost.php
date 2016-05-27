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

          $SQLib_instance = new SQLib();

          $SQLib_instance->addBlogPost('test', 'A new day', date('y/m/d'), 'The sun has risen, it will soon fall');

          echo "complete";
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
