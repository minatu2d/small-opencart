<?php
class ModelCustomHello extends Model {
    public function HellWorld() {
        $sql = "SELECT x FROM `" . DB_PREFIX . "y`)"; 
        $implode = array();
        $query = $this->db->query($sql);
        return $query->row['total'];    
    }       
}
?>