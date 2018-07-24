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
                                <a href="create_customer" class="btn btn-outline-danger">Add Data</a> <br><br>
                                <table id="table_id" class="table table-striped table-bordered">
                                    <thead class="thead-dark">
                                      <tr>
                                        <th>User ID</th>
                                        <th>FullName</th>
                                        <th>Gender</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($customer as $key) : ?>
                                        <tr>
                                            <td><?php echo $key->UserID ?></td>
                                            <td><?php echo $key->FullName ?></td>
                                            <td><?php echo $key->Gender ?></td>
                                            <td><?php echo $key->Phone ?></td>
                                            <td><?php echo $key->Address ?></td>
                                            <td><?php echo $key->Email ?></td>
    <td><a href="<?php echo site_url('Page/edit_customer/'.$key->UserID)?>"><i class='fa fa-pencil'></i></a>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="<?php echo site_url('Page/delete_customer/'.$key->UserID)?>"><i class='fa fa-trash'></i></a></td>
                                        </tr>
                                        <?php endforeach ?>
                        </tbody>
                    </table>
                            </div>
                            
                        </div>
                </div>
            </div>

        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->


