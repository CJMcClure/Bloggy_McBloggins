<?
class SQLib
{
  //Database connection variables (PDO 'dsn' format)
  protected $dsn = 'mysql:dbname=mcbloggers;host=127.0.0.1:8889';
  protected $username = 'supermcbloggins';
  protected $password = 'r7KB1xd5';

  /*
  Given a validated first and last name, email address,
  username, and password, will add a user to the blog
  database
  */
  function addUser($_first, $_last, $_email, $_username, $_password)
  {
    try
    {
      $dbConnect = new PDO($this->dsn, $this->username, $this->password);

      $query = "INSERT INTO mcusers (mcuser_first, mcuser_last, mcuser_email, mcuser_username, mcuser_password)
                VALUES ($_first, $_last, $_email, $_username, $_password)";

      $dbConnect->exec($query);

      $dbConnect = null;
    }
    catch (PDOException $e)
    {
      echo 'Connection failed: ' . $e->getMessage();
    }
  }

  /*
  Given a username, this function will assess whether the
  username already exists in the blog database and return
  an availability notice of true or false
  */
  function usernameAvailable($_username)
  {
    try
    {
        $dbConnect = new PDO($this->dsn, $this->username, $this->password);

        $query = "SELECT * FROM mcusers WHERE mcuser_username = $_username;";

          $response = $dbConnect->query($query);

          if($response->rowCount() > 0)
          {
            return false;
          }
          else
          {
            return true;
          }
    }
    catch (PDOException $e)
    {
      echo 'Connection failed: ' . $e->getMessage();
    }

  }


}
?>
