<?php
require "connect.php";
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style/dashboard.css">
    <link rel="stylesheet" href="style/table_content.css">


</head>
<body style="background-image: url('img/bw.png');">

<!--=============================================================================-->
<!-----------------------------registration login button----------------------->
<br>
<center>
<div>
<?php
if(!isset($_SESSION['psw'])){
?>
<button id="1" class="Btn fnt" onclick="Display_Login(this.id);">Login</button>
<?php
}else{
  if($_SESSION['status']=="admin_school"){
?>
<button id="2" class="Btn fnt" onclick="Display_Login(this.id);">Register</button></div>
</center>
<?php
}
?>

<img src="img/menu.png" id="#menu" class="profile" onclick="profile_display();">
<?php
echo '<marquee behavior="scroll" direction="right"> 
<label for="">'.$_SESSION['status'].'</label>
</marquee>';
}
?>
<br>
<!--=============================================================================-->
<!-------------------------------login form------------------------------->
<center> 
<div id="loginFrame" style="display: none;" class="login">
    <form name='login' action="backend/register.php" method="post">
        <label for="userID">user ID :</label>
        <input class="fnt" type="number" name="userID"> <br> <br>
        <label for="psw">Password :</label>
        <input class="fnt" type="password" name="psw"><br> <br>
        <!------------------Select Your Ocupation------------------------>
        <label for="ocupation">Select Your Ocupation :</label> <br>
        <label for="Faculty">Faculty :</label>
        <input type="radio" name="ocupation" value="Faculty">
        <label for="Student">Student :</label>
        <input type="radio" name="ocupation" value="Student">
        <label for="Student">Admin :</label>
        <input type="radio" name="ocupation" value="Admin"><br><br>
        <input class="fnt" type="submit" name="login" value="LOGIN">
        <input id="3" class="fnt" type="reset" value="RESET">
    </form>
</div>

<!-----------------------------registration----------------------->
<div id="registerFrame" class="register" style="display: none;">

<div style="padding:2px;"> 
        <button id="#register_student"  class="registerBtn" onclick="registration_page(this.id);">New Student Registration</button>
        <button id="#register_faculty" class="registerBtn" onclick="registration_page(this.id);" >New Teacher Registration</button>
        <button id="#Syllabus_Update" class="registerBtn" onclick="registration_page(this.id);" >Syllabus Update</button>
        <button id="#Update_Books" class="registerBtn" onclick="registration_page(this.id);" >Books Update</button>
        <button id="#Notice_Update" class="registerBtn"  onclick="registration_page(this.id);" >Notice Update</button>
        <button id="#Video_Update" class="registerBtn"  onclick="registration_page(this.id);" >Video Update</button>
        
    </div>
<!--=============================================================================-->

<!-----------------------------registration form for faculty----------------------->
<br>
        <div id="register_faculty" style="display: none;" >
      
                <form id="#register_faculty#" class="style_form">
                <fieldset><legend>New Teacher Registration</legend>
                <!---------------full name--------------->
                        <label for="name">Full Name :</label>
                        <input class="fnt" type="text" name="name"><br><br>
                <!--------------Mobile Number---------------->
                        <label for="mobile">Mobile Number :</label>
                        <input class="fnt" type="number" name="mobile"><br><br>
                <!---------------------Mobile Number---------------->
                        <label for="qualification">Qualification :</label>
                        <input type="text" name="qualification"><br><br>
                <!------------------Email ID------------------------>
                        <label for="email">Email ID :</label>
                        <input class="fnt" type="email" name="email"><br><br>
                <!------------------Date Of Birth------------------------>
                        <label for="dob">Date Of Birth :</label>
                        <input class="fnt" type="date" name="dob"><br><br>

                <!------------------upload your Photo------------------------>
                        <label for="photo">Upload your Photo :</label>
                        <input class="fnt" type="file" name="photo" accept="image/png, image/jpeg"><br><br>
                <!------------------Your user ID genarate automatic:------------------------>
                        <label for="#check">Confirm Please :</label>
                        <input type="checkbox" name="#check" value="register_faculty"><br>
                        <center>
                        <label id="user_id" name="userid" for="" value="bbb" >Your user ID genarate automatic:</label><br><br>
                        <input id="##register_faculty" type="button" value="Update" onclick="submitQuery1(this.id);">
                        <input id="3" class="fnt" type="reset" value="RESET">
