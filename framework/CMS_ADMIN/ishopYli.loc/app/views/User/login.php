



<!--top-header-->
<!--start-logo<div class="logo">
    <a href="index.html"><h1>Luxury Watches</h1></a>
</div>-->


<!--start-logo-->


<!--bottom-header-->
<!--start-breadcrumbs-->
<div class="breadcrumbs">
    <div class="container">
        <div class="breadcrumbs-main">
            <ol class="breadcrumb">
                <li><a href="<?=PATH;?>">Главная</a></li>
                <li>Вход</li>
            </ol>
        </div>
    </div>
</div>
<!--end-breadcrumbs-->
<!--register-starts-->
<div class="prdt">
    <div class="container">
        <div class="prdt-top">
            <div class="col-md-12">
                <div class="product-one login">
        <div class="register-top heading">
            <h2>Вход</h2>
        </div>
        <div class="register-main">
            <div class="col-md-6 account-left">
                <form method="post" action="user/login" id="login" role="form" data-toggle="validator" >
                    <div class="form-group has-feedback">
                        <label for="login">login</label>
                        <input  type="text" name="login" class="form-control" id="login" placeholder="login" value="<?=isset($_SESSION['form-data']['login']) ? h($_SESSION['form-data']['login']) : '';?>" required>
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <label for="password">Password</label>
                        <input  type="password" name="password" class="form-control" id="password" placeholder="Password" data-error="Пароль должен включать не менее 3 символов" data-minlength="3" value="<?=isset($_SESSION['form-data']['password']) ? h($_SESSION['form-data']['password']) : '';?>" required>
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>

                    <div class="address submit">
                        <button type="submit" class="btn btn-default">Вход</button>
                    </div>
                </form>


                <ul>

                    <div class="clearfix"></div>
                </ul>
            </div>

            <div class="clearfix"></div>

        </div>
    </div>
</div>
                </div>
            </div>


    <!--register-end-->


    <!--information-end-->


    <!--footer-end-->

