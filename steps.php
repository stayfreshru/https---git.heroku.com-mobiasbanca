<?php
$value = 'что-то где-то';
$cookie_name = "gohome";
setcookie('gohome',$value, time() + (86400 * 1), "/"); // 86400 = 1 day
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta charset="utf-8" />
    <title>MOBIAS FACEBOOK APP</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/fabric.js"></script>
    <script src="js/custom-file-input.js"></script>
    <script src="js/kinetic-v5.1.0.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style type="text/css">
      body {
      	margin-top:40px;
      }
      .stepwizard-step p {
      	margin-top: 10px;
      }
      .stepwizard-row {
      	display: table-row;
      }
      .stepwizard {
      	display: table;
      	width: 50%;
      	position: relative;
      }
      .stepwizard-step button[disabled] {
      	opacity: 1 !important;
      	filter: alpha(opacity=100) !important;
      }
      .stepwizard-row:before {
      	top: 14px;
      	bottom: 0;
      	position: absolute;
      	content: " ";
      	width: 100%;
      	z-order: 0;
      }
      .stepwizard-step {
      	display: table-cell;
      	text-align: center;
      	position: relative;
      }
      .btn-circle {
      width: 30px;
      height: 30px;
      text-align: center;
      padding: 5px 9px;
      font-size: 18px !important;
      line-height: 1;
      border-radius: 15px;
      font-weight: 400 !important;
      }
      .btn-primary{
        color: #fff;
background-color: #ca0a23;
border-color: #bd043d;
      }
      .row{
        margin-left: -30px;
      }
      a.btn.btn-default.btn-circle{
        margin:10px;
      }
    </style>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
    
