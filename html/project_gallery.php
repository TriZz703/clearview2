<?

	$set = $_REQUEST['s'] ? $_REQUEST['s'] : '';
	$project = $_REQUEST['p'] ? $_REQUEST['p'] : '';
	if (empty($set) || empty($project)) {
		exit;
	}

?>

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
	if ($topdir = opendir('../images/gallery/'.$set.'/'.$project.'/')) {
		$filelist = array();
		while (false !== ($file = readdir($topdir))) {
			if ($file != "." && $file != "..") {
				$filelist[] = $file;
			}
		}
		closedir($topdir);
		natcasesort($filelist);
		foreach ($filelist as $filename) { ?>
			<li><a href="../images/gallery/<?=$set;?>/<?=$project;?>/<?=$filename;?>"></a></li>
<?  }
	}
?>
		</ul>
	</div>
	<div id="next-slide"></div>
</div>

</div>

<script src="//code.jquery.com/jquery-1.10.0.min.js"></script>
<script src="../src/jquery.mousewheel.min.js"></script>
<script src="../src/slider.js"></script>

</body>
</html>