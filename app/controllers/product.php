<?php 
    class product extends DController{
        public function __construct()
        {
            Session::checkSession();
            $data = array();
            parent::__construct();
        }

        public function index(){
            $this->productShow();
        }
        
        public function productShow(){
            $this->load->view('admin/header');
            $productmodel = $this->load->model("productmodel");

            $category = "categories";
            $product = "products";

            $data['product'] = $productmodel->list_product($product, $category);

            $this->load->view('admin/product/index',$data);
            $this->load->view('admin/footer');
        }

        public function addproduct(){
            $this->load->view('admin/header');
            $table = "categories";
            $categorymodel = $this->load->model("categorymodel");
            $data['category'] = $categorymodel->list_category($table);
            $this->load->view('admin/product/add',$data);
            $this->load->view('admin/footer');
        }

        public function editproduct($id){
            $product = "products";
            $category = 'categories';
            $cond = "$product.id = '$id'";

            $productmodel = $this->load->model('productmodel');
            $categorymodel = $this->load->model('categorymodel');
            
            $data['category'] = $categorymodel->list_category($category);
            $data['productbyid'] = $productmodel->productbyid($product, $cond);
            $this->load->view('admin/header');
            $this->load->view('admin/product/edit',$data);
            $this->load->view('admin/footer');
        }

        public function insertproduct(){
            $productmodel = $this->load->model("productmodel");
            $table ="products";
            
            $name = $_POST['pro_name'];
            $price = $_POST['pro_price'];
            $title = $_POST['pro_title'];
            $content = $_POST['pro_content'];
            $sale = $_POST['pro_sale'];
            $qty = $_POST['pro_qty'];
            $pro_cate = $_POST['pro_category_id'];
            
            $images = $_FILES['pro_avatar']['name'];
            $tmp_image =  $_FILES['pro_avatar']['tmp_name'];

            $div = explode('.', $images);
            $file_ext = strtolower(end($div));
            $unique_image = $div[0].time().'.'.$file_ext;
            $path_uploads = "public/admin/images/".$unique_image;

            $data = array(
                'pro_name'          => $name,
                'pro_price'         => $price,
                'pro_title'         => $title,
                'pro_content'       => $content,
                'pro_sale'          => $sale,
                'pro_avatar'        => $unique_image,
                'pro_category_id'   => $pro_cate,
                'pro_qty'           => $qty
            );
            // print_r($data);
            
            $result = $productmodel->insertproduct($table, $data);
            if($result == 1){
                move_uploaded_file($tmp_image, $path_uploads);
                $message['msg'] = "Thêm dữ liệu thành công !";
            header("Location:".BASE_URL."/product/index?msg=".urldecode(serialize($message)));
            }else{
                $message['msg'] = "Thêm dữ liệu thất bại !";
                header("Location:".BASE_URL."/product/index?msg=".urldecode(serialize($message)));
            }
        }

        public function updateproduct($id){
            $productmodel = $this->load->model("productmodel");

            $table ="products";
            $cond = "id = '$id'";

            $name = $_POST['pro_name'];
            $price = $_POST['pro_price'];
            $title = $_POST['pro_title'];
            $content = $_POST['pro_content'];
            $sale = $_POST['pro_sale'];
            $qty = $_POST['pro_qty'];
            $pro_cate = $_POST['pro_category_id'];
            
            $images = $_FILES['pro_avatar']['name'];
            $tmp_image =  $_FILES['pro_avatar']['tmp_name'];

            $div = explode('.', $images);
            $file_ext = strtolower(end($div));
            $unique_image = $div[0].time().'.'.$file_ext;
            $path_uploads = "public/admin/images/".$unique_image;

            if($images){
                    $data['productbyid'] = $productmodel->productbyid($table, $cond);
                    foreach($data['productbyid'] as $key =>$value){
                        $path_unlink = "public/admin/images/";
                        unlink($path_unlink.$value['pro_avatar']);
                    }
                    move_uploaded_file($tmp_image, $path_uploads);
                $data = array(
                    'pro_name'          => $name,
                    'pro_price'         => $price,
                    'pro_title'         => $title,
                    'pro_content'       => $content,
                    'pro_sale'          => $sale,
                    'pro_avatar'        => $unique_image,
                    'pro_category_id'   => $pro_cate,
                    'pro_qty'           => $qty
                );
            }else{
                $data = array(
                    'pro_name'          => $name,
                    'pro_price'         => $price,
                    'pro_title'         => $title,
                    'pro_content'       => $content,
                    'pro_sale'          => $sale,
                    // 'pro_avatar'        => $unique_image,
                    'pro_category_id'   => $pro_cate,
                    'pro_qty'           => $qty
                );
            }
            
            $result = $productmodel->updateproduct($table, $data, $cond);
            if($result == 1){
                move_uploaded_file($tmp_image, $path_uploads);
                $message['msg'] = "Cập nhật dữ liệu thành công !";
            header("Location:".BASE_URL."/product/index?msg=".urldecode(serialize($message)));
            }else{
                $message['msg'] = "Cập nhật dữ liệu thất bại !";
                header("Location:".BASE_URL."/product/index?msg=".urldecode(serialize($message)));
            }

        }

        public function deleteproduct($id){
            $productmodel = $this->load->model("productmodel");
            $table ="products";
            $cond = "products.id = '$id'";

            $result = $productmodel->deleteproduct($table, $cond);
            if($result == 1){
                $message['msg'] = "Xóa dữ liệu thành công !";
            header("Location:".BASE_URL."/product/index?msg=".urldecode(serialize($message)));
            }else{
                $message['msg'] = "Xóa dữ liệu thất bại !";
                header("Location:".BASE_URL."/product/index?msg=".urldecode(serialize($message)));
            }
        }

        public function hot_confirm($id){
            $productmodel = $this->load->model("productmodel");
            $table ="products";
            $cond = "products.id = '$id'";
            $data = array(
                'pro_hot' => 1
            );
            $result = $productmodel->update_hot($table,$data, $cond);
            if($result == 1){
                header("Location:".BASE_URL."/product/index");
            }
        }

        public function no_hot_confirm($id){
            $productmodel = $this->load->model("productmodel");
            $table ="products";
            $cond = "products.id = '$id'";
            $data = array(
                'pro_hot' => 0
            );
            $result = $productmodel->update_hot($table,$data, $cond);
            if($result == 1){
                header("Location:".BASE_URL."/product/index");
            }
        }
    }
?>