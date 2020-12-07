<?
    class Package_sa_m extends CI_Model
    {
/************package_sa************/
        public function getlist($text1,$start,$limit)
        {
			if(!$text1)
	            $sql="select package_sa.*, southamerica.name as country_name
							from package_sa left join southamerica on package_sa.country_no=southamerica.no
							order by package_sa.no LIMIT $start,$limit";
			else
				$sql="select package_sa.*, southamerica.name as country_name
							from package_sa left join southamerica on package_sa.country_no=southamerica.no
							where package_sa.name like '%$text1%'
							order by package_sa.no LIMIT $start,$limit";
	        return $this->db->query($sql)->result();
        }
	  function getrow($no)
        {
            $sql="select package_sa.*, southamerica.no, 
			southamerica.no as southamerica_no,
			southamerica.name as southamerica_name,
			package_sa.no as package_sa_no
			
					from package_sa
					left join southamerica
					on package_sa.country_no=southamerica.no
					where package_sa.no=$no";
					
            return $this->db->query($sql)->row();
        }
		function deleterow($no)
		{
			$sql="delete from package_sa where no=$no";
			return $this->db->query($sql);
		}
		function insertrow($row)
		{
			return $this->db->insert("package_sa",$row);
		}
		function updaterow($row, $no)
		{
			$where = array("no" => $no);
			return $this->db->update("package_sa", $row, $where);
		}
		public function rowcount($text1)
		{
			if(!$text1)
	            $sql="select * from package_sa";
			else
				$sql="select * from package_sa where name like '%$text1%'";
	        return $this->db->query($sql)->num_rows();
		}

		public function getlist_co()
		{
			$sql="select * from southamerica order by no";
			return $this->db->query($sql)->result();
		}

	}
?>