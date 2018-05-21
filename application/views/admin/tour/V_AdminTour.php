 <script type="text/javascript">
   $(document).ready(function() {
        $('#table_id').DataTable({
          responsive: true
        });
    } );
 </script>

<div class="container">
      <div class="col-xs-12 col-sm-9 col-md-9">
        <a href="create_booking" class="btn btn-danger">Add Booking</a>
      </div>

      <div class="container"><br>
      <table id="table_id" class="table table-striped"><br><br><br>
        <thead class="thead-dark">
          <tr>
            <th>Tour ID</th>
            <th>Customer ID</th>
            <th>Guide ID</th>
            <th>Packages</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Total Price</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
<?php
foreach ($tour->result_array() as $row)
            {
                  echo "<tr>";
                  echo "<td>".$row['TourID']."</td>";
                  echo "<td>".$row['CustID']."</td>";
                  echo "<td>".$row['GuideID']."</td>";
                  echo "<td>".$row['Packages']."</td>";
                  echo "<td>".$row['StartDate']."</td>";
                  echo "<td>".$row['EndDate']."</td>";
                  echo "<td>".$row['TotalPrice']."</td>";
                  echo "<td><a href='".site_url('BookingTour/edit_booking/'.$row['TourID'])."'> Edit</a>    ";
                  echo "<a href='".site_url('BookingTour/delete/'.$row['TourID'])."' >Hapus</a></td>";
                  echo "</tr>";

                }
?>
</tbody>
      </table>
        </div>
    </div>
</body>


</html>