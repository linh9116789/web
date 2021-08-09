<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Chi tiết đơn hàng</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-sm-12 col-md-9">
                <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tên sản phẩm</th>
                                <th>Hình ảnh</th>
                                <th>Số lượng</th>
                                <th>Đơn giá</th>
                                <th>Thành tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=0; $total = 0;
                            foreach($order_detail as $key =>$order){ 
                                $total+=$order['od_detail_quanty'] * $order['pro_price'];
                                $i++; 
                            ?> 
                            <tr>
                                <th><?php echo $i ?></th>
                                <th><?php echo $order['pro_name'] ?></th>
                                <th><img src="<?php echo BASE_URL ?>/public/admin/images/<?php echo $order['pro_avatar'] ?>" height="100" width="100" ></th>
                                <th><?php echo $order['od_detail_quanty'] ?></th>
                                <th><?php echo number_format($order['pro_price'],0,',','.').'đ'?></th>
                                <th><?php echo number_format(($order['od_detail_quanty'] * $order['pro_price']),0,',','.' ).'đ'?></th>
                            </tr>
                            <?php 
                            } ?>
                            <form action="<?php echo BASE_URL ?>/order/order_confirm/<?php echo $order['od_detail_code'] ?>" method="POST">
                                <tr>
                                    <td><input type="submit" name="update_od_status" value="Đã xử lý" class="btn btn-success"></td>
                                    <td colspan="6" align="right"><b>Tổng số tiền:</b> <span style="color: red;"><?php echo number_format($total,0,',','.').'đ'?></span> </td>
                                </tr>
                            </form> 
                        </tbody>
                    </table>
                </div>

                <div class="col-sm-12 col-md-3">
                    <div class="row">
                        <?php foreach($order_info as $key => $info) {?>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <h5>Thông tin khách hàng</h5>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12"><b>Tên khách hàng:</b></div>
                                <div class="col-sm-12">
                                    <span><?php echo $info['name']  ?></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><b>Số điện thoại:</b></div>
                                <div class="col-md-12">
                                    <span><?php echo $info['sodienthoai']  ?></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><b>Địa chỉ:</b></div>
                                <div class="col-md-12">
                                    <span><?php echo $info['diachi']  ?></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><b>Email:</b></div>
                                <div class="col-md-12">
                                    <span><?php echo $info['email']  ?></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><b>Ghi chú:</b></div>
                                <div class="col-md-12">
                                    <span><?php echo $info['ghichu']  ?></span>
                                </div>
                            </div>
                    
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>