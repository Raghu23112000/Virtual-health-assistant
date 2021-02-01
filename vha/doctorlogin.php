<?php session_start();  ?>
<?php include('header.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>VIRTUAL HEALTH ASSISTANT</title>
	<link rel="stylesheet" href="style.css">
	<style>
		.error {color: #FF0000;}
	</style>
</head>
<body>

<br>
		<h1 class="text-center" style="float:center;background-color:#272327;color: #fff;">Doctor Panel</h1>
			<div class="formstyle" style="float:center;padding: 20px;margin-right: 0px; margin-bottom: 20px;margin-top:20px;">
				<form action="" method="post" class="text-center">
					<table style="margin-left:auto;margin-right:auto;">
          <tr>
					<td><label><b>
						User ID: </b></label></td>
							<td><input type="text" name="userid"  placeholder="userid" style=" float: center;width: =100%;
					 			border: 2px solid #aaa;
					 			border-radius: 4px;
					 			margin: 8px 0;
					 			outline: none;
					 			padding: 8px;
					 			box-sizing: border-box;" required>
					</td>
					<br><br>
				</tr>
				<tr>
					<td><label><b>
					 Password:</b></label></td>
					 <td>	<input type="password" name="password"  placeholder="password" style=" float: center;width: =100%;
						 border: 2px solid #aaa;
						 border-radius: 4px;
						 margin: 8px 0;
						 outline: none;
						 padding: 8px;
						 box-sizing: border-box;">
					</td><br><br>
				</tr>
			</table>
					<button name="submit" type="submit" style="margin-left: 20px;width: 100px;border-radius: 10px; padding: 15px 32px;background-color: #4CAF50;
color: white;
		padding: 14px 20px;
		margin: 8px 0;
		border: none;
		cursor: pointer;">Login</button> <br><br><br><br><br><br>

					<!-- login validation -->
			<?php
							$_SESSION['adminstatus']="";

							include('config.php');
							if(isset($_POST["submit"])){

							$sql= "SELECT * FROM doctor WHERE userid= '" . $_POST["userid"]."' AND password= '" . $_POST["password"]."'";

							$result = $conn->query($sql);

									if ($result->num_rows > 0) {
											$_SESSION["userid"]= $_POST["userid"];
											// $_SESSION["type"]=$result[2];
											$_SESSION['adminstatus']= "yes";
										    echo "<script>location.replace('myDetails.php');</script>";
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














</body>
</html>
