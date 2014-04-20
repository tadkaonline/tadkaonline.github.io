<?php

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('item_model');
		$this->load->model('extra_charge_model');
	}

	public function index()
	{
		$timeNow = time();
		$where = array('time >' => $timeNow);

		$result = $this->item_model->searchJoin($where);

		if($result->num_rows != 0)
		{
			$result = $result->result_array();

			$data['result'] = $result;
			$this->load->view('home', $data);
		}

		else
		{
			$data['error'] = 'No one is going tadka !';
			$this->load->view('home', $data);
		}
	}
}

?>