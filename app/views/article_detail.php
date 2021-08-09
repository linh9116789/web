<?php
    foreach($post_detail as $key => $value){
        $val_artisan = $value['a_name'];
        $val_name = $value['p_name'];
        $val_id = $value['a_id'];
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
                        <li class="home">
                            <a href="<?php echo BASE_URL ?>/tintuc/danhmuc/<?php echo $val_id ?>"><?php echo $val_artisan ?></a>
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
                <div class="article_content">
                    <?php foreach($post_detail as $key =>$post){?>
                        
                            <h1><?php echo $post['p_name'] ?></h1>
                            <p><?php echo $post['p_description'] ?></p>
                        
                    <?php } ?>
                </div>
            </div>
            <div class="col-sm-4">
               
            </div>
        </div>
    </div>
</div>