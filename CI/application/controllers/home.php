<?php
	class Home extends CI_Controller {
		public function index() {
			$this->load->view('acceuil');
		}

		public function liste() {
			$this->load->model('HomeModel');
			$data['records'] = $this->HomeModel->getData();
			$this->load->view('template', $data);			
		}
		public function formulaire() {
            $this->load->library('form_validation');
			$this->load->helper('form');

			$this->form_validation->set_rules('nom', 'Nom', 'required');
			$this->form_validation->set_rules('prenom', 'Prenom', 'required');
			$this->form_validation->set_rules('adresse', 'Adresse', 'required');
			$this->form_validation->set_rules('mail', 'Email', 'required|valid_email|is_unique[formulaire.mail]');

            if ($this->form_validation->run() == FALSE)
            {
                $this->load->view('formulaire');
            }
            else
            {
            	echo "<script>
				alert('Votre inscription a bien été complétée.');
				</script>" ;
				$t_data = array('nom' => $this->input->post('nom'), 'prenom' => $this->input->post('prenom'), 'adresse' => $this->input->post('adresse'), 'mail' => $this->input->post('mail'));
				$this->db->insert('formulaire', $t_data);
				$this->load->view('acceuil');
            }
		}
	}
?>