<?php 
    class categorymodel extends DModel{
        public function __construct()
        {
            parent::__construct();
        }
        /**
         * query Admin
         */
        // public function Allcategory($table){
        //     $sql = "SELECT COUNT(*) as sosanpham FROM $table ";
        //     return $this->db->select($sql);
        // }
        public function list_category($table){
            $sql = "SELECT * FROM $table ORDER BY $table.c_id DESC";
            return $this->db->select($sql);
        }

        public function list_categorybyid($table,$cond){
            $sql = "SELECT * FROM $table WHERE $cond";
            return $this->db->select($sql);
        }

        public function insertcategory($table, $data){
            return $this->db->insert($table, $data);
        }

        public function updatecategory($table, $data, $cond){
            return $this->db->update($table, $data, $cond);
        }

        public function deletecategory($table, $cond){
            return $this->db->delete($table, $cond);
        }

        /**
         * Query Front End
         */

        public function categoryFE($category){
            $sql = "SELECT * FROM $category";
            return $this->db->select($sql);
        }
    }
?>