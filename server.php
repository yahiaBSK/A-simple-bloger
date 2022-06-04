<?php

/*===== DATABASE CONNECTING ======*/
$host = "localhost:3306";
$user = "root";
$pass = "root";
$db = "testDB";
$server_conn = mysqli_connect($host, $user, $pass, $db);
if (!$server_conn) {
  echo("<p id='error'> " .mysqli_connect_error($server_conn). " </p>");
}


/*=== SELECT POSTS FROM DB TABLE ===*/
$check = mysqli_query($server_conn,"SELECT * FROM blogTB");
$check_done = mysqli_fetch_array($check);



/*=== ADD POSTS TO DB ==*/
$title = addslashes($_GET['title']);
$content = addslashes($_GET['content']);
$all_content = addslashes($_GET['all_content']);
$img = $_GET['img'];
$add = $_GET['add_post'];
if (isset($add)) {
  if (empty($title)||empty($content)||empty($all_content)) {
    echo("<script>alert('** SOME INPUT IS EMPTY ! **')</script>");
  }else{
    $add_post = mysqli_query($server_conn,"INSERT INTO `blogTB` (`ID`, `TITLE`, `CONTENT`, `ALL-CONTENT`, `TIME`, `IMG`) VALUES (NULL, '$title', '$content','$all_content', NOW(), '$img')");
    echo("<script>window.location.href='admin.php'</script>");
    
  }
}


/*===== EDIT & DELETE POSTS ===== */
if (isset($_GET['edit_post'])) {
  
  $q_admin_id = $_GET['edit_post'];
  $title_edit = addslashes($_GET['edit_title']);
  $content_edit =  ($_GET['edit_content']);
  $all_content_edit = addslashes($_GET['edit_all_content']);
  
  $edit_post=mysqli_query($server_conn, "UPDATE `blogTB` SET `TITLE` = '$title_edit', `CONTENT` = '$content_edit', `ALL-CONTENT` = '$all_content_edit' WHERE `blogTB`.`ID` = '$q_admin_id'");
  header('location: admin.php');
}



?>
