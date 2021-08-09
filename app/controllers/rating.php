<?php
    class rating extends DController{
        public function __construct()
        {
            // Session::checkSession();
            $data = array();
            parent::__construct();
        }
        public function index(){
            $this->danhsach();
        }

        public function danhsach(){
            $ratingmodel = $this->load->model('ratingmodel');
            $rating = "ratings";
            $product = "products";
            $cond = "$rating.ra_product_id = $product.id ORDER BY $rating.ra_id DESC ";
            $data['ratings'] = $ratingmodel->showrating($rating,$product, $cond);
            $this->load->view('admin/header');
            $this->load->view('admin/rating/index',$data);
            $this->load->view('admin/footer');
        }

        public function insetrating($id){
            $productmodel = $this->load->model('productmodel');
            $product = "products";
            $ratingmodel = $this->load->model('ratingmodel');
            $cond = "$product.id = '$id'";
            $rating = "ratings";
            $number = $_POST['number'];
            $content = $_POST['content'];
            $pro_detail = $_POST['pro_detail'];
            $ra_name_user = $_POST['ra_name_user'];
            $ra_sdt = $_POST['ra_sdt'];

            date_default_timezone_get('asia/ho_chi_minh');
            $date = date("d/m/Y");
            $hour = date("h:i:sa");
            $rating_date = $date.' '.$hour;

            $data = array(
                'ra_number' => $number,
                'ra_content'=> $content,
                'ra_product_id' =>$pro_detail,
                'created_at' => $rating_date,
                'ra_name_user'=> $ra_name_user,
                'ra_sdt'=>$ra_sdt
            );

            $result = $ratingmodel->inserrating($rating, $data);
            $data['pro_star'] = $productmodel->productStar($product,$cond);
                foreach($data['pro_star'] as $key => $pro){
                    $pro_rating = $pro['pro_number_rating'];
                    $pro_total = $pro['pro_number_total'];
                }
            if($result == 1){
                $data = array(
                    'pro_number_rating'=>   $pro_rating=$pro_rating + 1,
                    'pro_number_total' =>   $pro_total=$pro_total+ $number
                );
                $productmodel->updatestart($product, $data, $cond);
            }
        }

        public function deleterating($id){
            $ratingmodel = $this->load->model('ratingmodel');
            $rating = "ratings";
            $cond = "$rating.ra_id = '$id'";
            $result = $ratingmodel->deleterating($rating, $cond);
            if($result == 0){

            }else{
                header("Location:".BASE_URL."/rating/index");
            }
        }
    }
?>