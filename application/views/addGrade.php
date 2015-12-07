<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  		<script src="jquery-1.11.3.min.js"></script>
  		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	</head>
	<body>
	
		<script>
			$( document ).ready(function() {
			
    			$("#addAssignment").click(function() {
    				console.log("doctor doctor manana");
    				var ass_name = $("#assignName").val();
					var description = $("#description").val();
					var pointsPossible = $("#pointsPossible").val();
					var nickname = $("#nickname").val();
    				
					.ajax({
						type: "POST",
						url: "<?php echo base_url(); ?>" + "/index.php/Grades_controller/newAssignment",
						dataType: 'json',
						console.log($results);
						data: {name: ass_name, desc: description, pp: pointsPossible, nn: nickname }
						});
						
				});
			});
			
			
		</script>
			<input type="text" id="assignName" name="assignName" value="assignName"></input>
			<input type="text" id="description" name="description" value="description"></input>
			<input type="text" id="pointsPossible" name="pointsPossible" value="points total"></input>
			<input type="text" id="nickname" name="nickname" value="nickname">
		
			<input type="button" id="addAssignment" name="addAssignment" value="Add"></input>
			
	</body>

</html>