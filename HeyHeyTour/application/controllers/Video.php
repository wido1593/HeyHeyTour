 <?
    class Video extends CI_Controller{
        
       public function index()
    {
		$this->load->view("header");
		$this->load->view("video");
		$this->load->view("footer");
    }
}
?>
 