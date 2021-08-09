<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Sửa sản phẩm</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
        <?php foreach($productbyid as $key =>$product) {?>
            <form action="<?php echo BASE_URL ?>/product/updateproduct/<?php echo $product['id'] ?>" method="POST" enctype='multipart/form-data'>
                <div class="row">
                    <div class="col-sm-12 col-md-7">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên sản phẩm</label>
                            <input type="text" value="<?php echo $product['pro_name'] ?>" name="pro_name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">--Loại sản phẩm---</label>
                            <select name="pro_category_id" class="form-control">
                                <?php foreach($category as $key => $cate) {?>
                                <option <?php if($cate['c_id'] == $product['pro_category_id']){echo "selected";} ?> value="<?php echo $cate['c_id'] ?>"><?php echo $cate['c_name'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tiêu đề sản phẩm</label>
                            <input type="text" value="<?php echo $product['pro_title'] ?>" name="pro_title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Mô tả sản phẩm</label>
                            <textarea name="pro_content" " id="editor1" cols="30" rows="10"></textarea>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-5">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Giá sản phẩm</label>
                            <input type="text" name="pro_price" value="<?php echo $product['pro_price'] ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Giảm giá</label>
                                        <input type="text" name="pro_sale" value="<?php echo $product['pro_sale'] ?>" min='1' class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Số lượng</label>
                                        <input type="text" name="pro_qty" min='1' value="<?php echo $product['pro_qty'] ?>" class="form-control">
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="form-group">
                            <img src="<?php echo BASE_URL ?>/public/admin/images/<?php echo $product['pro_avatar'] ?>" style="border: 1px solid #858796;" id="blah" alt="" width="100%" height="200px">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Hình ảnh</label>
                            <input type="file" id="imgInp"  name="pro_avatar" class="form-control">
                        </div>
                        
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Thêm dữ liệu</button>
            </form>
        <?php }?>
        </div>
    </div>
</div>