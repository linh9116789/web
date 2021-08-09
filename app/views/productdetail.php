
<?php 
   foreach($product_detail as $key => $valu){
      $name = $valu['pro_name'];
      $pro_total_start = $valu['pro_number_total'];
      $pro_rating_start = $valu['pro_number_rating'];
      $prodetail = $valu['id'];
   }
?>
<style>
   .list_star i:hover{
      cursor: pointer;
   }

   .list_text{
      display: block;
      margin-left: 10px;
      position: relative;
      background: #52b858;
      color: #FFF;
      padding: 2px 8px;
      box-sizing: border-box;
      font-size: 12px;
      border-radius: 2px;
      display: none;
   }

   .list_text:after{
      right: 100%;
      top:50%;
      border: solid transparent;
      content: " ";
      height: 0;
      width: 0;
      position:absolute;
      pointer-events: none;
      border-color: rgba(82, 184, 88, 0);
      border-right-color: #52b852;
      border-width: 6px;
      margin-top: -6px;
   }

   .list_star .rating_active,.pro_rating .active{
      color: #ff9705;
   }

</style>
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
                  <li class="category3"><span><?php echo $name ?></span></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>
<?php foreach($product_detail as $key => $product) {?>
<div class="product-details-area">
   <form action="<?php echo BASE_URL ?>/cart/addcart" method="POST">
   <input type="hidden" value="<?php echo $product['id']?>" name="id">
   <input type="hidden" value="<?php echo $product['pro_avatar']?>" name="pro_avatar">
   <input type="hidden" value="<?php echo $product['pro_name']?>" name="pro_name">
   <input type="hidden" value="<?php echo $product['pro_price']?>" name="pro_price">
   <input type="hidden" value="1" name="pro_quanty">
   <div class="container">
      <div class="row">
         <div class="col-md-5 col-sm-5 col-xs-12">
            <div class="zoomWrapper">
               <div id="img-1" class="zoomWrapper single-zoom">
                  <a href="#">
                     <div style="height:680px;width:480px;" class="zoomWrapper"><img id="zoom1" src="<?php echo BASE_URL ?>/public/admin/images/<?php echo $product['pro_avatar'] ?>"></div>
                  </a>
               </div>
            </div>
         </div>
         <div class="col-md-7 col-sm-7 col-xs-12">
            <div class="product-list-wrapper">
               <div class="single-product">
                  <div class="product-content">
                     <h2 class="product-name"><a href="#"><?php echo $product['pro_name'] ?></a></h2>
                     <div class="rating-price">
                        <div class="pro_rating">
                           <?php
                           if($pro_rating_start){
                                 $ageDetail = 0;
                                 $ageDetail = round($pro_total_start / $pro_rating_start,2);
                              ?>
                              <?php for($i = 1; $i<=5;$i++){?>
                                 <a href="#"><i class="fa fa-star <?php echo($i<=$ageDetail)?'active':'' ?>"></i></a>
                              <?php 
                              }
                           }else{
                           ?>
                           <?php for($i = 1; $i<=5;$i++){?>
                                 <a href="#"><i class="fa fa-star"></i></a>
                              <?php }?>
                           <?php } ?>
                        </div>
                        <div class="price-boxes">
                        <?php
                           $price_sale = ((100- $product['pro_sale'])*$product['pro_price'] / 100);
                        ?>
                        <?php if($product['pro_sale']){ ?>
                           <span class="old-price"><?php echo number_format($product['pro_price'],0,',','.').'đ' ?></span>
                           <span class="new-price" style="color: red;"><?php echo number_format($price_sale,0,',','.').'đ' ?></span>
                        <?php }else{?>
                           <span class="new-price" style="color: red;"><?php echo number_format($product['pro_price'],0,',','.').'đ' ?></span>
                           <?php }?>
                        </div>
                     </div>
                     <div class="product-desc">
                        <p><?php echo $product['pro_title']?></p>
                     </div>
                     <?php if($product['pro_qty'] > 0) {?>
                        <p class="availability in-stock">Tình trạng: <span>Còn hàng</span></p>
                     <?php }else{ ?>
                        <p class="availability in-stock">Tình trạng: <span style="color: red;">Tạm hết hàng</span></p>
                     <?php }?>
                     <div class="actions-e">
                        <div class="action-buttons-single">
                           <div class="inputx-content">
                           </div>
                           <div class="add-to-cart">
                              <input type="submit" name="addcart" value="Mua hàng" class="btn btn-primary">
                           </div>
                           <div class="add-to-links">
                              <div class="add-to-wishlist">
                                 <a href="#" data-toggle="tooltip" title="" data-original-title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                              </div>
                              <div class="compare-button">
                                 <a href="#" data-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-refresh"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="singl-share">
                        <a href="#"><img src="img/single-share.png" alt=""></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-md-12">
         <div class="single-product-tab">
            <!-- Nav tabs -->
            <ul class="details-tab">
               <li class="active"><a href="#home" data-toggle="tab" aria-expanded="true">THÔNG TIN</a></li>
               <li class=""><a href="#messages" data-toggle="tab" aria-expanded="false">ĐÁNH GIÁ</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
               <div role="tabpanel" class="tab-pane active" id="home">
                  <div class="product-tab-content">
                     <?php echo $product['pro_content'] ?>
                  </div>
               </div>
               <div role="tabpanel" class="tab-pane" id="messages">
                  <div class="single-post-comments col-md-6 col-md-offset-3">
                     <div class="comments-area">
                        <h3 class="comment-reply-title" style="text-align: center;">Đánh giá sản phẩm</h3>
                        <div class="comments-list">
                           <div class="component_rating" >
                              <div class="component_rating_content" style="display:flex; align-items: center;border: 1px solid #dedede;margin: 0 -100px;">
                                    <div class="rating-item" style="width: 15%;position: relative;">
                                       <span class="fa fa-star" style="font-size: 100px;color:#ff9705;display:block;text-align:center;margin:0 auto;"></span>
                                       <b style="position: absolute;top: 50%;left: 50%;transform: translateX(-50%) translateY(-50%);color: white;font-size: 23px;">
                                       <?php if($pro_rating_start){ echo $ageDetail;?>
                                          <?php }else{ echo '0';?><?php }?>
                                       </b>
                                    </div>
                                    <div class="list_rating" style="width: 65%;padding:15px">
                                    <?php 
                                    if($pro_rating_start){
                                    foreach($arrayRating as $key =>$arrRating){ 
                                        $itemAge = 0;
                                        $itemAge = round(($arrRating['total']/$pro_rating_start)*100,0);
                                    ?>
                                       <div class="item_rating" style="display:flex;align-items:center">
                                          <div style="width: 8%;font-size: 15px;">
                                             <?php echo $key ?><span class="fa fa-star"></span>
                                          </div>
                                          <div  style="width: 65%;margin:0 8px">
                                             <span style="width:100%; height:6px; display:block; border: 1px solid #dedede; border-radius:5px; background-color:#dedede">
                                             <b style="width:<?php echo $itemAge ?>%;background-color:#ff9705;display:block;height:100%;border-radius:5px"></b>
                                          </span>
                                          </div>
                                          <div  style="width: 27%;font-size: 15px;">
                                             <a href=""><?php echo $arrRating['total'] ?> Đánh giá(<?php echo $itemAge ?>%)</a>
                                          </div>
                                       </div>
                                    <?php } }else{?>
                                       <?php for($i = 1; $i<=5 ; $i++) {?>
                                          <div class="item_rating" style="display:flex;align-items:center">
                                             <div style="width: 10%;font-size: 15px;">
                                                <?php echo $i ?><span class="fa fa-star"></span>
                                             </div>
                                             <div  style="width: 70%;margin:0 8px">
                                                <span style="width:100%; height:6px; display:block; border: 1px solid #dedede; border-radius:5px; background-color:#dedede">
                                                <b style="width:30%;background-color:#ff9705;display:block;height:100%;border-radius:5px"></b>
                                             </span>
                                             </div>
                                             <div  style="width: 20%;font-size: 15px;">
                                                <a href="">0Đánh(0%)</a>
                                             </div>
                                          </div>
                                       <?php }?>
                                       <?php }?>
                                    </div>
                                    <div style="width: 20%;">
                                       <a href="" class="js_rating_action" style="text-decoration: none;width: 200px;background: #288ad6;padding: 5px;color: white;border-radius: 5px;">Gửi đánh giá của bạn</a>
                                    </div>
                              </div>
                              <?php 
                                 $listRating = [
                                    1 => 'Không thích',
                                    2 => 'Tạm được',
                                    3 => 'Bình thường',
                                    4 => 'Rất tốt',
                                    5 => 'Tuyệt vời',
                                 ];
                              
                              ?>
                              <div class="form_rating hide">
                                    <div style="display: flex; margin-top:15px; font-size:15px">
                                       <p style="margin-bottom: 0;">Chọn đánh giá của bạn</p>
                                       <span style="margin:0 15px" class="list_star">
                                          <?php for($i = 1 ; $i <= 5 ; $i++) {?>
                                             <i class="fa fa-star" data-key="<?php echo $i ?>"></i>
                                          <?php } ?>
                                       </span>
                                       <span class="list_text"></span>
                                       <input type="hidden" value="" class="number_rating">
                                    </div>
                                 <div style="margin-top: 15px;">
                                    <input type="hidden" class="form-control" value="<?php echo $prodetail ?>" id="number_pro" >
                                    <input type="text" style="margin-bottom:5px" class="form-control" require id="ra_name_user" placeholder="Họ và tên">
                                    <input type="text" style="margin-bottom:5px" class="form-control" require id="ra_sdt" placeholder="Số điện thoại">
                                    <textarea name="" class="form-control" id="ra_content" cols="30" rows="3" placeholder="Mời bạn chia sẻ cảm nhận"></textarea>
                                 </div>
                                 <div style="margin-top: 5px;">
                                    <a href="<?php echo BASE_URL ?>/rating/insetrating/<?php echo $prodetail ?>" id="load" class="js_rating_product" style="text-decoration: none;width: 200px;background: #288ad6;padding: 2px;color: white;border-radius: 5px;">Gừi đánh giá</a>
                                 </div>
                              </div>
                           </div>
                           <?php foreach($ratingFE as $key => $rating){ ?>
                           <div class="rating_item" style="margin: 10px 0;">
                              <div>
                                 <span style="color:#333; font-weight:bold;text-transform:capitalize;"><?php echo $rating['ra_name_user'] ?> </span>
                                 <a href="" style="color:#2ba832"><i class="fa fa-clock-o"></i> Đã mua sản phẩm tại cửa hàng</a>
                              </div>
                              <p style="margin-bottom: 0;">
                                 <span class="pro_rating">
                                    <?php for($i=1;$i<=5;$i++) {?>
                                       <i class="fa fa-star <?php echo($i<=$rating['ra_number']) ? 'active':'' ?>"></i>
                                    <?php }?>
                                 </span>
                                 <?php echo $rating['ra_content'] ?>
                              </p>
                              <div>
                                 <span><i class="fa fa-clock-o"></i> <?php echo $rating['created_at'] ?></span>
                              </div>   
                           </div>  
                           <?php } ?>                
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   </form>
</div>
<?php }?>
<div class="our-product-area new-product">
   <div class="container">
      <div class="area-title">
         <h2>SẢN PHẨM LIÊN QUAN</h2>
      </div>
      <!-- our-product area start -->
      <div class="row">
         <div class="col-md-12">
            <div class="row">
               <div class="features-curosel owl-carousel owl-theme" style="opacity: 0.1; display: block;">
                  <!-- single-product start -->
                  <?php foreach($related_product as $key => $product_related) {?>
                  <div class="owl-wrapper-outer">
                     <div class="owl-wrapper" style="width: 4800px; left: 0px; display: block;">
                        <div class="owl-item" style="width: 300px;">
                           <div class="col-lg-12 col-md-12">
                              <div class="single-product first-sale">
                                 <div class="product-img">
                                    <a href="<?php echo BASE_URL ?>/sanpham/chitietsanpham/<?php echo $product_related['id'] ?>">
                                    <img class="primary-image" src="<?php echo BASE_URL ?>/public/admin/images/<?php echo $product_related['pro_avatar'] ?>" alt="">
                                    <img class="secondary-image" src="img/products/product-2.jpg" alt="">
                                    </a>
                                    <div class="action-zoom">
                                       <div class="add-to-cart">
                                          <a href="<?php echo BASE_URL ?>/sanpham/chitietsanpham/<?php echo $product_related['id'] ?>" title="Quick View"><i class="fa fa-search-plus"></i></a>
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
                                             <!-- <input type="submit" name="addcart" class="btn btn-secondary" value="Thêm vào giỏ hàng"><i class="fa fa-retweet"></i> -->
                                             <a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="price-box">
                                       <span class="new-price"><?php echo number_format($product_related['pro_price'],0,',','.').'đ' ?></span>
                                    </div>
                                 </div>
                                 <div class="product-content">
                                    <h2 class="product-name">
                                       <a href="<?php echo BASE_URL ?>/sanpham/chitietsanpham/<?php echo $product_related['id'] ?>"><?php echo $product_related['pro_name'] ?></a>
                                    </h2>
                                    <p>Nunc facilisis sagittis ullamcorper...</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <?php } ?>
                  <div class="owl-controls clickable">
                     <div class="owl-buttons">
                        <div class="owl-prev disabled"><i class="fa fa-angle-left"></i></div>
                        <div class="owl-next"><i class="fa fa-angle-right"></i></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- our-product area end -->	
   </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript">
   $(function(){
      let listStar = $(".list_star .fa");

      listRatingText = {
         '1' : 'Không thích',
         '2' : 'Tạm được',
         '3' : 'Bình thường',
         '4' : 'Rất tốt',
         '5' : 'Tuyệt vời',
      };
      listStar.mouseover(function(){
         let $this = $(this);
         let number = $this.attr('data-key');
         listStar.removeClass('rating_active');
         $(".number_rating").val(number);

         $.each(listStar, function(key, value){
            if( key + 1 <= number)
            {
               $(this).addClass('rating_active')
            }
         });

         $(".list_text").text('').text(listRatingText[number]).show()

         
      });

      $(".js_rating_action").click(function(event){
         event.preventDefault();
         if( $(".form_rating").hasClass('hide') )
         {
            $(".form_rating").addClass('active').removeClass('hide')
         }else{
            $(".form_rating").addClass('hide').removeClass('active')
         }

      });

      $(".js_rating_product").click(function(e){
         event.preventDefault();
         let content = $("#ra_content").val();
         let number  = $(".number_rating").val();
         let pro_detail = $("#number_pro").val();
         let ra_name_user = $("#ra_name_user").val();
         let ra_sdt = $("#ra_sdt").val();

         // console.log(content,number,pro_detail)
         let url = $(this).attr('href');
         if( number && pro_detail && ra_name_user && ra_sdt){
            $.ajax({
               url:url,
               type: 'POST',
               data:{
                  number : number,
                  content: content,
                  pro_detail:pro_detail,
                  ra_name_user:ra_name_user,
                  ra_sdt:ra_sdt
               },
               success:function(data){
                  alert('Gửi đánh giá thành công ');
                  location.reload();
               }
            })
         }else{
            if(number == ''){
               alert ('Mời đánh giá sao !');
            }else if(ra_name_user == ''){
               alert ('Mời bạn nhập họ và tên !');
            }else if(ra_sdt == ''){
               alert ('Mời bạn nhập số điện thoại !');
            }else{

            }
         }
      })

   });
</script>