<?
class Main extends CI_Controller {
    public function index()
    {
		$this->load->view("header");
		$this->load->view("index");
		$this->load->view("footer");
    }
}
?>