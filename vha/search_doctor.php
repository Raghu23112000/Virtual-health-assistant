<?php if(!isset($_SESSION)){
	session_start();
	}
?>
<?php include('headerpatient.php'); ?>
<?php include('uptomenu.php'); ?>
<br>
	<div class="search" style="background-color:;">
		<h1 class="text-center" style="background-color:black;color: #fff; margin-left:-17px;margin-right:-17px;">Find Doctor</h1>
 <div class="formstyle" style="float:center;text-align: center;padding:20px;margin-top: 0px;margin-bottom: auto;">
					<form action="search_result.php"  method="post" class="form-group">
					<label><b>
						Search By : </b></label><select name="address" type="text" style=" float: center;width: =100%;
							border: 2px solid #aaa;
							border-radius: 4px;
							margin: 8px 0;
							outline: none;
							padding: 8px;
							box-sizing: border-box;"  />
												<option>-Select-</option>
												<option>coimbatore</option>
												<option>chennai</option>
											</select>
					<br><br>
					<label><b>
						 Category:</b><select name="expertise" type="text" style=" float: center;width: =100%;
							 border: 2px solid #aaa;
							 border-radius: 4px;
							 margin: 8px 0;
							 outline: none;
							 padding: 8px;
							 box-sizing: border-box;" />
												<option>-Select-</option>
												<option>dentist</option>
												<option>dermatologist</option>
											</select>
					</label><br>
					<button name="submit" type="submit" style="margin-left: 20px;width: 100px;border-radius: 10px; padding: 15px 32px;background-color: #4CAF50;
	color: white;
		padding: 14px 20px;
		margin: 8px 0;
		border: none;
		cursor: pointer;" >Search</button>
					<br>
					</form>
		 	</div>
	</div>
</body>
</html>