</center>

</fieldset>
                    </form>

                </div>
<!--=============================================================================-->
<!-----------------------------registration form for student----------------------->
            <div id="register_student" style="display: none;">
                <form id="#register_student#" class="style_form">
                <fieldset><legend>New Student Registration</legend>
                    <!---------------full name--------------->
                    <label for="name">Full Name :</label>
                    <input class="fnt" type="text" name="name"> <br> <br>

                    <!--------------Mobile Number---------------->
                    <label for="mobile">Mobile Number :</label>
                    <input class="fnt" type="number" name="mobile"><br> <br>
                    <!------------------class Name------------------------>
                    <label for="class_name">Class Name :</label>
                    <select name="class_name">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                    </select><br><br>

                    <!------------------Date Of Birth------------------------------------------>
                    <label for="dob">Date Of Birth : </label>
                    <input class="fnt" type="date" name="dob"><br> <br>

                    <!------------------upload your Photo--------------------------------------->
                    <label for="photo">Upload your Photo :</label>
                    <input class="fnt" type="file" name="photo" id="photo" accept="image/png, image/jpeg"><br> <br>

                    <!------------------Your user ID genarate automatic-------------------------->
                    <label for="#check">Confirm Please :</label>
                    <input type="checkbox" name="#check" value="register_student"><br><center>
                    <label id="user_id" name="userid" for="" value="bbb" >Your user ID genarate automatic:</label><br><br>
                    <input id="##register_student" type="button" value="Update" onclick="submitQuery1(this.id);">
                    <input id="3" class="fnt" type="reset" value="RESET">
                </center>
                    </fieldset>
                </form>
            </div>

<!--=============================================================================-->
<!---------notice Update---------------------------------------------------------->
<div id="Notice_Update" style="display:none;">
<form id="#Notice_Update#" class="style_form">
<fieldset><legend>Notice Set</legend>
    <label for="maassage" >Type Notice :</label>
    <input type="text" name="maassage"><br><br>
    <label for="start_date">Start Date: </label>
    <input type="date" name="start_date"><br><br>
    <label for="nd_date">End Date: </label>
    <input type="date" name="end_date"><br><br>
    <label for="#check">Confirm Please :</label>
    <input type="checkbox" name="#check" value="notice"><br>
    <center><input id="#notice" type="button" value="Update" onclick="submitQuery1(this.id);">
    <input id="3" class="fnt" type="reset" value="RESET"></center>
    </fieldset>
</form>
</div>

<!--=============================================================================-->
<!---------syllabus Update---------------------------------------------------------->
<div id="Syllabus_Update" style="display:none;">
<form id="#Syllabus_Update#" class="style_form">
<fieldset><legend>Update Syllabus</legend>
    <label for="subject_name" >Subject Name :</label>
    <input type="text" name="subject_name"><br><br>
    <label for="class_name">Class Name :</label>
                    <select name="class_name">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                    </select><br>
    <label for="syllabus">Syllabus :</label>
    <input type="text" name="syllabus"><br><br>
    <label for="#check">Confirm Please :</label>
    <input type="checkbox" name="#check" value="syllabus"><br><br>
    <center><input id="#syllabus" type="button" value="Update" onclick="submitQuery1(this.id);">
    <input id="3" class="fnt" type="reset" value="RESET"></center>
    </fieldset>
</form>
</div>


<!--=============================================================================-->
<!---------Books Update---------------------------------------------------------->
<div id="Update_Books" style="display:none;">
<form id="#Update_Books#" class="style_form">
<fieldset><legend>Update Books</legend>
    <label for="bookTittle" >Tittle Of Books :</label>
    <input type="text" name="bookTittle"><br><br>
    <label for="bookWritter">Writter :</label>
    <input type="text" name="bookWritter"><br><br>
    <label for="subjectName">Subject :</label>
    <input type="text" name="subjectName"><br><br>
    <label for="class_name">Class Name :</label>
                    <select name="class_name">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                    </select><br>
    <label for="#check">Confirm Please :</label>
    <input type="checkbox" name="#check" value="books"><br><br>
    <center><input type="button" id="#book" value="Update" onclick="submitQuery1(this.id)">
    <input id="3" class="fnt" type="reset" value="RESET"></center>
    </fieldset>
