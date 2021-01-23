<html>
<head> Hello</head>

<body>
<?php

$con= mysqli_connect('localhost', 'root','','shirish','3327');



if(mysqli_connect_errno()){
    echo "failed ot connect tp mysql";
  }

$email= $_POST['email'];
$password=$_POST['password'];




  $sql = "INSERT INTO user_info (Email, Password)
VALUES ('$email','$password')";


if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}





 ?>
</body>
</html>
