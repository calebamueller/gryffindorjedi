<!doctype html>
<html>
  <head>
    <title>Instant Messenger</title>
    <style>
      
      #m{
      	height: 500px;
      }
      
      #contentWrap{
      		display: none;
      }
      #chatWrap{
      		float: left;
      		border: 1px #000 solid;
      }
      .error{
      		color: red;
      }
      .whisper{
      		color: purple;
      		font-style: italic;
      }
    </style>
    <script src="/socket.io/socket.io.js"></script>
  </head>
  <body>
  	<div id="nickName">
  		<p>Enter a Username</p>
  		<p id="nickErr"></p>
  		<form id="setName">
  			<input size="35" id="nickInput"></input>
  			<input type="submit"></input>
  		</form>
  	</div>
  	
  	<div id="contentWrap">
  		<div id="chatWrap">
    		<div id="m"></div>
    		<form id="sendForm" action="">
    	  		<input size="35" id="inputM"/></input>
    	  		<input type="submit"></input>
    		</form>
    	</div>
    	<div id="users"></div>
    </div>

    <script src = "http://code.jquery.com/jquery-1.11.1.js"></script>
    
    <script src = "https://cdn.socket.io/socket.io-1.2.0.js"></script>

    <script>
    	var socket = io();
    	
    	$('#setName').submit(function(e){
    		e.preventDefault();
    		socket.emit('new user', $('#nickInput').val(), function(data){
    			if(data){
    				$('#nickName').hide();
    				$('#contentWrap').show();
    			}else{
    				$('#nickErr').html('Username already exists');
    			}
    			
    		});
    		$('#nickInput').val('');
    		
    	});
    	
    	socket.on('usernames', function(data){
    		var html = '';
    		for(i=0; i<data.length; i++)
    		{
    			html += data[i] + '<br/>';//semicolon?
    		}
    		$('#users').html(html);
    	});
    	
    	$('#sendForm').submit(function(){
    		socket.emit('chat message', $('#inputM').val(), function(data){
    			$('#m').append('<span class="error">' + data + "</span><br/>");
    		});
    		$('#inputM').val('');
    		return false;
    	});
    	
    	socket.on('chat message', function(data){
    		$('#m').append('<span class="msg"><b>' + data.nick + ': </b>' + data.msg + "</span><br/>");
    	});
    	
    	socket.on('whisper', function(data){
    		$('#m').append('<span class="whisper"><b>' + data.nick + ': </b>' + data.msg + "</span><br/>");
    	});
    </script>
  
  </body>
</html>