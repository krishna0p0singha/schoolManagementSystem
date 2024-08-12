<?php
require "../connect.php";

if($_SERVER['REQUEST_METHOD']=="POST"){
//================================script for notice===============
    if($_POST['#check']=="notice"){
        $start=$_POST['start_date'];
        $end=$_POST['end_date'];
        $msg=$_POST['maassage'];
        $sql="INSERT INTO notice_board(
            startDate,
            endDate,
            userid,
            notice
        )VALUES(
            '".$start."',
            '".$end."',
            '',
            '".$msg."'
            )";
            if (mysqli_query($conn, $sql)) {
                    $message = 'Data Added Succesfully';
                    echo $message;
                    mysqli_close($conn);  
              } else {
                $message = 'Please Full the all fields';
                echo $message;
                mysqli_close($conn);
              }       
    }
//================================script for Syllabus===============
    if($_POST['#check']=="syllabus"){
            $subject_name=$_POST['subject_name'];
            $class_name=$_POST['class_name'];
            $syllabus=$_POST['syllabus'];
                $sql="INSERT INTO syllabus_name(
                        subject_name,
                        class_name,
                        syllabus	
                )VALUES(
                    '".$subject_name."',
                    '".$class_name."',
                    '".$syllabus."'
                )";
                if (mysqli_query($conn, $sql)) {
                   
                    $message = 'Data Added Succesfully';
                    echo $message;        
                    mysqli_close($conn);
                } else {
                    
            $message = 'Please Full the all fields';
            echo $message;
            mysqli_close($conn);
                }       
              
    }
//================================script for books===============
    if($_POST['#check']=="books"){
        $book_tittle=$_POST['bookTittle'];
        $book_writter=$_POST['bookWritter'];
        $subject_name=$_POST['subjectName'];
        $class_name=$_POST['class_name'];

        $sql="INSERT INTO books(
            book_name,
            book_writer,
            subjects,
            class_name
        )VALUES(
            '".$book_tittle."',
            '".$book_writter."',
            '".$subject_name."',
            '".$class_name."'
        )";

        if (mysqli_query($conn, $sql)) {
            
            $message = 'Data Added Succesfully';
            echo $message;
            mysqli_close($conn);
          } else {
           
            $message = 'Please Full the all fields';
            echo $message;
             mysqli_close($conn);
        }  
    }
//================================script for faculty===============
    if($_POST['#check']=="register_faculty"){
        $name=$_POST['name'];
            $mobile=$_POST['mobile'];
            $email=$_POST['email'];
            $dob=$_POST['dob'];
            $qualification=$_POST['qualification'];
            $psw=trim($dob, '-');
            $dp_path=$_FILES['photo']['name'];
            $userID=$_POST['userid'];
       
            
            $sql="INSERT INTO users_faculty ( 
                full_name,
                mobile_ph,
                qualification,
                email_id,
                user_ID,
                pasw,
                date_of_birth,
                dp_path)
            VALUES (
                '".$name."',
                ".$mobile.",
                '".$email."',
                '".$userID."',
                '".$psw."',
                '".$dob."',
                '".$dp_path."'
                )";
               
                
                if (mysqli_query($conn, $sql)) {
                 
                    $message = 'Data Added Succesfully';
                    echo $message;
                    mysqli_close($conn);
                  } else {
                    
                    $message = 'Please Full the all fields';
                    echo $message;
                    mysqli_close($conn);
                }  
    
    }
    if($_POST['#check']=="register_student"){
        $name=$_POST['name'];
        $dob=$_POST['dob'];
        $pssw=$dob;
        $dp_path=$_FILES['photo']['name'];
        $class_name=$_POST['class_name'];
        $mobile=$_POST['mobile'];
        $userID="123";
           $sql="INSERT INTO student_details(
            stutent_name, 
            student_user_ID,
            psw, 
            class_name, 
            date_of_birth, 
            student_dp_path, 
            mobile_no) 
           VALUES (
            '".$name."',
            '[value-3]',
            '".$pssw."',
            '".$class_name."',
            '".$dob."',
            '".$dp_path."',
            ".$mobile."
            )";
            if (mysqli_query($conn, $sql)) {
                
                $message = 'Data Added Succesfully';
                echo $message;
                mysqli_close($conn);
              } else {
              
                $message = 'Please Full the all fields';
                echo $message;
                  mysqli_close($conn);
            }       
    }
//================================script for videos===============
if($_POST['#check']=="video"){
        $video_tittle=$_POST['videoTittle'];
        $video_link=$_POST['VideoLink'];
        $video_duration=$_POST['duration'];
        $Video_type=$_POST['Video_type'];
            $sql="INSERT INTO video_gallery(
          title,
          video_path,
          duration,
          video_type	
            )VALUES(
              '".$video_tittle."',
              '". $video_link."',
              ".$video_duration.",
              '".$Video_type."'
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