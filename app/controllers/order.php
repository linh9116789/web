<?php
    class order extends DController{
        public function __construct()
        {
            Session::checkSession();
            $data=array();
            parent::__construct();
        }

        public function index(){
            $this->showOrder();
        }

        public function showOrder(){
            $order = "orders";
            $ordermodel = $this->load->model('ordermodel');
            $data['orders'] = $ordermodel->showorder($order);
            $this->load->view('admin/header');
            $this->load->view('admin/order/order',$data);
            $this->load->view('admin/footer');
        }

        public function order_detail($od_code){
            $ordermodel = $this->load->model('ordermodel');

            $oder_detail = 'oder_detail';
            $product = "products"; 

            $cond = "products.id = oder_detail.od_product_id AND $oder_detail.od_detail_code = '$od_code'";
            $cond_info = "$oder_detail.od_detail_code = '$od_code'";

            $data['order_detail'] = $ordermodel->list_order_detail($product, $oder_detail, $cond);
            $data['order_info'] = $ordermodel->order_info($oder_detail, $cond_info);

            $this->load->view('admin/header');
            $this->load->view('admin/order/order_detail',$data);
            $this->load->view('admin/footer');
        }

        public function order_confirm($od_code){
            // echo $od_code;
            $ordermodel = $this->load->model('ordermodel');
            $order = "orders";
            $cond  = "$order.od_code = '$od_code'";
            $data = array(
                'od_status' => 1
            );
            $result = $ordermodel->order_confirm($order,$data, $cond);
            if($result == 1){
                $message['msg'] = "Cập nhật đơn hàng thành công !";
            header("Location:".BASE_URL."/order/index?msg=".urldecode(serialize($message)));
            }else{
                $message['msg'] = "Cập nhật đơn hàng thất bại !";
            header("Location:".BASE_URL."/order/index?msg=".urldecode(serialize($message)));
            }
        }
    }
?>