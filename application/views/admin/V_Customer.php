    <div class="container">
      <div class="col-xs-12 col-sm-9 col-md-9">
        <a href="C_create" class="btn btn-danger">Add Customer</a>
      </div>

      <div class="container"><br>
      <table class="table table-striped"><br><br><br>
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Alamat</th>
          <th>Telepon</th>
          <th>E-mail</th>
          <th>Action</th>
        </tr>
<?php
foreach ($customer->result_array() as $row)
    {
      echo "<tr>";
      echo "<td>".$row['CustID']."</td>";
      echo "<td>".$row['CustName']."</td>";
      echo "<td>".$row['CustAddress']."</td>";
      echo "<td>".$row['CustPhone']."</td>";
      echo "<td>".$row['CustEmail']."</td>";
      echo "<td><a href='".site_url('Customer/C_edit/'.$row['CustID'])."' span class='glyphicon glyphicon-pencil'></a>    ";
      echo "<a href='".site_url('Customer/delete/'.$row['CustID'])."' span class='glyphicon glyphicon-trash'></a></td>";
      echo "</tr>";

    }
?>
      </table>
        </div>
    </div>
</body>
</html>