
<html>
	<head>
		<title>What The Book!</title>
		<link rel="stylesheet" type="text/css" href="index.css" media="all" />
		<script  type='text/javascript'>

				function onHover(){
				var df= document.getElementById("as");
				var s=document.getElementById("bg");
				s.style.opacity="0.5";
				s.style.filter  = 'alpha(opacity=50)';
				}
				
				function offHover(){
				var df= document.getElementById("bg");
				df.style.opacity="1";
				df.style.filter  = 'alpha(opacity=100)';
				}
				
		</script>
	</head>
	
	<body >
	
	<div id="as">
		<div id="logo">
			<img src="roughedge.png" id="IMGSDA" height="20%" align="center" style="float:center" onmouseover="onHover()" 
                      onmouseout="offHover()"/>
		</div>
		<div id ="title">What the book!</div>
		<div id ="subhead">What you read is what defines you.</div>
		
	</div>
	<a href="login.php"><div id="fsaadf">Discover something new </div></a>
	
	
	</body>
	
</html>