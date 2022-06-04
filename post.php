<?php

include_once('server.php')

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>HTML</title>
  
  <!-- HTML -->
  

  <!-- Custom Styles -->
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="posts_container-2">
    <?php 
    $id = $_GET['id'];
    $check_post = mysqli_query($server_conn, "SELECT * FROM blogTB WHERE ID='$id'");
    $check_post_done = mysqli_fetch_array($check_post);
    ?>
    <p id="time"><?php echo($check_post_done['TIME']); ?></p>
    <h1 ><?php echo($check_post_done['TITLE']);?></h1>
    <p ><?php echo(nl2br(htmlspecialchars($check_post_done['ALL-CONTENT'])));?></p>
    <div ><?php echo($check_post_done['IMG']) ?></div>
  </div>
  <script src="main.js"></script>
</body>
</html>
