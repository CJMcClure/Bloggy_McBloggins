<?php
class components
{
  function menuBar()
  {
    ?>
    <form>
      <button name='write' type='submit' formmethod='post' formaction="<?echo htmlspecialchars($_POST['PHP_SELF']);?>">Write Post</button>
      <button name='view' type='submit' formmethod='post' formaction="<?echo htmlspecialchars($_POST['PHP_SELF']);?>">View Posts</button>
      <button name='edit' type='submit' formmethod='post' formaction="<?echo htmlspecialchars($_POST['PHP_SELF']);?>">Edit Post</button>
      <button name='logout' type='submit' formmethod='post' formaction="<?echo htmlspecialchars($_POST['PHP_SELF']);?>">Logout</button>
    </form>
    <?
  }

  function write()
  {
    ?>
    <form method='post' action='<?echo htmlspecialchars($_POST['PHP_SELF']);?>'>
      <br>
      <label for='title'>Title
      <span><?echo $title_error; ?></span>
      <input name='title' type='text' value='<?echo $title_value;?>'/>
      </label>
      <br><br>
      <label for='body'>Body
      <span><?echo $body_error; ?></span>
      <textarea name='body' value='<?echo $body_value;?>'></textarea>
      </label>
      <br><br>
      <input name='submitPost' type='submit'/>
    </form>
    <?
  }
}
?>
