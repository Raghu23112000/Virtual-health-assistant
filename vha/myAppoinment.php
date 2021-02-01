<?php if(!isset($_SESSION)){
	session_start();
	}
?>



<?php include('headerdoctor.php'); ?>
<br>
	<div class="dashboard" style="background-color:#fff;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;padding: 5px;">Today's Appoinment</h3>
	</div>

			<div class="all_user" style="margin-top:0px; margin-left: 40px;padding:20px;margin-bottom:20px;">
				<?php
					include('config.php');

					$sql = " SELECT * FROM booking WHERE userid='".$_SESSION["userid"]."'";
					$result = mysqli_query($conn,$sql);
					$count = mysqli_num_rows($result);

					if($count>=1){
						echo "<table border='1' align='center' cellpadding='32'>
							<tr>
								<th>Patient Name</th>
								<th>Contact</th>
								<th>E-mail</th>
								<th>address</th>
								<th>Date</th>
								<th>Time</th>
								<th>prescription</th>
								<th>History</th>
							</tr>";
						while($row=mysqli_fetch_array($result)){
								echo "<tr>";
								echo "<td>".$row['pname']."</td>";
								echo "<td>".$row['pcontact']."</td>";
								echo "<td>".$row['email']."</td>";
								echo "<td>".$row['address']."</td>";
								echo "<td>".$row['dates']."</td>";
								echo "<td>".$row['tyme']."</td>";
								$p_email=$row['email'];
							?>
							<td><a href="prescription.php?email=<?php echo $p_email; ?>">add prescription</a></td>
							<td><a href="history.php?email=<?php echo $p_email ?>">
										view history</a></td>
							<?php
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
