<?php 
    class User_model extends CI_Model {
        
        public function __construct()
		{
			parent::__construct();
            $this->load->helper('pcg_helper');
		}

        public function getPcg($id){
            $query = $this->db->query("SELECT * FROM pcg where idEntreprise = " . $id . " ORDER BY compte");
            $res = $query->result_array();
            return $res;
        }

        public function insertPcg($num,$intitule,$id){
            $pcg = $this->getPcg($id);
            foreach ($pcg as $p) {
                if($p['compte'] == $num){
                    return -1;
                }
            }
            $sql = "insert into pcg values(default,%s,%s,%s)";
            $sql = sprintf($sql, $id, $this->db->escape($num), $this->db->escape($intitule));
            $this->db->query($sql);
            return 0;
        }

        public function importPcgScv($url,$id){
            $handle = fopen($url, "r");
            $ar = array();
            if ($handle) {
                while (($line = fgets($handle)) !== false) {
                    $var = explode(";",$line);
                    if(count($var) != 2){
                        return -1;
                    }
                    if(!is_numeric($var[0])){
                        return -2;
                    }
                    array_push($ar,$var);
                }
                fclose($handle);
            }
            $pcg = $this->getPcg($id);
            $check = checkPcg($pcg,$ar);
            foreach ($ar as $var) {
                if(!in_array($var,$check)){
                    $sql = "INSERT INTO pcg VALUES(default, %s, %s, %s)";
                    $sql = sprintf($sql, $id,$var[0],$this->db->escape($var[1]));
                    $this->db->query($sql);
                }
            }
            return $check;
        }

        public function delete($id){
            $this->db->query("DELETE FROM pcg WHERE idPcg = " . $id);
        }

        public function res_search($params){
            $sql = "select * from pcg where compte like '%$params%' OR intitule like '%$params%'";
            $query = $this->db->query($sql);
            return $query->result_array();
        }

        public function findPcg($id){
            $sql = "select * from pcg where idPcg = $id";
            $query = $this->db->query($sql);
            return $query->result_array();
		}
    }
?>