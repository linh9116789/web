<?php 
    class slide extends DController{
        public function __construct()
        {
            Session::checkSession();
            $data=array();
            parent::__construct();
        }
        public function index(){
            $this->slideShow();
        }

        public function slideShow(){
            $this->load->view('admin/header');
            $table = "slides";
            $slidemodel = $this->load->model("slidemodel");
            $data['slides'] = $slidemodel->list_slide($table);
            $this->load->view('admin/slide/index',$data);
            $this->load->view('admin/footer');
        }

        public function addslide(){
            $this->load->view('admin/header');
            $this->load->view('admin/slide/add');
            $this->load->view('admin/footer');
        }

        public function insertslide(){
            $table = "slides";
            $slidemodel = $this->load->model("slidemodel");

            $name = $_POST['s_name'];
            $link = $_POST['s_link'];

            $images = $_FILES['s_avatar']['name'];
            $tmp_image =  $_FILES['s_avatar']['tmp_name'];

            $div = explode('.', $images);
            $file_ext = strtolower(end($div));
            $unique_image = $div[0].time().'.'.$file_ext;
            $path_uploads = "public/admin/images/slide/".$unique_image;

            $data = array(
                's_name'    => $name,
                's_link'    => $link,
                's_avatar'  => $unique_image
            );
            // print_r($data);
            $result = $slidemodel->insertslide($table, $data);
            if($result == 1){
                move_uploaded_file($tmp_image, $path_uploads);
                header("Location:".BASE_URL."/slide/index");
            }else{
                header("Location:".BASE_URL."/slide/add");
            }
        }

        public function editslide($id){
            $this->load->view('admin/header');
            $slidemodel = $this->load->model("slidemodel");
            $table = "slides";
            $cond = "$table.s_id = '$id'";
            $data['slideid'] = $slidemodel->list_slidebyid($table,$cond);
            $this->load->view('admin/slide/edit',$data);
            $this->load->view('admin/footer');
        }

        public function updateslide($id){
            $table = "slides";
            $slidemodel = $this->load->model("slidemodel");
            $cond = "slides.s_id = '$id'";
            $name = $_POST['s_name'];
            $link = $_POST['s_link'];

            $images = $_FILES['s_avatar']['name'];
            $tmp_image =  $_FILES['s_avatar']['tmp_name'];

            $div = explode('.', $images);
            $file_ext = strtolower(end($div));
            $unique_image = $div[0].time().'.'.$file_ext;
            $path_uploads = "public/admin/images/slide/".$unique_image;

            if($images){
                $data['slidebyid'] = $slidemodel->slidebyid($table, $cond);
                foreach($data['slidebyid'] as $key =>$value){
                    $path_unlink = "public/admin/images/slide/";
                    unlink($path_unlink.$value['s_avatar']);
                }
                move_uploaded_file($tmp_image, $path_uploads);
                $data = array(
                    's_name'=>$name,
                    's_link'=>$link,
                    's_avatar'=>$unique_image
                );
            }else{
                $data = array(
                    's_name'=>$name,
                    's_link'=>$link,
                    // 's_avatar'=>$unique_image
                );
            }
            $result = $slidemodel->updateslide($table, $data, $cond);
            if($result == 1){
                move_uploaded_file($tmp_image, $path_uploads);
                header("Location:".BASE_URL."/slide/index");
            }else{
                header("Location:".BASE_URL."/slide/edit");
            }

        }

        public function deleteslide($id){
            $slidemodel = $this->load->model('slidemodel');
            $table = "slides";
            $cond = "slides.s_id = '$id'";
            $result = $slidemodel->deleteslide($table, $cond);
            if($result == 0){

            }else{
                header("Location:".BASE_URL."/slide/index");
            }
        }
    }

?>