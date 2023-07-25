<?php 
function load_patient($sql,$con)
{
	echo '
				<table class="table table-striped">
				<tr>
				<th>No</th>
				<th>Name</th>
				<th>Unit</th>
				<th>Gender</th>
				<th>Blood</th>
				<th>Hospital</th>
				<th>Request Date</th>
				<th>Update</th>
				<th>Donor Status</th>
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
									echo "<td>".$row['NAME']."</td>";
									echo "<td>".$row['BUNIT']."</td>";
									echo "<td>".$row['GENDER']."</td>";
									echo "<td>".$row['BLOOD']."</td>";
									echo "<td>".$row['HOSP']."</td>";
									echo "<td>".$row['RDATE']."</td>";
									
									echo "<td><a href='admin_view_request.php?id={$row['ID']}' class='btn btn-primary btn-block'> View</a></td>";	
									if($row["STATUS"]==1)
									{
									
									echo "<td><a href='#' class='btn btn-danger btn-xs'> Pending</a></td>";
									
									}
									else if($row["STATUS"]==2)
									{
										
									echo "<td><a href='#' class='btn btn-success btn-xs'> Completed</a></td>";
									
									}
									else if($row["STATUS"]==0)
									{
										
									echo "<td><a href='#' class='btn btn-warning btn-xs'> Not Completed</a></td>";
									
									}
									
									
									echo "</tr>";
									
								}
							}
							
						
				
			echo'</table>';

}




?>
