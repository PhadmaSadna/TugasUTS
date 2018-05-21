 <script type="text/javascript">
   $(document).ready(function() {
        $('#table_id').DataTable();
    } );
 </script>

<div class="container">
      <div class="col-xs-12 col-sm-9 col-md-9">
        <a href="Customer/C_create" class="btn btn-danger">Add Customer</a>
      </div>

      <div class="container"><br>
      <table id="table_id" class="table table-striped"><br><br><br>
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
      echo "<td><a href='".site_url('Customer/C_edit/'.$row['CustID'])."'>Edit</a>    ";
      echo "<a href='".site_url('Customer/delete/'.$row['CustID'])."'>Hapus</a></td>";
      echo "</tr>";

    }
?>
</tbody>
      </table>
        </div>
    </div>
</body>


</html>