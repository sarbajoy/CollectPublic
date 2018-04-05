

<!DOCTYPE html>
<html lang="en">
  <head>

    <title>Collect Cropper Page</title>

  </head>

  <body>
  <?php session_start(); ?>
  <link rel="stylesheet" type="text/css" href="css/imgareaselect.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.imgareaselect.js"></script>

	<script>
	//set image coordinates
	function updateCoords(im,obj){
	    $('#x').val(obj.x1);
	    $('#y').val(obj.y1);
	    $('#w').val(obj.width);
	    $('#h').val(obj.height);
	}
	//check coordinates
	function checkCoords(){
	    if(parseInt($('#w').val())) return true;
	    alert('Please select a crop region then press submit.');
	    return false;
	}
	$(document).ready(function(){
	    //prepare instant image preview
	    var p = $("#filePreview");
	    $("#fileInput").change(function(){
	        //fadeOut or hide preview
	        p.fadeOut();
	        //prepare HTML5 FileReader
	        var oFReader = new FileReader();
	        oFReader.readAsDataURL(document.getElementById("fileInput").files[0]);
	        oFReader.onload = function (oFREvent) {
	            p.attr('src', oFREvent.target.result).fadeIn();
	        };
	    });
	    //implement imgAreaSelect plugin
	    $('img#filePreview').imgAreaSelect({
	        // set crop ratio (optional)
	        //aspectRatio: '2:1',
	        onSelectEnd: updateCoords
	    });
	});
	</script>

	<form action="upload.php" enctype="multipart/form-data" method="post" onsubmit="return checkCoords();">
    <p>Image: <input name="image" id="fileInput"  type="file" /></p>
    <input type="hidden" id="x" name="x" />
    <input type="hidden" id="y" name="y" />
    <input type="hidden" id="w" name="w" />
    <input type="hidden" id="h" name="h" />
    <input name="upload" type="submit" value="Upload" />
	</form>

	<p><img id="filePreview" style="display:none;"/></p>


 </body>

</html>

<!-- value="<?php echo $_SESSION["fileDir"]; ?>" -->
