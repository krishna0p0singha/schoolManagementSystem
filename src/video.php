<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/video.css">
    <title>Video Tube</title>
</head>
<body>
    <center>
<h1>watch Our Video</h1>

<video class="vdos" id="vdo" controls>
<source id="source" src="../videos/1.mp4" type="video/mp4">
</video><br><br>
<button id="Previous" style="background-color: red;" onclick="playPrevious();">Previous</button>
<button id="Next" style="background-color: red;" onclick="playNext();">Next</button>


</div>
</center>

<script>
var vdo=document.getElementById('vdo');
var source=document.getElementById('source');
var count=0;
var arr=["../videos/1.mp4","../videos/2.mp4","../videos/3.mp4"];

function playNext(){
if(count <= 1){
    count+=1;
    source.src=arr[count];
    vdo.load();
}
else{
    count=0; 
    source.src=arr[count];
    vdo.load();
      
}
}

function playPrevious(){
    if(count > 0){
    count-=1;
    source.src=arr[count];
    vdo.load();
}
else{
    count=2;   
    source.src=arr[count];
    vdo.load();
    
}   
}
</script>
<!------------------list Videos-------------------->
<div class="list">
<ul>
    <li>


    </li>
</ul>


</div>
</body>
</html>