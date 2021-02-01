<?php if(!isset($_SESSION)){
	session_start();
	}
?>
<?php include('headerpatient.php'); ?>
<?php include('uptomenu.php'); ?>
<br>
	<div class="dashboard" style="background-color:#fff;">
		<h3 class="text-center" style="background-color:black;color: #fff; margin-left:-17px;margin-right:-17px;">Track Record</h3>
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
								<th>Doctor Consulted</th>
								<th>Cause</th>
                <th>Prescribed medicine</th>
                <th> Intake - Morning </th>
                <th> Intake - Afternoon </th>
                <th> Intake - Night </th>
                <th> Intake days </th>
                <th> Next appointment Date</th>
								<th>Last visited Date</th>
                </tr>";
echo "</table>";
					}
					else{
						print "<p align='center'>Sorry, No match found for your search result..!!!</p>";
					}

					?>
			</div>
</body>
</html>
