<?php
  $db_server="localhost";
  $db_username="root";
  $db_password="159026";
  $database="student_db";
  $conn = mysqli_connect($db_server, $db_username, $db_password, $database);

  if(! $conn){
    echo "Not successful";
  }
  // echo "Connection successful<br>";
?>