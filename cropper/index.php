<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cropper with jQuery</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropper/2.3.4/cropper.min.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<div class="container">
		<h1>How to Crop &amp; Upload Images</h1>
		
		<h2>1. Select File</h2>
		<div class="form">		
			<input type="file" name="img_file" id="img_file">
			<button id="crop" > Crop </button>
		</div>
		
		<h2>2. Crop</h2>
		<div>
			<canvas id="canvas">
				Your browser does not support HTML5 Canvas
			</canvas>
		</div>
		
		<h2>3. Result</h2>
		<div id="result">
			
		</div>

		<h2>4. Upload Cropped Image</h2>
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/cropper/2.3.4/cropper.min.js"></script>
	<script src="js/scripts.js"></script>
</body>
</html>