<?php
class Welcome extends CI_Controller {
	public function index(){
		$this->load->view('welcome_message');
	}
	public function AfficherNumConf(){
		$this->load->model("Model_NumConf");
		$data['lesNumConf'] = $this->Model_NumConf->getAllNumConf();
		$this->load->view('welcome_message');
	}
	function AfficherConferences()
    {
        $TITRE = $_GET['TITRE'];
        $this->load->model('Model_Conferences');
        $data['lesConferences'] = $this->Model_Conferences->getConferences($TITRE);
        $this->load->view('AfficherConferences', $data);
    }

	
}
?>