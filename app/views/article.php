<?php
    $val_name = '';
    foreach($postFE as $key =>$val){
        $val_name = $val['a_name'];
    }
?>

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
                        <li class="category3"><span><?php echo $val_name ?></span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="product-details-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <?php foreach($postFE as $key =>$post){?>
                <div class="article" style="display: flex;padding:10px 0 ; margin: 10px 0 ; border-bottom: 1px solid #f2f2f2 ">
                    <div class="article_avatar">
                        <a href="<?php echo BASE_URL ?>/tintuc/chitietbaiviet/<?php echo $post['p_id'] ?>">
                        <img src="<?php echo BASE_URL ?>/public/admin/images/<?php echo $post['p_avatar'] ?>" style="width: 200px;height:140px">
                        </a>
                    </div>
                    <div class="article_info" style="width: 80%;margin-left:20px">
                        <h4><a href="<?php echo BASE_URL ?>/tintuc/chitietbaiviet/<?php echo $post['p_id'] ?>"><?php echo $post['p_name'] ?></a></h4>
                        <p><?php echo $post['p_title'] ?></p>
                        <p>ADMIN <span><?php echo $post['created_at'] ?></span></p>
                    </div>
                </div>
                <?php } ?>
            </div>
            <div class="col-sm-4">
                <h4>Bài viết nổi bật</h4>
                <div class="list_article_hot">
                    <?php foreach($postHot as $key => $hot) {?>
                    <div class="list_article_item">
                        <div class="article_img">
                            <a href="">
                                <img style="width: auto;height:245px" src="<?php echo BASE_URL ?>/public/admin/images/<?php echo $hot['p_avatar'] ?>" >
                            </a>
                        </div>
                        <div class="article_info" style="margin-bottom:20px">
                            <h3 style="font-size:16px;margin-top:10px;margin-bottom:10px"><?php echo $post['p_name'] ?></h3>
                            <p><?php echo $post['p_title'] ?></p>
                            <!-- <span style="float:right;margin-bottom:10px"><a href="">Xem thêm</a></span> -->
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</div>