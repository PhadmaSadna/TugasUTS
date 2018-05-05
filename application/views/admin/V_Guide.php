    <div class="container">
      <div class="col-xs-12 col-sm-9 col-md-9">
        <a href="G_create" class="btn btn-danger">Add Guide</a>
      </div>

      <div class="container"><br>
      <table class="table table-striped"><br><br><br>
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Gender</th>
          <th>Telepon</th>
          <th>E-mail</th>
          <th>Action</th>
        </tr>
<?php
foreach ($guide->result_array() as $row)
    {
      echo "<tr>";
      echo "<td>".$row['GuideID']."</td>";
      echo "<td>".$row['GuideName']."</td>";
      echo "<td>".$row['Gender']."</td>";
      echo "<td>".$row['GuidePhone']."</td>";
      echo "<td>".$row['GuideEmail']."</td>";
      echo "<td><a href='".site_url('Guide/G_edit/'.$row['GuideID'])."' span class='glyphicon glyphicon-pencil'></a>    ";
      echo "<a href='".site_url('Guide/delete/'.$row['GuideID'])."' span class='glyphicon glyphicon-trash'></a></td>";
      echo "</tr>";

    }
?>
      </table>
        </div>
    </div>
</body>
</html>