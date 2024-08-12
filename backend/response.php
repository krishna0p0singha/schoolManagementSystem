<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style/dashboard.css">
  <link rel="stylesheet" href="../style/table_content.css">
  <title>Document</title>
</head>
<body>
  
</body>
</html>
<?php
require '../connect.php';
if($_SERVER['REQUEST_METHOD']== "GET"){

  if(!empty($_GET['q'])){
        $q = $_GET['q'];
        $sql="SELECT * FROM subject_name WHERE class_name='".$q."'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) >0){
          while($row=mysqli_fetch_assoc($result)){
              echo '<option value="'.$row['subject_name'].'">'.$row['subject_name'].'</option>';
          }
      }
    }
  if(!empty($_GET['status']) && !empty($_GET['psw'])){
        $status=$_GET['status'];
        $psw=$_GET['psw'];
        $userID="";
        $admin="admin";
//====================user Faculty=====================
            if($status=="users_faculty"){
              $sql="SELECT * FROM users_faculty WHERE pasw='".$psw."'";
              try{
                    $result = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result) >0){
                      while($row=mysqli_fetch_assoc($result)){
                          echo $row['full_name']."<br>";
                          echo $row['mobile_ph']."<br>";
                          echo $row['email_id']."<br>";
                          echo $row['user_ID']."<br>";
                          echo $row['pasw']."<br>";
                          echo $row['date_of_birth']."<br>";
                          echo $row['dp_path']."<br>";
                        }
                  }else{
                    mysqli_close($conn);

                  }
                    }catch(Exception $e){

                    }
            }
//====================user admin=====================
            else if($status=="admin_school"){
              $sql="SELECT * FROM admin_school WHERE psw='".$psw."'";
              try{
                    $result = mysqli_query($conn, $sql);

                    if(mysqli_num_rows($result) >0){
                    
                      while($row=mysqli_fetch_assoc($result)){   
                      
                        echo $row['full_name']."<br>";
                        echo $row['user_id']."<br>";
                        echo $row['email_id']."<br>";
                        echo $row['mobile_no']."<br>";
                        echo $row['psw']."<br>";
                        echo $row['dp_path']."<br>";
                        }
                  }else{
                    mysqli_close($conn);

                  }
                    }catch(Exception $e){

                    }
            }
 //====================user student_details=====================
        else if($status=="student_details"){
          $sql="SELECT * FROM student_details WHERE psw='".$psw."'";
          try{
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) >0){
                  while($row=mysqli_fetch_assoc($result)){
                    echo $row['stutent_name']."<br>";
                    echo $row['student_user_ID']."<br>";
                    echo $row['psw']."<br>";
                    echo $row['class_name']."<br>";
                    echo $row['date_of_birth']."<br>";
                    echo $row['student_dp_path']."<br>";
                    echo $row['mobile_no']."<br>";
                    }
              }else{
                mysqli_close($conn);
                    
              }
                }catch(Exception $e){
                  
                }
        }else{
          echo "<SCRIPT> //not showing me this
            alert('Login Failed');
            window.location.replace('../Dashboard.php');
          </SCRIPT>";
        }

}
if(!empty($_GET['task'])){
  
  $sql="SELECT * FROM home_task";
  $result = mysqli_query($conn, $sql);
  if(mysqli_num_rows($result) >0){
    echo '<table class="styled-table">
    <th>Subject</th>
    <th>Class</th>
    <th>Home Work</th>';
    while($row=mysqli_fetch_assoc($result)){
    echo '<tr>
      <td>'.$row['subject_name'].'</td>
      <td>'.$row['class_name'].'</td>
      <td>'.$row['home_task'].'</td>
      </tr>';
  }
  echo '</table>';

}
}
}
     
if($_SERVER['REQUEST_METHOD']== "POST"){
    if($_POST['#check']=="books_up"){
            $class_name=$_POST['class_name'];
            $subjects=$_POST['subjects'];
            if(!empty($class_name) && !empty($subjects)){
                $sql="SELECT * FROM books WHERE subjects='".$subjects."' AND class_name='".$class_name."'";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) >0){
                    echo '<table class="styled-table">
                    <th>Book Tittle</th>
                    <th>Book Writter</th>
                    <th>Subject</th>
                    <th>class</th>';
                    while($row=mysqli_fetch_assoc($result)){
                        echo '<tr>
                        <td>'.$row['book_name'].'</td>
                        <td>'.$row['book_writer'].'</td>
                        <td>'.$row['subjects'].'</td>
                        <td>'.$row['class_name'].'</td>
                        </tr>';
                    }
                    echo '</table>';
                }
            }
        }
if($_POST['#check']=="syllabus_check"){
            $class_name=$_POST['class_name'];
            $subjects=$_POST['subjects'];
            if(!empty($class_name) && !empty($subjects)){
                $sql="SELECT * FROM syllabus_name WHERE subject_name='".$subjects."' AND class_name='".$class_name."'";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) >0){
                    echo '<br><table class="styled-table">
                    <th>Class</th>
                    <th>Subject</th>
                    <th>Syllabus</th>';
                    while($row=mysqli_fetch_assoc($result)){
                        echo '<tr>
                        <td>'.$row['class_name'].'</td>
                        <td>'.$row['subject_name'].'</td>
                        <td>'.$row['syllabus'].'</td>
                        </tr>';
                    }
                    echo '</table>';
                }
            }
        }
  if($_POST['#check']=="Query"){
        $msg=$_POST['msg'];
        $user_id="";
        $date_msg=$_POST['msg_date'];
        $time_msg=$_POST['msg_time'];

        $sql="INSERT INTO message_box(
          user_id,
          date_msg,
          time_msg,
          msg_text	
        )VALUES(
          '".$user_id."',
          '".$date_msg."',
          '".$time_msg."',
          '".$msg."'
        )";
        if(mysqli_query($conn, $sql)) {
              
          echo "<SCRIPT> //not showing me this
          alert('Query Submit');
          window.location.replace('../Dashboard.php');
        </SCRIPT>";
          mysqli_close($conn);
        } else {
         
          
          echo "<SCRIPT> //not showing me this
          alert('Query Not Submit');
          window.location.replace('../Dashboard.php');
        </SCRIPT>";
           mysqli_close($conn);
      } 
    } 
if($_POST['#check']=="add_task"){
  $class_name=$_POST['class_name'];
  $subjects=$_POST['subjects'];
  $home_Task=$_POST['add_home_work'];
  $start_date=$_POST['start_date'];
  $end_date=$_POST['end_date'];
      $sql="INSERT INTO home_task(
        subject_name,
        class_name,
        home_task,
        start_date,
        end_date
      )VALUES(
        '".$subjects."',
        '".$class_name."',
        '".$home_Task."',
        '".$start_date."',
        '".$end_date."'
      )";
      if(mysqli_query($conn, $sql)) {
            
        $message = 'Data Added Succesfully';
        echo $message;
        mysqli_close($conn);
      } else {
       
        $message = 'Please Full the all fields';
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
         mysqli_close($conn);
    } 
  } 
  }
      
?>
