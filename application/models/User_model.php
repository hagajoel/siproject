<?php 
    class User_model extends CI_Model {
        public function insertPcg($num,$intitule,$id){
            $sql = "insert into pcg values(default,%s,%s,%s)";
            $sql = sprintf($sql, $id, $this->db->escape($num), $this->db->escape($intitule));
            $this->db->query($sql);
        }

        public function getPcg($id){
            $query = $this->db->query("SELECT * FROM pcg where idEntreprise = " . $id . " ORDER BY compte");
            $res = $query->result_array();
            return $res;
        }

        public function importPcgScv($url,$id){
            $handle = fopen($url, "r");
            if ($handle) {
                while (($line = fgets($handle)) !== false) {
                    $var = explode(";",$line);
                    if(count($var) != 2){
                        return -1;
                    }
                    if(!is_numeric($var[0])){
                        return -1;
                    }
                    $sql = "INSERT INTO pcg VALUES(default, %s, %s, %s)";
                    $sql = sprintf($sql, $id,$var[0],$this->db->escape($var[1]));
                    $this->db->query($sql);
                }
                fclose($handle);
            }
            return 0;
        }

        public function delete($id){
            $this->db->query("DELETE FROM pcg WHERE idPcg = " . $id);
        }
    }
?>