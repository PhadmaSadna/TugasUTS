 <script type="text/javascript">
   $(document).ready(function() {
        $('#table_id').DataTable();
    } );
 </script>

 <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Data Booking Tour</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Data Booking Tour</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <a href="create_booking" class="btn btn-outline-danger">Add Data</a> <br><br>
                                <table id="table_id" class="table table-striped table-bordered">
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
                            foreach ($tour->result_array() as $row) {
                                echo "<tr>";
                                echo "<td>".$row['TourID']."</td>";
                                echo "<td>".$row['CustID']."</td>";
                                echo "<td>".$row['GuideID']."</td>";
                                echo "<td>".$row['Packages']."</td>";
                                echo "<td>".$row['StartDate']."</td>";
                                echo "<td>".$row['EndDate']."</td>";
                                echo "<td>".$row['TotalPrice']."</td>";
    echo "<td><a href='".site_url('BookingTour/edit_booking/'.$row['TourID'])."'><i class='fa fa-pencil'></i></a>";
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    echo "<a href='".site_url('BookingTour/delete/'.$row['TourID'])."'><i class='fa fa-trash'></i></a></td>";
                                  echo "</tr>";

                                }
                            ?>
                        </tbody>
                    </table>
                            </div>
                            
                        </div>
                </div>
            </div>

        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->


