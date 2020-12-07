<?
    class Northamerica_m extends CI_Model     // 모델 클래스 선언
    {
		public function getlist()
		{
			$sql="select package_na.*, northamerica.name as na_name, northamerica.no as na_no
				from package_na left join northamerica on package_na.country_no=northamerica.no
				order by package_na.no ";

	        return $this->db->query($sql)->result();
        }

		public function getlist_top()
		{
			$sql="select * from northamerica order by no";
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
