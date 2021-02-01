<?php if(!isset($_SESSION)){
	session_start();
	}
?>

<?php include('headerpatient.php'); ?>
<?php include('uptomenu.php'); ?>



<!-- Cancel Booking -->


<?php
    $conn=mysqli_connect("localhost","root","","projectmms");
    if(!$conn)
    {
      die("connection failed".$conn->connect_error);
    }
    $booking_id=$_GET['booking_id'];
    $sql = "DELETE FROM booking WHERE booking_id=".$booking_id;

    if (mysqli_query($conn, $sql))
    {
        echo "<script>alert('Your booking has been Canceled!');</script>";
    } else {
         echo "<script>alert('There was an Error');</script>";
    }

    mysqli_close($conn);
?>
