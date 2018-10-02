<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Library Mahidol Booking Room</title>

    <!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> 

    <!-- Custom styles for this template -->
    <link href="cover-black.css" rel="stylesheet">
  </head>
<body>
<?php
   $today = $_GET["today"];
   $room = $_GET["room"];
   $time = $_GET["time"];
   $key = abs( crc32( uniqid() ) );
 ?>

 <div class="container">
      <div class="card-deck mb-3 text-center">
        <div class="card mb-4 shadow-md">
<div class="card-header">
 <h1>Information</h1>
</div><!--header-->
<form class="form-inline" action="booking_todb.php" method="POST">

<div class="card-body">

          <div class="form-group mx-auto mb-2">
            <label for="recipient-name" class="col-form-label col-md-2">Ticket ID:</label>
              <div class="col-md-10">
                <input type="text" class="form-control" id="modal_today" name="ticket_id" value="<?php echo $key; ?>" disabled>
                <input type="hidden" name="ticket_id" value="<?php echo $key;?>">
              </div>
          </div>

          <div class="form-group mx-auto mb-2">
            <label for="recipient-name" class="col-form-label col-md-2">Date:</label>
              <div class="col-md-10">
                <input type="text" class="form-control" id="modal_today" name="date_booking" value="<?php echo $today; ?>" disabled>
                <input type="hidden" name="date_booking" value="<?php echo $today;?>">
              </div>
          </div>

          <div class="form-group mx-auto mb-2">
            <label for="recipient-name" class="col-form-label col-md-2">Room:</label>
              <div class="col-md-10">
                <input type="text" class="form-control" id="modal_room_id" name="book_room" value="<?php echo $room; ?>" disabled>
                <input type="hidden" name="book_room" value="<?php echo $room;?>">
              </div>
          </div>

          <div class="form-group mx-auto mb-2">
            <label for="recipient-name" class="col-form-label col-md-2">Time slot:</label>
              <div class="col-md-10">
                <input type="text" class="form-control" id="modal_timeslot" name="book_timeslot" value="<?php echo $time; ?>" disabled>
                <input type="hidden" name="book_timeslot" value="<?php echo $time;?>">
              </div>
          </div>

          <div class="form-group mx-auto mb-2">
            <label for="message-text" class="col-form-label col-md-2">User ID 1:</label>
              <div class="col-md-10">
                <input class="form-control" id="message-text" name="id_1" placeholder="5588xxx" required>
              </div>
          </div>

          <div class="form-group mx-auto mb-2">
            <label for="message-text" class="col-form-label col-md-2">User ID 2:</label>
              <div class="col-md-10">
                <input class="form-control" id="message-text" name="id_2" placeholder="5588xxx" required>
            </div>
          </div>

          <div class="form-group mx-auto mb-2">
            <label for="message-text" class="col-form-label col-md-2">User ID 3:</label>
              <div class="col-md-10">
                <input class="form-control" id="message-text" name="id_3" placeholder="5588xxx" required>
              </div>
          </div>

          <div class="form-group mx-auto mb-2">
            <label for="message-text" class="col-form-label col-md-2">User ID 4:</label>
              <div class="col-md-10">
                <input class="form-control" id="message-text" name="id_4" placeholder="5588xxx" required>
              </div>
          </div>

          <div class="form-group mx-auto mb-2">
            <label for="message-text" class="col-form-label col-md-2">User ID 5:</label>
              <div class="col-md-10">
                <input class="form-control" id="message-text" name="id_5" placeholder="5588xxx" required>
              </div>
          </div>

          <div class="form-group mx-auto mb-2">
            <label for="message-text" class="col-form-label col-md-2">Faculty:</label>
              <div class="col-md-10">
                <input class="form-control" id="message-text" name="faculty" placeholder="คณะ..." required>
              </div>
          </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="button" class="btn btn-secondary" onclick="history.back();">Cancel</button>
          </div><!--card-body-->
</form>

</div><!--card mb-4 shadow-sm-->
</div><!--card-deck mb-3 text-center-->
</div><!--container-->

</body></html>