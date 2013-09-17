<!DOCTYPE html>
<html>
<head>
	<title>Clear View Homes, LLC.</title>
<link href="../css/global.css" type="text/css" rel="stylesheet"/>
	<!-- 	<link href="http://localhost:3000/css/global.css" type="text/css" rel="stylesheet"/> -->
	<link href="../css/font-awesome.css" type="text/css" rel="stylesheet"/>
	<link href="../css/style1.css" type="text/css" rel="stylesheet"/>	
	<script src="../src/modernizr.custom.63321.js"></script>
</head>
<body>

	<div id="page">
		
		<div id="logo">
			<i class="placeholder">
				<a href="../">
					<img src="../images/logo.png"/>
				</a>
			</i>
		</div>
		<div id="nav">
			<ul>
				<li><a href="../">Home</a></li>
				<li><a href="../about/">About Us</a></li>
				<li class="active"><a>Gallery</a></li>
				<li><a href="../contact/">Contact Us</a></li>
			</ul>
		</div>
		<div id="sticky-nav">
			<ul>
				<li><a href="../">Home</a></li>
				<li><a href="../about/">About Us</a></li>
				<li class="active"><a href="../gallery/">Gallery</a></li>
				<li><a href="../contact/">Contact Us</a></li>
			</ul>
		</div>
		<div id="content">
			<div class="full">

				<select id="cd-dropdown" class="cd-select">
					<option value="-1" selected>Choose a set to view</option>
					<option value="remodel" class="coicon-camera">Remodels</option>
					<option value="renovations" class="coicon-camera">Renovations</option>
					<option value="new_construction" class="coicon-camera">New Construction</option>
					<option value="additions" class="coicon-camera">Additions</option>
				</select>

				<? include_once('../html/gallery_list.php'); ?>

				<iframe id="gallery_frame" src="//www.vagblog.com/clearview/html/project_gallery.php" frameborder="0" marginheight="0" marginwidth="0" height="600px" width="800px"></iframe>

			</div>
		</div>
		<div id="footer">	
			<ul class="nav">
				<li><a href="../">Home</a></li>
				<li><a>About Us</a></li>
				<li><a href="../gallery/">Gallery</a></li>
				<li><a href="../contact/">Contact Us</a></li>
			</ul>
			<div id="credit">Copyright &copy; Clear View Homes, LLC, All Rights Reserved. T: (571) 749-7320 | F: (866) 856-0803 | 210 Talahi Rd SE | Vienna, VA | 22180 </div>
		</div>
	</div>
		
	</div>

	<script src="//code.jquery.com/jquery-1.10.0.min.js"></script>
	<script type="text/javascript" src="../src/jquery.dropdown.js"></script>
	<script type="text/javascript">
	
	$( function() {
	
	$( '#cd-dropdown' ).dropdown( {
		gutter : 0,
		onOptionSelect: function (elem) {
			//$('#gallery_frame').prop('src', '//www.vagblog.com/clearview/html/' + $(elem).data().value).focus();
			$.ajax({
				'url':'../html/gallery_list.php',
				data:{
					s: $(elem).data().value
				},
				success: function (html) {
					$html = $(html);
					$('input[name="cd-dropdown2"]').closest('.cd-dropdown').replaceWith($html);
					$('#cd-dropdown2').dropdown({
						gutter : 0,
						onOptionSelect: function (elem) {
							var s = $('input[name="cd-dropdown"]').val();
							var p = $(elem).data().value;
							$('#gallery_frame').prop('src', '//www.vagblog.com/clearview/html/project_gallery.php?s=' + s + '&p=' + p).focus();
						}
					});
				}
			});
//			
		}
	} );
	
	$( '#cd-dropdown2' ).dropdown({
		gutter : 0,
		onOptionSelect: function (elem) {
			//$('#gallery_frame').prop('src', '//www.vagblog.com/clearview/html/' + $(elem).data().value).focus();
		}
	});
	
	});
	
	</script>
	<!--script src="dist/clearview.min.js"></script-->
	<script>
	$(function () {
		$('#page').on('scroll', function () {
			$sticky = $('#sticky-nav');
			$nav = $('#nav');
			if ($nav.position().top + $nav.outerHeight(true) < 0) {
				$sticky.css({top:0});
			} else {
				$sticky.css({top:-100});
			}
		})

	});
</script>

</body>
</html>