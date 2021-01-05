<!DOCTYPE html>
<html>
<head>
 <title>Menampilkan data json</title>

 <style>

  table {
   width: 100%;
   border-collapse: collapse;
  }

  td, th {
   padding: 1rem;
   border-bottom: 1px solid #DDD;
  }

  th {
    background-color: #272727;
    color: #fff;
  }

  tr:hover {
    background-color: #F5F5F5;
  }

 </style>

</head>
<body>

 <table>
  <tr>
   <th>Id</th>
   <th>User</th>
   <th>Password</th> 
  </tr>

  <?php foreach ($result as $row): ?>
    <tr>
      <td><?= $row['id']; ?></td>
      <td><?= $row['user']; ?></td>
      <td><?= $row['password']; ?></td>
    </tr>
  <?php endforeach; ?>
 </table>

</body>
</html>