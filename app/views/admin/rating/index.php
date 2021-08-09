<style>
    .rating .active{color: #ff9705 !important}
</style>
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Danh sách đánh giá</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="dataTables_length" id="dataTable_length">
                    
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <a href="<?php echo BASE_URL ?>/rating/tet">TET</a>
            </div>
        </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Thông tin</th>
                            <th>Nội dung đánh giá</th>
                            <th>Tên sản phẩm </th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                        <?php
                            $i = 0;
                            foreach($ratings as $key =>$rating){
                                $i++;
                        ?>
                    <tbody>
                        <tr>
                            <td><?php echo $i ?></td>
                            <td>
                                <li>Tên: <?php echo $rating['ra_name_user'] ?></li>
                                <li>Số điện thoại: <?php echo $rating['ra_sdt'] ?></li>
                                <li>Đánh giá: <span class="rating">
                                <?php for($a = 1; $a <= 5 ; $a++) {?> <i class="fa fa-star <?php echo($a<=$rating['ra_number']) ? 'active':'' ?>" style="color: #999;"></i><?php } ?>
                                </span>
                                </li>
                            </td>
                            <td><?php echo $rating['ra_content'] ?></td>
                            <td><?php echo $rating['pro_name']?></td>
                            <td>
                                <a href="<?php echo BASE_URL ?>/rating/deleterating/<?php echo $rating['ra_id'] ?>" class="btn btn-danger">Xóa</a>
                            </td>
                        </tr>
                    </tbody>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>

</div>