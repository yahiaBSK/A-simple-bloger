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
  <div class="posts_container">
    <?php
    include_once('server.php');
    foreach ($check as $q){ ?>
    <div class="post">
      <a href="post.php?id=<?php echo($q['ID']); ?>" >
        <div class="Post_div">
          <p id="id"><?php echo($q['ID']);?></p>
          <h1><?php echo($q['TITLE']); ?></h1>
          <p><?php echo($q['CONTENT'])?></p>
          <p id="time">Posted at: <?php echo($q['TIME']) ?></p>
        </div>
      </a>
    </div>
    <?php } ?>
  </div>
  <script src="main.js"></script>
</body>
</html>
