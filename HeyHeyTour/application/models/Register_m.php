<?
    class Register_m extends CI_Model
    {
/************member************/
        public function getlist($text1,$start,$limit)
        {
			if(!$text1)
	            $sql="select member.*, southamerica.name as country_name
							from member left join southamerica on member.country_no=southamerica.no
							order by member.no LIMIT $start,$limit";
			else
				$sql="select member.*, southamerica.name as country_name
							from member left join southamerica on member.country_no=southamerica.no
							where member.name like '%$text1%'
							order by member.no LIMIT $start,$limit";
	        return $this->db->query($sql)->result();
        }
	  function getrow($no)
        {
            $sql="select member.*, southamerica.no, 
			southamerica.no as southamerica_no,
			southamerica.name as southamerica_name,
			member.no as member_no
			
					from member
					left join southamerica
					on member.country_no=southamerica.no
					where member.no=$no";
					
            return $this->db->query($sql)->row();
        }
		function deleterow($no)
		{
			$sql="delete from member where no=$no";
			return $this->db->query($sql);
		}
		function insertrow($row)
		{
			return $this->db->insert("member",$row);
		}
		function updaterow($row, $no)
		{
			$where = array("no" => $no);
			return $this->db->update("member", $row, $where);
		}
		public function rowcount($text1)
		{
			if(!$text1)
	            $sql="select * from member";
			else
				$sql="select * from member where name like '%$text1%'";
	        return $this->db->query($sql)->num_rows();
		}

		public function getlist_co()
		{
			$sql="select * from southamerica order by no";
			return $this->db->query($sql)->result();
		}

	}
?>