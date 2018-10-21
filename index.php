<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../../../favicon.ico">

  <title>Library Mahidol Booking Room</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">

  <!-- Custom styles for this template -->
  <link href="css/cover.css" rel="stylesheet">
</head>

<body onload="startTime()" class="text-center">
  <?php include("connect.php"); ?>

  <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <img src="img/logo-MULKC-tha-WH.png" class="img-fluid float-left" height="500" width="500">
    <header class="masthead mb-auto">
      <div class="inner">

        <h1 class="display-1 pb-3">Room Reservation System</h1>

        <h2>
          <?php
            // Prints the day, date, month, year, time, AM or PM
            date_default_timezone_set('Asia/Bangkok');
            echo date("l , jS F Y");
            ?>
        </h2>

        <h1 class="display-2">
          <div id="timer"></div>
        </h1>
        <nav class="nav nav-masthead justify-content-center">
          <ul class="nav nav-pills" id="pills-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                aria-controls="pills-home" aria-selected="true">Home</a>
            </li>
            <!--<li class="nav-item">
              <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                aria-controls="pills-profile" aria-selected="false">1 Floor</a>
            </li>-->
            <li class="nav-item">
              <a class="nav-link" id="pills-multiroom-tab" data-toggle="pill" href="#pills-multi" role="tab"
                aria-controls="pills-multi" aria-selected="false">2 Floor</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
                aria-controls="pills-contact" aria-selected="false">Contact</a>
            </li>
          </ul>
        </nav>
      </div>
      <!--inner-->
      <h1 class="cover-heading">-----------------</h1>

      <!-- Button trigger modal -->
      <button type="button" class="btn btn-secondary btn-lg" data-toggle="modal" data-target="#exampleModalLong">Rules</button><br>

      <!-- Modal -->
      <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title text-muted" id="exampleModalLongTitle">เงื่อนไขการจองห้องศึกษารายกลุ่ม</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body text-muted">
              <p align="left">1. ผู้จองต้องกรอกข้อมูลตามความเป็นจริง</p>

              <p align="left">2. ผู้จองสามารถจองได้ 2 ครั้ง/วันเท่านั้น (2 ชม.)</p>

              <p align="left">3. ผู้จองต้องติดต่อ ณ เคาน์เตอร์บริการสืบค้น ชั้น 2 หอสมุดกลาง
                ก่อนถึงเวลาที่ได้จองไว้ 10 นาที</p>

              <p align="left">4. หากผู้จองไม่ติดต่อยืนยันขอเข้าห้องหลังจากเวลาจองผ่านไปแล้ว 10 นาที
                เจ้าหน้าที่สามารถยกเลิกการจองและให้สิทธิ์การใช้กับผู้อื่นได้</p>

              <p align="left">5. เจ้าหน้าที่สามารถเปลี่ยนแปลง/ยกเลิกการจองได้โดยไม่ต้องแจ้งให้ทราบล่วงหน้า</p>

              <p align="left">การใช้งานหลัง 18.00น. และวันเสาร์ ติดต่อที่เคาน์เตอน์ยืม-คืน ชั้น 1 หอสมุดกลาง</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      
      <p class="lead">Closed on Sundays and Official holidays.</p>
      <p class="lead">ปิดวันอาทิตย์และวันหยุดราชการ</p>



    </header>
    <main role="main" class="inner cover">
      <!--PILL-->
      <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"></div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">1 Floor

          <div class="col-md-12">
            <div class="card-deck mb-3 text-center">
              <div class="card mb-4 shadow-sm">
                <div class="card-header">
                  <h4 class="my-0 font-weight-normal text-muted">2A</h4>
                </div>
                <div class="card-body">
                  <!--<h1 class="card-title pricing-card-title">$0 <small class="text-muted">/ mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li class="text-muted">10 users included</li>
              <li>2 GB of storage</li>
              <li>Email support</li>
              <li>Help center access</li>
            </ul>-->
                  <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal"
                    data-whatever="1">8:00</button>
                  <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal"
                    data-whatever="2">9:00</button>
                  <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal"
                    data-whatever="3">10:00</button>
                  <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal"
                    data-whatever="4">11:00</button>
                  <button type="button" class="btn btn-lg btn-block btn-secondary" data-toggle="modal" data-target="#exampleModal"
                    data-whatever="5" disabled>12:00</button>
                  <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal"
                    data-whatever="6">13:00</button>
                  <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal"
                    data-whatever="7">14:00</button>
                  <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal"
                    data-whatever="8">15:00</button>
                  <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal"
                    data-whatever="9">16:00</button>
                </div>
                <!--card-body-->
              </div>
              <!--End A-->

              <div class="card mb-4 shadow-sm">
                <div class="card-header">
                  <h4 class="my-0 font-weight-normal text-muted">2B</h4>
                </div>
                <div class="card-body">
                  <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal"
                    data-whatever="1">8:00</button>
                  <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal"
                    data-whatever="2">9:00</button>
                  <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal"
                    data-whatever="3">10:00</button>
                  <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal"
                    data-whatever="4">11:00</button>
                  <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal"
                    data-whatever="5">12:00</button>
                  <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal"
                    data-whatever="6">13:00</button>
                  <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal"
                    data-whatever="7">14:00</button>
                  <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal"
                    data-whatever="8">15:00</button>
                  <button type="button" class="btn btn-lg btn-block btn-secondary" data-toggle="modal" data-target="#exampleModal"
                    data-whatever="9" disabled>16:00</button>
                </div>
                <!--card-body-->
              </div>
              <!--End B-->

              <div class="card mb-4 shadow-sm">
                <div class="card-header">
                  <h4 class="my-0 font-weight-normal text-muted">2C</h4>
                </div>
                <div class="card-body">
                  <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal"
                    data-whatever="1">8:00</button>
                  <button type="button" class="btn btn-lg btn-block btn-secondary" data-toggle="modal" data-target="#exampleModal"
                    data-whatever="2" disabled>9:00</button>
                  <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal"
                    data-whatever="3">10:00</button>
                  <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal"
                    data-whatever="4">11:00</button>
                  <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal"
                    data-whatever="5">12:00</button>
                  <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal"
                    data-whatever="6">13:00</button>
                  <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal"
                    data-whatever="7">14:00</button>
                  <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal"
                    data-whatever="8">15:00</button>
                  <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal"
                    data-whatever="9">16:00</button>
                </div>
                <!--card-body-->
              </div>
              <!--End C-->

              <div class="card mb-4 shadow-sm">
                <div class="card-header">
                  <h4 class="my-0 font-weight-normal text-muted">2D</h4>
                </div>
                <div class="card-body">
                  <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal"
                    data-whatever="1">8:00</button>
                  <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal"
                    data-whatever="2">9:00</button>
                  <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal"
                    data-whatever="3">10:00</button>
                  <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal"
                    data-whatever="4">11:00</button>
                  <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal"
                    data-whatever="5">12:00</button>
                  <button type="button" class="btn btn-lg btn-block btn-secondary" data-toggle="modal" data-target="#exampleModal"
                    data-whatever="6" disabled>13:00</button>
                  <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal"
                    data-whatever="7">14:00</button>
                  <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal"
                    data-whatever="8">15:00</button>
                  <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal"
                    data-whatever="9">16:00</button>
                </div>
                <!--card-body-->
              </div>
              <!--End D-->

              <div class="card mb-4 shadow-sm">
                <div class="card-header">
                  <h4 class="my-0 font-weight-normal text-muted">2E</h4>
                </div>
                <div class="card-body">
                  <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal"
                    data-whatever="1">8:00</button>
                  <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal"
                    data-whatever="2">9:00</button>
                  <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal"
                    data-whatever="3">10:00</button>
                  <button type="button" class="btn btn-lg btn-block btn-secondary" data-toggle="modal" data-target="#exampleModal"
                    data-whatever="4" disabled>11:00</button>
                  <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal"
                    data-whatever="5">12:00</button>
                  <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal"
                    data-whatever="6">13:00</button>
                  <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal"
                    data-whatever="7">14:00</button>
                  <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal"
                    data-whatever="8">15:00</button>
                  <button type="button" class="btn btn-lg btn-block btn-primary" data-toggle="modal" data-target="#exampleModal"
                    data-whatever="9">16:00</button>


                </div>
                <!--card-body-->
              </div>
              <!--End E-->
            </div>
            <!--card-deck mb-3 text-center-->
          </div>
          <!--col-md-12-->

        </div>
        <!--END PILL PF-->
        <!--START PILL MULTI-->
        <div class="tab-pane fade" id="pills-multi" role="tabpanel" aria-labelledby="pills-multi-tab">2 Floor
          <!--TEST FUNCTION-->
          <?php //today
  $today = date("Y-m-d");
  ?>
          <?php

