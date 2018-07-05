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
                        <h1>Data Paket Tour</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Data Paket Tour</li>
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
                                        <th>Judul</th>
                                        <th>Duration</th>
                                        <th>Loc</th>
                                        <th>jadwal</th>
                                        <th>harga</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                            <?php
                                function limit_words($string, $word_limit){
                                          $words = explode(" ", $string);
                                          return implode(" ", array_splice($words, 0, $word_limit));
                                        }
                                foreach ($Paket_Tour->result_array() as $row)
                                    {
                                      echo "<tr>";
                                      echo "<td>".$row['id']."</td>";
                                      echo "<td>".$row['judul']."</td>";
                                      echo "<td>".$row['duration']."</td>";
                                      echo "<td>".$row['loc']."</td>";
                                      echo "<td>".limit_words($row['jadwal'], 6)."</td>";
                                      echo "<td>".$row['harga']."</td>";
                                      echo "<td><img src='".base_url().'assets/img/'.$row['image']."' width='50px' height='50px'></td>";
    echo "<td><a href='".site_url('Paket_Tour/C_edit/'.$row['id'])."'><i class='fa fa-pencil'></i></a>";
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    echo "<a href='".site_url('Paket_Tour/delete/'.$row['id'])."'><i class='fa fa-trash'></i></a></td>";
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


