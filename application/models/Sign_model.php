<?php 
    class Sign_model extends CI_Model {

        public function checkSignIn($nom,$pwd)
        {
            $sql = "select * from entreprise where nom=%s AND pwd=%s";
            $sql = sprintf($sql, $this->db->escape($nom), $this->db->escape($pwd));
            $row = $this->db->query($sql);
            $row = $row->row_array();
                if($nom == $row['nom'] && $pwd == $row['pwd']){
                $_SESSION['id_entreprise'] = $row['idEntreprise'];
                $_SESSION['logo'] = $row['logo'];
                $_SESSION['nom'] = $row['nom'];
			    return 0;
		    }
		    return 3;
        }
    }
?>