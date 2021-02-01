<?php include('header.php'); ?>
<br>
	<div class="login" style="background-color:#fff;">
		<h1 class="text-center" style="background-color:#272327;color: #fff;">Congratulations....!!!</h1>
		 		<p class="text-center">You have been registered!</p>
			<div class="formstyle" style="float: center;padding:20px;border: 1px solid lightgrey;margin-right:0px; margin-bottom:30px;background-color:#f3f3f8;color:#141313;">
				<form action="" method="post" class="text-center">
					<table style="margin-left:auto;margin-right:auto;">
						<tr>
							<td>
					<label><b>
						Email:</b></label></td>
						<td> <input type="email" name="email"  placeholder="username" style="width: =100%;
							border: 2px solid #aaa;
							border-radius: 4px;
							margin: 8px 0;
							outline: none;
							padding: 8px;
							box-sizing: border-box;" required>
					</label></td><br><br>
				</td>

				<tr>
					<td>
					<label><b>
						Password: </b></label></td>
						<td><input type="password" name="password"  placeholder="password" style="width: =100%;
							border: 2px solid #aaa;
							border-radius: 4px;
							margin: 8px 0;
							outline: none;
							padding: 8px;
							box-sizing: border-box;" required>
					</label></td><br><br></tr>
				</table>
					<button name="submit" type="submit" style="margin-left: 20px;width: 100px;border-radius: 10px; padding: 15px 32px;background-color: #4CAF50;
		color: white;
		padding: 14px 20px;
		margin: 8px 0;
		border: none;
		cursor: pointer;">Login</button> <br>


					<!-- login validation -->
			<?php

							include('config.php');
							if(isset($_POST["submit"])){


							$sql= "SELECT * FROM patient WHERE email= '" . $_POST["email"]."' AND password= '" . $_POST["password"]."'";

							$result = $conn->query($sql);

									if ($result->num_rows > 0) {
											// $_SESSION["email"]= $_POST["email"];
											// $_SESSION['userstatus']= "yes";
										    echo "<script>location.replace('dashboardpatient.php');</script>";
												// echo "u are supposed to redirect to ur profile";
										} else {
										    echo "<span style='color:red;'>Please, check  username and password</span>";
										}
						$conn->close();
					}

 			?>
		<!-- login validation End-->


				</form> <br>&nbsp;&nbsp;&nbsp;

				<br>
	</div>


</div>
	</div><!--  containerFluid Ends -->
</body>
</html>
