<?php
if (!isset($_COOKIE['gohome']))
{	$value = $_GET["fb"] ;
    header('refresh: 1; url=/?fb='. $_GET["fb"] . '');
    echo "Processing, please wait...";
    setcookie('shareimg2', $value, time()+10);
    header('Location: /?fb='. $_GET["fb"] . '');
    unset($_COOKIE['gohome']);
    //setcookie("gohome", '', time() - 100, '/');
    
    exit();
}
else
{
}
?>
<!DOCTYPE html>
<html lang="en" xmlns:fb="https://www.facebook.com/2008/fbml">
<head>
    <meta charset="utf-8" />
    <title>XMAS GREETING</title>
    <meta property="og:url"           content="" />
	<meta property="og:type"          content="website" />
	<meta property="og:title"         content="La Mulți Ani, 2017!" />
	<meta property="og:description"   content="Felicită-ți prietenii original și tu!" />
	<meta property="og:image"         content="<?php echo $_COOKIE['shareimg']; ?>" />
	<meta property="og:image2"         content="<?php echo $_GET["fb"]?>" />
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div id="user-info" style=" position: absolute"></div>
<div id="container" style=" background: url(../images/bg.jpg);">
<img src="./images/ura.png" style="position: relative; z-index: 99999; left: -5px; top: 0px">
	<?php echo "<img style='position: relative; top: -213px; left: -5px; width: 800px; height: 450px;' src=" . $_GET["fb"] . '>'?>
	
	<a target="_blank" href="https://www.facebook.com/sharer.php"><button id="fb-auth" class="nybutton" style="position: relative;top: -235px !important;left: 5px !important;color: white;">SHARE</button></a>

	<h2 style="margin-top:4%;position:relative;z-index:99999;left:5px;top:-440px"><br>TRANSMITE-O PRIETENILOR tăi
</h2>
 </div>

<!-- Load Facebook SDK for JavaScript -->
<script>(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1";
	fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-89503648-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>