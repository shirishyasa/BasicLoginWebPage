<?php

$useremail=$_POST['email'];
$password=$_POST['password'];
$checkpass = $_POST['password1'];
$vali=checkIfEmailValid($useremail);
if($vali==true){
  if(checkForSpecialCharacter($password)==true){
    if($password!==$checkpass){
      echo "Your passwords did not match<br>";
      echo "<a href='signuppangea.html'> Click here to try again </a>";

    }else if(strlen($password)<9){
      echo "You password must be 8 Characters<br>";
        echo "<a href='signuppangea.html'> Click here to try again </a>";
    }
    else{
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
              echo "username is already taken";
              return true;

              break;
            }





          }

        }
        $taken= _checkifusernameistaken($emails,$useremail);

        if ($taken==false){

            $sql = "INSERT INTO user_info (Email, Password)
          VALUES ('$useremail','$password')";


          if ($con->query($sql) === TRUE) {
              echo "Account has been created";
              echo "<a href= 'signinpangea.html'> <br>Click here to Sign in </a>";

          } else {
              echo "Error: " . $sql . "<br>" . $con->error;
          }


        }
        function checkEmailExists($x,$em){
          foreach($x as $i){
            if($x==$em){
              echo "Username is already taken";
              echo "<a href='signuppangea.html'> Click here to try again </a>";
              break;

            }
            else{
              echo "Congrats on registeriubg";
            }
          }
        }





    }
  }else{
    echo "Your password did not have a special character<br>";
    echo "<a href='signuppangea.html'> Click here to try again </a>";
  }
}else{
  echo "You entered an invalid email";

}


function checkForSpecialCharacter($usern){
  $allchars = str_split($usern);

  foreach($allchars as $i){
    if($i=="$"){
      return true;
      break;

    }
    else if($i=="!"){
      return true;
      break;


    }else if($i=="#"){
      return true;
      break;


    }
    else if($i=="&"){
      return true;
      break;


    }
    else if($i=="*"){
      return true;
      break;


    }
    else if($i=="&"){
      return true;
      break;


    }
    else if($i=="%"){
      return true;
      break;


    }




  }
}
function checkIfEmailValid($emu){
  $emm= str_split($emu);
  foreach($emm as $i){
    if($i=="@"){
      return true;
      break;

    }
  }
}



?>
