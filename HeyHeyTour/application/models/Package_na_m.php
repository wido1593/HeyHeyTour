<?
    class Package_na_m extends CI_Model
    {
/************package_na************/
      public function getlist($text1,$start,$limit)
        {
			if(!$text1)
	            $sql="select package_na.*, northamerica.name as country_name
							from package_na left join northamerica on package_na.country_no=northamerica.no
							order by package_na.no LIMIT $start,$limit";
			else
				$sql="select package_na.*, northamerica.name as country_name
							from package_na left join northamerica on package_na.country_no=northamerica.no
							where package_na.name like '%$text1%'
							order by package_na.no LIMIT $start,$limit";
	        return $this->db->query($sql)->result();
        }
	  function getrow($no)
        {
            $sql="select package_na.*, northamerica.no, 
			northamerica.no as northamerica_no,
			northamerica.name as northamerica_name,
			package_na.no as package_na_no
			
					from package_na
					left join northamerica
					on package_na.country_no=northamerica.no
					where package_na.no=$no";
					
            return $this->db->query($sql)->row();
        }
		function deleterow($no)
		{
			$sql="delete from package_na where no=$no";
			return $this->db->query($sql);
		}
		function insertrow($row)
		{
			return $this->db->insert("package_na",$row);
		}
		function updaterow($row, $no)
		{
			$where = array("no" => $no);
			return $this->db->update("package_na", $row, $where);
		}
		public function rowcount($text1)
		{
			if(!$text1)
	            $sql="select * from package_na";
			else
				$sql="select * from package_na where name like '%$text1%'";
	        return $this->db->query($sql)->num_rows();
		}

		public function getlist_co()
		{
			$sql="select * from northamerica order by no";
			return $this->db->query($sql)->result();
		}

	}
?>