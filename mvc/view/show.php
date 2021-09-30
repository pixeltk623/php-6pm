<?php

  // echo "<pre>";
  //
  // print_r($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Bordered Table</h2>
  <p>The .table-bordered class adds borders on all sides of the table and the cells:</p>
  <a href="add" class="btn btn-primary mb-2">Add New</a>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Sr.No</th>
        <th>Name</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
          foreach ($result as $key => $value) {
      ?>

      <tr>
        <td><?php echo ++$key; ?></td>
        <td><?php echo $value->name; ?></td>
        <td><?php echo $value->email; ?></td>
        <td><?php echo $value->gender; ?></td>
        <td>
          <a href="button"  class="btn btn-warning">Show</a>
          <a href="edit?eid=<?php echo $value->id; ?>"  class="btn btn-primary">Edit</a>
          <a href="delete?did=<?php echo $value->id; ?>"  class="btn btn-danger">Delete</a>
        </td>
      </tr>
      <?php
        }
      ?>
    </tbody>
  </table>
</div>

</body>
</html>
