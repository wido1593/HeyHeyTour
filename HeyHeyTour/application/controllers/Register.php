<?
class Register extends CI_Controller {

	 function __construct()                 
        {
            parent::__construct();
            $this->load->database();           
            $this->load->model("register_m");	
        }

    public function index()
    {
		$this->load->view("header");
		$this->load->view("register");
		//$this->load->view("footer");

    }

	public function add()
		{		

			$data=array(
				'name' => $this->input->post("name",true),
				'uid' => $this->input->post("ID",true),
				'passwd' => $this->input->post("PW",true),
				'phone' => $this->input->post("phone",true),
			);

			$result = $this->register_m->insertrow($data); 
			
			$this->load->view("header");
		$this->load->view("regist_done");		
//			redirect("/~team13/package_as/lists/");
		}
}
?>