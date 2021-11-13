<?php 
    
    class User extends CI_Controller {
        
        public function index() {
            echo "Hello";
        }

        public function home() {

           // echo "Hello";

            echo base_url("store");

            die;
            $this->load->view('home');
        }

        public function store() {
            $data = $this->input->post();

            echo "<pre>";

            print_r($data);

            print_r($this->input->get());

            die;

            if(isset($_POST['submit'])) {
                echo $name = $_POST['name'];
            }
        }

    }
    
?>