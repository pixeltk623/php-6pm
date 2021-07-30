<html>
<head>
	<title>Gallery</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
		* {
			padding: 0px;
			margin: 0px;
			box-sizing: border-box;
			
		}
		#header {
			background-color: black;
			color: white;
			text-align: center;
			padding: 25px;
		}

		#header h1 {
			font-family: verdana;
		}	

		.col {
			width: 25%;
			float: left;
			padding: 5px;
		}

		.row::after {
			content: '';
			display: table;
			clear: both;
		}
		.column img {
  opacity: 0.8; 
  cursor: pointer; 
}

.column img:hover {
  opacity: 1;
}
        .container {
  position: relative;
  display: none;
}


#imgtext {
  position: absolute;
  bottom: 15px;
  left: 15px;
  color: white;
  font-size: 20px;
}

.closebtn {
  position: absolute;
  top: 10px;
  right: 15px;
  color: white;
  font-size: 35px;
  cursor: pointer;
}
		img {
			width: 100%;
			height: 250px;
		}
		@media screen and (min-width: 320px) and (max-width: 480px){
    		.col {
    			width: 100%;
    		}
		}

		@media screen and (min-width: 481px) and (max-width: 1024px){
    		.col {
    			width: 50%;
    		}
		}
	</style>
</head>
<body>

	<div id="header">
		<h1>Welcome To Image Gallery</h1>
		<p>Click on the images below;</p>
	</div>
	<div class="container">
		<div class="row">
			<div class="col">
				<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Image_created_with_a_mobile_phone.png/1200px-Image_created_with_a_mobile_phone.png">
			</div>
			<div class="col">
				<img src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg">
			</div>
			<div class="col">
				<img src="https://helpx.adobe.com/content/dam/help/en/photoshop/using/convert-color-image-black-white/jcr_content/main-pars/before_and_after/image-before/Landscape-Color.jpg">
			</div>
			<div class="col">
				<img src="https://helpx.adobe.com/content/dam/help/en/photoshop/using/convert-color-image-black-white/jcr_content/main-pars/before_and_after/image-before/Landscape-Color.jpg">
			</div>
		</div>

		<div class="row">
			<div class="col">
				<img src="https://www.industrialempathy.com/img/remote/ZiClJf-1920w.jpg">
			</div>
			<div class="col">
				<img src="https://thumbs.dreamstime.com/b/environment-earth-day-hands-trees-growing-seedlings-bokeh-green-background-female-hand-holding-tree-nature-field-gra-130247647.jpg">
			</div>
			<div class="col">
				<img src="https://helpx.adobe.com/content/dam/help/en/stock/how-to/visual-reverse-image-search/jcr_content/main-pars/image/visual-reverse-image-search-v2_intro.jpg">
			</div>
			<div class="col">
				<img src="https://helpx.adobe.com/content/dam/help/en/stock/how-to/visual-reverse-image-search/jcr_content/main-pars/image/visual-reverse-image-search-v2_intro.jpg">
			</div>
		</div>
	</div>

</body>
</html>