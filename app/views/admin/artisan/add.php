<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Thêm danh mục</h1>
    <!-- DataTales Example -->
    <?php
            if(!empty($_GET['msg'])){
                $msg = unserialize(urldecode($_GET['msg']));
                foreach($msg as $key =>$value){
                    echo '<span style="color:blue">'.$value.'</span>';
                }
            }
        ?>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
        <div class="row">
        <div class="col-sm-12 col-md-6">
            <form action="<?php echo BASE_URL ?>/artisan/insertartisan" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Tên danh mục</label>
                <input type="text" name="a_name" class="form-control">
            </div>
            <!-- <div class="form-group">
                <label for="exampleInputEmail1">Trạng thái</label>
                <select name="c_status" id="">
                    <option value="0">Không</option>
                    <option value="1">Có</option>
                </select>
            </div> -->
            <button type="submit" class="btn btn-primary">Thêm dữ liệu</button>
            </form>
        </div>
        </div>
        </div>
    </div>