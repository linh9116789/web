<?php 
    class category extends DController{
        public function __construct()
        {
            Session::checkSession();
            $data=array();
            parent::__construct();
        }
        public function index(){
            $this->categoryShow();
        }

        public function categoryShow(){
            $this->load->view('admin/header');
            $table = "categories";
            $categorymodel = $this->load->model("categorymodel");
            //phan trang
            // $data['Allcategory'] = $categorymodel->Allcategory($table);
            // foreach($data['Allcategory'] as $allcate){
            //     $totalRecords = $allcate['sosanpham'];
            // }
            // $item_page = 2; //số sản phẩm trên 1 trang
            // $current_page=1;//Số trang
            // $offset = ($current_page-1)*$item_page;
            // $cond = "LIMIT $item_page OFFSET $offset ";
            // $totalPages = ceil($totalRecords/$item_page);

            $data['category'] = $categorymodel->list_category($table);
            $this->load->view('admin/category/index',$data);
            $this->load->view('admin/footer');
        }

        public function addcategory(){
            $this->load->view('admin/header');
            $this->load->view('admin/category/add');
            $this->load->view('admin/footer');
        }

        public function insertcategory(){
            $table = "categories";
            $categorymodel = $this->load->model("categorymodel");
            $name = $_POST['c_name'];
            $data = array(
                'c_name'=>$name
            );
            $result = $categorymodel->insertcategory($table, $data);
            if($result == 0){

            }else{
                header("Location:".BASE_URL."/category/index");
            }
        }

        public function editcategory($id){
            $this->load->view('admin/header');
            $categorymodel = $this->load->model("categorymodel");
            $table = "categories";
            $cond = "$table.c_id = '$id'";
            $data['categoryid'] = $categorymodel->list_categorybyid($table,$cond);
            $this->load->view('admin/category/edit',$data);
            $this->load->view('admin/footer');
        }

        public function updatecategory($id){
            $categorymodel = $this->load->model("categorymodel");
            $table = "categories";
            $cond = "$table.c_id = '$id'";
            $name = $_POST['c_name'];
            $data = array(
                'c_name' => $name
            );
            $result = $categorymodel->updatecategory($table, $data, $cond);
            if($result == 0){

            }else{
                header("Location:".BASE_URL."/category/index");
            }

        }

        public function deletecategory($id){
            $categorymodel = $this->load->model('categorymodel');
            $table = "categories";
            $cond = "categories.c_id = '$id'";
            $result = $categorymodel->deletecategory($table, $cond);
            if($result == 0){

            }else{
                header("Location:".BASE_URL."/category/index");
            }
        }
    }

?>