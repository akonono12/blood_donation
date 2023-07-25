<?php 

function v_load_donor($sql,$con)
{
	echo '
				<table class="table table-striped">
				<tr>
				<th>Available Blood Units</th>
				<th>Blood Type</th>
				<th>Request Blood Stock</th>
				
				
				</tr>';
				
					
							$result=$con->query($sql);
							$n=0;
							if($result->num_rows>0)
							{
								while($row=$result->fetch_assoc())
								{ 							
									$n++;
									echo "<tr>";
									echo "<td>".$row['count']."</td>";
									echo "<td>".$row['blood_type']."</td>";
									echo "<td><a href='h_contact.php?id=".$row['blood_id']."&b=".$row['blood_type']."&c=".$row['count']."' class='btn btn-primary btn-block'> Send Request</a></td>";
									echo "</tr>";
									
								}
							}
			echo'</table>';

}

?>
