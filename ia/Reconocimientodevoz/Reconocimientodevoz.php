<!doctype html>

<!doctype html>
<html>
	
	<head>
		<meta charset="utf-8">
		<title>Reconocimiento de voz</title>
	</head>

	<body>
		<video id="miVideo">
			<source src="Video.mp4" type="Video/mp4">		
		</video>
	
	
	<script src="//cdnjs.cloudflare.com/ajax/libs/annyang/2.6.0/annyang.min.js"></script>
		
	<script type="text/javascript"> 
		if(annyang){
				var comandos = {
					'Y los nominados son': function(){
					alert("Mejor Director");
			},
					
			'reproducir': playVideo,
		    'pausar': pauseVideo,
					
			};
		 
		annyang.addCommands(comandos);
  		annyang.setLanguage("es-MX");
  		annyang.start();
		             }	
		
		var vid = document.getElementById("miVideo");
		
		function playVideo(){
			vid.play();
		}
		
		function pauseVideo(){
			vid.pause();
		}
		
		
	</script>
		
	</body>
</html>