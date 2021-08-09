<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="container-inner">
                    <ul>
                        <li class="home">
                            <a href="<?php echo BASE_URL ?>">Home</a>
                            <span><i class="fa fa-angle-right"></i></span>
                        </li>
                        <li class="category3"><span>Giỏ hàng</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="cart-area-start">
	<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-8">
                <div class="panel panel-info">
                    <div class="panel-body">
                        <div class="container_table">
                            <table class="table table-hover table-condensed">
                                <thead>
                                    <tr>
                                        <th>Hình ảnh</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Giá sản phẩm</th>
                                        <th>Số lượng</th>
                                        <th>Tổng tiền</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(isset($_SESSION['shopping_cart'])){ 
                                        $total = 0;
                                    ?>
                                        <form action="<?php echo BASE_URL ?>/cart/updategiohang" method="POST">
                                            <?php foreach($_SESSION['shopping_cart'] as $key =>$pro_cart) {
                                                $totalpro = $pro_cart['pro_price'] * $pro_cart['pro_quanty'];
                                                $total +=$totalpro;
                                            ?>
                                            <tr>
                                                <td>
                                                    <img src="<?php echo BASE_URL ?>/public/admin/images/<?php echo $pro_cart['pro_avatar'] ?>" width="100px" height="100px">
                                                </td>
                                                <td><?php echo $pro_cart['pro_name'] ?></td>
                                                <td style="color: red;"><?php echo number_format($pro_cart['pro_price'],0,',','.').'đ' ?></td>
                                                <td><input type="number" min="1" name="pro_quanty[<?php echo $pro_cart['id'] ?>]" value="<?php echo $pro_cart['pro_quanty'] ?>" style="float: left;width: 55px;padding: 6px 10px;box-sizing: border-box;"></td>
                                                <td style="color: red;"><?php echo number_format($totalpro,0,',','.').'đ' ?></td>
                                                <td>
                                                    <button type="submit" class="btn btn-primary btn-sm" name="update_cart" value="<?php echo $pro_cart['id'] ?>">Cập nhật</button>
                                                    <button type="submit" class="btn btn-danger btn-sm" name="delete_cart" value="<?php echo $pro_cart['id'] ?>">Xóa</button>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </form>
                                        <tr>
                                            <td colspan="6" class="textright_text">
                                                <div class="sum_price_all">
                                                    <span class="text_price">Tổng tiền thành toán</span>: 
                                                    <span class="text_price " style="color: red;"><?php echo number_format($total,0,',','.') ?> đ</span>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-md-4">
                    <form class="form-horizontal" method="post" autocomplete="off" action="<?php echo BASE_URL ?>/cart/dathang">
                            <div class="panel panel-info">
                                <div class="panel-body">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <h4>Thông tin khách hàng</h4>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12"><strong>Họ tên:</strong></div>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" name="name" value="" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12"><strong>Số điện thoại</strong></div>
                                        <div class="col-md-12">
                                            <input type="text" name="sodienthoai" class="form-control" value="" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12"><strong>Email:</strong></div>
                                        <div class="col-md-12">
                                            <input type="text" name="email" class="form-control" value="" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12"><strong>Địa chỉ:</strong></div>
                                        <div class="col-md-12">
                                            <input type="text" name="diachi" class="form-control" value="" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12"><strong>Ghi chú:</strong></div>
                                        <div class="col-md-12">
                                            <input type="text" name="ghichu" class="form-control" value="" />
                                        </div>
                                    </div>
                                    <input type="submit" class="btn btn-primary" value="Thanh toán khi nhận hàng">
                                    <!-- <input type="submit" class="btn btn-primary" value="Thanh toán online"> -->
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>