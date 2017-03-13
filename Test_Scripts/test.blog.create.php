<!DOCTYPEhtml>
<html>
<head>
  <title>Blogpost Object Test</title>
</head>
<body>
  <?php
     if(file_exists("../Models/blog.create.php"))
     {
        if((include "../Models/blog.create.php") == true)
        {

          $title = "Title";
          $post = "Post";

          $newBlogPost = new Blogpost($title, $post);

          echo "<h1>".$newBlogPost->getTitle()."</h1>\n\r";
          echo "<h1>".$newBlogPost->getDate()."</h1>\n\r";
          echo "<h1>".$newBlogPost->getPost()."</h1>\n\r";
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
