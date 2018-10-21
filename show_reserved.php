<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <!-- DataTables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">



</head>

<body>
    <?php 
//today
  $today = date("Y-m-d");
?>
 <!-- Connect to DB-->
    <?php
include("connect.php");
?>

    <?php

//inner join tb_room on tb_bookingdetail.book_room = tb_room.room_id
   $sql = "SELECT * FROM tb_bookingdetail 
  
   inner join tb_timeslot on tb_bookingdetail.book_timeslot = tb_timeslot.slot_id
   WHERE date_booking = '$today'";
   $query = mysqli_query($conn,$sql);

?>

    <div class="container">
        <h1>Show Reserved</h1>
        <table id="myTable" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>
                        <div align="center">Ticket ID </div>
                    </th>
                    <th>
                        <div align="center">ID1-5 </div>
                    </th>
                    <th>
                        <div align="center">Room </div>
                    </th>
                    <th>
                        <div align="center">Time </div>
                    </th>
                    <th>
                        <div align="center">faculty </div>
                    </th>
                    <th>
                        <div align="center">Email </div>
                    </th>
                    <th>
                        <div align="center">Visitors </div>
                    </th>
                    <th>
                        <div align="center">Name </div>
                    </th>
                    <th>
                        <div align="center">Tel </div>
                    </th>

                </tr>
            </thead>
            <tbody>

               

                <?php
while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
{

echo "<tr>

        <td data-column=Ticket ID>".$result["ticket_id"]."</td>

        <td>".$result["id_1"]." / ".$result["id_2"]." / ".$result["id_3"]." / ".$result["id_4"]." / ".$result["id_5"]."</td>
    
        <td>".$result["book_room"]."</td>

        <td>".$result["start_time"]."-".$result["end_time"]."</td>

        <td>".$result["faculty"]."</td>

        <td>".$result["book_email"]."</td>

        <td>".$result["book_amount"]."</td>

        <td>".$result["book_name"]."</td>

        <td>".$result["book_tel"]."</td>

    </tr>"
;}
?>
            </tbody>
        </table>
        <button type="button" class="btn btn-secondary" onclick='location.replace("index.php")'>Back</button>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
        crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="../js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        });
    </script>
    <?php mysqli_close($conn); ?>
</body>

</html>