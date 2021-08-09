<?php 
    class productmodel extends DModel{
        public function __construct()
        {
            parent::__construct();
        }

        /**
         * query Admin
         */
        public function list_product($product, $category){
            $sql = "SELECT * FROM $product, $category WHERE $product.pro_category_id = $category.c_id ORDER BY $product.id";
            return $this->db->select($sql);
        }

        public function productbyid($table, $cond){
            $sql = "SELECT * FROM $table where $cond";
            return $this->db->select($sql);
        }

        public function insertproduct($table, $data){
            return $this->db->insert($table, $data);
        }

        public function updateproduct($table, $data, $cond){
            return $this->db->update($table, $data, $cond);
        }

        public function deleteproduct($table, $cond){
            return $this->db->delete($table, $cond);
        }

        public function update_hot($table,$data, $cond){
            return $this->db->update($table, $data, $cond);
        }

        /**
         * query Font End
         */
        public function productFE($category, $product, $id){
            $sql = "SELECT * FROM $product, $category WHERE $product.pro_category_id = $category.c_id AND $product.pro_category_id = '$id' ORDER BY $product.id DESC";
            return $this->db->select($sql);
        }

        public function producthot($product, $cond){
            $sql = "SELECT * FROM $product WHERE $cond ORDER BY $product.id DESC";
            return $this->db->select($sql);
        }

        public function productnew( $product ){
            $sql = "SELECT * FROM $product ORDER BY $product.id DESC";
            return $this->db->select($sql);
        }

        public function product_detail($category, $product, $cond){
            $sql = "SELECT * FROM $category, $product WHERE $cond";
            return $this->db->select($sql);
        }

        public function related_product($category, $product, $related_cond){
            $sql = "SELECT * FROM $category, $product WHERE $related_cond ";
            return $this->db->select($sql);
        }

        public function updatestart($product, $data, $cond){
            return $this->db->update($product, $data, $cond);
        }

        public function productStar($product,$cond){
            $sql = "SELECT * FROM $product WHERE $cond";
            return $this->db->select($sql);
        }
    }
?>