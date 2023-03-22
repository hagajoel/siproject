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
            $dir="./assets/img/logo/" ;
            $extensions = array("jpg","jpeg","png","svg");
            $check = 0; 
            $ext = explode("/",$_FILES["logo"]['type'], 2);
            $check = in_array($ext[1],$extensions); 
            if($check == 0){
                return -1;
            }
            $target_file = $dir . basename($_FILES['logo']['name']);
            if (move_uploaded_file($_FILES["logo"]["tmp_name"], $target_file)) {
                $sql = "insert into entreprise values(null,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s)";
                $sql = sprintf($sql, $this->db->escape(trim($_POST['nom'])), $this->db->escape($_POST['pwd']),0,$this->db->escape($_FILES['logo']['name']),$this->db->escape(trim($_POST['objet'])),$this->db->escape($_POST['debut']),$this->db->escape(trim($_POST['adresse'])),$this->db->escape(trim($_POST['nif'])),$this->db->escape(trim($_POST['stat'])),$this->db->escape(trim($_POST['rcs'])),$_POST['devise'],$this->db->escape(trim($_POST['dirigeant'])));
                $rows = $this->db->query($sql);
            } 
            else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }
?>