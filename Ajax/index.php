<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Hello, world!</title>
  </head>
  <body>

    <div class="container mt-4">
       


        <h1 class="text-center text-primary">Crud In Ajax</h1>

         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
      Add New User
    </button>

        <br><br>
        <div id="res">
             
        </div>
    </div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" id="name" class="form-control">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" id="email" class="form-control">
            </div>
            <div class="form-group">
                <label>Gender</label><br>
                <input type="radio" name="gender" value="Male"> Male
                <input type="radio" name="gender" value="Female"> Female
            </div>
            <input type="submit" name="submit" class="btn btn-primary formSubmit">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal Edit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" id="nameE" class="form-control">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" id="emailE" class="form-control">
            </div>
            <div class="form-group">
                <label>Gender</label><br>
                <input type="radio" name="genderE" value="Male"> Male
                <input type="radio" name="genderE" value="Female"> Female
            </div>
            <input type="submit" name="submit" class="btn btn-primary formSubmit">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>

    <script type="text/javascript">
        
        $(document).ready(function(){

            getAllData();


            $(document).on("click", ".formSubmit", function(){
                
                var nameOfuser = $("#name").val()
                var email = $("#email").val()
                var gender = $('[name="gender"]').val();

                data = {name: nameOfuser, email : email, gender : gender}

                //console.log(nameOfuser + email + gender);

                  $.ajax({
                    type: "POST",
                    url: "insert.php",
                    data : data,
                    success: function (data) {
                      if (data==1) {
                        alert('data Inserted')
                        $("#name").val("")
                        $("#email").val("")

                        console.log($('[name="gender"]')[0].checked=false);
                        console.log($('[name="gender"]')[1].checked=false);
                        //$('[name="gender"]').val("");

                        $("#exampleModal").modal("hide");

                        getAllData();
                      } 
                    }


                    });


                return false;
            });

            function getAllData() {
                $.ajax({
                    type: "GET",
                    url: "fetch.php",
                    success: function (data) {

                        var finalData = JSON.parse(data);

                        console.log(finalData);
                        var html = '';
                        html += '<table class="table table-bordered">';
                        html +=  '<thead>';
                        html +=    '<tr>';
                        html +=      '<th scope="col">#</th>';
                        html +=      '<th scope="col">Name</th>';
                        html +=      '<th scope="col">Email</th>';
                        html +=      '<th scope="col">Action</th>';
                        html +=    '</tr>';
                        html +=  '</thead>';
                        html +=  '<tbody>';
                        for(var i = 0; i<finalData.length; i++) {
                            html +=    '<tr>';
                            html +=      '<th scope="row">'+(i+1)+'</th>';
                            html +=      '<td>'+finalData[i]['name']+'</td>';
                            html +=      '<td>'+finalData[i]['email']+'</td>';
                            html +=      '<td><button type="button" class="btn btn-primary">Show</button> <button type="button" class="btn btn-secondary edit" value="'+finalData[i]['student_id']+'">Edit</button> <button type="button" class="btn btn-danger delete" value="'+finalData[i]['student_id']+'">Delete</button></td>';
                            html +=    '</tr>';
                        }

                        html +=   '</tbody>';
                        html += '</table>';

                        $("#res").html(html);
                    }
                });
            }


            $(document).on("click",".delete", function(){
               var did = $(this).val();
               data = {id: did}
                $.ajax({
                    type: "POST",
                    url: "delete.php",
                    data : data,
                    success: function (data) {
                      if (data==1) {
                        alert('User Deleted')

                        getAllData();
                      } 
                    }
                });

            });

            $(document).on("click",".edit", function(){
                $("#exampleModalEdit").modal("show");
                var eid = $(this).val()

                 $.ajax({
                    type: "POST",
                    url: "get.php",
                    data : {eid: eid},
                    success: function (data) {
                      var finalData = JSON.parse(data);

                    $("#nameE").val(finalData.name)
                    $("#emailE").val(finalData.email)

                    console.log('');
                    $('[name="genderE"]')[0].checked=true
                      console.log(finalData);
                
                    }

                });

                // console.log(getOneRecordById(eid))
                //await alldata.json();
            });


            // async function getOneRecordById(data) {
                
            //     var finalDataNew = []

            //    await $.ajax({
            //         type: "POST",
            //         url: "get.php",
            //         data : {eid: data},
            //         success: function (data) {
            //           var finalData = JSON.parse(data);

            //           finalDataNew.push(finalData)
            //         }

            //     });

            //     console.log(finalDataNew[0]);
                
            // return await finalDataNew.json();
            // }
        });

    </script>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html>