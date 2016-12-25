<!--?php
$value = 'что-то где-то';
$cookie_name = "gohome";
setcookie('gohome',$value, time() + (86400 * 1), "/"); // 86400 = 1 day
?-->
<!DOCTYPE html>
<html lang="en" xmlns:fb="https://www.facebook.com/2008/fbml" style=" width: 800px; height: 650px;margin: 0 Auto;">
<head>
<meta charset="utf-8" />
  <title>ЗАГОЛОВОК СТРАНИЦЫ</title>

  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="js/fabric.js"></script>
  <script src="js/custom-file-input.js"></script>
  <!--script src="js/kinetic-v5.1.0.js"></script-->
</head>

<body style="background:none">
<center>
    <div id="container" style="background: url(images/bg.png);" >
        <form method="post" accept-charset="utf-8" name="form1">
                <input name="hidden_data" id='hidden_data' type="hidden"/>
        </form>
        <canvas id="imageCanvas" width="800" height="450"></canvas>
        <div id="fb-auth" style="margin: 0 auto;top: 0px;left: 0px;">
            <a id="imageSaver" class="nybutton" style=" top: -26px !important;"> 
               <input class="click" id="imageSaverbutton" onclick="uploadEx()" value="SALVEAZĂ" style="margin-top: 22px;" type="button">
            </a>
        </div>
    </div>
    
    <img id="imgincarca" src="./images/editeaza.png">
</center>

<script>
// Обратчик канваса 
var canvas = new fabric.Canvas('imageCanvas');

//canvas.item(0).hasControls = canvas.item(0).hasBorders = false;
// Накладываем картинку на канвас
canvas.setOverlayImage('images/123.png', canvas.renderAll.bind(canvas));
// Показываем картинку 1

fabric.Image.fromURL('<?php echo $_COOKIE['img1']; ?>', function(img1){
    //img1.hasBorders = true;
    //img1.hasControls = true;
    img1.setWidth(img1.width * 0.42);
    img1.setHeight(img1.height * 0.42);
    //img1.set({ left: -200, right: -100 })
    var group = new fabric.Group([ img1], { left: -84, top: 200 });
        group.set({
            clipTo: function (ctx) {
                ctx.rect(-50, -70, 100,100);
            }        
        });
        group.hasBorders = false;
        group.hasControls = false;
        canvas.add(group);
        canvas.centerObject(img1);
      // ... Modify other attributes
      console.log('<?php echo $_COOKIE['img1']; ?>');

});
    
    fabric.Image.fromURL('<?php echo $_COOKIE['img2']; ?>', function(img2){
    //img2.hasBorders = false;
    //img2.hasControls = false;
    img2.setWidth(img2.width * 0.42);
    img2.setHeight(img2.height * 0.42);
    //img2.set({ left: 10, top: 100 })
    var group = new fabric.Group([ img2], { left: 89, top: 165 });
        group.set({
            clipTo: function (ctx) {
                ctx.rect(-50, -70, 100,100);
            }        
        });
        group.hasBorders = false;
        group.hasControls = false;
        canvas.add(group);
        canvas.centerObject(img2);
    // ... Modify other attributes

});
fabric.Image.fromURL('<?php echo $_COOKIE['img3']; ?>', function(img3){
    //img3.hasBorders = false;
    //img3.hasControls = false;
    img3.setWidth(img3.width * 0.42);
    img3.setHeight(img3.height * 0.42);
    //img3.set({ left: 100, top: 100 })
    var group = new fabric.Group([ img3], { left: 234, top: 160 });
        group.set({
            clipTo: function (ctx) {
                ctx.rect(-50, -70, 100,100);
            }        
        });
        group.hasBorders = false;
        group.hasControls = false;
        canvas.add(group);
        canvas.centerObject(img3);
    // ... Modify other attributes

});
fabric.Image.fromURL('<?php echo $_COOKIE['img4']; ?>', function(img4){
    //img4.hasBorders = false;
    //img4.hasControls = false;
    img4.setWidth(img4.width * 0.42);
    img4.setHeight(img4.height * 0.42);
    //img4.set({ left: 100, top: 100 })
    var group = new fabric.Group([ img4], { left: 382, top: 157 });
        group.set({
            clipTo: function (ctx) {
                ctx.rect(-50, -70, 100,100);
            }        
        });
        group.hasBorders = false;
        group.hasControls = false;
        canvas.add(group);
        canvas.centerObject(img4);
    // ... Modify other attributes

});
fabric.Image.fromURL('<?php echo $_COOKIE['img5']; ?>', function(img5){
    //img5.hasBorders = false;
    //img5.hasControls = false;
    img5.setWidth(img5.width * 0.42);
    img5.setHeight(img5.height * 0.42);
    //img5.set({ left: 100, top: 100 })
    var group = new fabric.Group([ img5], { left: 545, top: 165 });
        group.set({
            clipTo: function (ctx) {
                ctx.rect(-50, -70, 100,100);
            }        
        });
        group.hasBorders = false;
        group.hasControls = false;
        canvas.add(group);
        canvas.centerObject(img5);
    // ... Modify other attributes

});

//canvas.controlsAboveOverlay = true;
canvas.hasControls = false;

//image crate & upload
//document.getElementsByClassName("click")[0].click();

function uploadEx() {
                var canvas = document.getElementById("imageCanvas");
                var dataURL = canvas.toDataURL('png');
                document.getElementById('hidden_data').value = dataURL;
                var fd = new FormData(document.forms["form1"]);
                var xhr = new XMLHttpRequest();
                xhr.open('POST', 'share.php', true);
                // Загружаем на сервак канвас 
                xhr.upload.onprogress = function(f) {
                    if (f.lengthComputable) {
                        var percentComplete = (f.loaded / f.total) * 100;
                        console.log(percentComplete + '% uploaded');
                    }
                };
                // Если готово - консолим saved - и идем на следующую страничку и передаем ссылку 
                xhr.onload = function() {
                    console.log('saved');
                    
                    window.location = 'fbshare.php?fb='+ xhr.responseText +'';
                };
                xhr.send(fd);
            };  

// прячем ссылочку аплоуда
var inputs = document.querySelectorAll( '.inputfile' );
    Array.prototype.forEach.call( inputs, function( input )
            {
                var label    = input.nextElementSibling,
                    labelVal = label.innerHTML;
            });

</script>

</body>
</html>