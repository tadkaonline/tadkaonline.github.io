<?php

class Add extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('item_model');
		$this->load->model('extra_charge_model');
	}

	public function index()
	{
		$config = array( array(
				'field' => 'name',
				'label' => 'Name',
				'rules' => 'required|max_length[25]|xss_clean'
			), array(
				'field' => 'room',
				'label' => 'Room Number',
				'rules' => 'required|xss_clean'
			), array(
				'field' => 'phone',
				'label' => 'Phone Number',
				'rules' => 'required|integer|max_length[11]|xss_clean'
			), array(
				'field' => 'time',
				'label' => 'Time',
				'rules' => 'required|integer|xss_clean'
			), array(
				'field' => 'full_charge',
				'label' => 'Extra charge - Full',
				'rules' => 'required|integer|xss_clean'
			), array(
				'field' => 'half_charge',
				'label' => 'Extra charge - Half',
				'rules' => 'required|integer|xss_clean'
			), array(
				'field' => 'chapati_charge',
				'label' => 'Extra charge - Chapati',
				'rules' => 'required|integer|xss_clean'
			)
		);

		$this->form_validation->set_rules($config);

		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('add_item');
		}
		else
		{
			$name = $this->input->post('name');
			$room = $this->input->post('room');
			$hostel = $this->input->post('hostel');
			$phone = $this->input->post('phone');
			$time = $this->input->post('time');
			$full = $this->input->post('full_charge');
			$half = $this->input->post('half_charge');
			$chapati = $this->input->post('chapati_charge');
			$comment = $this->input->post('comments');
			$ip = $this->input->ip_address();

			$exactTime = time() + (60 * 60 * $time);

			$dataItem = array('name' => $name, 'room_no' => $room,
								'hostel' => $hostel, 'phone' => $phone,
								'time' => $exactTime, 'comments' => $comment, 'ip' => $ip);

			$this->item_model->add($dataItem);
			$id = $this->db->insert_id();

			$dataExtraCharge = array('item_id' => $id, 'full_charge' => $full,
									'half_charge' => $half, 'chapati_charge' => $chapati);

			$this->extra_charge_model->add($dataExtraCharge);
			redirect(site_url(), 'refresh');
		}
	}
}

?>