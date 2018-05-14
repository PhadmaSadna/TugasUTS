 <script type="text/javascript">
   $(document).ready(function() {
        $('#table_id').DataTable();
    } );
 </script>

<div class="container">
      <div class="col-xs-12 col-sm-9 col-md-9">
        <a href="create_login" class="btn btn-danger">Add Account</a>
      </div>

      <div class="container"><br>
      <table id="table_id" class="table table-striped"><br><br><br>
        <thead class="thead-dark">
          <tr>
            <th>Username</th>
            <th>Password</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
<?php
foreach ($login->result_array() as $row)
    {
      echo "<tr>";
      echo "<td>".$row['username']."</td>";
      echo "<td>".$row['password']."</td>";
      echo "<td><a href='".site_url('Login/edit_login/'.$row['username'])."'>Edit</a>    ";
      echo "<a href='".site_url('Login/delete/'.$row['username'])."'>Hapus</a></td>";
      echo "</tr>";

    }
?>
</tbody>
      </table>
        </div>
    </div>
</body>


</html>