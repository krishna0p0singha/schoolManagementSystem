<?php
require "../connect.php";
if(isset($_POST['login'])){    
  if($_SERVER['REQUEST_METHOD']=="POST"){
        $psw=$_POST['psw'];
        $userID=$_POST['userID'];
        $status=$_POST['ocupation'];
        $users_faculty="users_faculty";
        $student_details="student_details";
        $admin="admin_school";
        if($status=="Faculty"){
        select_data($userID,$users_faculty,$psw,$conn,"pasw");
        }
        else if($status=="Admin"){
          select_data($userID,$admin,$psw,$conn,"psw");
        }
        else if($status=="Student"){
          select_data($userID,$student_details,$psw,$conn,"psw");
        }else{
          echo "<SCRIPT> //not showing me this
            alert('Login Failed');
            window.location.replace('../Dashboard.php');
          </SCRIPT>";
        }
        }
      
      }

function select_data($user,$table,$psw,$conn,$column){

  $sql="SELECT * FROM ".$table." WHERE ".$column."='".$psw."'";
  try{
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) >0){
          session_start();
         $_SESSION["psw"] =$psw;
         $_SESSION['status']=$table;
          if(!isset($_SESSION["psw"]) ){
            mysqli_close($conn);
            echo "<SCRIPT> //not showing me this
            alert('Login Failed');
            window.location.replace('../Dashboard.php');
          </SCRIPT>";
          } else {
            mysqli_close($conn);
            $message = 'All Set';
            echo "<SCRIPT> //not showing me this
            alert('$message');
            window.location.replace('../Dashboard.php');
          </SCRIPT>";
          }
            
      }else{
        mysqli_close($conn);
            $message = 'You are Not valid user !----';
            echo "<SCRIPT> //not showing me this
            alert('$message');
            window.location.replace('../Dashboard.php');
          </SCRIPT>";
      }
        }catch(Exception $e){
          $message = 'All Set';
            echo "<SCRIPT> //not showing me this
            alert('$message');
            window.location.replace('../Dashboard.php');
          </SCRIPT>";
        }
      }

?>
