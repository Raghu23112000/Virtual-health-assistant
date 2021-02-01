<?php if(!isset($_SESSION)){
	session_start();
	}
?>

<?php include('headerdoctor.php'); ?>
<br>
	<div class="dashboard" style="background-color:#fff;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;padding: 5px;">prescription</h3>
  </div>

  <div class="container" style="float: center;padding:20px;margin-bottom:50px;">
<div class="pres">
<div class="col-md-6 ">

	<form enctype="multipart/form-data" method="post" class="text-center">

		<div class="orm-group">
			<table style="margin-left:auto;margin-right:auto;">
				<tr>
					<td>
			<label>Patient Id:</label>

			<?php
				include('config.php');

				$email=$_REQUEST['email'];
				//echo $email;
				$sql="SELECT id from patient where email ='".$email."'";
				$result=$conn->query($sql);
				if($result->num_rows>0)
				{
					while($row=$result->fetch_assoc())
					{
						$id=$row["id"];
					}
				}
				$sql1="SELECT dname from booking where email ='".$email."'";
				$result=$conn->query($sql1);
				if($result->num_rows>0)
				{
					while($row=$result->fetch_assoc())
					{
						$doc_name=$row["dname"];
					}
				}
				?>

			<input type="text" name="pid" class="form-control" value="<?php echo $id; ?>" required>
		</div>
		<br>
		<div class="orm-group">
    <label>Doctor Name:</label>
      <input type="text" name="dname" class="form-control" value="<?php echo $doc_name; ?>"required>
  </div>
	<br>
	<div class="orm-group">
    <label>Cause:</label>
      <input type="text" name="cause" class="form-control" required>
  </div>
	<br>
  <div class="orm-group">
    <label>Name of tablet:</label>
      <input type="text" name="tablet" class="form-control" required>
  </div>
	<br>
  <div class="col-md-6 ">
    <div class="orm-group" style="margin-left:-180px;">
      <label >intake time:<div class="orm-group" style="margin-left:250px;">
	      <input type="checkbox" id="morning" name="morning" value="morning">
	      <label for="intake time"> morning</label>
<br>
	      <input type="checkbox" id="afternoon" name="afternoon" value="afternoon">
	      <label for="intake time"> afternoon</label>
<br>
	      <input type="checkbox" id="night" name="night" value="night">
	      <label for="intake time"> night</label>
	      <br>
			</div>
	   </div></label>
		</div>

   </div>
<br>
<label for="No of days">no of days</label>

<select name="no_of_days" id="no of days">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
</select>
<br><br>
<label> appoinment date </label>
<input type="date" name="app_date" class="form-control" required>
<br><br>
<button  name="submit" type="submit" class="btn btn-primary"> add </button>

<?php

if(isset($_POST['submit'])==1)
{
	$morning="no";
	$afternoon="no";
	$night="no";
	 $check_morning=isset($_POST['morning']);
	if ($check_morning==1)
	$morning="yes";
	$check_afternoon=isset($_POST['afternoon']);
	if ($check_afternoon==1)
	$afternoon="yes";
	$check_night=isset($_POST['night']);
	if ($check_night==1)
	$night="yes";
	$cause=$_POST['cause'];
	$tablet_name=$_POST['tablet'];
	$days=$_POST['no_of_days'];
	$app_date=$_POST['app_date'];
	$patient_id=$_POST['pid'];
	include('config.php');
	$sql="insert into prescription(cause,tablet_name,intake_mrng,intake_aft,intake_nit,days,app_date,id) values('{$cause}','{$tablet_name}','{$morning}','{$afternoon}','{$night}',{$days},'{$app_date}',{$patient_id})";
	if ($conn->query($sql) === TRUE) {
			echo "<script>alert('Patient prescription has added successfully');</script>";
	} else {
			echo "<script>alert('Patient prescription hasnot added successfully');</script>" . $sql . "<br>" . $conn->error;
	}

	$conn->close();
}
 ?>
</form>
</div>
</div>
</body>
</html>
