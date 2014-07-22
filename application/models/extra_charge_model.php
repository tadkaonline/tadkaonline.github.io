<?php

class Extra_charge_model extends CI_Model
{

	public function search($where = NULL)
	{
		$table_name = 'extra_charges';

		if ($where == NULL) {
			$result = $this->db->get($table_name);
		} else {
			$result = $this->db->get_where($table_name, $where);
		}

		return $result;
	}

	public function add($data = NULL)
	{
		$table_name = 'extra_charges';

		if ($data == NULL) {
			return array('status' => false, 'error' => 'Required parameters missing');
		}

		$this->db->insert($table_name, $data);
	}
}
