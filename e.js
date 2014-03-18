var app= require("http")
	, io = require('socket.io').listen(8090)
	, fs = require('fs');

var arduino = require('duino'),
    board = new arduino.Board({debug: true});
var led = new arduino.Led({
	  board: board,
	  pin: 13
	});
var data = {};

var browser = io.of("/duino").on('connection', function (socket){
	var hs = socket.handshake;


	socket.on("led", function(data){
		if(data.text == "1"){led.on();} if (data.text == "0"){led.off();}		
	});

	socket.on('disconnect', function(){
		console.log("id".error)
		console.log(socket.id)
		delete data[socket.id];
	});
});
