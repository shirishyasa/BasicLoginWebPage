<html>

<title>Register for Pangea </title>
<center>
<div class="header">
<head> Register for Pangea below </head>
</div><br>
</center>


<body>
<center>
  <form action="databasearraycolumn.php" method="post" id="dd">
<form action="practweb.php" method="post" id="userform">
<text> Enter email below-</text>

</center>
<center>
<style>
html{

  background-color: #90EE90

}
input:hover{
  border-style: groove;
}
body{
font-family: tahoma, serif;
margin: 4px 2px;

}
head{
font-family: tahoma;
font-size: 60%;



}
</style>
<div id="mydiv">
  <script type="text/javascript">
  document.getElementById("mydiv").addEventListener("mousemove","movingMyMouse");
  function movingMyMouse(){
    document.getElementById("userform").submit();




  }

<input type="text" name="email">
<br>
</center>

<center>

<text> Enter your new password below-</text> <br>
<input type="password" name="password">
<br>

<br>
<input type="submit" name="register">
</div>
</center>
<br>

<br>


<?php


$useremailid=$_POST['email'];
$password=$_POST['password'];

$con= mysqli_connect('localhost', 'root','','shirish','3327');



if(mysqli_connect_errno()){
    echo "failed ot connect tp mysql";
  }


  $sql="SELECT * FROM `user_info`";
  $result=mysqli_query($con,$sql);
  $datas= array();
  if (mysqli_num_rows($result)>0){
      while($row= mysqli_fetch_assoc($result)){
        $datas[]= $row;

      }


  }

  echo "<br>";


  $emails= array();
foreach($datas as $i){




   array_push($emails,$i["Email"]);






  }

  function _checkifusernameistaken($email,$useremail){
    foreach($email as $u){


      if($u==$useremail){
        echo "<br>"."username is already taken";
        return true;

        break;
      }





    }

  }
  $taken= _checkifusernameistaken($emails,$useremailid);

  if($taken==false){
    echo "<br>"."username is available";




  }







?>





 ?>



</form>
</form>
</body>




</html>
