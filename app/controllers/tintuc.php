<?php
    class tintuc extends DController{

        public function __construct(){
            Session::init();
			$data = array();
			parent::__construct();
		}

        public function index(){
            $this->tintuc();
        }

        public function danhmuc($id){
            $artisan = "artisans";
            $category = "categories";
            $post = "posts";

            $categorymodel = $this->load->model('categorymodel');
            $artisanmodel = $this->load->model('artisanmodel');
            $postmodel = $this->load->model('postmodel');

            $data['categoryFE'] = $categorymodel->categoryFE($category);
            $data['artisanFE'] = $artisanmodel->artisanFE($artisan);
            $data['postFE'] = $postmodel->postFE($post, $artisan, $id);
            $data['postHot'] = $postmodel->posthot($post);
            $this->load->view('header');
            $this->load->view('menu',$data);
            $this->load->view('article',$data);
            $this->load->view('footer');
        }

        public function chitietbaiviet($id){
            $artisan = "artisans";
            $category = "categories";
            $post = "posts";

            $categorymodel = $this->load->model('categorymodel');
            $artisanmodel = $this->load->model('artisanmodel');
            $postmodel = $this->load->model('postmodel');

            $data['categoryFE'] = $categorymodel->categoryFE($category);
            $data['artisanFE'] = $artisanmodel->artisanFE($artisan);
            
            $cond = "$post.post_artisan_id = $artisan.a_id AND $post.p_id ='$id'";
            
            $data['post_detail']  = $postmodel->post_detail($artisan, $post, $cond);
            
            $this->load->view('header');
            $this->load->view('menu',$data);
            $this->load->view('article_detail',$data);
            $this->load->view('footer');
        }
    }
?>