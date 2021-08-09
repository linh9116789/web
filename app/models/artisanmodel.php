<?php 
    class artisanmodel extends DModel{

        public function __construct()
        {
            parent::__construct();
        }

        /**
         * query Back end
         */
        public function list_artisan($table){
            $sql = "SELECT * FROM $table";
            return $this->db->select($sql);
        }

        public function insertartisan($table, $data){
            return $this->db->insert($table, $data);
        }

        public function list_artisanbyid($table, $cond ){
            $sql = "SELECT * FROM $table WHERE $cond";
            return $this->db->select($sql);
        }

        public function updateartisan($table, $data, $cond){
            return $this->db->update($table, $data, $cond);
        }

        public function deleteartisan($table,$cond){
            return $this->db->delete($table,$cond);
        }

        /**
         * query font end
         */

        public function artisanFE($artisan){
            $sql = "SELECT * FROM $artisan";
            return $this->db->select($sql);
        }

    }
?>