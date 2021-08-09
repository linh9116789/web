<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Danh sách sản phẩm</h1>
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
                <label style="float:right;"><a class="btn btn-primary" href="<?php echo BASE_URL ?>/product/addproduct">Thêm</a></label>
            </div>
        </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" style="text-align: center;" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tên sản phẩm</th>
                            <th>Hình ảnh</th>
                            <th>Loại sản phẩm</th>
                            <th>Nổi bật</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <?php 
                            $i= 0; 
                            foreach($product as $key =>$prod){
                                $i++;
                        ?> 
                        <tr>
                            <td><?php echo $i ?></td>
                            <td style="text-align:left;">
                                <li>Tên sản phẩm: <?php echo $prod['pro_name'] ?></li>
                                <li>Giá: <?php echo number_format($prod['pro_price'],0,',','.').'đ'?></li>
                                <li>Phần trăm giảm: <?php echo $prod['pro_sale'].'%' ?></li>
                                <li>Số lượng: <?php echo $prod['pro_qty']?></li>
                            </td>
                            <td>
                                <img src="<?php echo BASE_URL ?>/public/admin/images/<?php echo $prod['pro_avatar'] ?>" width="100px" height="100px">
                            </td>
                            <td><?php echo $prod['c_name']?></td>
                            <!-- <td>
                                <?php if($prod['pro_hot'] == 0 ){?>
                                    <span class="btn btn-secondary">Không</span>
                                <?php }else{ ?>
                                    <span class="btn btn-primary">Có</span>
                                <?php } ?>
                            </td> -->
                            <td>
                                <?php if($prod['pro_hot'] == 0 ){?>
                                    <form action="<?php echo BASE_URL ?>/product/hot_confirm/<?php echo $prod['id'] ?>" method="POST">
                                        <input type="submit"  value="Không" class="btn btn-danger">
                                    </form> 
                                    <?php } else{ ?>
                                    <form action="<?php echo BASE_URL ?>/product/no_hot_confirm/<?php echo $prod['id'] ?>" method="POST">
                                        <input type="submit" value="Có" class="btn btn-primary">
                                    </form>   
                                    <?php } ?>
                            </td>
                            
                            <td>
                                <a href="<?php echo BASE_URL ?>/product/editproduct/<?php echo $prod["id"] ?>" class="btn btn-primary">Sửa</a>
                                <a href="<?php echo BASE_URL ?>/product/deleteproduct/<?php echo $prod["id"] ?>" class="btn btn-danger">Xóa</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>