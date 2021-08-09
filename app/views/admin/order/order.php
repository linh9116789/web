<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Danh sách đơn hàng</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="dataTables_length" id="dataTable_length">
                <?php
                    if(!empty($_GET['msg'])){
                        $msg = unserialize(urldecode($_GET['msg']));
                        foreach($msg as $key =>$value){
                            echo '<span style="color:blue">'.$value.'</span>';
                        }
                    }
                ?>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <label style="float:right;"></label>
            </div>
        </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Code đơn hàng</th>
                            <th>Ngày đặt</th>
                            <th>Trạng thái</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <?php 
                        $i= 0; 
                        foreach($orders as $key =>$order){
                            $i++;
                    ?>
                    <tbody>
                        <tr>
                            <td><?php echo $i ?></td>
                            <td><?php echo $order['od_code'] ?></td>
                            <td><?php echo $order['od_date']?></td> 
                            <td>
                                <?php if($order['od_status'] == 0){?>
                                    <span class = "badge badge-secondary">Đơn hàng mới</span>
                                <?php }else{?> 
                                    <span class = "badge badge-success">Đã xử lý</span>    
                                <?php }?>
                            </td> 
                            <td>
                                <a href="<?php echo BASE_URL ?>/order/order_detail/<?php echo $order['od_code'] ?>" class="btn btn-primary">Chi tiết</a>
                            </td>
                        </tr>
                    </tbody>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>