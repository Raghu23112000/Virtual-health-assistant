<?php if(!isset($_SESSION)){
	session_start();
	}
?>
<?php include('headerpatient.php'); ?>
<?php include('uptomenu.php'); ?>

<!-- for retriving data -->
				<?php
							include('config.php');
							$sql="SELECT * FROM patient where email='" . $_SESSION["email"] . "'";

							$q=mysqli_query($conn,$sql);
							$row=mysqli_num_rows($q);

							$data=mysqli_fetch_array($q);
							$name=$data[1];
							$age=$data[2];
							$contact=$data[3];
							$address=$data[4];
							$bgroup=$data[5];
							$email=$data[6];

							mysqli_close($conn);
				?>
<!-- for retriving data -->

<br>
		<h3 class="text-center" style="background-color:black;color: #fff; margin-left:-17px;margin-right:-17px;">Profile</h3>
			<div class="formstyle" style="float: center;padding:25px;margin-right:0px; margin-bottom:30px;">
				<form action="" method="post" class="text-center form-group">
					<table style="margin-left:auto;margin-right:auto;">
						<tr>
								<td>
									<label><b>Name :
		 						</b></label></td>
								<td><input type="text" name="name" value="<?php echo $name; ?>" placeholder="Full name" style=" float: center;width: =100%;
		 							border: 2px solid #aaa;
		 							border-radius: 4px;
		 							margin: 8px 0;
		 							outline: none;
		 							padding: 8px;
		 							box-sizing: border-box;" required></td>
						</tr>
						<tr>
							<td><label><b>
								Age:</b> </label></td><td> <input type="number" name="age"  value="<?php echo $age; ?>" placeholder="age" style=" float: center;width: =100%;border: 2px solid #aaa;
								border-radius: 4px;
								margin: 8px 0;
								outline: none;
								padding: 8px;
								box-sizing: border-box;" required="required" pattern="[0-9]{2,2}" title="please enter only  numbers between 2 to 2 for age"/>
							</td>
						</tr>
						<tr>
							<td><label><b>
								Mobile:</b> </label></td><td><input type="text" name="contact" value="<?php echo $contact; ?>" placeholder="contact no" style=" float: center;width: =100%;
		 							border: 2px solid #aaa;
		 							border-radius: 4px;
		 							margin: 8px 0;
		 							outline: none;
		 							padding: 8px;
		 							box-sizing: border-box;" required="required" pattern="[0-9]{10,11}" title="please enter only numbers between 10 to 11 for mobile no."/>
							</td>
						</tr>
						<tr>
							<td><label><b>
								Address: </b></label></td><td</label></td><td><input type="text" name="address" value="<?php echo $address; ?>" placeholder="address" style=" float: center;width: =100%;
		 							border: 2px solid #aaa;
		 							border-radius: 4px;
		 							margin: 8px 0;
		 							outline: none;
		 							padding: 8px;
		 							box-sizing: border-box;"required>
							</td>
						</tr>
						<tr>
							<td><label><b>
								Blood Group:</b></label></td><td> <input type="email" name="email" value="<?php echo $bgroup; ?>" placeholder="email" style=" float: center;width: =100%;
		 							border: 2px solid #aaa;
		 							border-radius: 4px;
		 							margin: 8px 0;
		 							outline: none;
		 							padding: 8px;
		 							box-sizing: border-box;" disabled>
							</td>
						</tr>
						<tr>
							<td><label><b>
								Email:</b></label></td><td> <input type="email" name="email" value="<?php echo $email; ?>" placeholder="email" style=" float: center;width: =100%;
		 							border: 2px solid #aaa;
		 							border-radius: 4px;
		 							margin: 8px 0;
		 							outline: none;
		 							padding: 8px;
		 							box-sizing: border-box;" required>
             </td>
						</tr>
					</table>
					<button name="submit" type="submit" style="margin-left: 20px;width: 100px;border-radius: 10px; padding: 15px 32px;background-color: #4CAF50;
		color: white;
		padding: 14px 20px;
		margin: 8px 0;
		border: none;
		cursor: pointer;">Update</button> <br>


			</form> <br>

				<br>
	</div>


</div>
<br><br><br>

			<!-- update information -->

				<?php
							include('config.php');
							if(isset($_POST['submit'])){


							$sql="UPDATE patient SET name='" .$_POST["name"]. "' ,age='" .$_POST["age"]."' , contact='" .$_POST["contact"]. "',address='" .$_POST["address"]. "', email='".$_POST["email"]."' WHERE email='" .$_SESSION["email"]. "'";

							if (mysqli_query($conn, $sql))
							{
						    echo "<script>alert(' Record updated successfully');</script>";
							}
							else 
							{
							    echo "<script>alert('There was a Error Updating profile');</script>";
							}

						mysqli_close($conn);
													}
					?>
			<!-- update information End -->




</body>
</html>
