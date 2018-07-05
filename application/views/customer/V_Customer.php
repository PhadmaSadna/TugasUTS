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
                        <h1>Data Customer</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Data Customer</li>
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
                                <a href="C_create" class="btn btn-outline-danger">Add Data</a> <br><br>
                                <table id="table_id" class="table table-striped table-bordered">
                                    <thead class="thead-dark">
                                      <tr>
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Telepon</th>
                                        <th>E-mail</th>
                                        <th>Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                            <?php
                            foreach ($customer->result_array() as $row)
                                {
                                  echo "<tr>";
                                  echo "<td>".$row['CustID']."</td>";
                                  echo "<td>".$row['CustName']."</td>";
                                  echo "<td>".$row['CustAddress']."</td>";
                                  echo "<td>".$row['CustPhone']."</td>";
                                  echo "<td>".$row['CustEmail']."</td>";
    echo "<td><a href='".site_url('Customer/C_edit/'.$row['CustID'])."'><i class='fa fa-pencil'></i></a>";
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    echo "<a href='".site_url('Customer/delete/'.$row['CustID'])."'><i class='fa fa-trash'></i></a></td>";
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


