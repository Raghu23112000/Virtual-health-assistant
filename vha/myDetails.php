<?php if(!isset($_SESSION)){
	session_start();
	}
?>
<?php include('headerdoctor.php'); ?>
<!-- for retriving data -->
				<?php
							include('config.php');
							$sql="SELECT * FROM doctor where userid='" . $_SESSION["userid"] . "'";

							$q=mysqli_query($conn,$sql);
							$row=mysqli_num_rows($q);

							$data=mysqli_fetch_array($q);
							$name=$data[2];
							$address=$data[3];
							$contact=$data[4];
							$email=$data[5];
							$userid=$data[9];
							$expertise=$data[6];
							$fee=$data[8];

							mysqli_close($conn);
				?>
<!-- for retriving data -->
<br>
		<h1 class="text-center" style="background-color:black;color: #fff; margin-left:-17px;margin-right:-17px;">My Details</h1>
			<div class="formstyle" style=" float: center;padding:20px;margin-right:0px; margin-bottom:0px;">
				<form action="" method="post" class="text-center form-group">
					<table style="margin-left:auto;margin-right:auto;">
						<tr>
							<td><label><b>
								Name: </b></label></td><td><input type="text" name="name" value="<?php echo $name; ?>" style=" float: center;width: =100%;>
								border: 2px solid #aaa;
								border-radius: 4px;
								margin: 8px 0;
								outline: none;
								padding: 8px;
								box-sizing: border-box;" required></td>
						</tr>
						<tr>
							<td><label><b>
								Address:</b></label></td><td> <input type="text" name="address" value="<?php echo $address; ?>"  style=" float: center;width: =100%;>
								border: 2px solid #aaa;
								border-radius: 4px;
								margin: 8px 0;
								outline: none;
								padding: 8px;
								box-sizing: border-box;"required></td>
						</tr>
						<tr>
							<td><label><b>
								Contact: </b></label></td><td><input type="text" name="contact" value="<?php echo $contact; ?>" style=" float: center;width: =100%;
								border: 2px solid #aaa;
								border-radius: 4px;
								margin: 8px 0;
								outline: none;
								padding: 8px;
								box-sizing: border-box;" required="required">></td>
						</tr>
						<tr>
							<td><label><b>
								Email: </b></label></td><td><input type="email" name="email" value="<?php echo $email; ?>"  style=" float: center;width: =100%;
								border: 2px solid #aaa;
								border-radius: 4px;
								margin: 8px 0;
								outline: none;
								padding: 8px;
								box-sizing: border-box;"required>	</td>
						</tr>
						<tr>
							<td><label><b>
								Userid: </b></label></td><td><input type="text" name="userid" value="<?php echo $userid; ?>"  style=" float: center;width: =100%;
								border: 2px solid #aaa;
								border-radius: 4px;
								margin: 8px 0;
								outline: none;
								padding: 8px;
								box-sizing: border-box;" disabled></td>
						</tr>
						<tr>
							<td><label><b>
								Expert in: </b></label></td><td><input type="email" name="email" value="<?php echo $expertise; ?>"  style=" float: center;width: =100%;
								border: 2px solid #aaa;
								border-radius: 4px;
								margin: 8px 0;
								outline: none;
								padding: 8px;
								box-sizing: border-box;" disabled ></td>
						</tr>
						<tr>
							<td><label><b>
								Fee: </b></label></td><td><input type="text" name="fee" value="<?php echo $fee; ?>"  style=" float: center;width: =100%;
								border: 2px solid #aaa;
								border-radius: 4px;
								margin: 8px 0;
								outline: none;
								padding: 8px;
								box-sizing: border-box;" disabled ></td>
						</tr>
					</table>
					<button name="submit" type="submit" style="margin-left: 20px;width: 100px;border-radius: 10px; padding: 15px 32px;background-color: #4CAF50;
					color: white;
					padding: 14px 20px;
					margin: 8px 0;
					border: none;
					cursor: pointer;">Update</button>
							</form> <br><br>
	</div>
</div>


			<!-- update information -->

				<?php

						include('config.php');
						if(isset($_POST['submit'])){


							$sql="UPDATE doctor SET name='" .$_POST["name"]. "' ,address='" .$_POST["address"]."' , contact='" .$_POST["contact"]. "',email='" .$_POST["email"]. "' WHERE userid='" . $_SESSION["userid"] . "'";

							if (mysqli_query($conn, $sql)) {
						    echo "<script>alert(' Record updated successfully');</script>";
							} else {
							    echo "<script>alert('There was a Error Updating profile');</script>";
							}

						mysqli_close($conn);
													}
					?>
			<!-- update information End -->



</body>
</html>
