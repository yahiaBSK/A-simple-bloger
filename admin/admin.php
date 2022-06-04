<?php
include('../server.php')


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
  <link rel="stylesheet" href="admin.css">
</head>

<body>
    
  <div class="container">
    <button id="add_post_btn">+ Add post..</button>
    <div class="add_post">
      <form method="GET" method="">
        <label for="title">TITLE</label>
        <input type="text" name="title">
        <label for="content">CONTENT</label>
        <input type="text" name="content">
        <label for="all_content">ALL CONTENT</label>
        <textarea name="all_content" ></textarea>
        <label for="img">IMAGE</label>
        <input type="file" name="img">
        <button name="add_post">✓ DONE</button>
      </form>
    </div>
    
    
    
    
    <div class="edit_posts">
      <div class="posts_h1">
        <h1 id="h1_1">POSTS</h1>
      </div>
      <?php
      foreach ($check as $q_admin){
      ?>
        <div class="edit_post">
          <div class="left_side">
            <h1>
              <?php echo($q_admin['TITLE']); ?>
            </h1>
            <p><?php echo($q_admin['CONTENT']); ?></p>
            <p> id: <?php echo($q_admin['ID']); ?></p>
          </div>
          <div class="right_side">
            <form method="GET" >
            <a href="?edit-id=<?php echo($q_admin['ID']) ?>"><button name="edit_btn" id="edit_btn" value="<?php echo($q_admin['ID']); ?>">Edit</button></a>
            <a href="?delete-id=<?php echo($q_admin['ID']) ?>"><button type="submit" name="delete_btn" value="<?php echo($q_admin['ID']); ?>">Delete</button></a>
            </form>
            <a href="../post.php?id=<?php echo($q_admin['ID']); ?>"><button id="show_post_btn">Show</button></a>
          </div>
        </div>
<?php 
if ($_GET['delete_btn']==$q_admin['ID']) {
  $q_id = $q_admin['ID'];
  $delete_post=mysqli_query($server_conn, "DELETE FROM `blogTB` WHERE `blogTB`.`ID` = $q_id ");
  echo("<script> window.location.href='admin.php'</script>");
}
if ($_GET['edit_btn']==$q_admin['ID']) {
?>
        <div class="edit_con_filter">
          <div class="edit_con">
           
             <a ><input type="button" id="close_edit_con" value="×"></a>
             <form method="GET">
             <label for="title">TITLE</label>
             <input type="text" name="edit_title" value="<?php echo($q_admin['TITLE']); ?>">
             <label for="content">CONTENT</label>
             <input type="text" name="edit_content" value="<?php echo($q_admin['CONTENT']); ?>">
             <label for="all_content">ALL CONTENT</label>
             <textarea name="edit_all_content" ><?php echo($q_admin['ALL-CONTENT']); ?></textarea>
             <button name="edit_post" value="<?php echo($q_admin['ID']); ?>">DONE</button>
             </form>
           
           </div>
          </div>
      <?php }}; ?>
    </div>
          
          
  </div>
 
 
 
 
 
 
 
 
  <script src="admin.js"></script>
</body>
</html>
