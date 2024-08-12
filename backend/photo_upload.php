<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>

<script>
 var Image_slide = new Array("../img/1.jpg", "../img/2.jpg", "../img/3.jpg");// image container
var Img_Length  = Image_slide.length; // container length - 1
var Img_current = 0

function slide() {
    if(Img_current >= Img_Length) {
        Img_current = 0;
    }
    document.slideshow.src = Image_slide[Img_current];
    Img_current++;
}
function auto(){
    setInterval(slide, 1000);
}
window.onload = auto;
</script>
<img src="../img/1.jpg" name="slideshow">
</body>
</html>