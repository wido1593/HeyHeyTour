<?
    class Europe_m extends CI_Model     // 모델 클래스 선언
    {
		public function getlist()
		{
			$sql="select package_eu.*, europe.name as eu_name, europe.no as eu_no
				from package_eu left join europe on package_eu.country_no=europe.no
				order by package_eu.no ";

	        return $this->db->query($sql)->result();
        }

		public function getlist_top()
		{
			$sql="select * from europe order by no";
			return $this->db->query($sql)->result();
	    }

		function getrow($no)
        {
            $sql="select package_eu.*, europe.no, 
			europe.no as europe_no,
			europe.name as europe_name,
			package_eu.no as package_eu_no
			
					from package_eu
					left join europe
					on package_eu.country_no=europe.no
					where package_eu.no=$no";
					
            return $this->db->query($sql)->row();
        }
		function deleterow($no)
		{
			$sql="delete from package_eu where no=$no";
			return $this->db->query($sql);
		}
		function insertrow($row)
		{
			return $this->db->insert("package_eu",$row);
		}
		function updaterow($row, $no)
		{
			$where = array("no" => $no);
			return $this->db->update("package_eu", $row, $where);
		}
		public function rowcount($text1)
		{
			if(!$text1)
	            $sql="select * from package_eu";
			else
				$sql="select * from package_eu where name like '%$text1%'";
	        return $this->db->query($sql)->num_rows();
		}

		public function getlist_co()
		{
			$sql="select * from europe order by no";
			return $this->db->query($sql)->result();
		}

	}
?>
