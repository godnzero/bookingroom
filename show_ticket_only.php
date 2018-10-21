<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">


  <title>Library Mahidol Booking Room</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">

  <!-- Custom styles for this template -->
  <link href="css/cover-black.css" rel="stylesheet">
</head>

<body>
  

<!-- Connect to DB-->
<?php
include("connect.php");
?>

<?php
$ticket_id = $_GET["ticket_id"];
//inner join tb_room on tb_bookingdetail.book_room = tb_room.room_id
   $sql = "SELECT * FROM tb_bookingdetail 
  
   inner join tb_timeslot on tb_bookingdetail.book_timeslot = tb_timeslot.slot_id
   WHERE ticket_id = '$ticket_id'";
   $query = mysqli_query($conn,$sql);
    $result=mysqli_fetch_array($query,MYSQLI_ASSOC)
?>
 <div class="container">
    <div class="card-deck mb-3 text-center">
      <div class="card mb-4 shadow-md">
        <div class="card-header">
          <h1>Your Booking ID</h1>
        </div>

        <div class="card-body">

        <div class="form-group mx-auto mb-2">
            <p class="lead">Ticket ID : <?php echo $result["ticket_id"]; ?></p>
        </div>

        <div class="form-group mx-auto mb-2">
            <p class="lead">Name-Surname : <?php echo $result["book_name"]; ?></p>
        </div>

        <div class="form-group mx-auto mb-2">
            <p class="lead">Email : <?php echo $result["book_email"]; ?></p>
        </div>

        <div class="form-group mx-auto mb-2">
            <p class="lead">Tel : <?php echo $result["book_tel"]; ?></p>
        </div>

        <div class="form-group mx-auto mb-2">
            <p class="lead">Room : <?php echo $result["book_room"]; ?></p>
        </div>

        <div class="form-group mx-auto mb-2">
            <p class="lead">Time :  <?php echo $result["start_time"]."-".$result["end_time"]; ?></p>
        </div>           
        
        <button type="button" class="btn btn-secondary" onclick='location.replace("index.php")'>HOME</button>
   
        </div>
          <!--card-body-->
      </div>
      <!--card mb-4 shadow-sm-->
    </div>
    <!--card-deck mb-3 text-center-->
  </div>
  <!--container-->
</body>

</html>