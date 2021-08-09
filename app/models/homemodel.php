<?php 
    class homemodel extends DModel{
        public function __construct()
        {
            parent::__construct();
        }

        public function select($table)
        {
            $sql = "SELECT * FROM $table";
            return $this->db->select($sql);
        }
        
        public function catebyid($table, $cond)
        {
            $sql = "SELECT * FROM $table WHERE $cond";
            return $this->db->select($sql,$cond);
        }

        public function insertcategory($table, $data)
        {
            return $this->db->insert($table, $data);
        }

        public function updatecategory($table, $data, $cond)
        {  
            return $this->db->update($table, $data, $cond);
        }

        public function deletecategory($table,$cond){
            return $this->db->delete($table,$cond);
        }
    }

?>