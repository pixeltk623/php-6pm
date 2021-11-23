<?php 
    
	class Shopping extends CI_Controller {

		public function __construct() {
			parent::__construct();
			$this->load->library('cart');
			$this->load->helper('form');
			$this->load->library('calendar');

		}

		public function index() {
			// echo "<pre>";
			// print_r($this->cart);

			$data = array(
		        array(
		                'id'      => 'sku_123ABC',
		                'qty'     => 1,
		                'price'   => 39.95,
		                'name'    => 'T-Shirt',
		                'options' => array('Size' => 'L', 'Color' => 'Red')
		        ),
		        array(
		                'id'      => 'sku_567ZYX',
		                'qty'     => 1,
		                'price'   => 9.95,
		                'name'    => 'Coffee Mug'
		        ),
		        array(
		                'id'      => 'sku_965QRS',
		                'qty'     => 1,
		                'price'   => 29.95,
		                'name'    => 'Shot Glass'
		        )
			);

			$this->cart->insert($data);

			// $data = array(
			//         'id'      => 'sku_123ABC',
			//         'qty'     => 1,
			//         'price'   => 39.95,
			//         'name'    => 'T-Shirt',
			//         'options' => array('Size' => 'L', 'Color' => 'Red'),
			//         'coupon'  => 'XMAS-50OFF'
			// 	);
			// $this->cart->insert($data);

			echo "<pre>";

			print_r($this->cart);
		}

		public function cart() {

			return $this->load->view('cart');
		}

		public function update() {
			
			$data = $_POST;

			$this->cart->update($data);

		}

		public function destroyCart() {
			$this->cart->destroy();
		}

		public function calendar() {
			// echo "<pre>";

			// print_r($this->calendar);
			//echo $this->calendar->generate(1997,1);

			// $data = array(
			//         3  => 'http://example.com/news/article/2006/06/03/',
			//         7  => 'http://example.com/news/article/2006/06/07/',
			//         13 => 'http://example.com/news/article/2006/06/13/',
			//         26 => 'http://example.com/news/article/2006/06/26/'
			// );

			// echo $this->calendar->generate(2006, 6, $data);


			$prefs = array(
			        'start_day'    => 'saturday',
			        'month_type'   => 'long',
			        'day_type'     => 'short'
			);

			$this->load->library('calendar', $prefs);

			echo $this->calendar->generate();
		}
	}

?>