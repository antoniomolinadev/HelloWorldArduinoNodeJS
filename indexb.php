<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Arduino+Node</title>
	<script>
	var ip = '192.168.10.143';	
	</script>
	<link rel="stylesheet" href="stylesheets/screen.css">
	<script src="http://192.168.10.143:8090/socket.io/socket.io.js"></script>
	  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script>
		
		var arduino= io.connect ('http://'+ip+':8090/duino');
		$(document).ready (function(){
			arduino.on('connect', function(text){
				$("#on").click(function(){
					arduino.emit("led", {text: "1"});
				})
				$("#off").click(function(){
					arduino.emit("led", {text: "0"});
				})
			})

		});
	</script>
</head>
<body>
	<div class="section-container" id="chat">
		<input type="button" id="on" value="ON">
		<input type="button" id="off" value="OFF">
	</div>
</body>
</html>