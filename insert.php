<?php
include 'connect.php';
if(isset($_POST['submit']))
{
     $name=$_POST['name'];
	 $address=$_POST['address'];
	 $mobile=$_POST['num'];
	 $train_name = $_POST['train_name'];
	 $train_number = $_POST['train_num'];
	 $date = $_POST['date'];
	 $str_time= $_POST['str_time'];
     $end_time= $_POST['end_time'];
     $start_location=$_POST['start_location'];
     $end_location=$_POST['end_location'];
	 $couch=$_POST['couch'];
	 $preference=$_POST['preference'];
	 $amount=$_POST['amount'];
	 $adult=$_POST['adult_list'];
	 $child=$_POST['cld_list'];
	 $total_passemger=$_POST['totl_lis'];
	 $total_amt=$_POST['tol_amt'];
	 $gst=$_POST['gst'];
	 $net_amt=$_POST['net_amt'];
	 $sql = "INSERT INTO  l_trains_t (name,address,num,train_name,train_num,date,str_time,end_time,start_location,end_location,couch,preference,amount,adult_list,cld_list,totl_lis,tol_amt,gst,net_amt)
	 VALUES ('$name','$address','$mobile','$train_name ',' $train_number','$date','$str_time','$end_time','$start_location','$end_location','$couch','$preference',' $amount','$adult','$child','$total_passemger',' $total_amt','$gst','$net_amt')";
	 if (mysqli_query($conn, $sql)) {
		 echo "<a href=index.php>Go Back</a>";
	 } else {
		echo "Error: " . $sql . " " . mysqli_error($conn);

	 }
	 mysqli_close($conn);
}
else{
	echo "error";
}
?>