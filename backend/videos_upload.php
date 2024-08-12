<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

body{
    background-color: #ffffff;
}

/*Basic structure of slider*/
.container{
    width: 500px;
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    overflow: hidden;
    border: 10px solid #ffffff;
    border-radius: 8px;
    box-shadow: -1px 5px 15px black;
}

/*Area of images*/
.wrapper{
    width: 100%;
    display: flex;
    animation: slide 7s infinite;
}

img{
    width: 100%;
}
/*Animation activated by keyframes*/
@keyframes slide{
    0%{
        transform: translateX(0);
    }
    25%{
        transform: translateX(0);
    }
    30%{
        transform: translateX(-100%);
    }
    50%{
        transform: translateX(-100%);
    }
    55%{
        transform: translateX(-200%);
    }
    75%{
        transform: translateX(-200%);
    }
    80%{
        transform: translateX(-300%);
    }
    100%{
        transform: translateX(-300%);
    }
}
    </style>
</head>
<body>
<div class="container">
<!--Area of the images-->
  
    <?php
require '../connect.php';

$sql="SELECT * FROM video_gallery";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        echo ' <div class="wrapper">
<iframe width="560" height="315" src="'.$row['video_path'].'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen>
    </iframe>';
    }
}

?>

</div>

</div> 
</body>
</html>
