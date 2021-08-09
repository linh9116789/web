<?php
    class sanpham extends DController{

        public function __construct(){
            Session::init();
			$data = array();
			parent::__construct();

		}

        public function index(){
            $this->danhmuc();
        }

        public function danhmuc($id){
            $product = "products";
            $category = "categories";
            $artisan = "artisans";
            $artisanmodel = $this->load->model('artisanmodel');
            $productmodel = $this->load->model('productmodel');
            $categorymodel = $this->load->model('categorymodel');
            $data['artisanFE'] = $artisanmodel->artisanFE($artisan);
            $data['categoryFE'] = $categorymodel->categoryFE($category);
            $data['productFE']  = $productmodel->productFE($category, $product, $id);
            $this->load->view('header');
            $this->load->view('menu',$data);
            $this->load->view('categoryproduct',$data);
            $this->load->view('footer');
        }

        public function chitietsanpham($id){
            $product = "products";
            $category = "categories";
            $artisan = "artisans";
            $rating = "ratings";

            $cond_rating = "$rating.ra_product_id = $product.id AND $rating.ra_product_id ='$id'";

            $cond = "$product.pro_category_id = $category.c_id AND $product.id ='$id'";

            $artisanmodel = $this->load->model('artisanmodel');
            $productmodel = $this->load->model('productmodel');
            $categorymodel = $this->load->model('categorymodel');
            $ratingmodel = $this->load->model('ratingmodel');
            $data['artisanFE'] = $artisanmodel->artisanFE($artisan);
            $data['categoryFE'] = $categorymodel->categoryFE($category);

            $data['product_detail']  = $productmodel->product_detail($category, $product, $cond);

            foreach($data['product_detail'] as $key => $cate){
                $category_id = $cate['c_id'];
            }
            $related_cond = "$product.pro_category_id = $category.c_id AND $category.c_id = '$category_id' AND $product.id NOT IN('$id')";

            $data['related_product']  = $productmodel->related_product($category, $product, $related_cond);
            $data['ratingFE'] = $ratingmodel->ratingFE($rating,$product,$cond_rating);
            
            //Tinh toan tong so danh gia binh luan
            $data['ratings'] = $ratingmodel->ratingtet($rating,$id);
            $arrayRating = [];
            for($i = 1;$i<=5;$i++){
                $arrayRating[$i]=[
                    'total' => 0, 
                    'ra_number' => 0, 
                    'sum' => 0 
                ];
                foreach($data['ratings'] as $item){
                    if($item['ra_number']==$i){
                        $arrayRating[$i] = $item;
                        continue;
                    }
                }
            }
            $data['arrayRating'] = $arrayRating;
            

            $this->load->view('header');
            $this->load->view('menu',$data);
            $this->load->view('productdetail',$data);
            $this->load->view('footer');
        }
    }
?>