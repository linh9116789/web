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
                        <li class="category3"><span>Đăng ký</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="customer-login-area">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-xs-12">
            </div>
            <div class="col-md-6 col-xs-12">
                <?php
                    if(!empty($_GET['msg'])){
                        $msg = unserialize(urldecode($_GET['msg']));
                        foreach($msg as $key =>$value){
                            echo '<span style="color:blue;font-size:26px;text-align: center;">'.$value.'</span>';
                        }
                    }
                ?>
                <div class="customer-register my-account">
                    <form method="post" class="" action="<?php echo BASE_URL ?>/user/insertRegister">
                        <div class="form-fields">
                            <h2>Đăng ký tài khoản !</h2>
                            <p class="form-row form-row-wide">
                                <label for="reg_email">Tên đăng nhập <span class="required">*</span></label>
                                <input type="text" class="input-text" name="user_name" value="">
                            </p>
                            <p class="form-row form-row-wide">
                                <label for="reg_password">Mật khẩu <span class="required">*</span></label>
                                <input type="password" class="input-text" name="user_password" >
                            </p>
                            <p class="form-row form-row-wide">
                                <label for="reg_password">Số điện thoại <span class="required">*</span></label>
                                <input type="text" class="input-text" name="user_phone" >
                            </p>
                            <p class="form-row form-row-wide">
                                <label for="reg_password">email <span class="required">*</span></label>
                                <input type="email" class="input-text" name="user_email" >
                            </p>
                            <p class="form-row form-row-wide">
                                <label for="reg_password">Địa chỉ <span class="required">*</span></label>
                                <input type="text" class="input-text" name="user_address" >
                            </p>
                            
                        </div>
                        <div class="form-action">
                            <!-- <div class="form-control"> -->
                                <input type="submit"  class="form-control btn btn-primary" name="register" value="Đăng ký">
                            <!-- </div> -->
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-3 col-xs-12">
            </div>
        </div>
    </div>
</div>