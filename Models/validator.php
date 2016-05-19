<?
class Validator
{
  //Validates full legal name
  function name($_name)
  {
    $regex = "/^[a-zA-Z ]{1,25}$/";

    if(preg_match($regex, $_name))
    {
      return true;
    }
    else
    {
      return false;
    }
  }

  //Validate user name
  function username($_username)
  {
    $regex = "/^[a-zA-Z_.0-9]{5,25}$/";

    if(preg_match($regex, $_username))
    {
      return true;
    }
    else
    {
      return false;
    }
  }

  //Validate email address
  function email($_email)
  {
    if(filter_var($_email, FILTER_VALIDATE_EMAIL))
    {
      return true;
    }
    else
    {
      return false;
    }
  }

  //Validates password
  function password($_password)
  {

  }

  //Validates a (10 - digit) United States phone number
  function phoneUS($_phone)
  {
    echo $_phone."\t";

    $regex_one = "/^[0-9.\-\(\)]{10,14}$/";

    $regex_two = "/^[0-9]{10}$/";

    if(preg_match($regex_one, $_username))
    {
      $pattern = array('-', '.', '(', ')');

      str_replace($pattern, "", $_phone);

      echo $_phone."\t";
    }
    else
    {
      echo "Not a good number";
      echo $_phone;
    }
  }

}
?>
