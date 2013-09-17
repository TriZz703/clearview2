<!DOCTYPE HTML>
<html>
<head>
	<title></title>
	<link href="../css/global.css" type="text/css" rel="stylesheet"/>
</head>
<body>

<div id="page">

<div id="photo-slider-outer-wrapper">
	<div id="prev-slide"></div>
	<div id="photo-slider-wrapper">
		<ul id="photo-slider">

<?php
if ($handle = opendir('../images/gallery/renovations/')) {
    while (false !== ($file = readdir($handle))) {
        if ($file != "." && $file != "..") {
print('<li><a href="../images/gallery/renovations/'.$file.'"></a></li>');
        }
    }
    closedir($handle);
}
?>
		</ul>
	</div>
	<div id="next-slide"></div>
</div>

</div>

<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script src="../src/jquery.mousewheel.min.js"></script>
<script src="../src/slider.js"></script>

</body>
</html>