$arrTime = array('1'=>"8:00",'2'=>"9:00",'3'=>"10:00",'4'=>"11:00",'5'=>"12:00",'6'=>"13:00",'7'=>"14:00",'8'=>"15:00",'9'=>"16:00",'10'=>"17:00",'11'=>"18:00",'12'=>"19:00",'13'=>"20:00");
$arrRoom = array('1'=>"2A",'2'=>"2B",'3'=>"2C",'4'=>"2D",'5'=>"2E");

?>
          <?php

$strTable = '<div class="col-md-12"><div class="card-deck mb-3 text-center">';

$queryAllReservedRoomsSql = "SELECT book_room, book_timeslot ,date_booking FROM `tb_bookingdetail` WHERE date_booking='$today'";
$allReservedRoomSqlResult = mysqli_query($conn, $queryAllReservedRoomsSql) or die("Error: ".mysqli_error($conn));
$allReservedRoomList = mysqli_fetch_all($allReservedRoomSqlResult, MYSQLI_ASSOC);

echo "</br>";
foreach ($arrRoom as $roomKey => $room_value) {
  $strTable .= '<div class="card mb-4 shadow-sm"> 
                <div class="card-header">
                <h4 class="my-0 font-weight-normal text-muted">'.$room_value.'</h4>  
                </div>';
  foreach ($arrTime as $timeKey => $time_value) {
      $isReserved = false;
      foreach ($allReservedRoomList as $reservedRoom) {
          if ($timeKey == $reservedRoom['book_timeslot'] && $roomKey == $reservedRoom['book_room']) {
              $isReserved = true;
              break;
          }
      }
      if ($isReserved) {
          $strTable .= '<div class="card-body">
                        <button class="btn btn-lg btn-block btn-secondary" disabled>RESERVED</button>
                        </div>';
      } 
      else {
          $strTable .= '<div class="card-body">
                        <a href="choose_form.php?room='.$roomKey.'&time='.$timeKey.'&today='.$today.'"class="btn btn-lg btn-block btn-info" role="button">'.$time_value.'</a>
                        </div>';
      }

  }
  $strTable .= '</div>'; //card mb-4 shadow-sm
}

