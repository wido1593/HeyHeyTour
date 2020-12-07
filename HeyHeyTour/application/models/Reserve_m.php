<?
    class Reserve_m extends CI_Model
    {
/************reserve************/
     public function getlist($text1,$start,$limit)
        {
			if(!$text1)
	            $sql="select reserve.*, africa.name as country_name
							from reserve left join africa on reserve.country_no=africa.no
							order by reserve.no LIMIT $start,$limit";
			else
				$sql="select reserve.*, africa.name as country_name
							from reserve left join africa on reserve.country_no=africa.no
							where reserve.name like '%$text1%'
							order by reserve.no LIMIT $start,$limit";
	        return $this->db->query($sql)->result();
        }
	  function getrow($no)
        {
            $sql="select reserve.*, africa.no, 
			africa.no as africa_no,
			africa.name as africa_name,
			reserve.no as reserve_no
			
					from reserve
					left join africa
					on reserve.country_no=africa.no
					where reserve.no=$no";
					
            return $this->db->query($sql)->row();
        }
		function deleterow($no)
		{
			$sql="delete from reserve where no=$no";
			return $this->db->query($sql);
		}
		function insertrow($row)
		{
			return $this->db->insert("reserve",$row);
		}
		function updaterow($row, $no)
		{
			$where = array("no" => $no);
			return $this->db->update("reserve", $row, $where);
		}
		public function rowcount($text1)
		{
			if(!$text1)
	            $sql="select * from reserve";
			else
				$sql="select * from reserve where name like '%$text1%'";
	        return $this->db->query($sql)->num_rows();
		}

		public function getlist_co()
		{
			$sql="select * from africa order by no";
			return $this->db->query($sql)->result();
		}

	}
?>