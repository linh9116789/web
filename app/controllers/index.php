<?php
    class index extends DController{

        public function __construct(){

            $data= array();
            parent::__construct();
        }

        public function index(){
            $this->homepage();
        }

        public function homepage(){
            Session::init();
            $category = "categories";
            $artisan = "artisans";
            $product = "products";
            $post = "posts";
            $slide = "slides";
            $cond = "$product.pro_hot = 1";
            $categorymodel = $this->load->model('categorymodel');
            $productmodel = $this->load->model('productmodel');
            $artisanmodel = $this->load->model('artisanmodel');
            $postmodel = $this->load->model('postmodel');
            $slidemodel = $this->load->model('slidemodel');
            $data['artisanFE'] = $artisanmodel->artisanFE($artisan);
            $data['categoryFE'] = $categorymodel->categoryFE($category);
            $data['producHot'] = $productmodel->producthot($product, $cond);
            $data['productNew'] = $productmodel->productnew($product);
            $data['postHot'] = $postmodel->posthot($post);
            $data['slideFE'] = $slidemodel->slideFE($slide);
            $this->load->view('header');
            $this->load->view('menu',$data);
            $this->load->view('slide',$data);
            $this->load->view('home',$data);
            $this->load->view('footer');
        }

        // public function catebyid(){
        //     $this->load->view('header');
        //     $category  = "categories";
        //     $id = 1;
        //     $homemodel = $this->load->model('homemodel');
        //     $data['catebyid'] = $homemodel->catebyid($category,$id);
        //     $this->load->view('categoryid',$data);
        //     $this->load->view('footer');
        // }

        // public function insertcategory(){
        //     $homemodel = $this->load->model('homemodel');
        //     $category  = "categories";
        //     $data = array(
        //         'c_name'=>'dong ho'
        //     );
        //     $homemodel->insertcategory($category, $data);
        // }

        // public function updatecategory()
        // {
        //     $homemodel = $this->load->model('homemodel');
        //     $category  = "categories";
        //     $id = 4;
        //     $cond = "$category.id = $id";
        //     $data = array(
        //         'c_name'=>'Giay the thao'
        //     );
        //     $homemodel->updatecategory($category, $data, $cond);
        // }

        // public function deletecategory(){
        //     $homemodel = $this->load->model('homemodel');
        //     $category  = "categories";
        //     $id = 5;
        //     $cond = "$category.id = $id";
        //     $homemodel->deletecategory($category,$cond);
        // }

        public function notfound(){
            $this->load->view('header');
            $this->load->view('404');
            $this->load->view('footer');
        }
    }
?>