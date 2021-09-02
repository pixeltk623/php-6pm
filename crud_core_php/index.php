<?php 
    
    require_once 'config.php';

    $query = "SELECT * FROM `users`";

    $result =  mysqli_query($conn,$query);

    // echo $data = "2021-09-02 15:50:20";

    // echo "<br>";

    // echo date("Y-m-d", strtotime($data));



?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <h1 class="text-center text-primary">Crud In Core PHP</h1>
        <a href="create.php" class="btn btn-primary mb-2">Add New </a>
        <table class="table table-bordered table-sm">
            <tr>
                <th>Sr.No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>City</th>
                <th>DOB</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Action</th>
            </tr>
            <?php 
                $slNo = 1;
                while ($response = mysqli_fetch_object($result)) {
            ?>
            <tr>
                <td><?php echo $slNo++; ?></td>
                <td><?php echo $response->name; ?></td>
                <td><?php echo $response->email; ?></td>
                <td><?php echo $response->gender; ?></td>
                <td><?php echo $response->city; ?></td>
                <td><?php echo $response->dob; ?></td>
                <td><?php echo date("Y-m-d", strtotime($response->created_at)); ?></td>
                <td><?php echo date("Y-m-d", strtotime($response->updated_at)); ?></td>
                <td>
                    <a href="" class="btn btn-success">Show</a>
                    <a href="" class="btn btn-secondary">Edit</a>
                    <a href="" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php 
                }
            ?>
        </table>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
  </body>
</html>