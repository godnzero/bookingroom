<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../../../favicon.ico">

  <title>Library Mahidol Booking Room</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">

  <!-- Custom styles for this template -->
  <link href="css/cover-black.css" rel="stylesheet">
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
        </div>
        <!--header-->
        <form class="form-inline" action="booking_todb_AJ.php" method="POST">

          <div class="card-body">

            <div class="form-group mx-auto mb-2">
              <label for="recipient-name" class="col-form-label col-md-2">Ticket ID:</label>
              <div class="col-md-10">
                <input type="text" class="form-control" id="modal_today" name="ticket_id" value="<?php echo $key; ?>"
                  disabled>
                <input type="hidden" name="ticket_id" value="<?php echo $key;?>">
              </div>
            </div>

            <div class="form-group mx-auto mb-2">
              <label for="recipient-name" class="col-form-label col-md-2">Date:</label>
              <div class="col-md-10">
                <input type="text" class="form-control" id="modal_today" name="date_booking" value="<?php echo $today; ?>"
                  disabled>
                <input type="hidden" name="date_booking" value="<?php echo $today;?>">
              </div>
            </div>

            <div class="form-group mx-auto mb-2">
              <label for="recipient-name" class="col-form-label col-md-2">Room:</label>
              <div class="col-md-10">
                <input type="text" class="form-control" id="modal_room_id" name="book_room" value="<?php echo $room; ?>"
                  disabled>
                <input type="hidden" name="book_room" value="<?php echo $room;?>">
              </div>
            </div>

            <div class="form-group mx-auto mb-2">
              <label for="recipient-name" class="col-form-label col-md-2">Time slot:</label>
              <div class="col-md-10">
                <input type="text" class="form-control" id="modal_timeslot" name="book_timeslot" value="<?php echo $time; ?>"
                  disabled>
                <input type="hidden" name="book_timeslot" value="<?php echo $time;?>">
              </div>
            </div>

            <div class="form-group mx-auto mb-2">
              <label for="message-text" class="col-form-label col-md-2">Faculty:</label>
              <div class="col-md-10">
                <input class="form-control" id="message-text" name="faculty" placeholder="คณะ" required>
              </div>
            </div>

            <div class="form-group mx-auto mb-2">
              <label for="message-text" class="col-form-label col-md-2">Email:</label>
              <div class="col-md-10">
                <input class="form-control" id="message-text" name="book_email" placeholder="email.xxx@mahidol.ac.th" required>
              </div>
            </div>

            <div class="form-group mx-auto mb-2">
              <label for="message-text" class="col-form-label col-md-2">Visitors:</label>
              <div class="col-md-10">
                <input class="form-control" id="message-text" name="book_amount" placeholder="จำนวนคน" required>
              </div>
            </div>

            <div class="form-group mx-auto mb-2">
              <label for="message-text" class="col-form-label col-md-2">Name-Surname:</label>
              <div class="col-md-10">
                <input class="form-control" id="message-text" name="book_name" placeholder="ชื่อ-นามสกุล" required>
              </div>
            </div>

            <div class="form-group mx-auto mb-2">
              <label for="message-text" class="col-form-label col-md-2">Tel:</label>
              <div class="col-md-10">
                <input class="form-control" id="message-text" name="book_tel" placeholder="เบอร์ติดต่อ" required>
              </div>
            </div>
         

            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="button" class="btn btn-secondary" onclick="history.back();">Cancel</button>
          </div>
          <!--card-body-->
        </form>

      </div>
      <!--card mb-4 shadow-sm-->
    </div>
    <!--card-deck mb-3 text-center-->
  </div>
  <!--container-->

</body>

</html>