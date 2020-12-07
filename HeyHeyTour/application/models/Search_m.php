<?
    class Search_m extends CI_Model
    {
/************package_af************/
        public function getlist_country($text1,$start,$limit)
        {
	        $sql="SELECT country.no, country.name, country.continent FROM               
				((SELECT no, name, continent FROM africa 
				WHERE name LIKE '%$text1%')
				UNION
				(SELECT no, name, continent FROM
				asia WHERE name LIKE '%$text1%' )
				UNION
				(SELECT no, name, continent FROM
				europe WHERE name LIKE '%$text1%' )
				UNION
				(SELECT no, name, continent FROM
				northamerica WHERE name LIKE '%$text1%')
				UNION
				(SELECT no, name, continent FROM
				southamerica WHERE name LIKE '%$text1%')) AS country 
				LIMIT $start,$limit";
	        return $this->db->query($sql)->result();
        }

		 public function getlist_package($text1,$start,$limit)
        {
	        $sql="SELECT package.no, package.name, package.bigo, package.continent FROM               
                ((SELECT no,name,bigo,continent FROM 
                      package_af WHERE 
                      name LIKE '%$text1%' OR bigo LIKE '%$text1%')
                      UNION
                      (SELECT no,name,bigo,continent FROM 
                      package_asia WHERE 
                      name LIKE '%$text1%' OR bigo LIKE '%$text1%')
                      UNION
                      (SELECT no,name,bigo,continent FROM 
                      package_eu WHERE 
                      name LIKE '%$text1%' OR bigo LIKE '%$text1%')
                      UNION
                      (SELECT no,name,bigo,continent FROM 
                      package_na WHERE 
                      name LIKE '%$text1%' OR bigo LIKE '%$text1%')
                      UNION
                      (SELECT no,name,bigo,continent FROM 
                      package_sa WHERE 
                      name LIKE '%$text1%' OR bigo LIKE '%$text1%')) AS package 
					  LIMIT $start,$limit" ;
			
			return $this->db->query($sql)->result();
        }
	
		public function rowcount_country($text1)
		{
			$sql="SELECT country.* FROM               
                ((SELECT no, name FROM
                    africa WHERE name LIKE '%$text1%')
                    UNION
                    (SELECT no, name FROM
                    asia WHERE name LIKE '%$text1%' )
                    UNION
                    (SELECT no, name FROM
                    europe WHERE name LIKE '%$text1%' )
                    UNION
                    (SELECT no, name FROM
                    northamerica WHERE name LIKE '%$text1%')
                    UNION
                    (SELECT no, name FROM
                    southamerica WHERE name LIKE '%$text1%')) AS country";
	        return $this->db->query($sql)->num_rows();
		}

		public function rowcount_package($text1)
		{
			$sql="SELECT package.* FROM               
                ((SELECT no,name,bigo FROM 
                      package_af WHERE 
                      name LIKE '%$text1%' OR bigo LIKE '%$text1%')
                      UNION
                      (SELECT no,name,bigo FROM 
                      package_asia WHERE 
                      name LIKE '%$text1%' OR bigo LIKE '%$text1%')
                      UNION
                      (SELECT no,name,bigo FROM 
                      package_eu WHERE 
                      name LIKE '%$text1%' OR bigo LIKE '%$text1%')
                      UNION
                      (SELECT no,name,bigo FROM 
                      package_na WHERE 
                      name LIKE '%$text1%' OR bigo LIKE '%$text1%')
                      UNION
                      (SELECT no,name,bigo FROM 
                      package_sa WHERE 
                      name LIKE '%$text1%' OR bigo LIKE '%$text1%')) AS package";
	        return $this->db->query($sql)->num_rows();
		}
	}
?>