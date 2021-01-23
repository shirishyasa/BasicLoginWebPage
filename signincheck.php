
<html>
<?php


$username = $_POST['email'];
$password = $_POST['password'];
$result = null;

$con= mysqli_connect('localhost', 'root','','shirish','3327');



if(mysqli_connect_errno()){
    echo "failed ot connect tp mysql";
  }

$result = mysqli_query($con, "SELECT * FROM `user_info` WHERE 1");




$datas= array();
if (mysqli_num_rows($result)>0){
    while($row= mysqli_fetch_assoc($result)){
      $datas[]= $row;

    }


}

echo "<br>";
$passwords = array();
foreach($datas as $pp){
  array_push($passwords, $pp["Password"]);
}



$emails= array();
foreach($datas as $i){




 array_push($emails,$i["Email"]);






}
//for($u1=0; $u1<sizeof($passwords); $u1++){
  //echo $emails[$u1]." the password for this account is: ".$passwords[$u1];
//}
$exists = true;
$x=0;
foreach ($emails as $um) {



  if ($username==$um){
    $exists = true;
    if($password==$passwords[$x]){
      echo " You have sucessfully logged in";

      redirect("dashboardd.html");

    }



    break;


  }
  else{
    $exists=false;


  }
  $x++;


}
if($exists==false){
  echo "user does not exist";
}





function redirect($url) {
    ob_start();
    header('Location: '.$url);
    ob_end_flush();
    die();
}
 ?>
</html>
