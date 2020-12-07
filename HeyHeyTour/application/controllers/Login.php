<?php
class Login extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model("login_m");//DB data 가져오는 model
		$this->load->helpers(array('url','date'));

		date_default_timezone_set("Asia/Seoul");//서울로 시간 설정
	}
	
    public function check()
    {	
		$uid=$this->input->post("uid",TRUE);
		$passwd=$this->input->post("passwd",TRUE);   

		$row=$this->login_m->getrow($uid,$passwd);
		if($row)
		{
			$data=array(
					"no"=>$row->no,
					"uid"=>$row->uid,
					"rank"=>$row->rank,
					"name"=>$row->name,

				);
			$this->session->set_userdata($data);
		}
        $this->load->view("header");
		$this->load->view("index");
		$this->load->view("footer");
    }

	public function logout()
    {	
		$data = array("uid","rank","name","no");
		$this->session->unset_userdata($data);

		$this->load->view("header");
		$this->load->view("index");
		$this->load->view("footer");
    }
}
?>
