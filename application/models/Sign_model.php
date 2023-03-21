<?php 
    class Sign_model extends CI_Model {

        public function checkSignIn($nom,$pwd)
        {
            $sql = "select * from entreprise where nom_entreprise=%s AND pwd=%s";
            $sql = sprintf($sql, $this->db->escape($nom), $this->db->escape($pwd));
            $rows = $this->db->query($sql);
            if(count($rows->result_array()) == 0){
                return 3;
		    }
            $row = $rows->row_array();
            $_SESSION['id_entreprise'] = $row['idEntreprise'];
            $_SESSION['logo'] = $row['logo'];
            $_SESSION['nom'] = $row['nom_entreprise'];
            return 0;
        }

        public function insert(){
            
        }

    }
?>