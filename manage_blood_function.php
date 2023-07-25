<?php 
function load_manage_blood($sql,$con)
{
	echo '
				<table class="table table-striped">
				<tr>
				<th>Blood Unit</th>
				<th>Blood Type</th>				
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
									echo "<td>".$row['Unit']."</td>";
									echo "<td>".$row['blood_type']."</td>";
									echo "<td><a href='manage_delete_donor.php?id=".$row['donor_id']."' class='btn btn-primary btn-block'>Delete</a></td>";
									echo "</tr>";
								}
							}
							
						
				
			echo'</table>';

}





?>
