<?php
    include_once 'config.php';
    if (isset($_GET['sid'])) {

        if ($_GET['sid']=='') {
            header("Location: 404.php");
        } else {
            $sid =  $_GET['sid'];
            $query = "SELECT * FROM `users` WHERE id = ".$sid;
            $result = mysqli_query($conn, $query);

            $dataOfUser = mysqli_fetch_object($result);
        }
        
    } else {
        header("Location: 404.php");
    }

    // echo "<pre>";
    // print_r($dataOfUser);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <div class="container">
        <h1 class="text-center text-primary">Crud In Core PHP</h1>
        <a href="index.php" class="btn btn-warning mb-3">Back To Home</a>
        <table class="table table-bordered">
            <tr>
                <th>Name</th>
                <td><?php echo $dataOfUser->name; ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo $dataOfUser->email; ?></td>
            </tr>
            <tr>
                <th>Gender</th>
                <td><?php echo $dataOfUser->gender; ?></td>
            </tr>
            <tr>
                <th>City</th>
                <td><?php echo $dataOfUser->city; ?></td>
            </tr>
            <tr>
                <th>DOB</th>
                <td><?php echo $dataOfUser->dob; ?></td>
            </tr>
            <tr>
                <th>Registration Date</th>
                <td><?php echo $dataOfUser->created_at; ?></td>
            </tr>
            <tr>
                <th>Updation Date</th>
                <td><?php echo $dataOfUser->updated_at; ?></td>
            </tr>
        </table>
    </div>
</body>
</html>
