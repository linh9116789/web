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
                        <li class="category3"><span>Đăng nhập</span></li>
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
                <div class="customer-register my-account">
                    <form method="post" class="" action="<?php echo BASE_URL ?>/user/login_user">
                        <div class="form-fields">
                            <h2>Đăng nhập</h2>
                            <p class="form-row form-row-wide">
                                <label for="reg_email">Tên đăng nhập <span class="required"></span></label>
                                <input type="text" class="input-text" name="user_name" >
                            </p>
                            <p class="form-row form-row-wide">
                                <label for="reg_password">Mật khẩu <span class="required">*</span></label>
                                <input type="password" class="input-text" name="user_password" >
                            </p>
                            
                        </div>
                        <div class="form-action">
                            <p class="lost_password"> <a href="#">Lost your password?</a></p>
                            <div class="actions-log">
                                <input type="submit" class="button" name="login" value="Login">
                            </div>
                            <label for="rememberme" class="inline"> 
                            <input name="rememberme" type="checkbox" id="rememberme" value="forever"> Remember me </label>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-3 col-xs-12">
            </div>
        </div>
    </div>
</div>