<?php include('header.php'); ?>
<br>
	<div class="recipient_reg" style="background-color:#272327;">
		<h2 class="text-center" style="background-color:#272327;color: #fff;">Patient Registration</h2>

		<div class="formstyle" style="float: center;padding:25px;background-color: white;margin-right:0px; margin-bottom:30px;">
		<form enctype="multipart/form-data" method="post" class="text-center">
			 <div class="col-md-12">
				 <table style="margin-left:auto;margin-right:auto;">
					 <tr>
 						<td><label><b>User Name :
 						</b></label></td>
 						<td><input type="text" name="name"  placeholder="User Name" style=" float: center;width: =100%;
 							border: 2px solid #aaa;
 							border-radius: 4px;
 							margin: 8px 0;
 							outline: none;
 							padding: 8px;
 							box-sizing: border-box;"required>
 						</td>
 					</tr>
 					<tr>
 						<td><label><b>Age :
 						</b></label></td>
 						<td><input type="number" name="age"  placeholder="Age" style=" float: center;width: =100%;
 							border: 2px solid #aaa;
 							border-radius: 4px;
 							margin: 8px 0;
 							outline: none;
 							padding: 8px;
 							box-sizing: border-box;" pattern="[0-9]{2,2}" title="please enter only  numbers between 2 to 2 for age" required/>
 						</td>
 					</tr>
					<tr>
						<td><label><b>Phone Number :
 						</b></label></td>
 						<td><input type="number" name="contact"  placeholder="Phone Number" required="required" style=" float: center;width: =100%;
 							border: 2px solid #aaa;
 							border-radius: 4px;
 							margin: 8px 0;
 							outline: none;
 							padding: 8px;
 							box-sizing: border-box;" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" title="please enter only numbers between 10 to 11 for mobile no."/>
 						</td>
					</tr>
					<tr>
						<td><label><b>City :
 						</b></label></td>
 						<td><input type="text" name="address" value="" placeholder="Address" required="required" style=" float: center;width: =100%;
 							border: 2px solid #aaa;
 							border-radius: 4px;
 							margin: 8px 0;
 							outline: none;
 							padding: 8px;
 							box-sizing: border-box;" >
 						</td>
					</tr>
					<tr>
						<td><label><b>Blood Group :
 						</b></label></td>
 						<td><select name="bgroup" style=" float: center;width: =100%;
 							border: 2px solid #aaa;
 							border-radius: 4px;
 							margin: 8px 0;
 							outline: none;
 							padding: 8px;
 							box-sizing: border-box;" required>
										<option value="">-select-</option>
										<option value="O+">O+</option>
										<option value="O-">O-</option>
										<option value="AB+">AB+</option>
										<option value="AB-">AB-</option>
										<option value="A+">A+</option>
										<option value="A-">A-</option>
										<option value="B+">B+</option>
										<option value="B-">B-</option>
									</select></td>
					</tr>
					<tr>
						<td><label><b>Email-ID :
 						</b></label></td>
 						<td><input type="email" name="email"  value="" placeholder="email" style=" float: center;width: =100%;
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
 						<td><input type="password" name="password"  value="" placeholder="password" style=" float: center;width: =100%;
 							border: 2px solid #aaa;
 							border-radius: 4px;
 							margin: 8px 0;
 							outline: none;
 							padding: 8px;
 							box-sizing: border-box;" required>
 						</td>
					</tr>
				 </table>
				 <br>
	<button name="submit" type="submit" style="margin-left: 20px;width: 100px;border-radius: 10px; padding: 15px 32px;background-color: #4CAF50;
color: white;
padding: 14px 20px;
margin: 8px 0;
border: none;
cursor: pointer;">Register</button>
</div>
	</form>
			</div>
	</div>
	</div>
	<?php
						include('config.php');
						if(isset($_POST['submit'])){

						$sql1 = "SELECT * FROM patient WHERE email='".$_POST["email"]."' ";
             		    $result = $conn->query($sql1);
             		    if ($result->num_rows > 0) {
			                  echo "<script>alert('Sorry, user already exist!');</script>";
			             }
						else{
							$sql = "INSERT INTO patient (name,age,contact,address,bgroup,email, password)
							VALUES ('" . $_POST["name"] ."','" . $_POST["age"] . "','" . $_POST["contact"] . "','" . $_POST["address"] . "','" . $_POST["bgroup"] . "', '" . $_POST["email"] . "','" . $_POST["password"] . "' )";

							if ($conn->query($sql) === TRUE) {
							    echo "<script>location.replace('patient_success_msg.php');</script>";
							} else {
							    echo "<script>alert('There was an Error')<script>" . $sql . "<br>" . $conn->error;
							}

							$conn->close();
						}
					}
				?>

</body>
</html>
