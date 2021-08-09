<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Danh sách tin tức</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="dataTables_length" id="dataTable_length">
                <!-- <?php
                    if(!empty($_GET['msg'])){
                        $msg = unserialize(urldecode($_GET['msg']));
                        foreach($msg as $key =>$value){
                            echo '<span style="color:blue">'.$value.'</span>';
                        }
                    }
                ?> -->
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <label style="float:right;"><a class="btn btn-primary" href="<?php echo BASE_URL ?>/post/addpost">Thêm</a></label>
            </div>
        </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" style="text-align: center;" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tên tin tức</th>
                            <th>Hình ảnh</th>
                            <!-- <th>Nội dung</th> -->
                            <th>Thể loại</th>
                            <th>Nổi bật</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <?php 
                            $i= 0; 
                            foreach($posts as $key =>$post){
                                $i++;
                        ?> 
                    <tbody>
                        <tr>
                            <td><?php echo $i ?></td>
                            <td><?php echo $post['p_name'] ?></td>
                            <td>
                                <img src="<?php echo BASE_URL ?>/public/admin/images/<?php echo $post['p_avatar'] ?>" width="100px" height="100px">
                            </td>
                            <!-- <td><?php echo $post['p_description']?></td> -->
                            <td><?php echo $post['a_name']?></td>
                            <!-- <td>
                                <?php if($post['p_hot'] == 0 ){?>
                                    <span class="btn btn-secondary">Không</span>
                                <?php }else{ ?>
                                    <span class="btn btn-primary">Có</span>
                                <?php } ?>
                            </td> -->
                            <td>
                                <?php if($post['p_hot'] == 0 ){?>
                                    <form action="<?php echo BASE_URL ?>/post/hot_confirm/<?php echo $post['p_id'] ?>" method="POST">
                                        <input type="submit"  value="Không" class="btn btn-danger">
                                    </form> 
                                    <?php } else{ ?>
                                    <form action="<?php echo BASE_URL ?>/post/no_hot_confirm/<?php echo $post['p_id'] ?>" method="POST">
                                        <input type="submit" value="Có" class="btn btn-primary">
                                    </form>   
                                    <?php } ?>
                            </td>
                            <td>
                                <a href="<?php echo BASE_URL ?>/post/editpost/<?php echo $post["p_id"] ?>" class="btn btn-primary">Sửa</a>
                                <a href="<?php echo BASE_URL ?>/post/deletepost/<?php echo $post["p_id"] ?>" class="btn btn-danger">Xóa</a>
                            </td>
                        </tr>
                    </tbody>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>

</div>