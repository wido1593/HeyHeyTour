<?
    class Asia_m extends CI_Model     // 모델 클래스 선언
    {
    /*
		public function getlist()
        {
            $sql="select * from asia order by no";     // select문 정의
            return $this->db->query($sql)->result();              // 쿼리실행, 결과 리턴
        }
    }*/
		public function getlist()
		{
/*			   $sql="select package_asia.*, asia.no, 
			asia.no as asia_no,
			asia.name as asia_name,
			package_asia.no as package_asia_no
			
					from package_asia
					left join asia
					on package_asia.country_no=asia.no
					order by package_asia_no";
*/

			$sql="select package_asia.*, asia.name as							asia_name, asia.no as asia_no
				from package_asia left join asia on package_asia.country_no=asia.no
				order by package_asia.no ";

	        return $this->db->query($sql)->result();
        }

		public function getlist_top()
		{
			$sql="select * from asia order by no";
			return $this->db->query($sql)->result();
	    }
		function getrow($no)
        {
            $sql="select package_asia.*, africa.no, 
			africa.no as africa_no,
			africa.name as africa_name,
			package_asia.no as package_asia_no
			
					from package_asia
					left join africa
					on package_asia.country_no=africa.no
					where package_asia.no=$no";
					
            return $this->db->query($sql)->row();
        }
		function deleterow($no)
		{
			$sql="delete from package_asia where no=$no";
			return $this->db->query($sql);
		}
		function insertrow($row)
		{
			return $this->db->insert("package_asia",$row);
		}
		function updaterow($row, $no)
		{
			$where = array("no" => $no);
			return $this->db->update("package_asia", $row, $where);
		}
		public function rowcount($text1)
		{
			if(!$text1)
	            $sql="select * from package_asia";
			else
				$sql="select * from package_asia where name like '%$text1%'";
	        return $this->db->query($sql)->num_rows();
		}

		public function getlist_co()
		{
			$sql="select * from africa order by no";
			return $this->db->query($sql)->result();
		}

	
	}
?>