</form>
</div>
<!--=============================================================================-->
<!------------------------------------video update----------------------------------->
<div id="video_Update" style="display:none;">
<form id="#video_Update#" class="style_form">
<fieldset><legend>Video Details</legend>
    <label for="videoTittle" >Video Tittle :</label>
    <input type="text" name="videoTittle"><br><br>
    <label for="VideoLink">Video Link :</label>
    <input type="link" name="VideoLink"><br><br>
    <label for="duration">Video Link :</label>
    <input type="number" name="duration"><br><br>
    <label for="Video_type">Class Name :</label>
                    <select name="Video_type">
                            <option value="mp4">MP4</option>
                            <option value="mp4">HD</option>
                            <option value="3gp">3GP</option>
                            <option value="webm">WEBM</option>
                    </select><br><br>
    <label for="#check">Confirm Please :</label>
    <input type="checkbox" name="#check" value="video"><br><br>
    <center><input type="button" id="#video" value="Update" onclick="submitQuery1(this.id)">
    <input id="3" class="fnt" type="reset" value="RESET"></center>
    </fieldset>
</form>
</div>
<div id="response_message_notice"></div>
<div id="response_message_faculty"></div>
<div id="response_message_student"></div>
<div id="response_message_syllabus"></div>
<div id="response_message_book"></div>
<div id="response_message_video"></div>
<!--================================================================================-->
<script>
    var register_student=document.getElementById('register_student');
    var register_faculty=document.getElementById('register_faculty');
    var Syllabus_Update=document.getElementById('Syllabus_Update');
    var Update_Books=document.getElementById('Update_Books');
    var Notice_Update=document.getElementById('Notice_Update');
    var video_Update=document.getElementById('video_Update');
function registration_page(clicked){
if(clicked=='#register_student' && register_student.style.display=='none'){

    register_student.style.display='block';
    register_faculty.style.display='none';
    Syllabus_Update.style.display='none';
    Update_Books.style.display='none';
    Notice_Update.style.display='none';
    video_Update.style.display='none';

}else if(clicked=='#register_faculty' && register_faculty.style.display=='none'){

    register_student.style.display='none';
    register_faculty.style.display='block';
    Syllabus_Update.style.display='none';
    Update_Books.style.display='none';
    Notice_Update.style.display='none';
    video_Update.style.display='none';

}else if(clicked=='#Syllabus_Update' && Syllabus_Update.style.display=='none'){

     register_student.style.display='none';
    register_faculty.style.display='none';
    Syllabus_Update.style.display='block';
    Update_Books.style.display='none';
    Notice_Update.style.display='none';
    video_Update.style.display='none';

}else if(clicked=='#Update_Books' && Update_Books.style.display=='none'){
    register_student.style.display='none';
    register_faculty.style.display='none';
    Syllabus_Update.style.display='none';
    Update_Books.style.display='block';
    Notice_Update.style.display='none';
    video_Update.style.display='none';
}else if(clicked=='#Notice_Update' && Notice_Update.style.display=='none'){
    register_student.style.display='none';
    register_faculty.style.display='none';
    Syllabus_Update.style.display='none';
    Update_Books.style.display='none';
    Notice_Update.style.display='block';
    video_Update.style.display='none';
}else if(clicked=='#Video_Update' && video_Update.style.display=='none'){
register_student.style.display='none';
register_faculty.style.display='none';
Syllabus_Update.style.display='none';
Update_Books.style.display='none';
Notice_Update.style.display='none';
video_Update.style.display='block';
}
else{
    register_student.style.display='none';
    register_faculty.style.display='none';
    Syllabus_Update.style.display='none';
    Update_Books.style.display='none';
    Notice_Update.style.display='none';
    video_Update.style.display='none';
}

}

