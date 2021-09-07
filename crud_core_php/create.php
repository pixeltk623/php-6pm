<?php
    include_once 'config.php';

    // echo "<pre>";
    // print_r($conn);

    if (isset($_POST['submit'])) {
       
       $name = $_POST['name'];
       $email = $_POST['email'];

        if (isset($_POST['gender'])) {
            $gender = $_POST['gender'];
        } else {
            $gender = "";
        }

        $city = $_POST['city'];
        $dob = $_POST['dob'];

        if (isset($_POST['hobby'])) {
            $hobby = implode(",", $_POST['hobby']);
        } else {
            $hobby = "";
        }

        //echo $profilePic = $_POST['ProfilePic'];
        $profilePic = $_FILES['ProfilePic'];
        $file_name = $profilePic['name'];

        // $file_name = time().".".$ext;
        

        // move_uploaded_file($profilePic['tmp_name'], "upload/".$file_name);

        // if(file_exists("upload/".$profilePic['name'])) {
        //     echo "File is Present";
        // } else {
        //     echo "Not Present";
        // }
        

        // die;

        // move_uploaded_file($profilePic['tmp_name'], "upload/".$profilePic['name']);

        // die;

        // echo $ext = pathinfo($profilePic['name'] , PATHINFO_EXTENSION);

        // if($ext=='jpg' || $ext == 'JPG' || $ext=='PNG' || $ext == 'png') {
        //     echo "File is Valid";
        // } else {
        //     echo "Invalid";
        // }

        // echo "<pre>";

        // print_r($profilePic);
        // die;


        // $sizeInKb = round($profilePic['size']/1000);

        // if ($sizeInKb>=50) {
        //     if ($sizeInKb>=50 && $sizeInKb<=500) {
        //         echo "File is Good to go";
        //     } else {
        //         echo "File is too large";
        //     }
        // } else {
        //     echo "File is too short";
        // }

        // if ($sizeInKb>=50 && $sizeInKb<=500) {
        //     echo "File is Good to go";
        // } else {
        //     echo "File is too large";
        // }

       


       $query = "INSERT INTO users (`name`, `email`, `gender`, `hobby`, `city`, `dob`, `profile_pic`) VALUES ('$name','$email','$gender', '$hobby', '$city','$dob','$file_name')";
    
        $result =  mysqli_query($conn,$query);

        
        if ($result) {

            move_uploaded_file($profilePic['tmp_name'], "upload/".$profilePic['name']);

            $message  = array("message" => "User Registration Done", "class" => "alert-success");
        } else {
            $message  = array("message" => "Something Error", "class" => "alert-danger");
        }
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <!--  meta tags -->
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
        <form method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" >
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" >
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Gender</label>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="Male">
                  <label class="form-check-label" for="flexRadioDefault1">
                    Male
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" value="Female">
                  <label class="form-check-label" for="flexRadioDefault2">
                    Female
                  </label>
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Hobby</label>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Cricket" name="hobby[]" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                   Cricket
                </label>
            </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Football" name="hobby[]" id="flexCheckChecked">
                    <label class="form-check-label" for="flexCheckChecked">
                    Football
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Tenis" name="hobby[]" id="flexCheckChecked">
                    <label class="form-check-label" for="flexCheckChecked">
                    Tenis
                    </label>
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">City</label>
                <select name="city" class="form-control" >
                    <option value="">Select</option>
                    <option value="Vadodara">Vadodara</option>
                    <option value="Anand">Anand</option>
                    <option value="Surat">Surat</option>
                    <option value="Ahmedabad">Ahmedabad</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">DOB</label>
                <input type="date" class="form-control" name="dob" id="exampleInputEmail1" aria-describedby="emailHelp" >
            </div>
            <div class="mb-3">
              <label for="formFile" class="form-label">Profile Pic</label>
              <input class="form-control" type="file" name="ProfilePic" id="formFile">
            </div>
            <input type="submit" name="submit" class="btn btn-primary">
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