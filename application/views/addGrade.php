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
    				console.log($("#assignName").val());
    				
    				
    				var ass_name = $("#assignName").val();
					var description = $("#description").val();
					var pointsPossible = $("#pointsPossible").val();
					var nickname = $("#nickname").val();
    				var classID = $("#classID").val();
    				var name;
    				var desc;
    				var pp;
    				var nn;
    				var cid;
    				
    				//console.log(ass_name);
    				
					jQuery.ajax({
						type: "POST",
						url: "/index.php/Grades_controller/newAssignment",
						dataType: 'json',
						contentType: "application/json; charset=utf-8",
						//console.log($result);
						data: {name: ass_name, desc: description, pp: pointsPossible, nn: nickname, cid: classID },
						success: function(data){
                			alert('Items added');
            			},
            			error: function(e){
                			console.log(e.message);
            			}
					});
						
				});
			});
			

			
			
		</script>
	
	</body>

</html>