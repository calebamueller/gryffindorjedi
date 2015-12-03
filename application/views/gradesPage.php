<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  		<script src="//code.jquery.com/jquery-1.10.2.js"></script>
  		<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  		
  		<!--<link href=".css" rel="stylesheet" type="text/css" media="all"> -->
  		
  		
	</head>
	<body>
			<script>
				$( document ).ready(function() {
    				
				});
			</script>
				
			<form id= "grade_table" method="POST" action="<?= $_SERVER['PHP_SELF'] ?>">
				<div id="header">
					<h1>Grades</h1>
				</div>
			
			

				<?php
					if(isset($_POST['submit']))
					{
						include("../secure/database.php");
					
						$conn = pg_connect(HOST." ".DBNAME." ".USERNAME." ".PASSWORD) or die('Could not connect: ' . pg_last_error());	
					
						echo "<table border=1>\n";
					
						$player = htmlspecialchars($_POST['search_value']);
					
					
						$query = "SELECT *  
									FROM slateDatabase.assignments
									WHERE (studentID ILIKE '%".$stuID."%')
									ORDER BY assignmentID DESC";
					
						echo "\t<thead><tr>\n";
						echo "\t\t<th><strong>Student Name</strong></th>\n";
						echo "\t\t<th><strong>Assignment</strong></th>\n";
						echo "\t\t<th><strong>Description</strong></th>\n";
						echo "\t\t<th><strong>Grade</strong></th>\n";
						echo "\t\t<th><strong>Points Possible</strong></th>\n";
						echo "\t</tr></thead>\n";
						
						pg_prepare($conn, "my_query", $query);
						$result = pg_execute($conn, "my_query", array());
						 
						if (pg_num_rows($result) < 1) 
						{
								die ("failure");
						}
					}
					
						$numRows = pg_num_rows($result);
						$tbl = $_POST['selection'];
							
						echo "<br>";

						while ($line = pg_fetch_array($result, null, PGSQL_ASSOC))
						{
							echo "<form id=\"search_log_form2\" method=\"POST\" action=\"\">";
						
							echo "\t<tr>\n";
						
							foreach ($line as $col_value) 
							{
								echo "\t\t<td>$col_value</td>\n";
							}
						
							echo "\t</tr>\n";
							echo "</form>";
						}
					
						echo "</table>\n";
						// Free resultset
						pg_free_result($result);
		
						// Closing connection
						pg_close($conn);
				
				?>
			</form>
		</body>

</html>