<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Thêm tin tức</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <form action="<?php echo BASE_URL ?>/post/insertpost" method="POST" enctype='multipart/form-data' >
            <div class="row">
                <div class="col-sm-12 col-md-7">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tên tin tức</label>
                        <input type="text" name="p_name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">--Loại tin tức---</label>
                        <select name="post_artisan_id" class="form-control">
                            <?php foreach($artisans as $key => $artisan) {?>
                            <option value="<?php echo $artisan['a_id'] ?>"><?php echo $artisan['a_name'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" name="p_title"  class="form-control">
                        
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nội dung</label>
                        <textarea name="p_description" id="editor1" cols="30" rows="10"></textarea>
                        
                    </div>
                </div>
                <div class="col-sm-12 col-md-5">
                <div class="form-group">
                        <label for="exampleInputEmail1">Hình ảnh</label>
                        <img src="<?php echo BASE_URL ?>/public/admin/images/defaultimg.jpg" style="border: 1px solid #858796;" id="blah" alt="" width="100%" height="200px">
                    </div>
                    <div class="form-group">
                            <input type="file" id="imgInp" name="p_avatar" class="form-control">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Thêm dữ liệu</button>
            </form>
        </div>
        </div>
    </div>