<?
    class Reserve extends CI_Controller {       
        function __construct()                 
        {
            parent::__construct();
            $this->load->database();           
            $this->load->model("reserve_m");
			$this->load->helper(array("url","date"));
			$this->load->library('pagination');
			$this->load->library('upload');
        }
        public function index()                
        {
            $this->add();                    
        }
        public function lists()
        {
			$uri_array=$this->uri->uri_to_assoc(3);
			$text1 = array_key_exists("text1",$uri_array) ? urldecode($uri_array["text1"]) : "" ;

			if ($text1=="") 
			    $base_url = "/package_na/lists/page";
			else 
			    $base_url = "/package_na/lists/text1/$text1/page";

			$page_segment = substr_count( substr($base_url,0,strpos($base_url,"page")) , "/" )+1;

			$base_url = "/~team13".$base_url;

			$config["per_page"]	 = 5;
			$config["total_rows"] = $this->reserve_m->rowcount($text1);
			$config["uri_segment"] = $page_segment;
			$config["base_url"]	 = $base_url;
			$this->pagination->initialize($config);
			$data["page"]=$this->uri->segment($page_segment,0);
			$data["pagination"] = $this->pagination->create_links();
	
			$start=$data["page"];
			$limit=$config["per_page"];
			$data["list"]=$this->reserve_m->getlist($text1,$start,$limit);

			$data["text1"]=$text1;
            $data["list"] = $this->reserve_m->getlist($text1, $start, $limit); 

            $this->load->view("main_header");           
            $this->load->view("package_na_list",$data);     
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
			$data["row"]=$this->reserve_m->getrow($no);

			$this->load->view("main_header");
            $this->load->view("package_na_view",$data);
            $this->load->view("main_footer");
		}

		public function del()
		{
			$no=$this->uri->segment(4);
			$this->reserve_m->deleterow($no);
		  	$uri_array=$this->uri->uri_to_assoc(3);
		    $no=array_key_exists("no",$uri_array) ? $uri_array["no"] : "" ;
		    $text1=array_key_exists("text1",$uri_array) ? "/text1/" . urldecode($uri_array["text1"]) : "";
			$page = array_key_exists("page", $uri_array) ?  "/page/" . urldecode($uri_array["page"]) : 0 ;		

			redirect("/~team13/package_na/lists" . $text1 . $page); 
		}

		public function add()
		{
	
			$data=array(
				'package_name' => $this->input->post("package_name",true),
				'package_no' => $this->input->post("package_no",true),
				'continent' => $this->input->post("continent",true),
				'uid' => $this->input->post("uid",true),
			);			

			$result = $this->reserve_m->insertrow($data); 
			redirect("/~team13/reserve/done"); 		
//			redirect("/~team13/package_as/lists/");
		} 
		

		public function done()
		{		
			$this->load->view("header");
            $this->load->view("reserve_done");
   
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
		    $this->form_validation->set_rules("arr_time","출발일","required");
			$this->form_validation->set_rules("dep_time","도착일","required");

		    if ($this->form_validation->run()==FALSE)
		    {
				$data["list"] = $this->reserve_m->getlist_co();

		        $this->load->view("main_header");
		        $data["row"]=$this->reserve_m->getrow($no);
		        $this->load->view("package_na_edit",$data);
		        $this->load->view("main_footer");
		    }
		    else
		    {
		      
		       	$data=array(
				'name' => $this->input->post("name",true),
				'country_no' => $this->input->post("country_name",true),
				'arr_time' => $this->input->post("arr_time",true),
				'dep_time' => $this->input->post("dep_time",true),
				'bigo' => $this->input->post("bigo",true)
			);
			$picname=$this->call_upload();
			if ($picname) $data["pic"]=$picname;

		        $result = $this->reserve_m->updaterow($data, $no); 
				redirect("/~team13/package_na/lists" . $text1 . $page); 		
//				redirect("/~team13/package_as/lists/");
		    }
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