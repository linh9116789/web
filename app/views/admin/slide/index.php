<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Danh mục Slide</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="dataTables_length" id="dataTable_length">
                    
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <label style="float:right;"><a class="btn btn-primary" href="<?php echo BASE_URL ?>/slide/addslide">Thêm</a></label>
            </div>
        </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr style="text-align: center;">
                            <th>#</th>
                            <th>Tên slide</th>
                            <th>Ảnh</th>
                            <th>Đường dẫn link ảnh</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <?php 
                        $i= 0; 
                        foreach($slides as $key =>$slide){
                            $i++;
                    ?>
                    <tbody>
                        <tr style="text-align: center;">
                            <td><?php echo $i ?></td>
                            <td><?php echo $slide['s_name'] ?></td>
                            <td >
                                <img src="<?php echo BASE_URL ?>/public/admin/images/slide/<?php echo $slide['s_avatar'] ?>" width="auto" height="100px">
                            </td>
                            <td><?php echo $slide['s_link'] ?></td>
                            <td>
                                <a href="<?php echo BASE_URL ?>/slide/editslide/<?php echo $slide["s_id"] ?>" class="btn btn-primary">Sửa</a>
                                <a href="<?php echo BASE_URL ?>/slide/deleteslide/<?php echo $slide["s_id"] ?>" class="btn btn-danger">Xóa</a>
                            </td>
                        </tr>
                    </tbody>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>

</div>