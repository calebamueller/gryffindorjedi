<!DOCTYPE html>
<html>
	<head>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	</head>
	<body>
	
		
			<input type="text" id="assignName" name="assignName" value="assignName"></input>
			<input type="text" id="description" name="description" value="description"></input>
			<input type="text" id="pointsPossible" name="0" value="points total"></input>
			<input type="text" id="nickname" name="nickname" value="nickname">
		
			<input type="button" id="addAssignment" name="addAssignment" value="Add"></input>
			
	<script>
			$( document ).ready(function() {
			
    			$("#addAssignment").click(function() {
    				console.log("doctor doctor manana");
    				var ass_name = $("#assignName").val();
					var description = $("#description").val();
					var pointsPossible = $("#pointsPossible").val();
					var nickname = $("#nickname").val();
    				
					jQuery.ajax({
						type: "POST",
						url: "/index.php/Grades_controller/newAssignment",
						dataType: 'json',
						console.log($result);
						data: {name: ass_name, desc: description, pp: pointsPossible, nn: nickname }
						});
						
				});
			});
			

			
			
		</script>
	
	</body>

</html>