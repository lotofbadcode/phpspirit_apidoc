<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Spirit Apidoc - 更适合自己的接口文档管理工具</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesbrand" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App Icons -->
        <link rel="shortcut icon" href="<?php echo $static_path; ?>images/favicon.ico">

        <!-- Basic Css files -->
        <link href="<?php echo $static_path; ?>css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo $static_path; ?>css/icons.css" rel="stylesheet" type="text/css">
        <link href="<?php echo $static_path; ?>css/style.css" rel="stylesheet" type="text/css">
        <link href="<?php echo $static_path; ?>css/ladda/ladda-themeless.min.css" rel="stylesheet" type="text/css">
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
                        <a href="index.html" class="logo logo-admin"><img src="<?php echo $static_path; ?>images/logo.png" height="30" alt="logo"></a>
                    </h3>

                    <div class="p-3">
                        <h4 class="font-18 m-b-5 text-center">欢迎回来!</h4>
                        

                        <form class="form-horizontal m-t-30" action="<?php echo url('login/login')?>">

                            <div class="form-group">
                                <label for="username">用户名</label>
                                <input type="text" data-parsley-required-message="用户名必填" required class="form-control" name="username" id="username" placeholder="输入用户名">
                            </div>

                            <div class="form-group">
                                <label for="password">密码</label>
                                <input type="password" data-parsley-required-message="密码必填" required class="form-control" id="password" name="password" placeholder="输入密码">
                            </div>

                            <div class="form-group row m-t-20">
                                <div class="col-sm-6">
                                    
                                </div>
                                <div class="col-sm-6 text-right">
                                    <button jump='{"type":2,"url":"<?php echo url('project.index/index')?>"}' data-style="expand-left" class="spirit_submit btn btn-primary w-md waves-effect waves-light ladda-button" type="button">登录</button>
                                </div>
                            </div>

                         
                        </form>
                    </div>

                </div>
            </div>

            <div class="m-t-40 text-center">
                <p class="text-white">还没有账户 ? <a href="<?php echo url('login/register')?>" class="font-500 font-14 text-white font-secondary"> 立即注册 </a> </p>
                <p class="text-white">© 2018 - 2020 Spirit Apidoc. Crafted with<i class="mdi mdi-heart text-danger"></i> by PHP精灵</p>
            </div>

        </div>


        <!-- jQuery  -->
        <script src="<?php echo $static_path; ?>js/jquery.min.js"></script>
        <script src="<?php echo $static_path; ?>js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo $static_path; ?>js/modernizr.min.js"></script>
        <script src="<?php echo $static_path; ?>js/jquery.slimscroll.js"></script>
        <script src="<?php echo $static_path; ?>js/waves.js"></script>
        <script src="<?php echo $static_path; ?>js/jquery.nicescroll.js"></script>
        <script src="<?php echo $static_path; ?>js/jquery.scrollTo.min.js"></script>
        <script src="<?php echo $static_path; ?>plugins/ladda/spin.min.js"></script>
        <script src="<?php echo $static_path; ?>plugins/ladda/ladda.min.js"></script>

        <!-- App js -->
        <script src="<?php echo $static_path; ?>js/app.js"></script>
        <script type="text/javascript" src="<?php echo $static_path; ?>plugins/parsleyjs/parsley.min.js"></script>
        <script src="<?php echo $static_path; ?>js/request.js"></script>

    </body>
</html>