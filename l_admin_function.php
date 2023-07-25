<?php 
function l_load_donor($sql,$con)
{
	echo '
				<table class="table table-striped">
				<tr>
				<th>Hospital Name</th>
				<th>Hospital Contact Number</th>
				<th>Hospital Username</th>
				</tr>';
				
							$result_per_page = 10;
							$result=$con->query($sql);
							$n=0;
							if($result->num_rows>0)
								
							{
								while($row=$result->fetch_assoc())
								{   
									$n++;
									echo "<tr>";
									echo "<td>".$row['hospital_name']."</td>";
									echo "<td>".$row['hospital_contact']."</td>";
									echo "<td>".$row['username']."</td>";
									echo "</tr>";
								}
							}
							
						
									
			echo'</table>';
		

}
?>
