<!DOCTYPE html>
<html>
<head>
	<title>Clear View Homes, LLC.</title>
	<link href="../css/global.css" type="text/css" rel="stylesheet"/>
	<link rel="stylesheet" type="text/css" href="../css/default.css" />
	<link rel="stylesheet" type="text/css" href="../css/component.css" />
	<link href="../css/font-awesome.css" type="text/css" rel="stylesheet"/>
	<script src="../src/modernizr.custom.js"></script>

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
				<li><a href="../gallery/">Gallery</a></li>
				<li class="active"><a>Contact Us</a></li>
			</ul>
		</div>
		<div id="sticky-nav">
			<ul>
				<li><a href="../">Home</a></li>
				<li><a href="../about/">About Us</a></li>
				<li><a href="../gallery/">Gallery</a></li>
				<li class="active"><a href="../contact/">Contact Us</a></li>
			</ul>
		</div>
		<?php
		$to = 'nalani.cvhomes@gmail.com';
$message = 'Name: ' . $_POST['name'] . "\r\n" . 'Service: ' . $_POST['service'] . "\r\n" . 'City: ' . $_POST['city'] . "\r\n" . 'Type of Contact: ' . $_POST['contact'] . "\r\n" . 'Email or Phone: ' . $_POST['emailphone'] . "\r\n" . 'Best Time of Day: ' . $_POST['time'] . "\r\n";


/* Sends the mail and outputs the "Thank you" string if the mail is successfully sent, or the error string otherwise. */

?>
		
		<div id="content">
			<div class="full">
			<?
if($_POST['name']!="" && $_POST['service']!='' && $_POST['city']!='' && $_POST['contact']!='' && $_POST['emailphone']!='' && $_POST['time']!=''){

if (mail($to,'ClearView Homes Inquiry',$message)) { ?>
	  <h2>Thank you for your interest in ClearView Homes!</br>
	  One of our representatives will contact you shortly.</h2>
<?	} else { ?>
				<h2>Can't submit form.</h2>
<?	}
}else if($_POST) {?>
				<h2>Please complete the form.</h2>
<? } else{?>
				<h2>Send us a Message:</h2>
<? } ?>
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="nl-form" class="nl-form">
					Hello, I am
					<input type="text" name="name" value="" placeholder="a customer" data-subline="For example: <em>John Smith</em> or <em>Jane Doe</em>"/> and 
					I am interested in 
					<select name="service">
						<option value="Any Service">any service for</option>
						<option value="Remodeling">remodeling</option>
						<option value="New Build">constructing</option>
						<option value="Additions">adding on to</option>
						<option value="Renovations">renovating</option>
					</select>
					a home in 
					<input type="text" name="city" value="" placeholder="any city" data-subline="For example: <em>Herndon</em> or <em>Great Falls</em>"/>.
					Please contact me by 
					<select name="contact">
						<option value="Email">email</option>
					 	<option value="Phone">phone</option>
					 	<option value="SMS">SMS</option>
					</select>
					at <input type="text" name="emailphone" value="" placeholder="my email" data-subline="For example: <em>john.smith@example.com</em> or <em>703-555-5555</em>"/>, sometime 
					<select name="time">
						<option value="Any time during the day">during the day</option>
					 	<option value="In the morning">in the morning</option>
					 	<option value="In the afternoon">in the afternoon</option>
					 	<option value="In the evening">in the evening</option>
					</select>.
					<div class="nl-submit-wrap">
						<button class="nl-submit" type="submit">Send message</button>
					</div>
					<div class="nl-overlay"></div>
				</form>

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
	<script src="../src/nlform.js"></script>
	<script>
		var nlform = new NLForm( document.getElementById( 'nl-form' ) );
	</script>
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