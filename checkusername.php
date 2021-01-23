<?php

$con= mysqli_connect('localhost', 'root','','shirish','3327');



if(mysqli_connect_errno()){
    echo "failed to connect tp mysql";
  }
if(isset($_POST) & !empty($_POST)){
  $username = $_POST['username'];
  
}






 ?>
