<?php 
function v_load_donor($sql,$con)
{
	echo '
				<table class="table table-striped">
				<tr>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Blood Type</th>
				<th>Status</th>
				<th>View</th>
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
									echo "<td>".$row['fname']."</td>";
									echo "<td>".$row['lname']."</td>";
									echo "<td>".$row['blood_type']."</td>";
									echo "<td>".$row['status']."</td>";
									echo "<td><a href='admin_view_donor.php?id=".$row['donor_id']."' class='btn btn-primary btn-block'> View Profile</a></td>";
									echo "<td><a href='v_admin_delete_donor.php?id=".$row['donor_id']."' class='btn btn-primary btn-block'>Delete</a></td>";
									echo "</tr>";
								}
							}
							
						
				
			echo'</table>';

}
?>
