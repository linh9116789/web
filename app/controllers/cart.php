<?php
    class cart extends DController{

        public function __construct(){
			$data = array();
			parent::__construct();

		}

        public function index(){
            $this->cart();
        }

        public function cart(){
            Session::init();
            $category = "categories";
            $artisan = "artisans";
            $artisanmodel = $this->load->model('artisanmodel');
            $categorymodel = $this->load->model('categorymodel');
            $data['artisanFE'] = $artisanmodel->artisanFE($artisan);
            $data['categoryFE'] = $categorymodel->categoryFE($category);
            $this->load->view('header');
            $this->load->view('menu',$data);
            $this->load->view('cart');
            $this->load->view('footer');
        }

        public function addcart(){
            Session::init();
            if(isset($_SESSION["shopping_cart"])){
                $avalable = 0;
                foreach($_SESSION["shopping_cart"] as $key => $value){
                    if($_SESSION["shopping_cart"][$key]['id'] == $_POST['id']){
                        $avalable ++;
                        $_SESSION["shopping_cart"][$key]['pro_quanty'] += $_POST['pro_quanty'];
                    }
                }
                if($avalable == 0){
                    $item = array(
                        'id' => $_POST['id'],
                        'pro_avatar'=>$_POST['pro_avatar'],
                        'pro_name'  =>$_POST['pro_name'],
                        'pro_price' =>$_POST['pro_price'],
                        'pro_quanty'=>$_POST['pro_quanty']
                    );
                    $_SESSION["shopping_cart"][]= $item;
                }
                header("Location:".BASE_URL.'/cart');
            }else{
                $item = array(
                    'id' => $_POST['id'],
                    'pro_avatar'=>$_POST['pro_avatar'],
                    'pro_name'  =>$_POST['pro_name'],
                    'pro_price' =>$_POST['pro_price'],
                    'pro_quanty'=>$_POST['pro_quanty']
                );
                $_SESSION["shopping_cart"][]= $item;
            }
            header("Location:".BASE_URL.'/cart');
        }


        public function updategiohang(){
            Session::init();
            if(isset($_POST["delete_cart"])){
                if(isset($_SESSION["shopping_cart"])){
                    foreach($_SESSION["shopping_cart"] as $key => $value){
                        if($_SESSION["shopping_cart"][$key]['id'] == $_POST["delete_cart"]){
                            unset($_SESSION["shopping_cart"][$key]);
                        }
                    }
                    header("Location:".BASE_URL.'/cart');
                }else{
                    header("Location:".BASE_URL);
                }
            }else{
                foreach($_POST['pro_quanty'] as $key => $pro_quanty){
                    foreach($_SESSION["shopping_cart"] as $session =>$values){
                        if($values['id'] == $key){
                            $_SESSION['shopping_cart'][$session]['pro_quanty'] = $pro_quanty;
                        }
                    }
                }
                header("Location:".BASE_URL.'/cart');
            }
        }

        public function dathang(){
            Session::init();
            $order = "orders";
            $oder_detail = "oder_detail";
            $ordermodel = $this->load->model('ordermodel');
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['sodienthoai'];
            $diachi = $_POST['diachi'];
            $ghichu = $_POST['ghichu'];

            $order_code = rand(0,9999);
            date_default_timezone_get('asia/ho_chi_minh');
            $date = date("d/m/Y");
            $hour = date("h:i:sa");
            $order_date = $date.' '.$hour;
            
            $data_oder = array(
                'od_status' => 0,
                'od_code'   => $order_code ,
                'od_date'   => $order_date,
            );
            $result_order = $ordermodel->insert_order($order, $data_oder);
            if(Session::get('shopping_cart')== true){
                foreach(Session::get("shopping_cart") as $key =>$value){
                    $data_order_detail = array(
                        'od_detail_code' => $order_code,
                        'od_product_id' => $value['id'],
                        'od_detail_quanty' => $value['pro_quanty'],
                        'name' => $name,
                        'sodienthoai' => $phone,
                        'email' => $email,
                        'diachi' => $diachi,
                        'ghichu' => $ghichu
                    );
                    $result_order_detail = $ordermodel->insert_order_detail($oder_detail, $data_order_detail);
                }
                unset($_SESSION['shopping_cart']);
            }
            header("Location:".BASE_URL.'/cart');
        }
    }
?>