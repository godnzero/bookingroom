<?php
include("connect.php");
?>
<?php

	$sql = "INSERT INTO tb_bookingdetail (ticket_id, date_booking, book_room, book_timeslot, id_1, id_2, id_3, id_4, id_5, faculty, book_email, book_amount, book_name, book_tel) 
			VALUES ('".$_POST["ticket_id"]."',
			'".$_POST["date_booking"]."',
			'".$_POST["book_room"]."',
			'".$_POST["book_timeslot"]."',
			'".$_POST["id_1"]."',
			'".$_POST["id_2"]."',
			'".$_POST["id_3"]."',
			'".$_POST["id_4"]."',
			'".$_POST["id_5"]."',
			'".$_POST["faculty"]."',
			'".$_POST["book_email"]."',
			'".$_POST["book_amount"]."',
            '".$_POST["book_name"]."',
			'".$_POST["book_tel"]."'
			)";
	$query = mysqli_query($conn,$sql)or die("Error: ".mysqli_error($conn));
	mysqli_close($conn);

	$ticket_id=$_POST["ticket_id"];
	
	if($query)
	{
	echo "<script type='text/javascript'>";
	echo "alert('Booking Succesfuly');";
	echo "window.location = 'show_ticket_only.php?ticket_id=$ticket_id'";
	echo "</script>";
	}
	else
	{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to Booking again');";
	echo "</script>";
	}
?>

