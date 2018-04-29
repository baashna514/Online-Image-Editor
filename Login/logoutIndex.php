<head>
		<meta charset="utf-8">
		<title>Image Editor | IdeaLogics Network</title>
		<link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
		<link href = "main.css" type="text/css" rel="stylesheet">
	</head>

	<body>
		<div class="wrapper">
			<div><img src="images/m2.png"></div>
			<div class="menu">
				<ul>
				  <li><a class="active" href="#home">Home</a></li>
				  <li><a href="#news">About Us</a></li>
				  <li><a href="#contact">Contact</a></li>
				  <li style="float:right"><a href="register.php">Sign Up</a></li>
				  <li style="float:right"><a href="login.php">Login</a></li>

				</ul>

			</div>
			
			<!--Form for collecting image URL -->
			<form id="urlBox" class = "center">
				<input class="url-box" type="file" accept="image/*" onchange="loadFile(event)" id="imgUrl">
			</form>

			<!--Controls for CSS filters via range input-->
			<div class="sliders">
				<form id="imageEditor">
					<p>
						<label for="gs">Grayscale</label>
						<input id="gs" name="gs" type="range" min=0 max=100 value=0>
					</p>

					<p>
						<label for="blur">Blur</label>
						<input id="blur" name="blur" type="range" min=0 max=10 value=0>
					</p>

					<p>
						<label for="br">Brightness</label>
						<input id="br" name="br" type="range" min=0 max=200 value=100>
					</p>

					<p>
						<label for="ct">Contrast</label>
						<input id="ct" name="ct" type="range" min=0 max=200 value=100>
					</p>

					<p>
						<label for="huer">Hue Rotate</label>
						<input id="huer" name="huer" type="range" min=0 max=360 value=0>
					</p>

					<p>
						<label for="opacity">Opacity</label>
						<input id="opacity" name="opacity" type="range" min=0 max=100 value=100>
					</p>

					<p>
						<label for="invert">Invert</label>
						<input id="invert" name="invert" type="range" min=0 max=100 value=0>
					</p>

					<p>
						<label for="saturate">Saturate</label>
						<input id="saturate" name="saturate" type="range" min=0 max=500 value=100>
					</p>

					<p>
						<label for="sepia">Sepia</label>
						<input id="sepia" name="sepia" type="range" min=0 max=100 value=0>
					</p>

					<input type="reset" form="imageEditor" id="reset" value="Reset" />

				</form>
			</div>	

			<!--container where image will be loaded-->
			<div id="imageContainer" class="center">
				<!-- <img src="../image/puppies.jpg"/> -->
				<img id="output" src="../image/500.png"/>
			</div>
			<script>
			  var loadFile = function(event) {
			    var output = document.getElementById('output');
			    output.src = URL.createObjectURL(event.target.files[0]);
			  };
			</script>
		</div>

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
		
		<!-- Google Analytics Tracking Code -->
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			ga('create', 'UA-58515343-1', 'auto');
			ga('send', 'pageview');
		</script>
	</body>