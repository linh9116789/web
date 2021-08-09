<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Thêm Slide</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
        <div class="row">
        <div class="col-sm-12 col-md-12">
            <form action="<?php echo BASE_URL ?>/slide/insertslide" method="POST" enctype='multipart/form-data'>
            <div class="form-group">
                <label for="exampleInputEmail1">Tên slide</label>
                <input type="text" name="s_name" class="form-control">
            </div>
            <div class="form-group">
                <img src="<?php echo BASE_URL ?>/public/admin/images/defaultimg.jpg" style="border: 1px solid #858796;" id="blah" alt="" width="100%" height="300px">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Hình ảnh</label>
                <input type="file" id="imgInp"  name="s_avatar" class="form-control">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Đường dẫn link ảnh</label>
                <input type="text" name="s_link" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Thêm dữ liệu</button>
            </form>
        </div>
        </div>
        </div>
    </div>