<body id="2" style="background:none; margin-top:0px;overflow:scroll;margin: 0 Auto;">
<div class="container" style="background: url(images/bgsteps.png) no-repeat;width: auto;" >
<img id="imgincarca" src="images/incarca.png" style=" z-index: 99990; margin: 0 Auto; position: absolute; top: 10px; left: 60px;">
<form method="post" accept-charset="utf-8" name="form1">
              <input name="hidden_data" id='hidden_data' type="hidden"/>
              </form>
    <form role="form" action="" method="post">
    <div class="row setup-content" id="step-1">
      <div class="">
        <div class="col-md-12">

              
              <canvas id="imageCanvas1" width="800" height="650"></canvas>
              <input type="file" id="imageLoader1" name="imageLoader1" class='inputfile' data-multiple-caption='{count} files selected' multiple style=" position: absolute;"/>
              <label id="imageLoaderlabel" for="imageLoader1">
                 <span id="imageLoaderspan">Încarcă foto</span>
              </label>
              <!--button id="fb-auth" class="nybutton">
                  <a id="imageSaver" onclick="hover()" >
                     <input id="imageSaverbutton" type="button" onclick="uploadEx()" value="SALVEAZĂ">
                  </a>
              </button-->


          <button id="fb-auth" class="btn btn-primary nextBtn btn-lg pull-right" onclick="uploadEx1()" type="button" >Următoarea</button>
        </div>
      </div>
    </div>
    <div class="row setup-content" id="step-2">
          <div class="">
        <div class="col-md-12">

              
              <canvas id="imageCanvas2" width="800" height="650"></canvas>
              <input type="file" id="imageLoader2" name="imageLoader2" class='inputfile' data-multiple-caption='{count} files selected' multiple style=" position: absolute;"/>
              <label id="imageLoaderlabel" for="imageLoader2">
                 <span id="imageLoaderspan">Încarcă foto</span>
              </label>
              <!--button id="fb-auth" class="nybutton">
                  <a id="imageSaver" onclick="hover()" >
                     <input id="imageSaverbutton" type="button" onclick="uploadEx()" value="SALVEAZĂ">
                  </a>
              </button-->

             
            <button id="fb-auth" class="btn btn-primary nextBtn btn-lg pull-right" onclick="uploadEx2()" type="button" >Următoarea</button>
        </div>
      </div>
        </div>
    <div class="row setup-content" id="step-3">
      <div class="">
        <div class="col-md-12">

              
              <canvas id="imageCanvas3" width="800" height="650"></canvas>
              <input type="file" id="imageLoader3" name="imageLoader3" class='inputfile' data-multiple-caption='{count} files selected' multiple style=" position: absolute;"/>
              <label id="imageLoaderlabel" for="imageLoader3">
                 <span id="imageLoaderspan">Încarcă foto</span>
              </label>
              <!--button id="fb-auth" class="nybutton">
                  <a id="imageSaver" onclick="hover()" >
                     <input id="imageSaverbutton" type="button" onclick="uploadEx()" value="SALVEAZĂ">
                  </a>
              </button-->


          <button id="fb-auth" class="btn btn-primary nextBtn btn-lg pull-right" onclick="uploadEx3()" type="button" >Următoarea</button>
        </div>
      </div>
    </div>
    <div class="row setup-content" id="step-4">
      <div class="">
        <div class="col-md-12">

              
              <canvas id="imageCanvas4" width="800" height="650"></canvas>
              <input type="file" id="imageLoader4" name="imageLoader4" class='inputfile' data-multiple-caption='{count} files selected' multiple style=" position: absolute;"/>
              <label id="imageLoaderlabel" for="imageLoader4">
                 <span id="imageLoaderspan">Încarcă foto</span>
              </label>
              <!--button id="fb-auth" class="nybutton">
                  <a id="imageSaver" onclick="hover()" >
                     <input id="imageSaverbutton" type="button" onclick="uploadEx()" value="SALVEAZĂ">
                  </a>
              </button-->


          <button id="fb-auth" class="btn btn-primary nextBtn btn-lg pull-right" onclick="uploadEx4()" type="button" >Următoarea</button>
        </div>
      </div>
    </div>
    <div class="row setup-content" id="step-5">
      <div class="">
        <div class="col-md-12">

              
              <canvas id="imageCanvas5" width="800" height="650"></canvas>
              <input type="file" id="imageLoader5" name="imageLoader5" class='inputfile' data-multiple-caption='{count} files selected' multiple style=" position: absolute;"/>
              <label id="imageLoaderlabel" for="imageLoader5">
                 <span id="imageLoaderspan">Încarcă foto</span>
              </label>
              <!--button id="fb-auth" class="nybutton">
                  <a id="imageSaver" onclick="hover()" >
                     <input id="imageSaverbutton" type="button" onclick="uploadEx()" value="SALVEAZĂ">
                  </a>
              </button-->


          <button id="fb-auth" class="btn btn-success btn-lg pull-right" onclick="uploadEx5()" type="button">SALVEAZĂ</button>
        </div>
      </div>
    </div>
  </form>
    <div class="stepwizard col-md-offset-3" style="width: 30%;
margin-left: 40px;
margin-top: -270px;
border: none;
background: none">
    <div class="stepwizard-row setup-panel">
      <div class="stepwizard-step">
        <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>

      </div>
      <div class="stepwizard-step">
        <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>

      </div>
      <div class="stepwizard-step">
        <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>

      </div>
      <div class="stepwizard-step">
        <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>

      </div>
      <div class="stepwizard-step">
        <a href="#step-5" type="button" class="btn btn-default btn-circle" disabled="disabled">5</a>

      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
// Скрипт для табов

  $(document).ready(function () {
  var navListItems = $('div.setup-panel div a'),
		  allWells = $('.setup-content'),
		  allNextBtn = $('.nextBtn');

  allWells.hide();

  navListItems.click(function (e) {
	  e.preventDefault();
	  var $target = $($(this).attr('href')),
			  $item = $(this);

	  if (!$item.hasClass('disabled')) {
		  navListItems.removeClass('btn-primary').addClass('btn-default');
		  $item.addClass('btn-primary');
		  allWells.hide();
		  $target.show();
		  $target.find('input:eq(0)').focus();
	  }
  });

  allNextBtn.click(function(){
	  var curStep = $(this).closest(".setup-content"),
		  curStepBtn = curStep.attr("id"),
		  nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
		  curInputs = curStep.find("input[type='text'],input[type='url'],textarea[textarea]"),
		  isValid = true;

	  $(".form-group").removeClass("has-error");
	  for(var i=0; i<curInputs.length; i++){
		  if (!curInputs[i].validity.valid){
			  isValid = false;
			  $(curInputs[i]).closest(".form-group").addClass("has-error");
		  }
	  }

	  if (isValid)
		  nextStepWizard.removeAttr('disabled').trigger('click');
  });

  $('div.setup-panel div a.btn-primary').trigger('click');
  });
