<?
    class Package_af_m extends CI_Model
    {
/************package_af************/
     public function getlist($text1,$start,$limit)
        {
			if(!$text1)
	            $sql="select package_af.*, africa.name as country_name
							from package_af left join africa on package_af.country_no=africa.no
							order by package_af.no LIMIT $start,$limit";
			else
				$sql="select package_af.*, africa.name as country_name
							from package_af left join africa on package_af.country_no=africa.no
							where package_af.name like '%$text1%'
							order by package_af.no LIMIT $start,$limit";
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