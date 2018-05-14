 <script type="text/javascript">
   $(document).ready(function() {
        $('#table_id').DataTable();
    } );
 </script>

<div class="container">
      <div class="col-xs-12 col-sm-9 col-md-9">
        <a href="C_create" class="btn btn-danger">Add Data</a>
      </div>

      <div class="container">
      <table id="table_id" class="table table-striped"><br><br><br>
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
foreach ($Paket_Tour->result_array() as $row)
    {
      echo "<tr>";
      echo "<td>".$row['id']."</td>";
      echo "<td>".$row['judul']."</td>";
      echo "<td>".$row['duration']."</td>";
      echo "<td>".$row['loc']."</td>";
      echo "<td>".$row['jadwal']."</td>";
      echo "<td>".$row['harga']."</td>";
      echo "<td><img src='".base_url().'assets/img/'.$row['image']."' width='50px' height='50px'></td>";
      echo "<td><a href='".site_url('Paket_Tour/C_Edit/'.$row['id'])."''>Edit</a>    ";
      echo "<a href='".site_url('Paket_Tour/delete/'.$row['id'])."'>Hapus</a></td>";
      echo "</tr>";
    }
?>
</tbody>
      </table>
        </div>
    </div>
</body>
</html>