function submitQuery1(clicked) {
    var  xmlhttp;
    if(window.XMLHttpRequest){
      xmlhttp1 = new XMLHttpRequest();
    }else if(window.ActiveXObject){
      xmlhttp1 = new ActiveXObject("Microsoft.XMLHTTP")
    }

     xmlhttp1.open("POST", "backend/books_notice_update.php", true);
//======================for books====================
    if(clicked=="#book"){
         
         xmlhttp1.onreadystatechange = function() {
            if (this.readyState === 4 && this.status === 200)
            {

                document.getElementById("response_message_book").innerHTML = this.responseText;
            
            }
            }
        var myForm_books = document.getElementById("#Update_Books#");
        var formData_books = new FormData(myForm_books);
         xmlhttp1.send(formData_books);
    }
//======================for Syllabus====================
    if(clicked=="#syllabus"){
        
         xmlhttp1.onreadystatechange = function() {
            if (this.readyState === 4 && this.status === 200)
            {

                document.getElementById("response_message_syllabus").innerHTML = this.responseText;
            }
        }
        var myForm_syllabus = document.getElementById("#Syllabus_Update#");
        var formData_syllabus = new FormData(myForm_syllabus);
         xmlhttp1.send(formData_syllabus);
    }
//======================for notice====================
    if(clicked=="#notice"){
         
         xmlhttp1.onreadystatechange = function() {
           
            if (this.readyState === 4 && this.status === 200)
            {
                document.getElementById("response_message_notice").innerHTML = this.responseText;
                
            }
        }
        var myForm_notice = document.getElementById("#Notice_Update#");
        var formData_notice = new FormData(myForm_notice);
         xmlhttp1.send(formData_notice);
    }
//======================for register_faculty====================
    if(clicked=="##register_faculty"){
      xmlhttp1.onreadystatechange = function() {
           
           if (this.readyState === 4 && this.status === 200)
           {
               document.getElementById("response_message_faculty").innerHTML = this.responseText;
               
           }
       }
       var myForm_register_faculty = document.getElementById("#register_faculty#");
       var formData_register_faculty = new FormData(myForm_register_faculty);

        xmlhttp1.send(formData_register_faculty);

    }
//======================for register_student====================
    if(clicked=="##register_student"){
      xmlhttp1.onreadystatechange = function() {
           
           if (this.readyState === 4 && this.status === 200)
           {
               document.getElementById("response_message_student").innerHTML = this.responseText;
               
           }
       }
       var myForm_register_student = document.getElementById("#register_student#");
       var formData_register_student = new FormData(myForm_register_student);
        xmlhttp1.send(formData_register_student);

    }
//======================for video====================
    if(clicked=="#video"){
         
         xmlhttp1.onreadystatechange = function() {
            if (this.readyState === 4 && this.status === 200)
            {

                document.getElementById("response_message_video").innerHTML = this.responseText;
            
            }
            }
        var myForm_video = document.getElementById("#video_Update#");
        var formData_video = new FormData(myForm_video);
         xmlhttp1.send(formData_video);
    }
    
}
</script>
</div>

<!--=============================================================================-->
<br>
<script>
    var loginFrame=document.getElementById('loginFrame');
    var registerFrame=document.getElementById('registerFrame');

    function Display_Login(clicked){
        if(clicked==1 && loginFrame.style.display=='none'){
            loginFrame.style.display='block';
            registerFrame.style.display='none';
        }else if(clicked==2 && registerFrame.style.display=='none'){
            loginFrame.style.display='none';
            registerFrame.style.display='block';
        }else{
            loginFrame.style.display='none';
            registerFrame.style.display='none';
        }
    }
</script>

<!--=============================================================================-->
<!------------------------------Profile Section----------------->

    <div id="#profile" class="profileSection">     
      
<button id="#7" class="profile_list" onclick="show_User_Datails(this.id);">Profile</button>
<button id="#8" class="profile_list" onclick="show_User_Datails(this.id);">Homework</button>
<button id="#9" class="profile_list" onclick="show_User_Datails(this.id);">Message</button>
<button class="profile_list" onclick='location.href="backend/log_out.php"'>Log Out</button>        
  </div>
  
