
   <!-- product section start -->
   <div class="our-product-area new-product">
      <div class="container">
         <div class="area-title">
            <h2>SẢN PHẨM MỚI</h2>
         </div>
         <!-- our-product area start -->
         <div class="row">
            <div class="col-md-12">
               <div class="row">
                  <div class="features-curosel">
                     <!-- single-product start -->
                     <?php foreach($productNew as $key => $proNew) {?>
                     <div class="col-lg-12 col-md-12">
                        <div class="single-product first-sale">
                           <div class="product-img">
                              <?php if($proNew['pro_sale']) {?>
                              <span style="position: absolute;background-image: linear-gradient(-90deg, #FC202F, #FF727B);border-radius: 25px;padding: 5px 10px;padding-left: 15px;padding-right: 15px;right: 7px;top: 7px;color: white;">Giảm <?php echo $proNew['pro_sale'] ?>%</span>
                              <?php }?>
                              <a href="<?php echo BASE_URL ?>/sanpham/chitietsanpham/<?php echo $proNew['id'] ?>">
                              <img class="primary-image" style="height: 360px;" src="<?php echo BASE_URL ?>/public/admin/images/<?php echo $proNew['pro_avatar'] ?>" alt="" />
                              <!-- <img class="secondary-image" src="<?php echo BASE_URL ?>/public/admin/images/<?php echo $proNew['pro_avatar'] ?>" alt="" /> -->
                              </a>
                              <div class="action-zoom">
                                 <div class="add-to-cart">
                                    <a href="<?php echo BASE_URL ?>/sanpham/chitietsanpham/<?php echo $proNew['id'] ?>" title="Quick View"><i class="fa fa-search-plus"></i></a>
                                 </div>
                              </div>
                              <div class="actions">
                                 <div class="action-buttons">
                                    <div class="add-to-links">
                                       <div class="add-to-wishlist">
                                          <a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                       </div>
                                       <div class="compare-button">
                                          <a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
                                       </div>
                                    </div>
                                    <div class="quickviewbtn">
                                       <a href="<?php echo BASE_URL ?>/sanpham/chitietsanpham/<?php echo $proNew['id'] ?>" title="Add to Compare"><i class="fa fa-retweet"></i></a>
                                    </div>
                                 </div>
                              </div>
                              <div class="price-box">
                                 <span class="new-price" style="color:red"><?php echo number_format($proNew['pro_price'],0,',','.').'đ' ?></span>
                              </div>
                           </div>
                           <div class="product-content">
                              <h2 class="product-name"><a href="<?php echo BASE_URL ?>/sanpham/chitietsanpham/<?php echo $proNew['id'] ?>"><?php echo $proNew['pro_name'] ?></a></h2>
                              <p>Nunc facilisis sagittis ullamcorper...</p>
                           </div>
                        </div>
                     </div>
                     <?php } ?>
                     <!-- single-product end -->
                  </div>
               </div>
            </div>
         </div>
         <!-- our-product area end -->	
      </div>
   </div>
   <!-- product section end -->
   <!-- banner-area start -->
   <div class="banner-area">
      <div class="container-fluid">
         <div class="row">
            <img src="<?php echo BASE_URL ?>/public/admin/images/slide/imgcontent.jpg" alt="" />
         </div>
      </div>
   </div>
   <!-- banner-area end -->
   <!-- product section start -->
   <div class="our-product-area new-product">
      <div class="container">
         <div class="area-title">
            <h2>SẢN PHẨM HOT</h2>
         </div>
         <!-- our-product area start -->
         <div class="row">
            <div class="col-md-12">
               <div class="row">
                  <div class="features-curosel">
                     <!-- single-product start -->
                     <?php foreach($producHot as $key =>$proHot) { ?>
                     <div class="col-lg-12 col-md-12">
                        <div class="single-product first-sale">
                           <div class="product-img">
                           <?php if($proHot['pro_sale']) {?>
                              <span style="position: absolute;background-image: linear-gradient(-90deg, #FC202F, #FF727B);border-radius: 25px;padding: 5px 10px;padding-left: 15px;padding-right: 15px;right: 7px;top: 7px;color: white;">Giảm <?php echo $proHot['pro_sale'] ?>%</span>
                              <?php }?>
                              <a href="<?php echo BASE_URL ?>/sanpham/chitietsanpham/<?php echo $proHot['id'] ?>">
                              <img class="primary-image" style="height: 360px;" src="<?php echo BASE_URL ?>/public/admin/images/<?php echo $proHot['pro_avatar'] ?>" alt="" />
                              <!-- <img class="secondary-image" src="<?php echo BASE_URL ?>/public/admin/images/<?php echo $proHot['pro_avatar'] ?>" alt="" /> -->
                              </a>
                              <div class="action-zoom">
                                 <div class="add-to-cart">
                                    <a href="<?php echo BASE_URL ?>/sanpham/chitietsanpham/<?php echo $proHot['id'] ?>" title="Quick View"><i class="fa fa-search-plus"></i></a>
                                 </div>
                              </div>
                              <div class="actions">
                                 <div class="action-buttons">
                                    <div class="add-to-links">
                                       <div class="add-to-wishlist">
                                          <a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                       </div>
                                       <div class="compare-button">
                                          <a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
                                       </div>
                                    </div>
                                    <div class="quickviewbtn">
                                       <a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
                                    </div>
                                 </div>
                              </div>
                              <?php
                                 $price_sale = ((100- $proHot['pro_sale'])*$proHot['pro_price'] / 100);
                              ?>
                              <?php if($proHot['pro_sale']){ ?>
                              <div class="price-box">
                              <span class="old-price"><?php echo number_format($proHot['pro_price'],0,',','.').'đ' ?></span>
                                 <span class="new-price" style="color: red;"><?php echo number_format($price_sale,0,',','.').'đ' ?></span>
                              </div>
                              <?php }else{ ?>
                              <div class="price-box">
                                 <span class="new-price" style="color: red;"><?php echo number_format($proHot['pro_price'],0,',','.').'đ' ?></span>
                              </div>
                              <?php }?>
                           </div>
                           <div class="product-content">
                              <h2 class="product-name"><a href="<?php echo BASE_URL ?>/sanpham/chitietsanpham/<?php echo $proHot['id'] ?>"><?php echo $proHot['pro_name'] ?></a></h2>
                              <p>Nunc facilisis sagittis ullamcorper...</p>
                           </div>
                        </div>
                     </div>
                     <?php } ?>
                     <!-- single-product end -->
                  </div>
               </div>
            </div>
         </div>
         <!-- our-product area end -->	
      </div>
   </div>
   <!-- product section end -->
   <!-- latestpost area start -->
   <div class="latest-post-area">
      <div class="container">
         <div class="area-title">
            <h2>TIN HOT</h2>
         </div>
         <div class="row">
            <div class="all-singlepost">
               <!-- single latestpost start -->
               <?php foreach($postHot as $key => $post) {?>
               <div class="col-md-4 col-sm-4 col-xs-12">
                  <div class="single-post">
                     <div class="post-thumb">
                        <a href="<?php echo BASE_URL ?>/tintuc/chitietbaiviet/<?php echo $post['p_id'] ?>">
                        <img src="<?php echo BASE_URL ?>/public/admin/images/<?php echo $post['p_avatar']?>" alt="" />
                        </a>
                     </div>
                     <div class="post-thumb-info">
                        <div class="post-time">
                           <a href="<?php echo BASE_URL ?>/tintuc/chitietbaiviet/<?php echo $post['p_id'] ?>"><?php echo $post['p_name'] ?></a>
                        </div>
                        <div class="postexcerpt">
                           <p> <?php echo substr($post['p_title'],0,500).'...' ?></p>
                           <a href="<?php echo BASE_URL ?>/tintuc/chitietbaiviet/<?php echo $post['p_id'] ?>" class="read-more">Xem thêm</a>
                        </div>
                     </div>
                  </div>
               </div>
               <?php }?>
               <!-- single latestpost end -->
            </div>
         </div>
      </div>
   </div>
   <!-- latestpost area end -->
   <!-- block category area start -->
   
   <!-- block category area end -->
   <!-- testimonial area start -->
   <div class="testimonial-area lap-ruffel">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="crusial-carousel">
                  <div class="crusial-content">
                     <p>“Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat."</p>
                     <span>BootExperts</span>
                  </div>
                  <div class="crusial-content">
                     <p>“Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat."</p>
                     <span>Lavoro Store!</span>
                  </div>
                  <div class="crusial-content">
                     <p>“Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat."</p>
                     <span>MR Selim Rana</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- testimonial area end -->
   <!-- Brand Logo Area Start -->
   <div class="brand-area">
      <div class="container">
         <div class="row">
            <div class="brand-carousel">
               <div class="brand-item"><a href="#"><img src="<?php echo BASE_URL ?>/public/template/img/brand/bg1-brand.jpg" alt="" /></a></div>
               <div class="brand-item"><a href="#"><img src="<?php echo BASE_URL ?>/public/template/img/brand/bg2-brand.jpg" alt="" /></a></div>
               <div class="brand-item"><a href="#"><img src="<?php echo BASE_URL ?>/public/template/img/brand/bg3-brand.jpg" alt="" /></a></div>
               <div class="brand-item"><a href="#"><img src="<?php echo BASE_URL ?>/public/template/img/brand/bg4-brand.jpg" alt="" /></a></div>
               <div class="brand-item"><a href="#"><img src="<?php echo BASE_URL ?>/public/template/img/brand/bg5-brand.jpg" alt="" /></a></div>
               <div class="brand-item"><a href="#"><img src="<?php echo BASE_URL ?>/public/template/img/brand/bg2-brand.jpg" alt="" /></a></div>
               <div class="brand-item"><a href="#"><img src="<?php echo BASE_URL ?>/public/template/img/brand/bg3-brand.jpg" alt="" /></a></div>
               <div class="brand-item"><a href="#"><img src="<?php echo BASE_URL ?>/public/template/img/brand/bg4-brand.jpg" alt="" /></a></div>
            </div>
         </div>
      </div>
   </div>
   <!-- Brand Logo Area End -->
   <!-- FOOTER START -->