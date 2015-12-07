var app = require('express')();
var http = require('http').Server(app);
var io = require('socket.io')(http);
//var io = require('socket.io')(server);
//var nicknames = [];
//var port process.env.PORT || 3000;
var users = {}

http.listen(3000, function(){
		console.log('listening on *:3000');
});

app.get('/', function(req, res){
	res.sendFile( __dirname + '/index.html');
});

io.on('connection', function(socket){
	
	 function updateUsernames()
	{
		io.emit('usernames', Object.keys(users));
	}
	
	socket.on('chat message', function(data, callback){
		var msg = data.trim();
		if (msg.substr(0,3) === '/w '){
			msg = msg.substr(3);
			var index = msg.indexOf(' ');
			if(index !== -1)
			{
				var name = msg.substring(0, index);
				var msg = msg.substring(index+1);
				if(name in users){
					users[name].emit('whisper', {msg: msg, nick: socket.nickname});
				}else{
					callback('error: invalid user');
				}
				
			}else{
				callback('error: no message with your whisper');
			}
		}else {
			io.emit('chat message', {msg: msg, nick: socket.nickname});
		}
		//io.broadcast.emit("chat message", msg);
		//sends message out to everyone except sender
	});
	
	socket.on('new user', function(data, callback){
		
		if(data in users){
			callback(false);
		} else{
			callback(true);
			socket.nickname = data;
			users[socket.nickname] = socket;
			updateUsernames();
		}
	
	});
	
	socket.on('disconnect', function(data){
    		
    		if(!socket.nickname) return;
    		delete users[socket.nickname];
    		updateUsernames();
    		
    });
    
   
	
});

