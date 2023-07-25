<?php 
function v_load_donor($sql,$con)
{
	echo '
				<table class="table table-striped">
				<tr>
				<th>No.of Blood Units</th>
				<th>Blood Type</th>
				<th>Released Date</th>
				<th>Released to:</th>
				<th>Released by:</th>
				
				
				</tr>';
				
					
							$result=$con->query($sql);
							$n=0;
							if($result->num_rows>0)
							{
								while($row=$result->fetch_assoc())
								{   
									$n++;
									echo "<tr>";
									echo "<td>".$row['num_of_units']."</td>";
									echo "<td>".$row['blood_type']."</td>";
									echo "<td>".$row['released_date']."</td>";
									echo "<td>".$row['released_to']."</td>";
									echo "<td>".$row['released_by']."</td>";
									echo "</tr>";
								}
							}
							
						
				
			echo'</table>';

}
?>
