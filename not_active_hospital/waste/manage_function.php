<?php 
function v_load_donor($sql,$con)
{
	echo '
				<table class="table table-striped">
				<tr>
				<th>Number</th>
				<th>Blood Type</th>
				<th>Status</th>
				<th>View Stuck</th>
				<th>Delete</th>
				
				</tr>';
				
					
							$result=$con->query($sql);
							$n=0;
							if($result->num_rows>0)
							{
								while($row=$result->fetch_assoc())
								{   
									$n++;
									echo "<tr>";
									echo "<td>".$n."</td>";
									echo "<td>".$row['B_Type']."</td>";
									echo "<td>".$row['Status']."</td>";
									echo "<td><a href='view_blood.php?id=".$row['B_id']."' class='btn btn-primary btn-block'> View</a></td>";
									echo "<td><a href='manage_del.php?id=".$row['B_id']."' class='btn btn-primary btn-block'>Delete</a></td>";
									echo "</tr>";
								}
							}
							
						
				
			echo'</table>';

}






?>
