<?
    class Package_asia extends CI_Controller {       
        function __construct()                 
        {
            parent::__construct();
            $this->load->database();           
            $this->load->model("package_m");
			$this->load->helper(array("url","date"));
			$this->load->library('pagination');
        }
        public function index()                
        {
			if($this->session->userdata('rank')!=1) redirect("/");

            $this->lists();                    
        }
        public function lists()
        {
			$uri_array=$this->uri->uri_to_assoc(3);
			$text1 = array_key_exists("text1",$uri_array) ? urldecode($uri_array["text1"]) : "" ;

			if ($text1=="") 
			    $base_url = "/package/lists/page";
			else 
			    $base_url = "/package/lists/text1/$text1/page";

			$page_segment = substr_count( substr($base_url,0,strpos($base_url,"page")) , "/" )+1;

			$base_url = "/~team13".$base_url;

			$config["per_page"]	 = 5;
			$config["total_rows"] = $this->package_m->rowcount($text1);
			$config["uri_segment"] = $page_segment;
			$config["base_url"]	 = $base_url;
			$this->pagination->initialize($config);
			$data["page"]=$this->uri->segment($page_segment,0);
			$data["pagination"] = $this->pagination->create_links();
	
			$start=$data["page"];
			$limit=$config["per_page"];
			$data["list"]=$this->package_m->getlist($text1,$start,$limit);

			$data["text1"]=$text1;
            $data["list"] = $this->package_m->getlist($text1, $start, $limit); 

            $this->load->view("main_header");           
            $this->load->view("package_list",$data);     
            $this->load->view("main_footer");           
        }
		
		public function view()
		{
		    $uri_array=$this->uri->uri_to_assoc(3);
		    $no	= array_key_exists("no",$uri_array) ? $uri_array["no"] : "" ;
		    $text1 = array_key_exists("text1",$uri_array) ? urldecode($uri_array["text1"]) : "" ;
			$page = array_key_exists("page", $uri_array) ?  urldecode($uri_array["page"]) : 0 ;


			$data["text1"]=$text1;
			$data["page"]=$page;
			$data["row"]=$this->package_m->getrow($no);

			$this->load->view("main_header");
            $this->load->view("package_view",$data);
            $this->load->view("main_footer");
	    }

		public function del()
		{
			$no=$this->uri->segment(4);
			$this->package_m->deleterow($no);
		  	$uri_array=$this->uri->uri_to_assoc(3);
		    $no=array_key_exists("no",$uri_array) ? $uri_array["no"] : "" ;
		    $text1=array_key_exists("text1",$uri_array) ? "/text1/" . urldecode($uri_array["text1"]) : "";
			$page = array_key_exists("page", $uri_array) ?  "/page/" . urldecode($uri_array["page"]) : 0 ;		

			redirect("/~team13/package/lists" . $text1 . $page); 
		}

		public function add()
		{
			$this->load->library("form_validation");

		    $this->form_validation->set_rules("name","이름","required|max_length[20]");
		    $this->form_validation->set_rules("uid","아이디","required|max_length[20]");
		    $this->form_validation->set_rules("pwd","암호","required|max_length[20]");

		if ($this->form_validation->run()==FALSE) // 목록화면의 추가버튼 클릭한 경우
		{
			$this->load->view("main_header");
			$this->load->view("package_add");    // 입력화면 표시
			$this->load->view("main_footer");
		}
		else              // 입력화면의 저장버튼 클릭한 경우
		{
			$tel1=$this->input->post("tel1",true);
			$tel2=$this->input->post("tel2",true);
			$tel3=$this->input->post("tel3",true);
			$tel =sprintf("%-3s%-4s%-4s", $tel1, $tel2, $tel3);

			$data=array(
				'name9' => $this->input->post("name",true),
				'uid9' => $this->input->post("uid",true),
				'pwd9' => $this->input->post("pwd",true),
				'tel9' => $tel,
				'rank9' => $this->input->post("rank",true)
			);
			$result = $this->package_m->insertrow($data); 
			$page = array_key_exists("page",$uri_array) ? "/page/" . urldecode($uri_array["page"]) : "" ;
			redirect("/~team13/package/lists/" . $text1 . $page); 		
//			redirect("/~team13/package/lists/");
		} 
		}

		public function edit()
		{
			
			$no=$this->uri->segment(4);	

			$uri_array=$this->uri->uri_to_assoc(3);
		    $no=array_key_exists("no",$uri_array) ? $uri_array["no"] : "" ;
		    $text1=array_key_exists("text1",$uri_array) ? "/text1/" . urldecode($uri_array["text1"]) : "";
			$page = array_key_exists("page", $uri_array) ?  "/page/" . urldecode($uri_array["page"]) : 0 ;

		    $this->load->library("form_validation");

		    $this->form_validation->set_rules("name","이름","required|max_length[100]");
			$this->form_validation->set_rules("uid","아이디","required|max_length[100]");
			$this->form_validation->set_rules("pwd","암호","required|max_length[20]");

		    if ($this->form_validation->run()==FALSE)
		    {
		        $this->load->view("main_header");
		        $data["row"]=$this->package_m->getrow($no);
		        $this->load->view("package_edit",$data);
		        $this->load->view("main_footer");
		    }
		    else
		    {
		        $tel1=$this->input->post("tel1",true);
				$tel2=$this->input->post("tel2",true);
				$tel3=$this->input->post("tel3",true);
				$tel =sprintf("%-3s%-4s%-4s", $tel1, $tel2, $tel3);


		        $data=array(
					'name9' => $this->input->post("name",true),
					'uid9' => $this->input->post("uid",true),
					'pwd9' => $this->input->post("pwd",true),
					'tel9' => $tel,
					'rank9' => $this->input->post("rank",true)
					);
		        $result = $this->package_m->updaterow($data, $no); 
				redirect("/~team13/package/lists" . $text1 . $page); 		
//				redirect("/~team13/package/lists/");
		    }
		}

}
?>