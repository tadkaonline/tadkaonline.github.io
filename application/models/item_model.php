<?php

class Item_model extends CI_Model {


	public function search($where = NULL)
	{
		$table_name = 'items';

		if($where == NULL)
		{
			$result = $this->db->get($table_name);
		}
		else
		{
			$result = $this->db->get_where($table_name, $where);
		}

		return $result;
	}

	public function add($data = NULL)
	{
		$table_name = 'items';

		if($data == NULL)
		{
			return array('status' => false, 'error' => 'Required parameters missing');
		}

		$this->db->insert($table_name, $data);
	}

	public function searchJoin($where=NULL)
	{
		if($where == NULL)
		{
			return array('status' => false, 'error' => 'Required parameters missing');
		}

		$table_name1 = 'items';
		$table_name2 = 'extra_charges';
		$select = 'name, room_no, hostel, phone, time, comments, ip, full_charge, half_charge, chapati_charge';

		$this->db->select($select);
		$this->db->from($table_name1);
		$this->db->join($table_name2, 'items.id = extra_charges.item_id');
		$this->db->where($where);
		$this->db->order_by("time", "asc");

		$result = $this->db->get();

		return $result;

	}
}


?>