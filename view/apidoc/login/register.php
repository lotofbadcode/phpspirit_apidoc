<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Admiria - Responsive Flat Admin Dashboard</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesbrand" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App Icons -->
        <link rel="shortcut icon" href="<?php echo $static_path;?>images/favicon.ico">

        <!-- Basic Css files -->
        <link href="<?php echo $static_path;?>css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo $static_path;?>css/icons.css" rel="stylesheet" type="text/css">
        <link href="<?php echo $static_path;?>css/style.css" rel="stylesheet" type="text/css">

    </head>


    <body class="fixed-left">

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>


        <!-- Begin page -->
        <div class="accountbg"></div>
        <div class="wrapper-page">

            <div class="card">
                <div class="card-body">

                    <h3 class="text-center m-0">
                        <a href="index.html" class="logo logo-admin"><img src="<?php echo $static_path;?>images/logo.png" height="30" alt="logo"></a>
                    </h3>

                    <div class="p-3">
                        <h4 class="font-18 m-b-5 text-center">账户注册</h4>
                        <p class="text-muted text-center">创建一个属于你的Spirit Apidoc账户</p>

                        <form class="form-horizontal m-t-30" action="index.html">

                         

                            <div class="form-group">
                                <label for="username">用户名</label>
                                <input type="text" class="form-control" id="username" placeholder="输入用户名">
                            </div>

                            <div class="form-group">
                                <label for="userpassword">密码</label>
                                <input type="password" class="form-control" id="password" placeholder="输入密码">
                            </div>

                            <div class="form-group">
                                <label for="userpassword">确认密码</label>
                                <input type="password" class="form-control" id="repassword" placeholder="确认密码">
                            </div>

                            <div class="form-group row m-t-20">
                                <div class="col-12 text-right">
                                    <button class="btn btn-primary w-md waves-effect waves-light" type="button">注册</button>
                                </div>
                            </div>

                        </form>
                    </div>

                </div>
            </div>

            <div class="m-t-40 text-center">
                <p class="text-white">已经有一个账户 ? <a href="<?php echo url('apidoc/index/index');?>" class="font-500 font-14 text-white font-secondary"> 登录 </a> </p>
                <p class="text-white">© 2018 - 2020 Spirit Apidoc. Crafted with <i class="mdi mdi-heart text-danger"></i> by PHP精灵</p>
            </div>

        </div>


        <!-- jQuery  -->
        <script src="<?php echo $static_path;?>js/jquery.min.js"></script>
        <script src="<?php echo $static_path;?>js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo $static_path;?>js/modernizr.min.js"></script>
        <script src="<?php echo $static_path;?>js/jquery.slimscroll.js"></script>
        <script src="<?php echo $static_path;?>js/waves.js"></script>
        <script src="<?php echo $static_path;?>js/jquery.nicescroll.js"></script>
        <script src="<?php echo $static_path;?>js/jquery.scrollTo.min.js"></script>

        <!-- App js -->
        <script src="<?php echo $static_path;?>js/app.js"></script>

    </body>
</html>