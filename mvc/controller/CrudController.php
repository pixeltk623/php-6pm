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
          include_once 'view/add.php';
          break;

        default:
          // code...
          break;
      }
    } else {
      $result = $this->getAllData();
      include_once 'view/show.php';
    }

    // echo "<pre>";
    //
    // print_r($this->getAllData());


  }
}

$object = new CrudController();



?>
