<?php if(!isset($_SESSION))
{
	session_start();
}
?>
<?php include('headerpatient.php'); ?>
<?php include('uptomenu.php'); ?>
<?php	$doc_id = isset($_GET['doc_id'])?$_GET['doc_id']:""; ?>
					<?php
					include('config.php');


							$sql="SELECT * FROM doctor WHERE doc_id = $doc_id ";

							$result = $conn->query($sql);
							if ($result->num_rows > 0) {
							    // output data of each row
							    while($row  = $result->fetch_assoc())
									 {
							        $doc_id   = $row["doc_id"];
							        $name 	= $row["name"];
							        $expertise 	= $row["expertise"];
							        $contact 	= $row["contact"];
							        $fee = $row["fee"];
									    $userid = $row["userid"];
							    }
							}

							$conn->close();

					?>

					<br>
		<h3 class="text-center" style="background-color:black;color: white; margin-left:-17px;margin-right:-17px;">Book Appoinment</h3>
			<div class="formstyle" style="float: center;padding:20px;margin-right:0px; margin-bottom:0px">
				<form action="" method="post" class="text-center form-group" enctype="multipath/form-data">
					<table style="margin-left:auto;margin-right:auto;margin-top:-350px;">
						<tr>
							<td>
					<label><b>
						Dr Name:</b></label></td>
						<td> <input type="text" name="dname" value="<?php echo $name; ?>"
						style=" float: center;
						width: =100%;>
						border: 2px solid #aaa;
						border-radius: 4px;
						margin: 8px 0;
						outline: none;
						padding: 8px;
						box-sizing: border-box;"  >
					</label></td>
				</tr>

				<tr>
					<td>
 					<label><b>
						Contact:</b></label></td>
						<td> <input type="text" name="dcontact" value="<?php echo $contact; ?>"
						style=" float: center;
						width: =100%;>
						border: 2px solid #aaa;
						border-radius: 4px;
						margin: 8px 0;
						outline: none;
						padding: 8px;
						box-sizing: border-box;" >
					</td>
				</tr>

				<tr>
					<td>
					<label><b>
						Category:</b></label></td><td> <input type="text" name="expertise" value="<?php echo $expertise; ?>"
						style=" float: center;
						width: =100%;
						border: 2px solid #aaa;
						border-radius: 4px;
						margin: 8px 0;
						outline: none;
						padding: 8px;
						box-sizing: border-box;" >
				</td>
				</tr>

				 <tr>
					 <td>
					<label<b>
						Fee:</b></label></td><td> <input type="text" name="fee" value="<?php echo $fee; ?>"
						style=" float: center;
						width: =100%;
						border: 2px solid #aaa;
						border-radius: 4px;
						margin: 8px 0;
						outline: none;
						padding: 8px;
						box-sizing: border-box;" >
					</label></td><br><br>
				</tr>

				<tr>
					<td>
					<label><b>
						Your Name:</b> </label></td><td> <input type="text" name="pname" value=""
						style=" float: center;
						width: =100%;
						border: 2px solid #aaa;
						border-radius: 4px;
						margin: 8px 0;
						outline: none;
						padding: 8px;
						box-sizing: border-box;" >
					</td><br><br>
				</tr>

         <tr>
					 <td>
 					<label><b>
						 Contact: </b></label></td><td><input type="text" name="pcontact" value=""
						 style=" float: center;
						 width: =100%;
						 border: 2px solid #aaa;
						 border-radius: 4px;
						 margin: 8px 0;
						 outline: none;
						 padding: 8px;
						 box-sizing: border-box;">
					</label></td><br><br></tr>

					<tr><td>
					<label><b>
						 E-mail: </b></label></td><td><input type="email" name="email" value=""
						 style=" float: center;
						 width: =100%;
						 border: 2px solid #aaa;
						 border-radius: 4px;
						 margin: 8px 0;
						 outline: none;
						 padding: 8px;
						 box-sizing: border-box;">
					</td><br><br></tr>

					<tr>
						<td>
					<label><b>
						 Address:</b></label></td><td> <input type="text" name="address" value=""
						 style=" float: center;
						 width: =100%;
						 border: 2px solid #aaa;
						 border-radius: 4px;
						 margin: 8px 0;
						 outline: none;
						 padding: 8px;
						 box-sizing: border-box;">
					</td><br><br></tr>

					<tr>
						<td>
					<label><b>
						 Date: </b></label></td><td><input type="date" name="dates" value=""
						 style=" float: center;
						 width: =100%;
						 border: 2px solid #aaa;
						 border-radius: 4px;
						 margin: 8px 0;
						 outline: none;
						 padding: 8px;
						 box-sizing: border-box;">
					</td><br><br></tr>

					<tr><td>
					<label><b>
						 Time: </b></label></td><td><select name="tyme" required
						 style=" float: center;
						 width: =100%;>
						 border: 2px solid #aaa;
						 border-radius: 4px;
						 margin: 8px 0;
						 outline: none;
						 padding: 8px;
						 box-sizing: border-box;">
										<option value="">-select-</option>
										<option value="10.00am">10.00am</option>
										<option value="11.00pm">11.00am</option>
										<option value="12.00pm">12.00pm</option>
										<option value="04.00pm">04.00pm</option>
										<option value="05.00pm">05.00pm</option>
										<option value="06.00pm">06.00pm</option>
										<option value="07.00pm">07.00pm</option>
										<option value="08.00pm">08.00pm</option>
									</select>
					</td><br><br></tr>

				</table>
					<label>
						  <input type="hidden" name="userid" value="<?php echo $userid; ?>">
					</label><br><br>
				</table>
					<button name="submit" type="submit"
					style="margin-left: 20px;
					width: 100px;
					border-radius: 10px;
					padding: 15px 32px;
					background-color: #4CAF50;
					color: white;
					padding: 14px 20px;
					margin: 8px 0;
					border: none;
					cursor: pointer;">Book</button></a> <br>

       </form> <br><br>

			</div>
    	</div>

			<!-- confirming booking -->
					<?php

						include('config.php');
						if(isset($_POST['submit'])){

						$flag=0;
						$email=$_POST['email'];
						$p_name=$_POST["pname"];
						$sql1="SELECT * FROM booking";
						$result1=mysqli_query($conn,$sql1);
						$count1=mysqli_num_rows($result1);
						if($count1>=1)
						{
							while($row=mysqli_fetch_array($result1))
							{
								if($email==$row['email'])
								{
									$flag=1;
									$dates=$row['dates'];
									echo "<script>alert('".$p_name.", you have already booked an appointment on ".$dates."');</script>";
								}
							}
						}

							if($flag==0)
							{

							$sql = " INSERT INTO booking (dname,userid,dcontact,expertise,fee, pname,pcontact,email,address,dates,tyme)
							VALUES ('" . $_POST["dname"] . "','" . $_POST["userid"] . "','" . $_POST["dcontact"] . "','" . $_POST["expertise"] . "', '" . $_POST["fee"] . "','" . $_POST["pname"] . "','". $_POST["pcontact"] . "','". $_POST["email"] . "','". $_POST["address"] . "','". $_POST["dates"] . "','".
							 $_POST["tyme"] . "' )";

							if ($conn->query($sql) === TRUE)
							 {
							    echo "<script>alert('Your booking has been accepted!');</script>";
							} else
							{
							    echo "<script>alert('There was an Error')<script>";
							}
						}

							$conn->close();


						}
					?>

</body>
</html>
