<?php 

	class Employee_Model extends CI_Model
	{
		
		function __construct()
		{
			
		}


		public function InsertData($data) {
			$this->db->insert('employee', $data);
			
		}


		public function getAllData() {
			$query = $this->db->get('employee');
            return $query->result();
		}

		public function DataDelete($data) {
			$data = $this->db->delete('employee', $data);
		}
	}

?>