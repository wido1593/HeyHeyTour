<?
    class Search extends CI_Controller {       
        function __construct()                 
        {
            parent::__construct();
            $this->load->database();           
            $this->load->model("search_m");
			$this->load->helper(array("url","date"));
			$this->load->library('pagination');
        }
        public function index()                
        {
            $this->lists();                    
        }
        public function lists()
        {
			
			$uri_array=$this->uri->uri_to_assoc(3);
			$text1 = array_key_exists("text1",$uri_array) ? urldecode($uri_array["text1"]) : "" ;
			$trigger = array_key_exists("trigger",$uri_array) ? urldecode($uri_array["trigger"]) : "" ;
			/*if ($text1=="") 
			    $base_url = "/search/lists/page";
			else */
			    $base_url = "/search/lists/text1/$text1/trigger/$trigger/page";

			$page_segment = substr_count( substr($base_url,0,strpos($base_url,"page")) , "/" )+1;

			$base_url = "/~team13".$base_url;

			$config["per_page"]	 = 6;

			if($trigger == 1)//나라일때
			{			
				$config["total_rows"] = $this->search_m->rowcount_country($text1);
				$data["total_rows"]= $this->search_m->rowcount_country($text1);
				$data["trigger"]= $trigger;
			}
			else if($trigger == 2)//패키지일때
			{
				$config["total_rows"] = $this->search_m->rowcount_package($text1);
				$data["total_rows"]= $this->search_m->rowcount_package($text1);
				$data["trigger"]= $trigger;
			}

			$config["uri_segment"] = $page_segment;
			$config["base_url"]	 = $base_url;
			$this->pagination->initialize($config);

			$data["page"]=$this->uri->segment($page_segment,0);
			$data["pagination"] = $this->pagination->create_links();
	
			$start=$data["page"];
			$limit=$config["per_page"];
			$data["text1"]=$text1;

			if($trigger == 1)//나라일때
			{			
				$data["list"]=$this->search_m->getlist_country($text1,$start,$limit);
				$this->load->view("header");           
				$this->load->view("search_page_country",$data);     
				//$this->load->view("footer");   
			}
			else if($trigger == 2)//패키지일때
			{
				$data["list"]=$this->search_m->getlist_package($text1,$start,$limit);
				$this->load->view("header");           
				$this->load->view("search_page_package",$data);     
				//$this->load->view("footer");   
			}
			
			
		        
        }		

	
}
?>