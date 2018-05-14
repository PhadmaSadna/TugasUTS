 <script type="text/javascript">
   $(document).ready(function() {
        $('#table_id').DataTable();
    } );
 </script>

<div class="container">
      <div class="col-xs-12 col-sm-9 col-md-9">
        <a href="G_create" class="btn btn-danger">Add Guide</a>
      </div>

      <div class="container"><br>
      <table id="table_id" class="table table-striped"><br><br><br>
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
      echo "<td><a href='".site_url('Guide/G_edit/'.$row['GuideID'])."'>Edit</a>    ";
      echo "<a href='".site_url('Guide/delete/'.$row['GuideID'])."'>Hapus</a></td>";
      echo "</tr>";

    }
?>
</tbody>
      </table>
        </div>
    </div>
</body>


</html>