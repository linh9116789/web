<?php 
    class slidemodel extends DModel{
        public function __construct()
        {
            parent::__construct();
        }
        /**
         * query Admin
         */
        public function list_slide($table){
            $sql = "SELECT * FROM $table ORDER BY $table.s_id DESC";
            return $this->db->select($sql);
        }

        public function list_slidebyid($table,$cond){
            $sql = "SELECT * FROM $table WHERE $cond";
            return $this->db->select($sql);
        }

        public function insertslide($table, $data){
            return $this->db->insert($table, $data);
        }

        public function updateslide($table, $data, $cond){
            return $this->db->update($table, $data, $cond);
        }

        public function deleteslide($table, $cond){
            return $this->db->delete($table, $cond);
        }

        /**
         * Query Front End
         */

        public function slideFE($slide){
            $sql = "SELECT * FROM $slide";
            return $this->db->select($sql);
        }
    }
?>