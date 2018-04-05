
<!DOCTYPE html>
<html lang="en">
  <head>

    <title>Collect Main Page</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <style type="text/css">
      form {
        margin-top: 20px;
        text-align: center;
      }
      form > input { margin-right: 15px; }
      #my_camera {
        align: center;
      }
      .imgButton {
        width: 50px;
        height: 50px;
        position: relative;
        display: inline-block;
        margin: 10px;
    }
    .imgButton .img-top {
        display: none;
        position: absolute;
        top: 0;
        left: 0;
        z-index: 99;
    }
    .imgButton:hover .img-top {
        display: inline;
    }
    </style>
  </head>

  <body>
    <?php
      include 'header_collect.php';
    ?>
    <!doctype html>


  	<div  align="center">
  		<div id="my_camera"></div>
  	</div>
  	<!-- First, include the Webcam.js JavaScript Library -->
  	<script type="text/javascript" src="webcam.js"></script>

  	<!-- Configure a few settings and attach camera -->
  	<script language="JavaScript">
  		Webcam.set({
  			width: 600,
  			height: 460,
        crop_width: 600,
		    crop_height: 460,
  			image_format: 'png',
  		});
  		Webcam.attach( '#my_camera' );
  	</script>

  	<!-- A button for taking snaps -->
  	<form>
    <div class="imgButton">
  		<input type="image" src="SiteImage/hoverCamButton.png" class="img-top"  alt="Submit Form" onClick="take_snapshot(); return false;" />
      <img src="SiteImage/defaultCamButton.png" >
    </div>
    </form>

  	<!-- Code to handle taking the snapshot and displaying it locally -->
  	<script language="JavaScript">
  		function take_snapshot() {
  			// take snapshot and get image data
  			Webcam.snap( function(data_uri) {
  				// display results in page
  				Webcam.upload( data_uri, 'show.php', function(code, text) {
  				} );
				document.location.href = "redirect.php";
  			} );
  		}
  	</script>

  </body>
  </html>

</body>
</html>
