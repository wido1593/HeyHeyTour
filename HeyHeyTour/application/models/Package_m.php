<?
    class Package_m extends CI_Model
    {
/************package_asia************/
        public function getlist_as($text1,$start,$limit)
        {
			if(!$text1)
	            $sql="select * from package_asia order by name";
			else
				$sql="select * from package_asia where name like order by name";
	        return $this->db->query($sql)->result();
        }
		function getrow_as($no)
        {
            $sql="select * from package_asia where no=$no";
            return $this->db->query($sql)->row();
        }
		function deleterow_as($no)
		{
			$sql="delete from package_asia where no=$no";
			return $this->db->query($sql);
		}
		function insertrow_as($row)
		{
			return $this->db->insert("package_asia",$row);
		}
		function updaterow_as($row, $no)
		{
			$where = array("no" => $no);
			return $this->db->update("package_asia", $row, $where);
		}
		public function rowcount_as($text1)
		{
			if(!$text1)
	            $sql="select * from package_asia";
			else
				$sql="select * from package_asia where name like '%$text1%'";
	        return $this->db->query($sql)->num_rows();
		}

/************package_af************/
		 public function getlist_af($text1,$start,$limit)
        {
			if(!$text1)
	            $sql="select * from package_af order by name";
			else
				$sql="select * from package_af where name like order by name";
	        return $this->db->query($sql)->result();
        }
		function getrow_af($no)
        {
            $sql="select * from package_af where no=$no";
            return $this->db->query($sql)->row();
        }
		function deleterow_af($no)
		{
			$sql="delete from package_af where no=$no";
			return $this->db->query($sql);
		}
		function insertrow_af($row)
		{
			return $this->db->insert("package_af",$row);
		}
		function updaterow_af($row, $no)
		{
			$where = array("no" => $no);
			return $this->db->update("package_af", $row, $where);
		}
		public function rowcount_af($text1)
		{
			if(!$text1)
	            $sql="select * from package_af";
			else
				$sql="select * from package_af where name like '%$text1%'";
	        return $this->db->query($sql)->num_rows();
		}

/************package_eu************/
		 public function getlist_eu($text1,$start,$limit)
        {
			if(!$text1)
	            $sql="select * from package_eu order by name";
			else
				$sql="select * from package_eu where name like order by name";
	        return $this->db->query($sql)->result();
        }
		function getrow_eu($no)
        {
            $sql="select * from package_eu where no=$no";
            return $this->db->query($sql)->row();
        }
		function deleterow_eu($no)
		{
			$sql="delete from package_eu where no=$no";
			return $this->db->query($sql);
		}
		function insertrow_eu($row)
		{
			return $this->db->insert("package_eu",$row);
		}
		function updaterow_eu($row, $no)
		{
			$where = array("no" => $no);
			return $this->db->update("package_eu", $row, $where);
		}
		public function rowcount_eu($text1)
		{
			if(!$text1)
	            $sql="select * from package_eu";
			else
				$sql="select * from package_eu where name like '%$text1%'";
	        return $this->db->query($sql)->num_rows();
		}


/************package_na************/
		 public function getlist_na($text1,$start,$limit)
        {
			if(!$text1)
	            $sql="select * from package_na order by name";
			else
				$sql="select * from package_na where name like order by name";
	        return $this->db->query($sql)->result();
        }
		function getrow_na($no)
        {
            $sql="select * from package_na where no=$no";
            return $this->db->query($sql)->row();
        }
		function deleterow_na($no)
		{
			$sql="delete from package_na where no=$no";
			return $this->db->query($sql);
		}
		function insertrow_na($row)
		{
			return $this->db->insert("package_na",$row);
		}
		function updaterow_na($row, $no)
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


/************package_sa************/
		 public function getlist_sa($text1,$start,$limit)
        {
			if(!$text1)
	            $sql="select * from package_sa order by name";
			else
				$sql="select * from package_sa where name like order by name";
	        return $this->db->query($sql)->result();
        }

        function getrow($no)
        {
            $sql="select * from package_sa where no=$no";
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
		public function rowcount_na($text1)
		{
			if(!$text1)
	            $sql="select * from package_sa";
			else
				$sql="select * from package_sa where name like '%$text1%'";
	        return $this->db->query($sql)->num_rows();
		}
    }

?>
