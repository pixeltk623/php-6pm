<?php
include_once 'model/CrudModel.php';
class CrudController extends CrudModel
{

  public function __construct() {
    parent::__construct();

    if (isset($_SERVER['PATH_INFO'])) {
      //echo $_SERVER['PATH_INFO'];

      switch ($_SERVER['PATH_INFO']) {
        case '/add':

            if (isset($_POST['submit'])) {
                
                $data = array(
                    "name" => $_POST['name'],
                    "email" => $_POST['email'],
                    "gender" => isset($_POST['gender']) ? $_POST['gender'] : ''
                );

                $result = $this->insertData('users', $data);
                if ($result) {
                    $message  = array("message" => "User Registration Done", "class" => "alert-success");
                } else {
                    $message  = array("message" => "Something Error", "class" => "alert-danger");
                }

            }

          include_once 'view/add.php';
          break;

          case '/delete':
            if (isset($_GET['did'])) {
                 $did = $_GET['did'];

                 $result = $this->deleteData('users',$did);
                  if ($result) {
                        header("Location: http://localhost/php-6pm/mvc/");
                    }
            }
               
              break;

            case '/edit':
               if (isset($_GET['eid'])) {
                 $eid = $_GET['eid'];


                 $result = $this->editData('users',$eid);

                  include_once 'view/edit.php';

            }
                break;

            case '/update':
                if (isset($_GET['id'])) {
                 $id = $_GET['id'];
                  $data = array(
                    "name" => $_POST['name'],
                    "email" => $_POST['email'],
                    "gender" => isset($_POST['gender']) ? $_POST['gender'] : ''
                );



                 $result = $this->updateData('users',$id, $data);
                if ($result) {
                        header("Location: http://localhost/php-6pm/mvc/");
                    }

                 // include_once 'view/edit.php';

            }
                break;
        default:
          // code...
          break;
      }
    } else {

      $result = $this->getAllData('users');
      include_once 'view/show.php';
    }

    // echo "<pre>";
    //
    // print_r($this->getAllData());


  }
}

$object = new CrudController();



?>
