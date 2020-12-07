<?
    class Member_m extends CI_Model
    {
/************member************/
     public function getlist($text1,$start,$limit)
        {
			if(!$text1)
	            $sql="select * FROM member LIMIT $start,$limit";
			else
				$sql="select * FROM member WHERE name LIKE '%text1%' LIMIT $start,$limit";
	        return $this->db->query($sql)->result();
        }
	  function getrow($no)
        {
            $sql="select * FROM member WHERE no LIKE $no";
					
            return $this->db->query($sql)->row();
        }

		function getrow_reserve($no)
        {
            $sql="select * FROM reserve WHERE uid LIKE $no";
					
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
			$sql="select * from africa order by no";
			return $this->db->query($sql)->result();
		}

	}
?>