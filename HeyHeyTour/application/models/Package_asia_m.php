<?
    class Package_asia_m extends CI_Model
    {
/************package_asia************/
        public function getlist($text1,$start,$limit)
        {
			if(!$text1)
	            $sql="select package_asia.*, asia.name as country_name
							from package_asia left join asia on package_asia.country_no=asia.no
							order by package_asia.no LIMIT $start,$limit";
			else
				$sql="select package_asia.*, asia.name as country_name
							from package_asia left join asia on package_asia.country_no=asia.no
							where package_asia.name like '%$text1%'
							order by package_asia.no LIMIT $start,$limit";
	        return $this->db->query($sql)->result();
        }
	  function getrow($no)
        {
            $sql="select package_asia.*, asia.no, 
			asia.no as asia_no,
			asia.name as asia_name,
			package_asia.no as package_asia_no
			
					from package_asia
					left join asia
					on package_asia.country_no=asia.no
					where package_asia.no=$no ";
					
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
				$sql="select * from package_asia where name like '%$text1%' ";
	        return $this->db->query($sql)->num_rows();
		}

		public function getlist_co()
		{
			$sql="select * from asia order by no";
			return $this->db->query($sql)->result();
		}

	}
?>