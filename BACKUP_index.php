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
    <link href="cover.css" rel="stylesheet">
  </head>

  <body class="text-center">
  <?php include("connect.php"); ?>
  <?php

   $sql = "SELECT start,end FROM tb_room_time WHERE rname ='A'";
   $query = mysqli_query($conn,$sql) or die("Error: ".mysqli_error($conn));

?>
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
          <h1 class="masthead-brand">Booking Room Library Mahidol</h1>
          
          <h1>
            <?php
            // Prints the day, date, month, year, time, AM or PM
            echo date("l jS \of F Y");
            ?>
          </h1>
         
          <h2>
            <?php  
            // TIMER
            $today = getdate(); 
            ?>
           <label id="timer"></label>
          </h2>

          <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link active" href="#">Home</a>
            <a class="nav-link" href="#">Features</a>
            <a class="nav-link" href="#">Contact</a>
          </nav>
        </div>
      </header>

      <main role="main" class="inner cover">
        <h1 class="cover-heading">Cover your page.</h1>
        <p class="lead">This is a test booking room.</p>
        <p class="lead">
          <a href="#" class="btn btn-lg btn-secondary">Learn more</a>
        </p>

<form action="booking_todb.php" method="post" class="form-disable">
<div class="col-md-12">
<div class="card-deck mb-3 text-center">
<div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal text-muted">A</h4>
          </div> <div class="card-body">
<?php
while($result=mysqli_fetch_array($query,MYSQLI_ASSOC)){
?>
         
  <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="1"><?php echo $result["start"];?>-<?php echo $result["end"];?></button>      
         
<?php
}
?>
 </div><!--card-body-->
        </div><!--End A-->


        <div class="card-deck mb-3 text-center">

        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal text-muted">A</h4>
          </div>
          <div class="card-body">
            <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="1">8:00-9:00</button>
            <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="2">9:00-10:00</button>
            <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="3">10:00-11:00</button>
            <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="4">11:00-12:00</button>
            <button type="button" class="btn btn-lg btn-block btn-secondary" data-toggle="modal" data-target="#exampleModal" data-whatever="5" disabled>12:00-13:00</button>
            <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="6">13:00-14:00</button>
            <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="7">14:00-15:00</button>
            <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="8">15:00-16:00</button>
            <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="9">16:00-17:00</button>
          </div><!--card-body-->
        </div><!--End A-->

        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal text-muted">B</h4>
          </div>
          <div class="card-body">
            <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="1">8:00-9:00</button>
            <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="2">9:00-10:00</button>
            <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="3">10:00-11:00</button>
            <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="4">11:00-12:00</button>
            <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="5">12:00-13:00</button>
            <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="6">13:00-14:00</button>
            <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="7">14:00-15:00</button>
            <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="8">15:00-16:00</button>
            <button type="button" class="btn btn-lg btn-block btn-secondary" data-toggle="modal" data-target="#exampleModal" data-whatever="9" disabled>16:00-17:00</button>
          </div><!--card-body-->
        </div><!--End B-->

        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal text-muted">C</h4>
          </div>
          <div class="card-body">
            <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="1">8:00-9:00</button>
            <button type="button" class="btn btn-lg btn-block btn-secondary" data-toggle="modal" data-target="#exampleModal" data-whatever="2" disabled>9:00-10:00</button>
            <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="3">10:00-11:00</button>
            <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="4">11:00-12:00</button>
            <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="5">12:00-13:00</button>
            <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="6">13:00-14:00</button>
            <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="7">14:00-15:00</button>
            <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="8">15:00-16:00</button>
            <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="9">16:00-17:00</button>
          </div><!--card-body-->
        </div><!--End C-->

        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal text-muted">D</h4>
          </div>
          <div class="card-body">
            <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="1">8:00-9:00</button>
            <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="2">9:00-10:00</button>
            <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="3">10:00-11:00</button>
            <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="4">11:00-12:00</button>
            <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="5">12:00-13:00</button>
            <button type="button" class="btn btn-lg btn-block btn-secondary" data-toggle="modal" data-target="#exampleModal" data-whatever="6" disabled>13:00-14:00</button>
            <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="7">14:00-15:00</button>
            <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="8">15:00-16:00</button>
            <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="9">16:00-17:00</button>
          </div><!--card-body-->
        </div><!--End D-->

      <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal text-muted">E</h4>
          </div>
          <div class="card-body">
            <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="1">8:00-9:00</button>
            <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="2">9:00-10:00</button>
            <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="3">10:00-11:00</button>
            <button type="button" class="btn btn-lg btn-block btn-secondary" data-toggle="modal" data-target="#exampleModal" data-whatever="4" disabled>11:00-12:00</button>
            <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="5">12:00-13:00</button>
            <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="6">13:00-14:00</button>
            <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="7">14:00-15:00</button>
            <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="8">15:00-16:00</button>
            <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="9">16:00-17:00</button>
          </div><!--card-body-->
        </div><!--End E-->

      </div>
</div><!--col-md-12-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-muted" id="exampleModalLabel">Reserve Room</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label text-muted">Room Name:</label>
            <input type="text" class="form-control" id="room_id" name="book_room" disabled>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label text-muted">Time slot:</label>
            <input type="text" class="form-control" id="timeslot" name="book_timeslot" disabled>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label text-muted">User ID 1:</label>
            <textarea class="form-control" id="message-text" name="id_1" placeholder="5588xxx"></textarea>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label text-muted">User ID 2:</label>
            <textarea class="form-control" id="message-text" name="id_2" placeholder="5588xxx"></textarea>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label text-muted">User ID 3:</label>
            <textarea class="form-control" id="message-text" name="id_3" placeholder="5588xxx"></textarea>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label text-muted">User ID 4:</label>
            <textarea class="form-control" id="message-text" name="id_4" placeholder="5588xxx"></textarea>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label text-muted">User ID 5:</label>
            <textarea class="form-control" id="message-text" name="id_5" placeholder="5588xxx"></textarea>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label text-muted">Faculty:</label>
            <textarea class="form-control" id="message-text" name="faculty" placeholder="คณะ..."></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>
</form>
      </main>

      <footer class="mastfoot mt-auto">
        <div class="inner">
          <p>Copyright © Mahidol University Library and Knowledge Center 2018</a>.</p>
        </div>
      </footer>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<!--TIME-->
<script>
    var d = new Date(Date.UTC(<?php echo $today['year'].",".$today['mon'].",".$today['mday'].",".$today['hours'].",".$today['minutes'].",".$today['seconds']; ?>));
    setInterval(function() {
        d.setSeconds(d.getSeconds() + 1);
        $('#timer').text((d.getHours()-2 +':' + d.getMinutes() + ':' + d.getSeconds() ));
    }, 1000);
</script>

<!--Modal Popup--> 
<script>
  $('#exampleModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var recipient = button.data('whatever') // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('.modal-title').text('Reserve to Timeslot ' + recipient)
    modal.find('.modal-body input').val(recipient)
  });
</script>

<!--Scipt Disable Button-->
<script>

</script>

</body></html>