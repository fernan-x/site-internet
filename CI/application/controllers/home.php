<?php
	class Home extends CI_Controller {
		public function index() {
			//On charge la page acceuil.php
			$this->load->view('acceuil');
		}

		public function liste() {
			//On charge le model HomeModel.php
			$this->load->model('HomeModel');
			//On met les données de la base de donnée dans un tableau
			$data['records'] = $this->HomeModel->getData();
			//On charge la page template.php en lui envoyant le tableau
			$this->load->view('template', $data);			
		}
		public function formulaire() {
            $this->load->library('form_validation');
			$this->load->helper('form');

			//On met les règles pour la validation des champs
			$this->form_validation->set_rules('nom', 'Nom', 'required');
			$this->form_validation->set_rules('prenom', 'Prenom', 'required');
			$this->form_validation->set_rules('adresse', 'Adresse', 'required');
			$this->form_validation->set_rules('mail', 'Email', 'required|valid_email|is_unique[formulaire.mail]');

			//Si une des règles n'est pas respecté, on recharge la page
            if ($this->form_validation->run() == FALSE)
            {
                $this->load->view('formulaire');
            }
            else
            {
            	//On affiche une notification
            	echo "<script>
				alert('Votre inscription a bien été complétée.');
				</script>" ;
				//On rempli la base de donnée avec ce qu'on a récupéré avec la méthode post
				$t_data = array('nom' => $this->input->post('nom'), 'prenom' => $this->input->post('prenom'), 
					'adresse' => $this->input->post('adresse'), 'mail' => $this->input->post('mail'));
				$this->db->insert('formulaire', $t_data);
				//On recharge l'acceuil.
				$this->load->view('acceuil');
            }
		}
	}
?>