<!--------------User Datils------------->
<div id="#user_info" style="display:none;" class="fram_profile"></div>
<!--------------User task Details------------->
<div id="#user_task" style="display:none;" class="fram_profile">
<div id="#user_task#"></div>
<?php
if(isset($_SESSION['psw']) && $_SESSION['status']=="users_faculty" || $_SESSION['status']=="admin_school"){

        $sql="SELECT class_name FROM  class_name";
try{
      $result = mysqli_query($conn, $sql);
      if(mysqli_num_rows($result) >0){
       echo '<form id="#add_task" class="style_form">
       <fieldset><legend>Set Homework</legend>
       <label for="class_name">Select class :</label>
       <select name="class_name" id="#reponse_msg_task" onchange="showUser(this.value,this.id)">';
        while($row=mysqli_fetch_assoc($result)){
            echo '<option value="'.$row['class_name'].'">'.$row['class_name'].'</option>';
        }
        echo '</select><br><br>';
        echo '<label for="subjects">Select Subject :</label>
        <select id="reponse_msg_task" name="subjects"></select><br><br>
        <label for="add_home_work">Add Homework :</label>
        <textarea type="text" name="add_home_work" rows="10" cols="30"></textarea><br><br>
        <label for="start_date">Homework Start Date :</label>
        <input type="date" name="start_date"><br><br>
        <label for="end_date">Homework Finish Date :</label>
        <input type="date" name="end_date"><br><br>
        <label for="#check">Confirm Please :</label>
        <input type="checkbox" name="#check" value="add_task"><br><br>
        <input type="button" id="#add_task#" value="submit" onclick="Submit_Query(this.id);"> 
        <input id="3" class="fnt" type="reset" value="RESET"> 
        </fieldset>   
        </form>';
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
<div id="#response_task#"></div>
</div>
<!--------------------Query--------------------------->
<div id="#user_query" style="display:none;" class="fram_profile">
<div id="#response_query#"></div>
        <form id="#add_query" class="style_form">
       <fieldset><legend>ASk Question</legend>
       <label for="msg">Enter Message :</label>
            <input type="text" name="msg"><br><br>
            <input type="date" name="msg_date">
            <input type="time" name="msg_time">
            <label for="#check">Confirm Please :</label>
            <input type="checkbox" name="#check" value="Query"><br><br>
            <input type="button" id="#add_query#" value="submit" onclick="Submit_Query(this.id);">
            <input id="3" class="fnt" type="reset" value="RESET">
            </fieldset>  
        </form>
</div>
<!--============================================================================================-->
<script>
var user_info=document.getElementById('#user_info');
var user_task=document.getElementById('#user_task');
var user_query=document.getElementById('#user_query');
var menu=document.getElementById('#menu');

function show_User_Datails(clicked){
   var status1="<?php echo $_SESSION['status']?>";
    var psw="<?php echo $_SESSION['psw']?>";
    var task="task";
    var xmlhttp = new XMLHttpRequest();
//================================for user_info=======================
    if(clicked=="#7" && user_info.style.display=='none'){
            user_info.style.display='block';
            menu.style.display='none';
           
xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("#user_info").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","backend/response.php?status="+status1+"&psw="+psw,true);
    xmlhttp.send();
            user_task.style.display='none';
            user_query.style.display='none';
    }
//================================for user_task=======================
        else if(clicked=="#8" && user_task.style.display=='none'){
            user_info.style.display='none';
            menu.style.display='none';
            user_task.style.display='block';
            user_query.style.display='none';
            xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
             document.getElementById("#user_task#").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","backend/response.php?task="+task,true);
        xmlhttp.send();
        }
//================================for user_query=======================
        else if(clicked=="#9" && user_query.style.display=='none'){
            user_info.style.display='none';
            menu.style.display='none';
            user_task.style.display='none';
            user_query.style.display='block';
        }
        else{
            menu.style.display='block';
            user_info.style.display='none';
            user_task.style.display='none';
            user_query.style.display='none';
        }
}
function Submit_Query(clicked){
    var  xmlhttp1;
    if(window.XMLHttpRequest){
      xmlhttp1 = new XMLHttpRequest();
    }else if(window.ActiveXObject){
      xmlhttp1 = new ActiveXObject("Microsoft.XMLHTTP")
    }
    xmlhttp1.open("POST", "backend/response.php", true);
    if(clicked=="#add_query#"){ 
                if (this.readyState === 4 && this.status === 200)
                {
                    xmlhttp1.onreadystatechange = function() {
                    document.getElementById("#response_query#").innerHTML = this.responseText;
                }  
            }
                var myForm_add_query = document.getElementById("#add_query");
                var formData_add_query = new FormData(myForm_add_query);
                xmlhttp1.send(formData_add_query);
        }
    if(clicked=="#add_task#"){
                xmlhttp1.onreadystatechange = function() {
                if (this.readyState === 4 && this.status === 200)
                {
                    document.getElementById("#response_task#").innerHTML = this.responseText;
                }
            }
                var myForm_add_task = document.getElementById("#add_task");
                var formData_add_task= new FormData(myForm_add_task);
                xmlhttp1.send(formData_add_task);
        }
}
</script>
<!--=============================================================================-->
<!-----------------------------Taskbar shapes----------------------->
<center>
<div class="middle">

            <div id="#1" class="Shape" onclick="DisplayLogin(this.id);">
                <img class="IMG" src="img/teacher.png"/>
                <a class="txt" >Faculty</a>
            </div>
        
            <div id="#2" class="Shape" onclick="DisplayLogin(this.id);">
                <img class="IMG" src="img/books.png"/>
                <a class="txt" >Books</a>
            </div>
                
            <div id="#3" class="Shape" onclick="DisplayLogin(this.id);">
                <img class="IMG" src="img/notice.png"/>
                <a class="txt">Notice Board</a>
            </div>

            <div id="#4" class="Shape" onclick="DisplayLogin(this.id);">
                <img class="IMG" src="img/photo.png" />
                <a class="txt" href="src/photo.php">Photo Gallery</a>
            </div>

            <div id="#5" class="Shape" onclick="DisplayLogin(this.id);">
                <img class="IMG" src="img/video.png"/>
                <a class="txt" href="src/video.php">Video Tube</a>
                
            </div>

            <div id="#6" class="Shape" onclick="DisplayLogin(this.id);">
                <img class="IMG" src="img/syllabus.png"/>
                <a class="txt" >Syllabus Check</a>
            </div>

</div>
</center>
<!--=============================================================================-->
<!----------------------------faculty------------------>
<div id="#Faculty" class="notice">
    
    <br><span id="3" style="left:90%;"onclick="DisplayLogin(this.id);">&#10060;</span>

    <h1>School Staff List</h1>
    <?php
$sql="SELECT * FROM  users_faculty";
try{
      $result = mysqli_query($conn, $sql);
      if(mysqli_num_rows($result) >0){
        while($row=mysqli_fetch_assoc($result)){
           
            echo $row['full_name']."  ";
            echo $row['mobile_ph']."  ";
            echo $row['email_id']."  ";
            echo $row['user_ID']."  ";
            echo $row['pasw']."  ";
            echo $row['date_of_birth']."  ";
            echo $row['dp_path']."<br>";
        }
          
    }
      }catch(Exception $e){
        
      }
    
?>    
    

</div>
<!--=============================================================================-->
<!----------------------------books------------------>
<div id="books" class="notice">
<br><span id="3" style="left:90%;"onclick="DisplayLogin(this.id);">&#10060;</span>
    <h1>Search Books</h1>
    <?php
$sql="SELECT class_name FROM  class_name";
try{
      $result = mysqli_query($conn, $sql);
      if(mysqli_num_rows($result) >0){
       echo '<form id="myForm"><fieldset><legend>Syallbus Check</legend>
       <label for="class_name">Select class :</label>
       <select name="class_name" id="#reponse_msg" onchange="showUser(this.value,this.id)">';
        while($row=mysqli_fetch_assoc($result)){
            echo '<option value="'.$row['class_name'].'">'.$row['class_name'].'</option>';
        }
        echo '</select><br><br>';
        echo '<label for="subjects">Select Subject :</label>
        <select id="reponse_msg" name="subjects"></select><br><br>
        <label for="#check">Confirm Please :</label>
        <input type="checkbox" name="#check" value="books_up"><br><br>
        <input id="#books_update" type="button" value="Submit" onclick="submitQuery(this.id)">
        <input id="3" class="fnt" type="reset" value="RESET">
        </fieldset>
        </form>';
    }
      }catch(Exception $e){
        $message = 'All Set';
          echo "<SCRIPT> //not showing me this
          alert('$message');
          window.location.replace('../Dashboard.php');
        </SCRIPT>";
      }
    
?>    
<div id="response_message"></div>
<script>
function showUser(str,clicked) {
    var xmlhttp = new XMLHttpRequest();
    if(clicked=="#reponse_msg_task"){
  if (str == "") {
    document.getElementById("reponse_msg_task").innerHTML = "";
    return;
  } else {
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("reponse_msg_task").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","backend/response.php?q="+str,true);
    xmlhttp.send();
  }
}
if(clicked=="#reponse_msg"){
  if (str == "") {
    document.getElementById("reponse_msg").innerHTML = "";
    return;
  } else {
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("reponse_msg").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","backend/response.php?q="+str,true);
    xmlhttp.send();
  }
}
}

    
</script>

</div>
<!--=============================================================================-->
<!----------------------------Notice Board------------------>

<center>
<div id="Notice_Board"  class="notice">
<br><span id="3" style="left:90%;"onclick="DisplayLogin(this.id);">&#10060;</span>
    <h1>Notice Board</h1>
    <?php
$sql="SELECT * FROM  notice_board";
try{
      $result = mysqli_query($conn, $sql);
      if(mysqli_num_rows($result) >0){
       
        while($row=mysqli_fetch_assoc($result)){

            echo $row['notice'];
        }     
    }

      }catch(Exception $e){
        $message = 'All Set';
          echo "<SCRIPT> //not showing me this
          alert('$message');
          window.location.replace('../Dashboard.php');
        </SCRIPT>";
      }
    
?>    


</div>
<!--=============================================================================-->
<!----------------------------Syllbus Check------------------>

<center>
<div id="Syllabus_Check"  class="notice">
<br><span id="3" style="left:90%;"onclick="DisplayLogin(this.id);">&#10060;</span>
    <h1>Syllbus Check</h1>
    <?php
$sql="SELECT class_name FROM  class_name";
try{
      $result = mysqli_query($conn, $sql);
      if(mysqli_num_rows($result) >0){
       echo '<form id="myForm_syllabus">
       <fieldset><legend>Syallbus Check</legend>
       <label for="class_name">Select class :</label>
       <select name="class_name" onchange="showSyllabus(this.value)">';
        while($row=mysqli_fetch_assoc($result)){
            echo '<option value="'.$row['class_name'].'">'.$row['class_name'].'</option>';
        }
        echo '</select><br><br>';
        echo '
        <label for="subjects">Select Subject :</label>
        <select id="reponse_msg1" name="subjects"></select><br><br>
        <label for="#check">Confirm Please :</label>
        <input type="checkbox" name="#check" value="syllabus_check"><br><br>
        <input id="#syllabus_check" type="button" value="Submit" onclick="submitQuery(this.id)">
        <input id="3" class="fnt" type="reset" value="RESET">
        </fieldset>
        </form>';
    }
      }catch(Exception $e){
        $message = 'All Set';
          echo "<SCRIPT> //not showing me this
          alert('$message');
          window.location.replace('../Dashboard.php');
        </SCRIPT>";
      }
    
?>    
<div id="response_message1"></div>
<script>
    //retrive subject data---------------------------
    function showSyllabus(str) {
  if (str == "") {
    document.getElementById("reponse_msg1").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("reponse_msg1").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","backend/response.php?q="+str,true);
    xmlhttp.send();
  }
}

</script>

</div>
<!--=============================================================================-->

<h1>watch Our Video</h1>

<video class="vdos" id="vdo" controls>
<source class="vdos" id="source" src="videos/1.mp4" type="video/mp4">
</video><br><br>
</div>
</center>
<!--=============================================================================-->
<script type="text/javascript">
    var Notice_Board=document.getElementById('Notice_Board');
    var profile=document.getElementById('#profile');
    var Faculty=document.getElementById('#Faculty');
    var books=document.getElementById('books');
    var SyllabusCheck=document.getElementById('Syllabus_Check');

    var faculty=document.getElementById('#1');
    var book=document.getElementById('#2');
    var notice=document.getElementById('#3');
    var photo=document.getElementById('#4');
    var video=document.getElementById('#5');
    var contact=document.getElementById('#6');
    
    function DisplayLogin(clicked){
     if(clicked=='#1' && Faculty.style.display=='none'){
        Faculty.style.display='block';
        books.style.display='none';
        Notice_Board.style.display='none';
        SyllabusCheck.style.display='none';
     }else if(clicked=='#2' && books.style.display=='none'){
        Faculty.style.display='none';
        books.style.display='block';
        Notice_Board.style.display='none';
        SyllabusCheck.style.display='none';
    }else if(clicked=='#3' && Notice_Board.style.display=='none'){
        Faculty.style.display='none';
        books.style.display='none';
        Notice_Board.style.display='block';
        SyllabusCheck.style.display='none';
    }else if(clicked=='#6' && SyllabusCheck.style.display=='none'){
        Faculty.style.display='none';
        books.style.display='none';
        Notice_Board.style.display='none';
        SyllabusCheck.style.display='block';
    }else{
        Faculty.style.display='none';
        books.style.display='none';
        Notice_Board.style.display='none';
        SyllabusCheck.style.display='none';
    }
        
        
    }
function profile_display(){
    if(profile.style.display=='none'){
        profile.style.display='block';
    }else{
        profile.style.display='none';

    }
}
faculty.addEventListener('mouseover', () => {faculty.style.boxShadow = '0px 20px 16px 1px blue'; }, false);
faculty.addEventListener('mouseleave', () => {faculty.style.boxShadow = '0px 20px 16px 1px'; }, false);

books.addEventListener('mouseover', () => {books.style.boxShadow = '0px 20px 16px 1px red'; }, false);
books.addEventListener('mouseleave', () => {books.style.boxShadow = '0px 20px 16px 1px'; }, false);

notice.addEventListener('mouseover', () => { notice.style.boxShadow = '0px 20px 16px 1px orange'; }, false);
notice.addEventListener('mouseleave', () => {notice.style.boxShadow = '0px 20px 16px 1px'; }, false);

photo.addEventListener('mouseover', () => { photo.style.boxShadow = '0px 20px 16px 1px yellow'; }, false);
photo.addEventListener('mouseleave', () => {photo.style.boxShadow = '0px 20px 16px 1px'; }, false);

video.addEventListener('mouseover', () => { video.style.boxShadow = '0px 20px 16px 1px aqua'; }, false);
video.addEventListener('mouseleave', () => {video.style.boxShadow = '0px 20px 16px 1px'; }, false);

contact.addEventListener('mouseover', () => { contact.style.boxShadow = '0px 20px 16px 1px green'; }, false);
contact.addEventListener('mouseleave', () => {contact.style.boxShadow = '0px 20px 16px 1px'; }, false);
//===============================================for books and syllabus update==============================>


function submitQuery(clicked) {
    var  xmlhttp;
    if(window.XMLHttpRequest){
      xmlhttp = new XMLHttpRequest();
    }else if(window.ActiveXObject){
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP")
    }
    // Instantiating the request object
    xmlhttp.open("POST", "backend/response.php", true);
    
//=========================================books check=================
    if(clicked=="#books_update"){
         // Defining event listener for readystatechange event
            xmlhttp.onreadystatechange = function() {
       // if (this.readyState !== "complete"){
       //    document.getElementById("response_message").innerHTML = "Loading";
       // }
        if (this.readyState === 4 && this.status === 200)
        {
            //alert(this.responseText); // Here is the response
            document.getElementById("response_message").innerHTML = this.responseText;
           // console.log(this.responseText);
        }
    }
    var myForm = document.getElementById("myForm");
    var formData = new FormData(myForm);
    // Sending the request to the server
    xmlhttp.send(formData);
    }
//=========================================syllabus check=================
if(clicked=="#syllabus_check"){
      
    xmlhttp.onreadystatechange = function() {
     
        if (this.readyState === 4 && this.status === 200)
        {

            document.getElementById("response_message1").innerHTML = this.responseText;
        }
    }
    var myForm1 = document.getElementById("myForm_syllabus");
    var formData1 = new FormData(myForm1);
    xmlhttp.send(formData1);
    }
//===============================message box ============================================

}
</script>

</body>
</html>