echo $strTable, '</div></div>';//card-deck mb-3 text-center //col-md-12
?>
        </div>
        <!--END Multi-pill-->

        <!--START PILL CONTACT-->
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">Contact
          <div class="jumbotron jumbotron-fluid">
            <div class="container">
              <h1 class="display-4 text-muted">Contact</h1>
              <p class="lead text-muted">ติดต่อสอบถามเพิ่มเติม</p>
            </div>
          </div>
        </div>
        <!--Endcontact-pill-->

      </div>
      <!--END tab-content PILL-->
    </main>


   <!-- <form action="booking_todb.php" method="post" class="form-disable">
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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
                  <label for="recipient-name" class="col-form-label text-muted">Date:</label>
                  <input type="text" class="form-control" id="modal_today" name="date_booking" disabled>
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label text-muted">Room:</label>
                  <input type="text" class="form-control" id="modal_room_id" name="book_room" disabled>
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label text-muted">Time slot:</label>
                  <input type="text" class="form-control" id="modal_timeslot" name="book_timeslot" disabled>
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
    </form>-->


    <footer class="mastfoot mt-auto">
      <div class="inner">
        <p>Copyright © Mahidol University Library and Knowledge Center 2018.</p>
      </div>
    </footer>
  </div>
  <!--cover-container d-flex w-100 h-100 p-3 mx-auto flex-column-->
  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script>
    window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>


  <!--Modal Popup-->
  <script>
    $('#exampleModal').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var recipient = button.data('id') // Extract info from data-* attributes
      var date = button.data('today')
      var room = button.data('room_id')
      var timeslot = button.data('timeslot')
      // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
      // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
      var modal = $(this)
      modal.find('.modal-title').text('Reserve to Timeslot ' + recipient)
      //modal.find('.modal-body input').val(recipient)
      modal.find('#modal_today').text(date);
      modal.find('#modal_room_id').text(room);
      modal.find('#modal_timeslot').text(timeslot);
    });
  </script>

  <!--TIMER-->
  <script>
    function startTime() {
      var today = new Date();
      var h = today.getHours();
      var m = today.getMinutes();
      var s = today.getSeconds();
      m = checkTime(m);
      s = checkTime(s);
      document.getElementById('timer').innerHTML =
        h + ":" + m + ":" + s;
      var t = setTimeout(startTime, 500);
    }

    function checkTime(i) {
      if (i < 10) {
        i = "0" + i
      }; // add zero in front of numbers < 10
      return i;
    }
  </script>

</body>

</html>