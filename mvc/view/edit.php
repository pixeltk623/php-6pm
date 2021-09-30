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
  <a href="http://localhost/php-6pm/mvc/" class="btn btn-warning mb-2">Back To Home</a>
  <?php 

            if (isset($message)) {
               ?>
               <div class="alert alert-dismissible <?php echo $message['class']; ?>">
                   <?php echo $message['message'] ?>
                 
               </div>
               <?php
            }

        ?>
  <form method="post" action="update?id=<?php echo $result->id; ?>">
    <div class="form-group">
      <label>Name</label>
      <input type="text" name="name" class="form-control" value="<?php echo $result->name; ?>">
    </div>
    <div class="form-group">
      <label>Email</label>
      <input type="email" name="email" class="form-control" value="<?php echo $result->email; ?>">
    </div>
    <div class="form-group">
      <label>Gender</label>
      <div class="form-check">
      <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="Male" <?php echo ($result->gender=='Male') ? 'checked' : '' ?> >
      <label class="form-check-label" for="exampleRadios1">
        Male
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="Feamle" <?php echo ($result->gender=='Feamle') ? 'checked' : '' ?>>
      <label class="form-check-label" for="exampleRadios2">
        Female
      </label>
    </div>
    </div>
    <input type="submit" name="submit"  value="Update" class="btn btn-primary">
  </form>

</div>

</body>
</html>
