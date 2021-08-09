<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Cập nhật danh mục</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
        <div class="row">
        <div class="col-sm-12 col-md-6">
        <?php foreach($artisanbyid as $key => $artisan){ ?>
            <form action="<?php echo BASE_URL ?>/artisan/updateartisan/<?php echo $artisan['a_id'] ?>" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Tên danh mục</label>
                <input type="text" name="a_name" value="<?php echo $artisan['a_name'] ?>" class="form-control">
            </div>
            <!-- <div class="form-group">
                <label for="exampleInputEmail1">Trạng thái</label>
                <input type="text" name="c_status" class="form-control">
            </div> -->
            <button type="submit" class="btn btn-primary">Cập nhật dữ liệu</button>            
            </form>
            <?php }?>
        </div>
        </div>
        </div>
    </div>