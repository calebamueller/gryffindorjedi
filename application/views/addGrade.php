<!DOCTYPE html>
<html>
	<head>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	</head>
	<body>
	
		
			<input type="text" id="assignName" name="assignName" value="assignName"></input>
			<input type="text" id="description" name="description" value="description"></input>
			<input type="text" id="pointsPossible" name="pointsPossible" value="0"></input>
			<input type="text" id="nickname" name="nickname" value="nickname"></input>
			<input type="text" id="classID" name="classID" value="1"></input>
			
		
			<input type="button" id="addAssignment" name="addAssignment" value="Add"></input>
			
	<script>
			$( document ).ready(function() {
			
    			$("#addAssignment").click(function() {
    				console.log("doctor doctor manana");
    				var ass_name = $("#assignName").val();
					var description = $("#description").val();
					var pointsPossible = $("#pointsPossible").val();
					var nickname = $("#nickname").val();
    				var classID = $("#classID").val();
    				
					jQuery.ajax({
						type: "POST",
						url: "/index.php/Grades_controller/newAssignment",
						dataType: 'json',
						contentType: 'application/json',
						//console.log($result);
						data: {name: ass_name, desc: description, pp: pointsPossible, nn: nickname, cid: classID }
						});
						
				});
			});
			

			
			
		</script>
	
	</body>

</html>