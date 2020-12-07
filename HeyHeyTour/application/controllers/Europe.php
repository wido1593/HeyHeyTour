<?
    class Europe extends CI_Controller{
        function __construct()
        {
            parent::__construct();
            $this->load->database(); 
            $this->load->model("europe_m");
        }
        public function index()
        {
            $this->lists();
        }
        public function lists()
        {
            $data["list"] = $this->europe_m->getlist();
			$data["list1"] = $this->europe_m->getlist_top();
			$this->load->view("header2");
            $this->load->view("europe_list",$data);
			$this->load->view("footer");
        }
		public function view()
		{
		    $uri_array=$this->uri->uri_to_assoc(3);
		    $no	= array_key_exists("no",$uri_array) ? $uri_array["no"] : "" ;

			$data["row"]=$this->europe_m->getrow($no);

			$this->load->view("header2");
            $this->load->view("detail_view",$data);
		}
    }
?>
