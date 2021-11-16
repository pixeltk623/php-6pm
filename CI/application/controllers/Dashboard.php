<?php 
    
    class Dashboard extends CI_Controller {

    	public function __construct() {
    		parent::__construct();
    		$this->load->model('Employee_Model');
    	}
        
        public function index() {
            $this->load->view('admin/dashboard');
        }


        public function add_emp() {
        	$this->load->view('admin/add_emp');
        }

        public function manage_emp() {

        	$data['data'] = $this->Employee_Model->getAllData();

        	// echo "<pre>";

        	// print_r($data);

        	// die;

        	$this->load->view('admin/manage_emp', $data);
        }

        public function store() {

        	$data = array(
      			"name" => $this->input->post("name"),
      			"email" => $this->input->post("email"),
      			"mobile" => $this->input->post("mobile"),
      			"gender" => $this->input->post("gender")
      		);


      		$this->Employee_Model->InsertData($data);
      		redirect(base_url('Dashboard/manage_emp'));

        }

        public function delete($id) {
        	$data =  array('id' => $id);

        	$this->Employee_Model->DataDelete($data);

        	redirect(base_url('Dashboard/manage_emp'));
        }

        public function edit($id) {
        	$query = $this->db->get_where('employee', array('id' => $id));

			$data['data'] = $query->result();

			// echo "<pre>";

			// print_r($data);
			// die;
			return $this->load->view('admin/edit_emp', $data);
        }

        public function update($id) {
        	$data = array(
      			"name" => $this->input->post("name"),
      			"email" => $this->input->post("email"),
      			"mobile" => $this->input->post("mobile"),
      			"gender" => $this->input->post("gender")
      		);

      		$this->db->where('id', $id);
    		$data = $this->db->update('employee', $data);

    		redirect(base_url('Dashboard/manage_emp'));
        }
    }
    
?>