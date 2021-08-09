<?php 
    class artisan extends DController{
        public function __construct()
        {
            Session::checkSession();
            $data=array();
            parent::__construct();
        }

        public function index(){
            $this->artisanShow();
        }

        public function artisanShow(){
            $this->load->view('admin/header');
            $table = "artisans";
            $artisannmodel = $this->load->model("artisanmodel");
            $data['artisans'] = $artisannmodel->list_artisan($table);
            $this->load->view('admin/artisan/index',$data);
            $this->load->view('admin/footer');
        }

        public function addartisan(){
            $this->load->view("admin/header");
            $this->load->view("admin/artisan/add");
            $this->load->view("admin/footer");
        }

        public function insertartisan(){
            $table = "artisans";
            $artisannmodel = $this->load->model("artisanmodel");
            $name = $_POST['a_name'];
            $data = array(
                'a_name' => $name
            );

            $result = $artisannmodel->insertartisan($table, $data);
            if($result == 0){

            }else{
                header("Location:".BASE_URL."/artisan/index");
            }
        }

        public function editartisan($id){
            $this->load->view('admin/header');
            $artisannmodel = $this->load->model("artisanmodel");
            $table = "artisans";
            $cond = "$table.a_id= '$id'";
            $data["artisanbyid"] = $artisannmodel->list_artisanbyid($table, $cond );
            $this->load->view("admin/artisan/edit",$data);
            $this->load->view("admin/footer");

        }

        public function updateartisan($id){
            $artisannmodel = $this->load->model("artisanmodel");
            $table= "artisans";
            $cond = "$table.a_id='$id'";
            $name = $_POST['a_name'];
            $data = array(
                'a_name' => $name
            );
            $result = $artisannmodel->updateartisan($table, $data, $cond);
            if($result == 0){

            }else{
                header("Location:".BASE_URL."/artisan/index");
            }
        }

        public function deleteartisan($id){
            $artisannmodel = $this->load->model("artisanmodel");
            $table = "artisans";
            $cond = "$table.a_id = '$id'";
            $result = $artisannmodel->deleteartisan($table,$cond);
            if($result == 0){

            }else{
                header("Location:".BASE_URL."/artisan/index");
            }
        }
    }
?>