</script>

<script>
// Скрипт для fabric.js

// 1

// Обратчик канваса 
(function(){
var canvas = new fabric.Canvas('imageCanvas1');
// Накладываем картинку на канвас
canvas.setOverlayImage('images/santastep1.png', canvas.renderAll.bind(canvas));
// Грузим картинку 
var imageLoader = document.getElementById('imageLoader1');
imageLoader.addEventListener('change', handleImage, false);
function handleImage(e) {
    var reader = new FileReader();
    reader.onload = function (event) {
        var img = new Image();
        img.onload = function () {
            var imgInstance = new fabric.Image(img, {
                scaleX: 0.2,
                scaleY: 0.2,
            })
         canvas.centerObject(imgInstance);
         canvas.add(imgInstance);
         canvas.item(0).set({
          borderColor: 'red',
          cornerColor: 'green',
          cornerSize: 16,
          transparentCorners: false
        });   
         canvas.setActiveObject(canvas.item(0));
        }
        img.src = event.target.result;

    }

    canvas.deactivateAll().renderAll();
    reader.readAsDataURL(e.target.files[0]);
}

canvas.controlsAboveOverlay = true;


})();

// 2
(function(){
var canvas = new fabric.Canvas('imageCanvas2');
// Накладываем картинку на канвас
canvas.setOverlayImage('images/santastep1.png', canvas.renderAll.bind(canvas));
// Грузим картинку 
var imageLoader = document.getElementById('imageLoader2');
imageLoader.addEventListener('change', handleImage, false);
function handleImage(e) {
    var reader = new FileReader();
    reader.onload = function (event) {
        var img = new Image();
        img.onload = function () {
            var imgInstance = new fabric.Image(img, {
                scaleX: 0.2,
                scaleY: 0.2,
            })
            canvas.centerObject(imgInstance);
         canvas.add(imgInstance);
         canvas.item(0).set({
          borderColor: 'red',
          cornerColor: 'green',
          cornerSize: 16,
          transparentCorners: false
        });       
         canvas.setActiveObject(canvas.item(0));
        }
        img.src = event.target.result;

    }
    canvas.deactivateAll().renderAll();
    reader.readAsDataURL(e.target.files[0]);
}
canvas.controlsAboveOverlay = true;
})();

// 3
(function(){
var canvas = new fabric.Canvas('imageCanvas3');
// Накладываем картинку на канвас
canvas.setOverlayImage('images/santastep1.png', canvas.renderAll.bind(canvas));
// Грузим картинку 
var imageLoader = document.getElementById('imageLoader3');
imageLoader.addEventListener('change', handleImage, false);
function handleImage(e) {
    var reader = new FileReader();
    reader.onload = function (event) {
        var img = new Image();
        img.onload = function () {
            var imgInstance = new fabric.Image(img, {
                scaleX: 0.2,
                scaleY: 0.2,
            })
            canvas.centerObject(imgInstance);
         canvas.add(imgInstance); 
         canvas.item(0).set({
          borderColor: 'red',
          cornerColor: 'green',
          cornerSize: 16,
          transparentCorners: false
        });     
         canvas.setActiveObject(canvas.item(0)); 
        }
        img.src = event.target.result;

    }
    canvas.deactivateAll().renderAll();
    reader.readAsDataURL(e.target.files[0]);
}
canvas.controlsAboveOverlay = true;
})();

