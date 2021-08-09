<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Sửa Slide</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
        <div class="row">
        <div class="col-sm-12 col-md-12">
        <?php foreach($slideid as $slide) {?>
            <form action="<?php echo BASE_URL ?>/slide/updateslide/<?php echo $slide['s_id'] ?>" method="POST" enctype='multipart/form-data'>
            <div class="form-group">
                <label for="exampleInputEmail1">Tên slide</label>
                <input type="text" name="s_name" value="<?php echo $slide['s_name'] ?>" class="form-control">
            </div>
            <div class="form-group">
                <img src="<?php echo BASE_URL ?>/public/admin/images/slide/<?php echo $slide['s_avatar'] ?>" style="border: 1px solid #858796;" id="blah" alt="" width="100%" height="300px">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Hình ảnh</label>
                <input type="file" id="imgInp"  name="s_avatar" class="form-control">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Đường dẫn link ảnh</label>
                <input type="text" name="s_link" value="<?php echo $slide['s_link'] ?>"  class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Cập nhật dữ liệu</button>
            </form>
            <?php } ?>
        </div>
        </div>
        </div>
    </div>