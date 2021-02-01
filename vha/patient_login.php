<?php session_start();  ?>
<?php include('header.php'); ?>

	<br>
		<h1 class="text-center" style="background-color:black;color: #fff;">Patient Login</h1>
			<div class="formstyle" style="float: center;padding:20px;margin-right:0px; margin-bottom:0px; margin-top:50px;">
				<form action="" method="post" class="text-center form-group">
					<table style="margin-left:auto;margin-right:auto;">
						<tr>
							<td><label><b>User Email-ID :
							</b></label></td>
							<td><input type="email" name="email"  placeholder="User Email" style=" float: center;width: =100%;
					 			border: 2px solid #aaa;
					 			border-radius: 4px;
					 			margin: 8px 0;
					 			outline: none;
					 			padding: 8px;
					 			box-sizing: border-box;" required>
							</td>

						</tr>
						<tr>
							<td><label><b>Password :
							</b></label></td>
							<td><input type="password" name="password"  placeholder="Password" style="width: =100%;
					 			border: 2px solid #aaa;
					 			border-radius: 4px;
					 			margin: 8px 0;
					 			outline: none;
					 			padding: 8px;
					 			box-sizing: border-box;"required>
							</td>
						</tr>
					</table>
					<button name="submit" type="submit" style="margin-left: 20px;width: 100px;border-radius: 10px; padding: 15px 32px;background-color: #4CAF50;
		color: white;
		padding: 14px 20px;
		margin: 8px 0;
		border: none;
		cursor: pointer;">Login</button>
		<br>
		<span style="color:#000;">Not a member yet?</span><a href="patient_regi.php" title="create a account" target="" style="color:blue">&nbsp;Sign Up</a>

					<!-- login validation -->
			<?php
					$_SESSION['patient']="";

							include('config.php');
							if(isset($_POST["submit"])){


							$sql= "SELECT * FROM patient WHERE email= '" . $_POST["email"]."' AND password= '" . $_POST["password"]."'";

							$result = $conn->query($sql);

									if ($result->num_rows > 0) {
											$_SESSION["email"]= $_POST["email"];

											$_SESSION['patient']= "yes";
										    echo "<script>location.replace('dashboardpatient.php');</script>";
												// echo "u are supposed to redirect to ur profile";
										} else {
										    echo "<span style='color:red;'>Invalid username or password</span>";
										}
						$conn->close();
					}

 			?>
		<!-- login validation End-->


				</form> <br>&nbsp;&nbsp;&nbsp;

				<br>






	</div>


</div>

</body>
</html>
