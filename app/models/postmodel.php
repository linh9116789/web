<?php 
    class postmodel extends DModel{

        public function __construct()
        {
            parent::__construct();
        }

        /**
         * query Back End
         */

        public function showPost($table, $artisan){
            $sql = "SELECT * FROM $table, $artisan WHERE $table.post_artisan_id = $artisan.a_id ORDER BY $table.p_id";
            return $this->db->select($sql);
        }

        public function postbyid($post , $cond){
            $sql = "SELECT * FROM $post WHERE $cond";
            return $this->db->select($sql);
        }
        
        public function insertpost($table, $data){
            return $this->db->insert($table, $data);
        }

        public function updatepost($table, $data, $cond){
            return $this->db->update($table, $data, $cond);
        }

        public function deletepost($table, $cond){
            return $this->db->delete($table, $cond);
        }

        public function update_hot($table,$data, $cond){
            return $this->db->update($table, $data, $cond);
        }

        /**
         * query Front End
         */

         public function posthot($post){
            $sql = "SELECT * FROM $post WHERE $post.p_hot = 1 ORDER BY $post.p_id DESC";
            return $this->db->select($sql);
        }

        public function postFE($post, $artisan, $id){
            $sql = "SELECT * FROM $post, $artisan WHERE $post.post_artisan_id = $artisan.a_id AND $post.post_artisan_id = '$id' ORDER BY $post.p_id DESC";
            return $this->db->select($sql);
        }

        public function post_detail($artisan, $post, $cond){
            $sql = "SELECT * FROM $artisan, $post WHERE $cond";
            return $this->db->select($sql);
        }
    }
?>