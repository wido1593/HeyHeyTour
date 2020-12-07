<?
    class Southamerica_m extends CI_Model     // 모델 클래스 선언
    {
		public function getlist()
		{
			$sql="select package_sa.*, southamerica.name as sa_name, southamerica.no as sa_no
				from package_sa left join southamerica on package_sa.country_no=southamerica.no
				order by package_sa.no ";

	        return $this->db->query($sql)->result();
        }

		public function getlist_top()
		{
			$sql="select * from southamerica order by no";
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