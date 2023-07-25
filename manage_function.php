<?php 
function v_load_donor($sql,$con)
{
	echo '
				<table class="table table-striped">
				<tr>
				<th>Blood Type</th>
				<th>Date Donated</th>
				<th>Blood Expiration</th>	
				<th>View </th>
		
				
				</tr>';
				
					
							$result=$con->query($sql);
							$n=0;
							if($result->num_rows>0)
							{
								while($row=$result->fetch_assoc())
								{   
									$n++;
									echo "<tr>";
									echo "<td>".$row['blood_type']."</td>";
									echo "<td>".$row['date_of_blood']."</td>";
									echo "<td>".$row['date_expiration']."</td>";
									echo "<td><a href='view_blood.php?id=".$row['blood_id']."' class='btn btn-primary btn-block'> View</a></td>";
									
									echo "</tr>";
								}
							}
							
						
				
			echo'</table>';

}
?>
