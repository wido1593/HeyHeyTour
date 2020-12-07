<?
    class Login_m extends CI_Model
    {
        public function getrow($uid,$passwd)
        {		
			$sql="select * from member where uid='$uid' and passwd='$passwd'";	

			return $this->db->query($sql)->row();
        }		
		
   }
?>