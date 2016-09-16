<?php
	session_start();

	if (!(isset($_SESSION["articleno"]))) {
		$_SESSION["articleno"] = 1;
	}
	
	class article {

		public $head;
		public $desc;
		public $further;
		public $URL;
		public $button;
		public $picture;
		
		public function setDescription($description)
		    {
		        $this->desc = $description;
		    }
		public function getDescription()
		    {
		        return $this->desc; 
		    }
		public function setHeading($heading)
		    {
		        $this->head = $heading;
		    }
		public function getHeading()
		    {
		        return $this->head; 
		    }
		public function setFurtherInfo($furtherinfo)
		    {
		        $this->further = $furtherinfo;
		    }
		public function getFurtherInfo()
		    {
		        return $this->further; 
		    }
		public function setURL($newURL)
		    {
		        $this->URL = $newURL;
		    }
		public function getURL()
		    {
		        return $this->URL; 
		    }
		public function setButton($buttontext)
		    {
		        $this->button = $buttontext;
		    }
		public function getButton()
		    {
		        return $this->button; 
		    }
		public function setPictureURL($pictureurl)
		    {
		        $this->picture = $pictureurl;
		    }
		public function getPictureURL()
		    {
		        return $this->picture; 
		    }
	}

	if (!(isset($_SESSION['0a']))) {
		for ($i = 0; $i <= 7; $i++) {
			$_SESSION[$i."a"] = new article();
		}
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<!-- If you delete this meta tag, the ground will open and swallow you. -->
<meta name="viewport" content="width=device-width" />

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
<title>WarwickTECH - Newsletter</title>

<link rel="stylesheet" type="text/css" href="stylesheets/email.css" >

<script src="js/jquery-1.11.3.min.js"></script>
</head>

<body bgcolor="#FFFFFF" topmargin="0" leftmargin="0" marginheight="0" marginwidth="0">

<!-- HEADER -->
<table class="head-wrap" bgcolor="#4A4A4A">
	<tr>
		<td></td>
		<td class="header container" align="">
			<div class="content">
				<table bgcolor="#4A4A4A" >
					<tr>
						<td><a href="http://www.warwick.tech"><img  src="images/warwicktech.png" /></a></td>
						<td align="right"><h6 class="collapse" style="color:white;">Newsletter Creator</h6></td>
					</tr>
				</table>
			</div>
		</td>
		<td></td>
	</tr>
</table>
<!-- /HEADER -->

<!-- BODY -->
<table class="body-wrap" bgcolor="">
	<tr>
		<td class="container" align="" bgcolor="#FFFFFF">
			<div class="content">
				<table>
					<tr>
						<td>
							<h2><strong>Number of articles : <form method="post" action="updatearticles.php"style="display:inline-block;"><input style="display:inline-block;vertical-align:middle;padding:5px"type="number" min="1" max="8" step="1" value="<?php echo $_SESSION["articleno"]?>" name="articles"><input type="submit" style="display:inline-block;vertical-align:middle;padding:5px" value="Submit"></form></strong></h2>
						</td>
					</tr>
				</table>
			</div>
			<!-- HEAD -->
			<div class="content">
				<table>
					<tr>
						<td>
							<h1><strong>Newsletter - Week <form method="post" action="updateweek.php"style="display:inline-block;"><input style="display:inline-block;vertical-align:middle;padding:5px"type="number" min="1" max="60" step="1" value="<?php echo $_SESSION["weekno"]?>" name="week"><input type="submit" style="display:inline-block;vertical-align:middle;padding:5px" value="Submit"></form></strong></h1>

							<p class="lead">Headliner</p>
							<textarea style="margin-bottom:20px;padding:5px;resize:none;width:98%" name="headline" rows="2"><?php echo htmlspecialchars($_SESSION["headline"]);?></textarea>
							<p><img src="images/600.png"/></p>
							<p style="color:#424242;">Cover image name (600 x 400 recommended) ie, cover.jpg</p>
							<textarea style="margin-bottom:20px;padding:5px;resize:none;width:98%" name="cover" rows="1"><?php echo htmlspecialchars($_SESSION["cover"]);?></textarea>
							<p style="color:#424242;">Summary of events</p>
							<textarea style="margin-bottom:20px;padding:5px;resize:none;width:98%" name="summary" rows="2"><?php echo htmlspecialchars($_SESSION["summary"]);?></textarea>
						</td>
					</tr>
				</table>
			</div>
			<!-- /HEAD -->

			<!-- CONTENT -->
			<?php
				for ($i = 0; $i <= ($_SESSION["articleno"]-1); $i++) {
				echo '
				<div class="content">
					<table name="'.$i.'" bgcolor="#F0F0F0">
						<tr>
							<td class="small" width="20%"style="vertical-align: top; padding-right:10px;"><img src="images/100.png"/>
							</td>
							<td>
								<p style="color:#262626">Thumbnail image name (75 x 75 recommended) ie. article1.png</p>
								<textarea style="margin-bottom:20px;padding:5px;resize:none;width:88%" name="pictureurl" rows="1">'.
								$_SESSION[$i . "a"]->getPictureURL() .
								'</textarea>
								<h4>Heading</h4>
								<textarea style="margin-bottom:20px;padding:5px;resize:none;width:88%" name="heading" rows="1">'.
								$_SESSION[$i . "a"]->getHeading() .
								'</textarea>
								<p style="color:#424242">Description</p>
								<textarea style="margin-bottom:20px;padding:5px;resize:none;width:88%" name="description" rows="5">'.
								$_SESSION[$i . "a"]->getDescription() .
								'</textarea>
								<p style="color:#262626">Further info</p>
								<textarea style="margin-bottom:20px;padding:5px;resize:none;width:88%" name="furtherinfo" rows="1">'.
								$_SESSION[$i . "a"]->getFurtherInfo() .
								'</textarea>
								<p style="color:#262626">Button URL</p>
								<textarea style="margin-bottom:20px;padding:5px;resize:none;width:88%" name="url" rows="1">'.
								$_SESSION[$i . "a"]->getURL() .
								'</textarea>
								<a class="btn btn-sm"><textarea style="padding:5px;resize:none;" rows="1" type="textarea" name="button" placeholder="Button text">'.
								$_SESSION[$i . "a"]->getButton() .
								'</textarea> &raquo;</a>
							</td>
						</tr>
					</table>
				</div>';
				}
			?>
			
			<div class="content">

				<table bgcolor="">
					<tr>
						<td class="small" width="20%" style="vertical-align: top; padding-right:10px;"><img src="images/ng_event.png" /></td>
						<td>
							<h4>Downloading the Newsletter</h4>
							<p class="" style="color:#424242"> - Make sure all the above details are correct</p>
							<p class="" style="color:#424242"> - Ensure all the image names above are correct</p>
							<p class="" style="color:#424242"> - Add all the images to a folder called images</p>
							<p class="" style="color:#424242"> - Download the newsletter styling zip folder below</p>
							<p class="" style="color:#424242"> - Download the HTML generated below, rename to newsletter.html</p>
							<p class="" style="color:#424242"> - Unzip the folder and add your images folder and the HTML file</p>
							<a class="btn btn-sm" href="newsletter.php" target="_blank" download>Download HTML &raquo;</a>
							<a class="btn btn-sm" href="newsletter.zip" target="_blank">Download Styling Zip &raquo;</a>
							<a class="btn btn-sm" href="newsletter.php" target="_blank">Preview &raquo;</a>
						</td>
					</tr>
				</table>

			</div>
			<!-- /CONTENT -->

		</td>
	</tr>
</table>

</body>
<!-- /BODY -->

<script>
$(document).ready(function(){
	$('textarea').change(function() {
		if ($(this).parent().parent().parent().parent().parent().attr("name") !== undefined) {
		var x = $(this).parent().parent().parent().parent().parent().attr("name")
		}
		else if ($(this).parent().parent().parent().parent().attr("name") === undefined) {
		var x = "header"
		}
		else {
		var x = $(this).parent().parent().parent().parent().attr("name")
		}
		console.log(x);
		console.log(this.name);
		console.log(this.value);
		
		$.ajax({
		  method: "POST",
		  url: "updatesession.php",
		  data: { parent: x,
		  	  name: this.name,
		  	  value: this.value 
		  	}
		})
		  .done(function() {
		    console.log("Data Saved");
		  });
	});
});

</script>
</html>