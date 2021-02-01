<?php

$morning="no";
$afternoon="no";
$night="no";
$check_morning=isset($_POST['morning']);
if ($check_morning==1)
{
	       $morning="yes";
		     $check_afternoon=isset($_POST['afternoon']);
}
if ($check_afternoon==1)
{
	       $afternoon="yes";
	       $check_night=isset($_POST['night']);
}
if ($check_night==1)
{
					$night="yes";
					$cause=$_POST['cause'];
					$tablet_name=$_POST['tablet'];
					$days=$_POST['no_of_days'];
					$app_date=$_POST['app_date'];
}
include('config.php');
$sql="insert into prescription(cause,tablet_name,intake_mrng,intake_aft,intake_nit,days,app_date) values('{$cause}'.{$tablet}',{$days},'{$app_date}')";
if ($conn->query($sql) === TRUE)
{
		echo "done";
}
else
{
		echo "undone" . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
