<?
    class Africa_m extends CI_Model     // 모델 클래스 선언
    {
		public function getlist()
		{
			$sql="select package_af.*, africa.name as af_name, africa.no as af_no
				from package_af left join africa on package_af.country_no=africa.no
				order by package_af.no ";

	        return $this->db->query($sql)->result();
        }

		public function getlist_top()
		{
			$sql="select * from africa order by no";
			return $this->db->query($sql)->result();
	    }

		function getrow($no)
        {
            $sql="select package_af.*, africa.no, 
			africa.no as africa_no,
			africa.name as africa_name,
			package_af.no as package_af_no
			
					from package_af
					left join africa
					on package_af.country_no=africa.no
					where package_af.no=$no";
					
            return $this->db->query($sql)->row();
        }
		function deleterow($no)
		{
			$sql="delete from package_af where no=$no";
			return $this->db->query($sql);
		}
		function insertrow($row)
		{
			return $this->db->insert("package_af",$row);
		}
		function updaterow($row, $no)
		{
			$where = array("no" => $no);
			return $this->db->update("package_af", $row, $where);
		}
		public function rowcount($text1)
		{
			if(!$text1)
	            $sql="select * from package_af";
			else
				$sql="select * from package_af where name like '%$text1%'";
	        return $this->db->query($sql)->num_rows();
		}

		public function getlist_co()
		{
			$sql="select * from africa order by no";
			return $this->db->query($sql)->result();
		}

	}
?>