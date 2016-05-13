<!DOCTYPEhtml>
<html>
<head>
  <title>Validation Script Testing</title>
</head>
<body>
  <?
     if(file_exists("../Models/validator.php"))
     {
        echo "exists";

        if((include "../Models/validator.php") == true)
        {
          echo "included";

          $phone = '719.6496859';

          $Validator_instance = new Validator();

          $Validator_instance->phoneUS($phone);
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