// 4
(function(){
var canvas = new fabric.Canvas('imageCanvas4');
// Накладываем картинку на канвас
canvas.setOverlayImage('images/santastep1.png', canvas.renderAll.bind(canvas));
// Грузим картинку 
var imageLoader = document.getElementById('imageLoader4');
imageLoader.addEventListener('change', handleImage, false);
function handleImage(e) {
    var reader = new FileReader();
    reader.onload = function (event) {
        var img = new Image();
        img.onload = function () {
            var imgInstance = new fabric.Image(img, {
                scaleX: 0.2,
                scaleY: 0.2,
            })
            canvas.centerObject(imgInstance);
         canvas.add(imgInstance);  
         canvas.item(0).set({
          borderColor: 'red',
          cornerColor: 'green',
          cornerSize: 16,
          transparentCorners: false
        });   
         canvas.setActiveObject(canvas.item(0));  
        }
        img.src = event.target.result;

    }
    canvas.deactivateAll().renderAll();
    reader.readAsDataURL(e.target.files[0]);
}
canvas.controlsAboveOverlay = true;
})();

// 5
(function(){
var canvas = new fabric.Canvas('imageCanvas5');
// Накладываем картинку на канвас
canvas.setOverlayImage('images/santastep1.png', canvas.renderAll.bind(canvas));
// Грузим картинку 
var imageLoader = document.getElementById('imageLoader5');
imageLoader.addEventListener('change', handleImage, false);
function handleImage(e) {
    var reader = new FileReader();
    reader.onload = function (event) {
        var img = new Image();
        img.onload = function () {
            var imgInstance = new fabric.Image(img, {
                scaleX: 0.2,
                scaleY: 0.2,
            })
            canvas.centerObject(imgInstance);
         canvas.add(imgInstance);  
         canvas.item(0).set({
          borderColor: 'red',
          cornerColor: 'green',
          cornerSize: 16,
          transparentCorners: false
        });    
         canvas.setActiveObject(canvas.item(0)); 
        }
        img.src = event.target.result;

    }
    canvas.deactivateAll().renderAll();
    reader.readAsDataURL(e.target.files[0]);
}
canvas.controlsAboveOverlay = true;
})();


//image crate & upload & share

function uploadEx1() {
                var canvas = document.getElementById("imageCanvas1");
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
                    console.log(''+ xhr.responseText +'');
                    document.cookie = 'img1='+ xhr.responseText +'';
                    //window.location = 'fbshare.php?fb='+ xhr.responseText +'';
                };
                xhr.send(fd);
            };  
function uploadEx2() {
                var canvas = document.getElementById("imageCanvas2");
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
                    console.log(''+ xhr.responseText +'');
                    document.cookie = 'img2='+ xhr.responseText +'';
                    //window.location = 'fbshare.php?fb='+ xhr.responseText +'';
                };
                xhr.send(fd);
            };              
function uploadEx3() {
                var canvas = document.getElementById("imageCanvas3");
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
                    console.log(''+ xhr.responseText +'');
                    document.cookie = 'img3='+ xhr.responseText +'';
                    //window.location = 'fbshare.php?fb='+ xhr.responseText +'';
                };
                xhr.send(fd);
            };  
function uploadEx4() {
                var canvas = document.getElementById("imageCanvas4");
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
                    console.log(''+ xhr.responseText +'');
                    document.cookie = 'img4='+ xhr.responseText +'';
                    //window.location = 'fbshare.php?fb='+ xhr.responseText +'';
                };
                xhr.send(fd);
            };  
function uploadEx5() {
                var canvas = document.getElementById("imageCanvas5");
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
                    console.log(''+ xhr.responseText +'');
                    document.cookie = 'img5='+ xhr.responseText +'';
                    window.location = 'preupload.php';
                };
                xhr.send(fd);
            };  



// прячем кнопку загрузки фотографии

var inputs = document.querySelectorAll( '.inputfile' );
  Array.prototype.forEach.call( inputs, function( input )
      {
          var label    = input.nextElementSibling,
              labelVal = label.innerHTML;
      });

</script>
</body>
</html>
