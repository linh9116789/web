<?php
    class post extends DController{
        public function __construct()
        {
            Session::checkSession();
            $data = array();
            parent::__construct();
        }

        public function index(){
            $this->showPost();
        }

        public function showPost()
        {
            $this->load->view("admin/header");
            
            $table = "posts";
            $artisan = "artisans";
            $postmodel = $this->load->model("postmodel");
            $data['posts'] = $postmodel->showPost($table, $artisan);
            $this->load->view("admin/post/index",$data);
            $this->load->view("admin/footer");
        }

        public function addpost(){
            $this->load->view("admin/header");
            $artisanmodel = $this->load->model("artisanmodel");
            $table = "artisans";
            $data['artisans'] = $artisanmodel->list_artisan($table);
            $this->load->view("admin/post/add",$data);
            $this->load->view("admin/footer");
        }

        public function editpost($id){
            $this->load->view("admin/header");
            $artisanmodel = $this->load->model("artisanmodel");
            $postmodel = $this->load->model("postmodel");
            $table = "artisans";
            $post = "posts";
            $cond = "$post.p_id = '$id'";
            $data['artisans'] = $artisanmodel->list_artisan($table);
            $data['postbyid'] = $postmodel->postbyid($post , $cond);
            $this->load->view("admin/post/edit",$data);
            $this->load->view("admin/footer");
        }

        public function insertpost(){
            $table = "posts";
            $postmodel = $this->load->model("postmodel");
            
            $name               = $_POST['p_name'];
            $post_artisan_id    = $_POST['post_artisan_id'];
            $description        = $_POST['p_description'];
            // $p_avatar           = $_POST['p_avatar'];

            $images = $_FILES['p_avatar']['name'];
            $tmp_image =  $_FILES['p_avatar']['tmp_name'];

            $div = explode('.', $images);
            $file_ext = strtolower(end($div));
            $unique_image = $div[0].time().'.'.$file_ext;
            $path_uploads = "public/admin/images/".$unique_image;

            $data = array(
                'p_name'            => $name,
                'post_artisan_id'   => $post_artisan_id,
                'p_description'     => $description,
                'p_avatar'          => $unique_image
            );

            $result = $postmodel->insertpost($table, $data);
            if($result == 1){
                move_uploaded_file($tmp_image, $path_uploads);
                $message['msg'] = "Thêm dữ liệu thành công !";
            header("Location:".BASE_URL."/post/index?msg=".urldecode(serialize($message)));
            }else{
                $message['msg'] = "Thêm dữ liệu thất bại !";
                header("Location:".BASE_URL."/post/index?msg=".urldecode(serialize($message)));
            }
        }

        public function updatepost($id){
            $table = "posts";
            $cond = "p_id = '$id'";
            $postmodel = $this->load->model("postmodel");
            
            $name               = $_POST['p_name'];
            $post_artisan_id    = $_POST['post_artisan_id'];
            $description        = $_POST['p_description'];
            // $p_avatar           = $_POST['p_avatar'];

            $images = $_FILES['p_avatar']['name'];
            $tmp_image =  $_FILES['p_avatar']['tmp_name'];

            $div = explode('.', $images);
            $file_ext = strtolower(end($div));
            $unique_image = $div[0].time().'.'.$file_ext;
            $path_uploads = "public/admin/images/".$unique_image;

            if($images){
                $data['postbyid'] = $postmodel->postbyid($table, $cond);
                foreach($data['postbyid'] as $key =>$value){
                    $path_unlink = "public/admin/images/";
                    unlink($path_unlink.$value['p_avatar']);
                }
                move_uploaded_file($tmp_image, $path_uploads);
            $data = array(
                'p_name'            => $name,
                'post_artisan_id'   => $post_artisan_id,
                'p_description'     => $description,
                'p_avatar'          => $unique_image
            );
            }else{
                $data = array(
                    'p_name'            => $name,
                    'post_artisan_id'   => $post_artisan_id,
                    'p_description'     => $description
                    // 'p_avatar'          => $unique_image
                );
            }

            $result = $postmodel->updatepost($table, $data, $cond);
            if($result == 1){
                move_uploaded_file($tmp_image, $path_uploads);
                $message['msg'] = "Cập nhật dữ liệu thành công !";
            header("Location:".BASE_URL."/post/index?msg=".urldecode(serialize($message)));
            }else{
                $message['msg'] = "Cập nhật dữ liệu thất bại !";
                header("Location:".BASE_URL."/post/index?msg=".urldecode(serialize($message)));
            }
        }

        public function deletepost($id){
            $postmodel = $this->load->model("postmodel");

            $table = "posts";
            $cond = "$table.p_id = '$id'";

            $result = $postmodel->deletepost($table, $cond);
            if($result == 0){

            }else{
                header("Location:".BASE_URL."/post/index");
            }
        }

        public function hot_confirm($id){
            $postmodel = $this->load->model("postmodel");
            $table = "posts";
            $cond = "$table.p_id = '$id'";
            $data = array(
                'p_hot' => 1
            );
            $result = $postmodel->update_hot($table,$data, $cond);
            if($result == 1){
                header("Location:".BASE_URL."/post/index");
            }
        }

        public function no_hot_confirm($id){
            $postmodel = $this->load->model("postmodel");
            $table = "posts";
            $cond = "$table.p_id = '$id'";
            $data = array(
                'p_hot' => 0
            );
            $result = $postmodel->update_hot($table,$data, $cond);
            if($result == 1){
                header("Location:".BASE_URL."/post/index");
            }
        }
    }
?>