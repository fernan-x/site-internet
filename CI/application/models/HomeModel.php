<?php

class HomeModel extends CI_Model {

	public function getData() {
		//On récupère tous le contenu de la base de donnée que l'on met dans un tableau
		$query = $this->db->get('formulaire');
		//On retourne le tableau
		return $query->result();
	}

}
?>