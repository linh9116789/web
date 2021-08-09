<?php 
    class login extends DController{
        public function __construct()
        {
            parent::__construct();
        }
        public function index(){
            $this->login();
        }

        public function login(){
            Session::init();
            if(Session::get("login") == true){
                header("Location:".BASE_URL."/login/dashboard");
            }
            $this->load->view('admin/login');
        }

        public function dashboard(){
            Session::checkSession();
            $this->load->view('admin/header');
            $this->load->view('admin/dashboard');
            $this->load->view('admin/footer');
        }

        public function authentication_login(){
            $table = "admins";
            $username = $_POST['username'];
            $password =md5($_POST['password']); 

            $loginmodel = $this->load->model('loginmodel');

            $count = $loginmodel->login($table, $username, $password);
            if($count == 0){
                header("Location:".BASE_URL."/login");
            }else{
                $result = $loginmodel->getlogin($table, $username, $password);
                Session::init();//bat ddau 1 session moi lay ra tu Session
                Session::set('login',true);
                Session::set('username',$result[0]['username']);
                Session::set('userid',$result[0]['id']);
                header("Location:".BASE_URL."/login/dashboard");
            }
        }

        public function logout(){
            Session::init();
            Session::destroy();
            header("Location:".BASE_URL."/login");
        }

    }

?>