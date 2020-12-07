<?
    class Member extends CI_Controller {       
        function __construct()                 
        {
            parent::__construct();
            $this->load->database();           
            $this->load->model("member_m");
			$this->load->helper(array("url","date"));
			$this->load->library('pagination');
			$this->load->library('upload');
        }
        public function index()                
        {
            $this->lists();                    
        }
        public function lists()
        {
			$uri_array=$this->uri->uri_to_assoc(3);
			$text1 = array_key_exists("text1",$uri_array) ? urldecode($uri_array["text1"]) : "" ;

			if ($text1=="") 
			    $base_url = "/member/lists/page";
			else 
			    $base_url = "/member/lists/text1/$text1/page";

			$page_segment = substr_count( substr($base_url,0,strpos($base_url,"page")) , "/" )+1;

			$base_url = "/~team13".$base_url;

			$config["per_page"]	 = 5;
			$config["total_rows"] = $this->member_m->rowcount($text1);
			$config["uri_segment"] = $page_segment;
			$config["base_url"]	 = $base_url;
			$this->pagination->initialize($config);
			$data["page"]=$this->uri->segment($page_segment,0);
			$data["pagination"] = $this->pagination->create_links();
	
			$start=$data["page"];
			$limit=$config["per_page"];
			$data["list"]=$this->member_m->getlist($text1,$start,$limit);

			$data["text1"]=$text1;
            $data["list"] = $this->member_m->getlist($text1, $start, $limit); 

            $this->load->view("main_header");           
            $this->load->view("member_list",$data);     
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
			$data["row"]=$this->member_m->getrow($no);

			$this->load->view("main_header");
            $this->load->view("member_view",$data);
            $this->load->view("main_footer");
		}

		public function view_on_main()
		{
		    $uri_array=$this->uri->uri_to_assoc(3);
		    $no	= array_key_exists("no",$uri_array) ? $uri_array["no"] : "" ;

			$data["row"]=$this->member_m->getrow($no);

			$this->load->view("header");
            $this->load->view("mypage",$data);
           
		}

		public function del()
		{
			$no=$this->uri->segment(4);
			$this->member_m->deleterow($no);
		  	$uri_array=$this->uri->uri_to_assoc(3);
		    $no=array_key_exists("no",$uri_array) ? $uri_array["no"] : "" ;
		    $text1=array_key_exists("text1",$uri_array) ? "/text1/" . urldecode($uri_array["text1"]) : "";
			$page = array_key_exists("page", $uri_array) ?  "/page/" . urldecode($uri_array["page"]) : 0 ;		

			redirect("/~team13/member/lists" . $text1 . $page); 
		}

		public function add()
		{
			$this->load->library("form_validation");

		    $this->form_validation->set_rules("name","이름","required|max_length[20]");
		    $this->form_validation->set_rules("arr_time","출발일","required");
			$this->form_validation->set_rules("dep_time","도착일","required");

		if ($this->form_validation->run()==FALSE) // 목록화면의 추가버튼 클릭한 경우
		{
			$data["list"] = $this->member_m->getlist_co();

			$this->load->view("main_header");
			$this->load->view("member_add", $data);    // 입력화면 표시
			$this->load->view("main_footer");
		}
		else              // 입력화면의 저장버튼 클릭한 경우
		{
			$data=array(
				'name' => $this->input->post("name",true),
				'country_no' => $this->input->post("country_name",true),
				'arr_time' => $this->input->post("arr_time",true),
				'dep_time' => $this->input->post("dep_time",true),
				'bigo' => $this->input->post("bigo",true)
			);

			$picname=$this->call_upload();
			if($picname) 
			{
				$data["pic"]=$picname;
			}
			else{ $data["pic"]="안들어갔따"; }

			$result = $this->member_m->insertrow($data); 
			$page = array_key_exists("page",$uri_array) ? "/page/" . urldecode($uri_array["page"]) : "" ;
			redirect("/~team13/member/lists/" . $text1 . $page); 		
//			redirect("/~team13/package_as/lists/");
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

		    $this->form_validation->set_rules("name","이름","required|max_length[40]");

		    if ($this->form_validation->run()==FALSE)
		    {
				$data["list"] = $this->member_m->getlist_co();

		        $this->load->view("main_header");
		        $data["row"]=$this->member_m->getrow($no);
		        $this->load->view("member_edit",$data);
		        $this->load->view("main_footer");
		    }
		    else
		    {
		      
		       	$data=array(
				'name' => $this->input->post("name",true),
				'uid' => $this->input->post("ID",true),
				'passwd' => $this->input->post("pw",true),
				'phone' => $this->input->post("phone",true),
					'rank' => $this->input->post("rank",true),
					
			);
		
		        $result = $this->member_m->updaterow($data, $no); 
			   	
				redirect("/~team13/member/lists/");
		    }
		}

		public function edit_on_main()
		{
			
			$no=$this->uri->segment(4);	

			$uri_array=$this->uri->uri_to_assoc(3);
		    $no=array_key_exists("no",$uri_array) ? $uri_array["no"] : "" ;

		       	$data=array(
				'name' => $this->input->post("name",true),
				'uid' => $this->input->post("ID",true),
				'passwd' => $this->input->post("pw",true),
				'phone' => $this->input->post("phone",true),
					'rank' => $this->input->post("rank",true),					
			);
		
		        $result = $this->member_m->updaterow($data, $no); 
			   	
				redirect("/~team13/member/edit_done/");
		    
		}

		public function edit_done()
		{
			$this->load->view("header");
            $this->load->view("edit_done");
            $this->load->view("footer");
		}

		public function call_upload()
		{
	    $config['upload_path']	= './my/img';
	    $config['allowed_types']	= 'gif|jpg|png'; 
	    $config['overwrite']	= TRUE; 
	    $this->upload->initialize($config); 

	    if (!$this->upload->do_upload('pic')) 
	        $picname="";
	    else
	        $picname=$this->upload->data("file_name");

	    return $picname;
	}



}
?>