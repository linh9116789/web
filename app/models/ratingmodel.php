<?php 
    class ratingmodel extends DModel{

        public function __construct()
        {
            parent::__construct();
        }
        //---------------------------------------------------------------------------
        public function ratingtet($rating, $id){
            $sql ="SELECT COUNT(ra_number) AS total,ra_number,SUM(ra_number) AS sum FROM $rating WHERE $rating.ra_product_id = '$id' GROUP BY ra_number ";
            return $this->db->select($sql);
        }



        //---------------------------------------------------------------------------

        public function inserrating($rating, $data){
            return $this->db->insert($rating, $data);
        }

        public function showrating($rating,$product, $cond){
            $sql = "SELECT * FROM $rating, $product WHERE $cond";
            return $this->db->select($sql );
        }

        public function deleterating($rating, $cond){
            return $this->db->delete($rating,$cond);
        }

        public function ratingFE($rating,$product,$cond_rating){
            $sql = "SELECT * FROM $rating, $product WHERE $cond_rating";
            return $this->db->select($sql);
        }

    }
?>