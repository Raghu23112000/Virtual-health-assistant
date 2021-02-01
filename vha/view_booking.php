<?php if(!isset($_SESSION)){
	session_start();
	}
?>
<?php include('headerpatient.php'); ?>
<?php include('uptomenu.php'); ?>
<br>
	<div class="dashboard" style="background-color:#fff;">
		<h3 class="text-center" style="background-color:black;color: #fff; margin-left:-17px;margin-right:-17px;">My Appoinment</h3>
	</div>

			<div class="all_user" style="margin-top:0px; margin-left: 40px;margin-bottom: 10px;">
				<?php
					include('config.php');
					$sql = " SELECT * FROM booking WHERE email = '".$_SESSION["email"]."'  ";
					$result = mysqli_query($conn,$sql);
					$count = mysqli_num_rows($result);
					if($count>=1){
						echo "<table border='2' align='center' cellpadding='32'>
							<tr>
								<th>My Doctor</th>
								<th>Expertise</th>
								<th>Appoinment Date</th>
								<th>Time</th>
								<th>Action</th>
							</tr>";
						while($row=mysqli_fetch_array($result)){
								echo "<tr>";
								echo "<td>".$row['dname']."</td>";
								echo "<td>".$row['expertise']."</td>";

								echo "<td>".$row['dates']."</td>";
								echo "<td>".$row['tyme']."</td>";
						?>
								<td><a href="cancel_booking.php?booking_id=<?php echo $row['booking_id'] ?>">Cancel</a></td>;
						<?php
								echo "</tr>";
						}
						echo "</table>";
					}
					else{
						print "<p align='center'>Sorry, You haven't booked any Appoinment today..!!!</p>";
					}
					?>
					<br><br><br><br>
				</div>
</body>
</html>
