
<?php 
function v_load_donor($sql,$con)
{
	echo '
				<table class="table table-striped">
				<tr>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Gender</th>
				<th>Date</th>
				<th>Exam Result</th>
				</tr>';
				
							$result=$con->query($sql);
							$n=0;
							if($result->num_rows>0)
							{
								while($row=$result->fetch_assoc())
								{ 
                                     if($row['examresult'] == "1"){
                                        $es1="Passed";
                                     }else{                                     
                                        $es1="Failed";
                                     }

									$n++;
									echo "<tr>";
									echo "<td>".$row['fname']."</td>";
									echo "<td>".$row['lname']."</td>";
									echo "<td>".$row['gender']."</td>";
									echo "<td>".$row['date_donated']."</td>";
								    echo "<td>".$es1."</td>";
									echo "</tr>";


								}
							}
			echo'</table>';




}
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>



</body>
</html>
