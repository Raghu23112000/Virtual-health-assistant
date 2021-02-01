<?php if(!isset($_SESSION)){
	session_start();
	}
?>
<?php include('headerdoctor.php'); ?>
<br>
	<div class="dashboard" style="background-color:#fff;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;padding: 5px;">Record History</h3>
	</div>

			<div class="all_user" style="margin-top:0px; margin-left: 40px;padding:20px;margin-bottom:20px;">
				<?php
					include('config.php');

					$email=$_REQUEST['email'];

					$sql = " SELECT * FROM booking WHERE email='".$email."'";
					$result = mysqli_query($conn,$sql);
					$count = mysqli_num_rows($result);

					if($count>=1){
						echo "<table border='1' align='center' cellpadding='32'>
							<tr>
								<th>Patient Name</th>
								<th>Age</th>
								<th>Blood Group</th>
								<th>Doctor Consulted</th>
								<th>Cause</th>
								<th>Last visited Date</th>
							</tr>";
						while($row=mysqli_fetch_array($result)){
							$p_email=$row['email'];
							$p_name=$row['pname'];
							$d_name=$row['dname'];

							$sql1 = "SELECT * FROM patient WHERE email='".$p_email."'";
							$result1= mysqli_query($conn,$sql1);
							$count1 =  mysqli_num_rows($result1);
							if($count1>=1)
							{
								while($row1=mysqli_fetch_array($result1))
								{
									$age=$row1['age'];
									$bgroup=$row1['bgroup'];
									$p_id=$row1['id'];
								}
							}

							$cause="Not Prescribed";
							$last_visited="Not Visited";
							$sql2= "SELECT * FROM prescription WHERE id=".$p_id;
							$result2= mysqli_query($conn,$sql2);
							$count2 =  mysqli_num_rows($result2);
							//echo var_dump($result2);
							if($count2>=1)
							{
								while($row2=mysqli_fetch_array($result2))
								{
									$cause=$row2['cause'];
									$last_visited=$row2['app_date'];
								}
							}

								echo "<tr>";
								echo "<td>".$p_name."</td>";
								echo "<td>".$age."</td>";
								echo "<td>".$bgroup."</td>";
								echo "<td>".$d_name."</td>";
								echo "<td>".$cause."</td>";
								echo "<td>".$last_visited."</td>";
								echo "</tr>";
						}
						echo "</table>";
					}
					else{
						print "<p align='center'>Sorry, No match found for your search result..!!!</p>";
					}

					?>
			</div>
</body>
</html>
