<?php

class HomeModel extends CI_Model {

	public function getData() {
		$query = $this->db->get('formulaire');
		return $query->result();
	}

}
?>