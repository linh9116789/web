<?php 
    class user extends DController{
        public function __construct()
        {
            parent::__construct();
        }
        public function index(){
            $this->login();
        }

        public function login(){
            $product = "products";
            $category = "categories";
            $artisan = "artisans";
            $artisanmodel = $this->load->model('artisanmodel');
            $productmodel = $this->load->model('productmodel');
            $categorymodel = $this->load->model('categorymodel');

            $data['categoryFE'] = $categorymodel->categoryFE($category);
            $data['artisanFE'] = $artisanmodel->artisanFE($artisan);
            Session::init();
            // $data['productFE']  = $productmodel->productFE($category, $product, $id);
            $this->load->view('header');
            $this->load->view('menu',$data);
            $this->load->view('login');
            $this->load->view('footer');
        }

        public function insertRegister(){
            $usermodel = $this->load->model('usermodel');
            $user = "users";

            $name = $_POST['user_name'];
            $phone = $_POST['user_phone'];
            $email = $_POST['user_email'];
            $address = $_POST['user_address'];
            $password = $_POST['user_password'];
            
            $data = array(
                'user_name'=>$name,
                'user_phone'=>$phone,
                'user_email'=>$email,
                'user_address'=>$address,
                'user_password'=>md5($password)
            );
            $result = $usermodel->insertRegister($user, $data);
            if($result == 1){
                $message['msg'] = "Đăng ký tài khoản thành công !";
            header("Location:".BASE_URL."/user/register?msg=".urldecode(serialize($message)));
            }else{
                $message['msg'] = "Đăng ký tài khoản thất bại !";
                header("Location:".BASE_URL."/user/register?msg=".urldecode(serialize($message)));
            }
        }

        public function login_user(){
            $username = $_POST['user_name'];
            $password = md5($_POST['user_password']);
            $user = "users";
            $usermodel = $this->load->model('usermodel');
            $result = $usermodel->login($user, $username, $password);
            if($result == 0){
                $message['msg'] = "Đăng nhap that bai !";
                header("Location:".BASE_URL."/user/login?msg=".urldecode(serialize($message)));
                }else{
                    $result = $usermodel->getLogin($user, $username, $password);
                    Session::init();
                    Session::set('user',true);
                    Session::set('user_name', $result[0]['user_name']);
                    Session::set('user_id ', $result[0]['user_id ']);
                    $message['msg'] = "thanh cong !";
                    header("Location:".BASE_URL."/user/login?msg=".urldecode(serialize($message)));
                }
        }

        public function register(){
            
            $category = "categories";
            
            $categorymodel = $this->load->model('categorymodel');
            
            $data['categoryFE'] = $categorymodel->categoryFE($category);
            
            $this->load->view('header');
            $this->load->view('menu',$data);
            $this->load->view('register');
            $this->load->view('footer');
        }

        public function dangxuat(){
            Session::init();
			Session::unset('user');
            $message['msg'] = "Đăng xuất tài khoản thành công !";
                header("Location:".BASE_URL."?msg=".urldecode(serialize($message)));
        }

        public function notfound(){
            $this->load->view('header');
            $this->load->view('404');
            $this->load->view('footer');
        }

    }

?>