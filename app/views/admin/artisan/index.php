<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Danh mục tin tức</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="dataTables_length" id="dataTable_length">
                    
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <label style="float:right;"><a class="btn btn-primary" href="<?php echo BASE_URL ?>/artisan/addartisan">Thêm</a></label>
            </div>
        </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tên danh mục</th>
                            <!-- <th>Trạng thái</th> -->
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <?php 
                        $i= 0; 
                        foreach($artisans as $key =>$artisan){
                            $i++;
                    ?>
                    <tbody>
                        <tr>
                            <td><?php echo $i ?></td>
                            <td><?php echo $artisan["a_name"] ?></td>
                            <!-- <td>
                                <?php if($artisan["a_status"] == 0){
                                    echo"Không";
                                }else{
                                    echo"Có";
                                }
                                ?>
                            </td> -->
                            <td>
                                <a href="<?php echo BASE_URL ?>/artisan/editartisan/<?php echo $artisan["a_id"] ?>" class="btn btn-primary">Sửa</a>
                                <a href="<?php echo BASE_URL ?>/artisan/deleteartisan/<?php echo $artisan["a_id"] ?>" class="btn btn-danger">Xóa</a>
                            </td>
                        </tr>
                    </tbody>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>

</div>