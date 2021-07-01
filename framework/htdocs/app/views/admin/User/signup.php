


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
                <li><a href="index.html">Home</a></li>
                <li class="active">Register</li>
            </ol>
        </div>
    </div>
</div>
<!--end-breadcrumbs-->
<!--register-starts-->
<div class="register">
    <div class="container">
        <div class="register-top heading">
            <h2>REGISTER</h2>
        </div>
        <div class="register-main">
            <div class="col-md-6 account-left">
                <form method="post" action="user/signup" id="signup" role="form" data-toggle="validator" >
                    <div class="form-group has-feedback">
                        <label for="login">login</label>
                        <input  type="text" name="login" class="form-control" id="login" placeholder="login" value="<?=isset($_SESSION['form-data']['login']) ? h($_SESSION['form-data']['login']) : '';?>" required>
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <label for="password">Password</label>
                        <input  type="password" name="password" class="form-control" id="password" placeholder="Password" data-error="Пароль должен включать не менее 6 символов" data-minlength="6" value="<?=isset($_SESSION['form-data']['password']) ? h($_SESSION['form-data']['password']) : '';?>" required>
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group has-feedback">
                        <label for="name">Имя</label>
                        <input  type="text" name="name" class="form-control" id="name" placeholder="Имя" value="<?=isset($_SESSION['form-data']['name']) ? h($_SESSION['form-data']['name']) : '';?>" required>
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <label for="email">Email</label>
                        <input  type="email" name="email" class="form-control" id="email" placeholder="Email" data-error="Почтовый адрес не верный используйте @ " value="<?=isset($_SESSION['form-data']['email']) ? h($_SESSION['form-data']['email']) : '';?>" required>
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group has-feedback">
                        <label for="Address">Address</label>
                        <input  type="text" name="address" class="form-control" id="address" placeholder="address" value="<?=isset($_SESSION['form-data']['login']) ? h($_SESSION['form-data']['login']) : '';?>" required>
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    </div>
                    <div class="form-group">
                        <label>Роль</label>
                        <select class="form-control" name="role">
                            <option value="user">Пользователь</option>
                            <option value="admin">Администратор</option>
                        </select>
                    </div>

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Добавить</button>
                    </div>
                </form>
                <?php if(isset($_SESSION['form-data'])) unset($_SESSION['form-data']);?>

                <ul>

                    <div class="clearfix"></div>
                </ul>
            </div>

            <div class="clearfix"></div>

    </div>
</div>
<!--register-end-->


<!--information-end-->


<!--footer-end-->

