<?php
    include_once 'config.php';
    date_default_timezone_set("Asia/Kolkata");
    if (isset($_POST['Update'])) {
       
       $name = $_POST['name'];
       $sid = $_POST['sid'];
       $email = $_POST['email'];

        if (isset($_POST['gender'])) {
            $gender = $_POST['gender'];
        } else {
            $gender = "";
        }

        $city = $_POST['city'];
        $dob = $_POST['dob'];


        $query = "UPDATE `users` SET `name`='$name',`email`='$email',`gender`='$gender',`city`='$city',`dob`='$dob',`updated_at`='".date("Y-m-d H:i:s")."' WHERE id = ".$sid;
        
        $result =  mysqli_query($conn,$query);

        
        if ($result) {
            $message  = array("message" => "User Updated", "class" => "alert-success");
        } else {
            $message  = array("message" => "Something Error", "class" => "alert-danger");
        }
    }

    if (isset($_GET['sid'])) {

        if ($_GET['sid']=='') {
            header("Location: 404.php");
        } else {
            $sid =  $_GET['sid'];
            $query = "SELECT * FROM `users` WHERE id = ".$sid;
            $result = mysqli_query($conn, $query);

            $dataOfUser = mysqli_fetch_object($result);
           

            $hobbyNew = explode(",", $dataOfUser->hobby);

            
        }
        
    } else {
        header("Location: 404.php");
    }
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
        <a href="index.php" class="btn btn-warning mb-3">Back To Home</a>
        <?php 

            if (isset($message)) {
               ?>
               <div class="alert alert-dismissible <?php echo $message['class']; ?>">
                   <?php echo $message['message'] ?>
                   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
               </div>
               <?php
            }

        ?>
        <form method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $dataOfUser->name; ?>" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" value="<?php echo $dataOfUser->email; ?>" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Gender</label>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="Male" <?php echo ($dataOfUser->gender=='Male') ? 'checked' : ''; ?>>
                  <label class="form-check-label" for="flexRadioDefault1">
                    Male
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" value="Female" <?php echo ($dataOfUser->gender=='Female') ? 'checked' : ''; ?>>
                  <label class="form-check-label" for="flexRadioDefault2">
                    Female
                  </label>
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Hobby</label>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Cricket" name="hobby[]" id="flexCheckDefault" <?php echo in_array("Cricket", $hobbyNew) ? 'checked' : ''; ?>>
                <label class="form-check-label" for="flexCheckDefault">
                   Cricket
                </label>
            </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Football" name="hobby[]" id="flexCheckChecked" <?php echo in_array("Football", $hobbyNew) ? 'checked' : ''; ?>>
                    <label class="form-check-label" for="flexCheckChecked">
                    Football
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Tenis" name="hobby[]" id="flexCheckChecked" <?php echo in_array("Tenis", $hobbyNew) ? 'checked' : ''; ?>>
                    <label class="form-check-label" for="flexCheckChecked">
                    Tenis
                    </label>
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">City</label>
                <select name="city" class="form-control" required>
                    <option value="">Select</option>
                    <option value="Vadodara" <?php echo ($dataOfUser->city=='Vadodara') ? 'selected' : ''; ?>>Vadodara</option>
                    <option value="Anand" <?php echo ($dataOfUser->city=='Anand') ? 'selected' : ''; ?>>Anand</option>
                    <option value="Surat" <?php echo ($dataOfUser->city=='Surat') ? 'selected' : ''; ?>>Surat</option>
                    <option value="Ahmedabad" <?php echo ($dataOfUser->city=='Ahmedabad') ? 'selected' : ''; ?>>Ahmedabad</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">DOB</label>
                <input type="date" class="form-control" name="dob" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $dataOfUser->dob; ?>" required>
            </div>
            <div class="mb-3">
              <label for="formFile" class="form-label">Profile Pic</label>
              <input class="form-control" type="file" name="ProfilePic" id="formFile">
            </div>
            <input type="hidden" name="sid" value="<?php echo $dataOfUser->id; ?>">
            <input type="submit" name="Update" value="Update" class="btn btn-primary">
        </form>
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