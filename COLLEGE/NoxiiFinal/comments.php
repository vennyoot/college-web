<!DOCTYPE html>
<html lang="en-us">
<head>
  <meta charset="utf-8">
  <title>Comments | NoxiiFinal</title>
  <link rel="stylesheet" href="/style.css">
</head>

<body style="
	text-align: center;
  width: 65vw;
  margin: auto;
  margin-top: 4em">

<style>

.block {
  width: 20em;
  background-color: rgba(0, 0, 0, 0.25);
  border-radius: 15px;
  text-align: center;
  padding: 1em 1em 1em 1em;
  margin: auto;
  margin-bottom: 1em;
}
</style>
  <div class="sidenav">
    <a id="profile" href="/"> <!-- returns user to home page --><img border="2" src="https://puu.sh/Cyl6m/2709c54011.gif">
    </a>
    <a href="/">Home</a>
    <a href="#">Artwork</a>
    <a href="#">Projects</a>
    <a href="#">College</a>
    <a href="#">Contact</a>
  </div>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <b>Name:</b><br/>
  <input type="text" name="name"><br/>
  <b>Comment</b><br/>
  <textarea name="comment" rows="5" cols="25"></textarea><br/><br/>

  <input type="submit" value="Add" name="add"><br/><br/>

<h1>Comments for NoxiiFinal</h1>

    <?php

  if(isset($_POST['comment']))  {
          //this is php stuff
    $content = "<div class=\"block\"><b>" . $_POST['name'] . "</b> says:<br/>" . $_POST['comment'] . "</div>";
    $fp = fopen("comments.txt","a+");
    fwrite($fp, $content);
    fclose($fp);
  }

  echo file_get_contents("comments.txt");

  ?>
</form>
</body>
</html>