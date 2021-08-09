<?php 
    class ordermodel extends DModel{
        public function __construct()
        {
            parent::__construct();
        }

        public function insert_order($order, $data_oder){
            return $this->db->insert($order, $data_oder);
        }

        public function insert_order_detail($oder_detail, $data_order_detail){
            return $this->db->insert($oder_detail, $data_order_detail);
        }

        public function showorder($order){
            $sql = "SELECT * FROM $order";
            return $this->db->select($sql);
        }

        public function list_order_detail($product, $oder_detail, $cond){
            $sql = "SELECT * FROM $product, $oder_detail WHERE $cond ";
            return $this->db->select($sql);
        }

        public function order_info($oder_detail, $cond_info){
            $sql = "SELECT * FROM $oder_detail WHERE $cond_info LIMIT 1";
            return $this->db->select($sql);
        }

        public function order_confirm($order,$data, $cond){
            return $this->db->update($order,$data, $cond);
        }
    }
?>