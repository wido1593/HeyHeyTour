<?
class Mypage extends CI_Controller {
    public function index()
    {
		$this->load->view("header");
		$this->load->view("mypage");
		//$this->load->view("footer");

    }
}
?>