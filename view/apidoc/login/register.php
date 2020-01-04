<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>
        Spirit Apidoc - 更适合自己的接口文档管理工具
    </title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="Themesbrand" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App Icons -->
    <link rel="shortcut icon" href="<?php echo $static_path; ?>images/favicon.ico">

    <!-- Basic Css files -->
    <link href="<?php echo $static_path; ?>css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $static_path; ?>css/icons.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $static_path; ?>css/style.css" rel="stylesheet" type="text/css">

</head>


<body class="fixed-left">

    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div>


    <!-- Begin page -->
    <div class="accountbg"></div>
    <div class="wrapper-page">

        <div class="card">
            <div class="card-body">

                <h3 class="text-center m-0">
                    <a href="index.html" class="logo logo-admin"><img src="<?php echo $static_path; ?>images/logo.png" height="30" alt="logo"></a>
                </h3>

                <div class="p-3">
                    <h4 class="font-18 m-b-5 text-center">账户注册</h4>
                    <p class="text-muted text-center">创建一个属于你的Spirit Apidoc账户</p>

                    <form class="form-horizontal m-t-30" action="index.html">



                        <div class="form-group">
                            <label for="username">用户名</label>
                            <input type="text" data-parsley-required-message="用户名必填" required class="form-control" name="username" id="username" placeholder="输入用户名">
                        </div>

                        <div class="form-group">
                            <label for="username">姓名</label>
                            <input type="text" data-parsley-required-message="姓名必填" required class="form-control" name="truename" id="truename" placeholder="输入姓名">
                        </div>

                        <div class="form-group">
                            <label for="password">密码</label>
                            <input type="password" data-parsley-required-message="密码必填" required class="form-control" name="password" id="password" placeholder="输入密码">
                        </div>

                        <div class="form-group">
                            <label for="userpassword">确认密码</label>
                            <input type="password" data-parsley-equalto="#password" data-parsley-equalto-message="两次密码输入不一致" name="repassword" data-parsley-required-message="确认密码必填" required class="form-control" id="repassword" placeholder="确认密码">
                        </div>
                        
                        <div class="form-group row m-t-20">
                            <div class="col-12 text-right">
                                <button id="registerbtn" class="btn btn-primary w-md waves-effect waves-light" data-loading-text="Loading..." type="button">注册</button>
                            </div>
                        </div>
                        <div class="alert alert-danger" id="errortip" style="display: none" role="alert"></div>
                        <div class="alert alert-success" id="successtip"  style="display: none"  role="alert"></div>

                    </form>
                </div>

            </div>
        </div>

        <div class="m-t-40 text-center">
            <p class="text-white">已经有一个账户 ? <a href="<?php echo url('apidoc/login/login'); ?>" class="font-500 font-14 text-white font-secondary"> 登录 </a> </p>
            <p class="text-white">© 2018 - 2020 Spirit Apidoc. Crafted with <i class="mdi mdi-heart text-danger"></i> by PHP精灵</p>
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

    <!-- App js -->
    <script src="<?php echo $static_path; ?>js/app.js"></script>
    <script type="text/javascript" src="<?php echo $static_path; ?>plugins/parsleyjs/parsley.min.js"></script>
    <script src="http://www.zjszx.gov.cn/templates/main/js/crypto-js.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {

            function post(url, data, jump) {
                $.ajax({
                    url: url,
                    cache: false,
                    data: data,
                    type: "POST",
                    success: function(data) {
                        if (data.code == 0) {
                            switch (jump.type) {
                                case 1:
                                    $('#successtip').html(jump.message + "，3秒后自动<a href='" + jump.url + "' class='alert-link'>跳转</a>");
                                    $('#successtip').show();
                                    setTimeout(function() {
                                        window.location.href = jump.url;
                                    }, 3000);
                                    break;
                            }
                        } else {
                            $('#errortip').html(data.message);
                            $('#errortip').show();
                            setTimeout(function() {
                                $('#errortip').fadeOut(1000)
                            }, 3000);
                        }
                    }
                });
            }

            $('#registerbtn').click(function() {
                b = $('form').parsley().validate();
                if (b) {
                    jump = {
                        type: 1,
                        message: '注册成功',
                        url: '<?php echo url('apidoc/index/index'); ?>'

                    };
                    post('<?php echo url('apidoc/login/register') ?>', $('form').serialize(), jump);
                }
            });

        });
    </script>
</body>

</html>