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
                        <h1>Data Guide</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Data Guide</li>
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
                                <a href="G_create" class="btn btn-outline-danger">Add Data</a> <br><br>
                                <table id="table_id" class="table table-striped table-bordered">
                                    <thead class="thead-dark">
                                      <tr>
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>Gender</th>
                                        <th>Telepon</th>
                                        <th>E-mail</th>
                                        <th>Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                            <?php
                                foreach ($guide->result_array() as $row)
                                    {
                                      echo "<tr>";
                                      echo "<td>".$row['GuideID']."</td>";
                                      echo "<td>".$row['GuideName']."</td>";
                                      echo "<td>".$row['Gender']."</td>";
                                      echo "<td>".$row['GuidePhone']."</td>";
                                      echo "<td>".$row['GuideEmail']."</td>";
    echo "<td><a href='".site_url('Guide/G_edit/'.$row['GuideID'])."'><i class='fa fa-pencil'></i></a>";
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    echo "<a href='".site_url('Guide/delete/'.$row['GuideID'])."'><i class='fa fa-trash'></i></a></td>";
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


