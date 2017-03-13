<?php
class SQLib
{
  //Database connection variables (PDO 'dsn' format)
  protected $dsn = 'mysql:dbname=mcbloggers;host=127.0.0.1';
  protected $username = 'supermcbloggins';
  protected $password = 'C10wN3&';

  function userPDOdb($_username)
  {
    try
    {
      $admin_connect = new PDO($this->dsn, $this->username, $this->password);

      $query = "SELECT * FROM mcusers WHERE mcuser_username = \"$_username\"";

      $retval = $admin_connect->exec($query);

      foreach($retval as $row)
      {
        $p = $row['mcuser_password'];
      }

      $user_connect = new PDO($this->dsn, $_username, $p);

      $admin_connect = null;

      return $user_connect;
    }
    catch (Exception $e)
    {
        echo 'Connection failed: ' . $e->getMessage();
    }


  }

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
                VALUES (\"$_first\", \"$_last\", \"$_email\", \"$_username\", \"$_password\")";

      $dbConnect->exec($query);

      $dbConnect = null;

      return true;
    }
    catch (PDOException $e)
    {
      echo 'Connection failed: ' . $e->getMessage();
    }
  }

  function addBlogPost($_Image, $_Title, $_Date, $_Body)
  {
    try
    {
      $dbConnect = new PDO($this->dsn, $this->username, $this->password);

      $query = "INSERT INTO caseyjmcclure_mcbloggins_blog (caseyjmcclure_image, caseyjmcclure_title, caseyjmcclure_date, caseyjmcclure_post)
                VALUES ($_Image, $_Title, $_Date, $_Body)";

      $dbConnect->exec($query);

      $dbConnect = null;
    }
    catch (PDOException $e)
    {
      echo 'Connection failed: ' . $e->getMessage();
    }
  }

  function emailInUse($_email)
  {
    try
    {
        $dbConnect = new PDO($this->dsn, $this->username, $this->password);

        $query = "SELECT * FROM mcusers WHERE mcuser_email = \"$_email\";";

        $response = $dbConnect->query($query);

        if($response->rowCount() > 0)
        {
          return true;
        }
        else
        {
          return false;
        }

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

        $query = "SELECT * FROM mcusers WHERE mcuser_username = \"$_username\";";

        $response = $dbConnect->query($query);

        if($response->rowCount() > 0)
        {
          return false;
        }
        else
        {
          return true;
        }

        $dbConnect = null;
    }
    catch (PDOException $e)
    {
      echo 'Connection failed: ' . $e->getMessage();
    }

  }

  function userLogin($_username, $_password)
  {
    try
    {
        $dbConnect = new PDO($this->dsn, $this->username, $this->password);

        $query = "SELECT * FROM mcusers WHERE mcuser_username = \"$_username\";";

        $response = $dbConnect->query($query);

        if($response->rowCount() > 0)
        {
          $result = $response->fetchAll();

          if($result[0]['mcuser_password'] == $_password)
          {
            return true;
          }
          else
          {
            return false;
          }
        }
        else
        {
          return false;
        }

        $dbConnect = null;
    }
    catch (PDOException $e)
    {
      echo 'Connection failed: ' . $e->getMessage();
    }
  }

  function userSetup($_username, $_password)
  {
    try
    {
      $dbConnect = new PDO($this->dsn, $this->username, $this->password);

      $tablename = $_username.'_mcbloggins_blog';

      $col1 = $_username.'_Id';
      $col2 = $_username.'_Image';
      $col3 = $_username.'_Title';
      $col4 = $_username.'_Date';
      $col5 = $_username.'_Post';

      $constraint = $_username.'_mcbloggins_blog_ibfk_1';

      $query = "CREATE TABLE IF NOT EXISTS $tablename (
               $col1 int(10) unsigned NOT NULL,
               $col2 mediumtext,
               $col3 varchar(45) DEFAULT NULL,
               $col4 date DEFAULT NULL,
               $col5 varchar(10000) DEFAULT NULL,
               mcuser_idnum int(11) DEFAULT NULL,
               PRIMARY KEY ($col1),
               KEY mcuser_idnum (mcuser_idnum),
               CONSTRAINT $constraint FOREIGN KEY (mcuser_idnum) REFERENCES mcusers (mcuser_idnum) ON DELETE CASCADE ON UPDATE CASCADE
               ) ENGINE=InnoDB DEFAULT CHARSET=utf8;";

      $dbConnect->exec($query);

      $create_user = "CREATE USER '$_username'@'localhost' IDENTIFIED BY '$_password';";

      $dbConnect->exec($create_user);

      $grant_user_privilige = "GRANT ALL ON mcbloggers.$tablename TO '$_username'@'localhost';";

      $dbConnect->exec($grant_user_privilige);

      $dbConnect = null;
    }
    catch (PDOException $e)
    {
      echo 'Connection failed: ' . $e->getMessage();
    }
  }

  function setSession($_username)
  {
    try
    {
        $dbConnect = new PDO($this->dsn, $this->username, $this->password);

        $query = "SELECT * FROM mcusers WHERE mcuser_username = \"$_username\"";

        $response = $dbConnect->query($query);

        foreach($response as $row)
        {
          $u = $row['mcuser_username'];
          $f = $row['mcuser_first'];
          $l = $row['mcuser_last'];
          $e = $row['mcuser_email'];
        }

        $data = ['uN' => $u, 'uF' => $f, 'uL' => $l, 'uE' => $e];

        $_SESSION['u_data'] = $data;
    }
    catch (Exception $e)
    {
        echo 'Connection failed: ' . $e->getMessage();
    }

    function userSendBlog($_username, $_title, $_date, $_body)
    {
      try
      {
          $dbConnect = $this->userPDOdb($_username);

          $tablename = $_username."_mcbloggins_blog";

          $col1 = $username."_Title";
          $col2 = $username."_Date";
          $col3 = $username."_Post";

          $query = "INSERT INTO $_tablename ($col1, $col2, $col3)
                    VALUES ($_title, $_date, $_body)";

          $dbConnect->exec($query);

      }
      catch (Exception $e)
      {
          echo 'Connection failed: ' . $e->getMessage();
      }
    }

  }
}
?>
