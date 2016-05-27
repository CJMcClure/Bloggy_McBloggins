<?
session_start();
?>

<!DOCTYPEhtml>
<html>
<head>
<title><? echo $_SESSION['u_data']['uF'].'\'s'; ?> Dashboard</title>
</head>
<body>
  <?
  include './components.php';

  $comp = new components();

  $comp->menuBar();

  if(isset($_POST['write']))
  {
    $comp->write();
  }
  elseif(isset($_POST['view']))
  {

  }
  elseif(isset($_POST['edit']))
  {
    echo 'Edit';
  }
  elseif(isset($_POST['logout']))
  {
    session_destroy();
    header('Location: ../');
  }

    if(isset($_POST['submitPost']))
    {
      $title = $_POST['title'];
      $body = $_POST['body'];

      if($title != null && $body != null)
      {

      }
      else
      {

          if($title == null)
          {
            $title_error = "*Required";
          }
          else
          {
            $title_value = $title;
          }

          if($body == null)
          {
            $body_error = "*Required";
          }
          else
          {
            $body_value = $body;
          }

          $comp->write();
      }
    }
  ?>
</body>
<script>
var opt = document.getElementsByTagName('a');

for(i = 0; i < opt.length; i++)
{
  opt[i].addEventListener('mouseover', function(){
    this.style.cursor = 'pointer';
  });
}

opt[0].addEventListener('click', function(){



});

opt[1].addEventListener('click', function(){



});

opt[2].addEventListener('click', function(){



});
</script>
</html>
