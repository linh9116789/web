<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Danh mục sản phẩm</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="dataTables_length" id="dataTable_length">  
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <label style="float:right;"><a class="btn btn-primary" href="<?php echo BASE_URL ?>/category/addcategory">Thêm</a></label>
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
                        foreach($category as $key =>$cate){
                            $i++;
                    ?>
                    <tbody>
                        <tr>
                            <td><?php echo $i ?></td>
                            <td><?php echo $cate["c_name"] ?></td>
                            <!-- <td>
                                <?php if($cate["c_status"] == 0){
                                    echo"Không";
                                }else{
                                    echo"Có";
                                }
                                ?>
                            </td> -->
                            <td>
                                <a href="<?php echo BASE_URL ?>/category/editcategory/<?php echo $cate["c_id"] ?>" class="btn btn-primary">Sửa</a>
                                <a href="<?php echo BASE_URL ?>/category/deletecategory/<?php echo $cate["c_id"] ?>" class="btn btn-danger">Xóa</a>
                            </td>
                        </tr>
                    </tbody>
                    <?php } ?>
                </table>
            </div>
            <div class="row">
        <div class="col-sm-12 col-md-7">
        </div>
        <div class="col-sm-12 col-md-5">
            <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
                <ul class="pagination">
                    <li class="paginate_button page-item previous disabled" id="dataTable_previous"><a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                    <li class="paginate_button page-item active"><a href="index=?per_page=4&page=2" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                    <li class="paginate_button page-item "><a href="index=?per_page=4&page=2" aria-controls="dataTable" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                    <li class="paginate_button page-item next" id="dataTable_next"><a href="#" aria-controls="dataTable" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li>
                </ul>
            </div>
        </div>
    </div>
        </div>
     
</div>                            
</div>