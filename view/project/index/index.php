<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Spirit Apidoc - 更适合自己的接口文档管理工具</title>
    <meta content="Spirit Apidoc - 更适合自己的接口文档管理工具" name="description" />
    <meta content="Themesbrand" name="author" />
    <link rel="shortcut icon" href="<?php echo $static_path; ?>images/favicon.ico">
    <link href="<?php echo $static_path; ?>css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $static_path; ?>css/icons.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $static_path; ?>plugins/c3/c3.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $static_path; ?>css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $static_path; ?>css/icons.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $static_path; ?>css/main.css" rel="stylesheet" type="text/css">



</head>

<body class="fixed-left">

    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div>

    <!-- Begin page -->
    <div id="wrapper">


        <!-- Start right Content here -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content" style="padding: 0">

                <!-- Top Bar Start -->
                <div class="topbar">

                    <nav class="navbar-custom">
                        <!-- Search input -->
                        <div class="search-wrap" id="search-wrap">
                            <div class="search-bar">
                                <input class="search-input" type="search" placeholder="Search" />
                                <a href="#" class="close-search toggle-search" data-target="#search-wrap">
                                    <i class="mdi mdi-close-circle"></i>
                                </a>
                            </div>
                        </div>

                        <ul class="list-inline float-right mb-0">
                            <!-- Search -->
                            <li class="list-inline-item dropdown notification-list">
                                <a class="nav-link waves-effect toggle-search" href="#" data-target="#search-wrap">
                                    <i class="mdi mdi-magnify noti-icon"></i>
                                </a>
                            </li>
                            <!-- Fullscreen -->

                            <!-- create project-->
                            <li class="list-inline-item dropdown notification-list hidden-xs-down">
                                <a class="nav-link  arrow-none waves-effect text-muted" data-toggle="modal" data-target=".createproject" role="button" aria-haspopup="false" aria-expanded="false">
                                    创建项目
                                    <i class="ion-plus-round"></i>
                                </a>
                            </li>

                            <div class="modal fade createproject" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title mt-0" id="myLargeModalLabel">创建项目</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="<?php echo url('project.index/add') ?>">

                                                <div class="form-group">
                                                    <label>项目名称</label>
                                                    <div>
                                                        <input type="text" class="form-control" data-parsley-required-message="项目名称必填" required name="projectname" placeholder="输入项目名称" />
                                                    </div>
                                                </div>


                                                <div class="form-group m-b-0">
                                                    <div>
                                                        <button type="button" jump='{"type":1,"message":"添加成功","url":"<?php echo url('apidoc.index/index') ?>"}' class="spirit_submit btn btn-primary waves-effect waves-light m-r-5">
                                                            提交
                                                        </button>
                                                        <button type="reset" class=" btn btn-secondary waves-effect">
                                                            重置
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- notification-->

                            <!-- User-->
                            <li class="list-inline-item dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <img src="<?php echo $static_path; ?>images/users/avatar-1.jpg" alt="user" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                    <a class="dropdown-item" href="#"><i class="dripicons-user text-muted"></i> Profile</a>
                                    <a class="dropdown-item" href="#"><i class="dripicons-wallet text-muted"></i> My Wallet</a>
                                    <a class="dropdown-item" href="#"><span class="badge badge-success pull-right m-t-5">5</span><i class="dripicons-gear text-muted"></i> Settings</a>
                                    <a class="dropdown-item" href="#"><i class="dripicons-lock text-muted"></i> Lock screen</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#"><i class="dripicons-exit text-muted"></i> Logout</a>
                                </div>
                            </li>
                        </ul>

                        <!-- Page title -->
                        <ul class="list-inline menu-left mb-0">
                            <li class="list-inline-item">
                                <button type="button" class="button-menu-mobile open-left waves-effect">
                                    <i class="ion-navicon"></i>
                                </button>
                            </li>
                            <li class="hide-phone list-inline-item app-search">
                                <h3 class="page-title">Spirit Apidoc - 更适合自己的接口文档管理工具</h3>
                            </li>
                        </ul>

                        <div class="clearfix"></div>
                    </nav>

                </div>
                <div class="page-content-wrapper">

                    <div class="container-fluid" id="result">


                        <div class="row">
                            <?php
                            foreach ($projects as $project) {
                            ?>
                                <div class="col-md-6 col-lg-6 col-xl-3">

                                    <div class="mini-stat clearfix bg-white">
                                        <span class="mini-stat-icon bg-primary"><?php echo mb_substr($project['projectname'], 0, 1, 'utf-8'); ?></span>
                                        <div class="mini-stat-info text-right">
                                            <a href="<?php echo url('apidoc.Index/index',['projectid'=>$project['id']]) ?>">
                                                <span class="counter text-primary"><?php echo $project['projectname'] ?></span>
                                            </a>
                                            参与人数：8人
                                        </div>
                                        <div class="clearfix"></div>
                                        <p class=" mb-0 m-t-20 text-muted">我的角色: 创建者 <span class="pull-right"><i class="fa fa-caret-down m-r-5"></i>操作</span></p>
                                    </div>

                                </div>
                            <?php
                            }
                            ?>


                            <div class="col-md-6 col-lg-6 col-xl-3">
                                <div class="mini-stat clearfix bg-white">
                                    <span class="mini-stat-icon bg-success"><i class="mdi mdi-currency-usd"></i></span>
                                    <div class="mini-stat-info text-right">
                                        <span class="counter text-success">956</span>
                                        New Orders
                                    </div>
                                    <div class="clearfix"></div>
                                    <p class="text-muted mb-0 m-t-20">Total income: $22506 <span class="pull-right"><i class="fa fa-caret-up m-r-5"></i>10.25%</span></p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-3">
                                <div class="mini-stat clearfix bg-white">
                                    <span class="mini-stat-icon bg-warning"><i class="mdi mdi-cube-outline"></i></span>
                                    <div class="mini-stat-info text-right">
                                        <span class="counter text-warning">5210</span>
                                        New Users
                                    </div>
                                    <div class="clearfix"></div>
                                    <p class="text-muted mb-0 m-t-20">Total income: $22506 <span class="pull-right"><i class="fa fa-caret-up m-r-5"></i>10.25%</span></p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-3">
                                <div class="mini-stat clearfix bg-white">
                                    <span class="mini-stat-icon bg-pink"><i class="mdi mdi-currency-btc"></i></span>
                                    <div class="mini-stat-info text-right">
                                        <span class="counter text-pink">20544</span>
                                        Unique Visitors
                                    </div>
                                    <div class="clearfix"></div>
                                    <p class="text-muted mb-0 m-t-20">Total income: $22506 <span class="pull-right"><i class="fa fa-caret-up m-r-5"></i>10.25%</span></p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-xl-3">
                                <div class="mini-stat clearfix bg-white">
                                    <span class="mini-stat-icon bg-purple mr-0 float-right"><i class="mdi mdi-basket"></i></span>
                                    <div class="mini-stat-info">
                                        <span class="counter text-purple">25140</span>
                                        Total Sales
                                    </div>
                                    <div class="clearfix"></div>
                                    <p class=" mb-0 m-t-20 text-muted">Total income: $22506 <span class="pull-right"><i class="fa fa-caret-up m-r-5"></i>10.25%</span></p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-3">
                                <div class="mini-stat clearfix bg-white">
                                    <span class="mini-stat-icon bg-blue-grey mr-0 float-right"><i class="mdi mdi-black-mesa"></i></span>
                                    <div class="mini-stat-info">
                                        <span class="counter text-blue-grey">65241</span>
                                        New Orders
                                    </div>
                                    <div class="clearfix"></div>
                                    <p class="text-muted mb-0 m-t-20">Total income: $22506 <span class="pull-right"><i class="fa fa-caret-up m-r-5"></i>10.25%</span></p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-3">
                                <div class="mini-stat clearfix bg-white">
                                    <span class="mini-stat-icon bg-brown mr-0 float-right"><i class="mdi mdi-buffer"></i></span>
                                    <div class="mini-stat-info">
                                        <span class="counter text-brown">85412</span>
                                        New Users
                                    </div>
                                    <div class="clearfix"></div>
                                    <p class="text-muted mb-0 m-t-20">Total income: $22506 <span class="pull-right"><i class="fa fa-caret-up m-r-5"></i>10.25%</span></p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-3">
                                <div class="mini-stat clearfix bg-white">
                                    <span class="mini-stat-icon bg-teal mr-0 float-right"><i class="mdi mdi-coffee"></i></span>
                                    <div class="mini-stat-info">
                                        <span class="counter text-teal">20544</span>
                                        Unique Visitors
                                    </div>
                                    <div class="clearfix"></div>
                                    <p class="text-muted mb-0 m-t-20">Total income: $22506 <span class="pull-right"><i class="fa fa-caret-up m-r-5"></i>10.25%</span></p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-xl-3">
                                <div class="mini-stat widget-chart-sm clearfix bg-white">
                                    <span class="peity-donut float-left" data-peity='{ "fill": ["#3bc3e9", "#f2f2f2"], "innerRadius": 23, "radius": 32 }' data-width="60" data-height="60">226,134</span>
                                    <div class="mini-stat-info text-right">
                                        <span class="counter text-info">9541</span>
                                        Total Sales
                                    </div>
                                    <div class="clearfix"></div>
                                    <p class=" mb-0 m-t-20 text-muted">Total income: $22506 <span class="pull-right"><i class="fa fa-caret-up m-r-5"></i>10.25%</span></p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-3">
                                <div class="mini-stat widget-chart-sm clearfix bg-white">
                                    <span class="peity-pie float-left" data-peity='{ "fill": ["#afb42b", "#f2f2f2"]}' data-width="60" data-height="60">0.52/1.561</span>
                                    <div class="mini-stat-info text-right">
                                        <span class="counter text-lime">36521</span>
                                        New Orders
                                    </div>
                                    <div class="clearfix"></div>
                                    <p class="text-muted mb-0 m-t-20">Total income: $22506 <span class="pull-right"><i class="fa fa-caret-up m-r-5"></i>10.25%</span></p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-3">
                                <div class="mini-stat widget-chart-sm clearfix bg-white">
                                    <span class="peity-donut float-left" data-peity='{ "fill": ["#ea553d", "#f2f2f2"], "innerRadius": 23, "radius": 32 }' data-width="60" data-height="60">520,134</span>
                                    <div class="mini-stat-info text-right">
                                        <span class="counter text-danger">6521</span>
                                        New Users
                                    </div>
                                    <div class="clearfix"></div>
                                    <p class="text-muted mb-0 m-t-20">Total income: $22506 <span class="pull-right"><i class="fa fa-caret-up m-r-5"></i>10.25%</span></p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-3">
                                <div class="mini-stat widget-chart-sm clearfix bg-white">
                                    <span class="peity-pie float-left" data-peity='{ "fill": ["#1d1e3a", "#f2f2f2"]}' data-width="60" data-height="60">230,134</span>
                                    <div class="mini-stat-info text-right">
                                        <span class="counter text-dark">1002</span>
                                        Unique Visitors
                                    </div>
                                    <div class="clearfix"></div>
                                    <p class="text-muted mb-0 m-t-20">Total income: $22506 <span class="pull-right"><i class="fa fa-caret-up m-r-5"></i>10.25%</span></p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-xl-3">
                                <div class="mini-stat clearfix bg-white">
                                    <span class="font-40 text-pink mr-0 float-right"><i class="ti-truck"></i></span>
                                    <div class="mini-stat-info">
                                        <h3 class="counter font-light mt-0">362410</h3>
                                    </div>
                                    <div class="clearfix"></div>
                                    <p class=" mb-0 m-t-10 text-muted">Total income: $56210 <span class="pull-right"><i class="fa fa-caret-down m-r-5"></i>3.25%</span></p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-3">
                                <div class="mini-stat clearfix bg-white">
                                    <span class="font-40 text-orange mr-0 float-right"><i class="ti-comments"></i></span>
                                    <div class="mini-stat-info">
                                        <h3 class="counter font-light mt-0">89510</h3>
                                    </div>
                                    <div class="clearfix"></div>
                                    <p class=" mb-0 m-t-10 text-muted">Total income: $56210 <span class="pull-right"><i class="fa fa-caret-down m-r-5"></i>3.25%</span></p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-3">
                                <div class="mini-stat clearfix bg-white">
                                    <span class="font-40 text-indigo mr-0 float-right"><i class="ti-briefcase"></i></span>
                                    <div class="mini-stat-info">
                                        <h3 class="counter font-light mt-0">55620</h3>
                                    </div>
                                    <div class="clearfix"></div>
                                    <p class=" mb-0 m-t-10 text-muted">Total income: $56210 <span class="pull-right"><i class="fa fa-caret-down m-r-5"></i>3.25%</span></p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-3">
                                <div class="mini-stat clearfix bg-white">
                                    <span class="font-40 text-brown mr-0 float-right"><i class="ti-wallet"></i></span>
                                    <div class="mini-stat-info">
                                        <h3 class="counter font-light mt-0">320101</h3>
                                    </div>
                                    <div class="clearfix"></div>
                                    <p class=" mb-0 m-t-10 text-muted">Total income: $56210 <span class="pull-right"><i class="fa fa-caret-down m-r-5"></i>3.25%</span></p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card m-b-20">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title m-b-30">Revenue (This Month)</h4>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="mini-stat clearfix bg-white">
                                                    <div class="mini-stat-info">
                                                        <span class="counter text-purple">25140</span>
                                                        Total Sales
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <p class=" mb-0 m-t-20 text-muted">Total income: $22506 <span class="pull-right"><i class="fa fa-caret-up m-r-5"></i>10.25%</span></p>
                                                </div>

                                                <div class="mini-stat clearfix mb-0 bg-white">
                                                    <div class="mini-stat-info">
                                                        <span class="counter text-purple">25140</span>
                                                        Total Sales
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <p class=" mb-0 m-t-20 text-muted">Total income: $22506 <span class="pull-right"><i class="fa fa-caret-up m-r-5"></i>10.25%</span></p>
                                                </div>

                                            </div>
                                            <div class="col-sm-6">
                                                <div id="donut-chart"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4">
                                <div class="card m-b-20">
                                    <div class="card-body">

                                        <div class="profile-widget text-center">
                                            <img src="assets/images/users/avatar-2.jpg" class="thumb-lg rounded-circle img-thumbnail" alt="img">
                                            <h5>Jonathan Doe</h5>
                                            <p><i class="fa fa-map-marker"></i> London</p>

                                            <p class="text-muted">Lorem ipsum dolor sit ametetur adipisicing elit,
                                                sed do eiusmod tempor incididunt adipisicing elit.</p>
                                            <a href="#" class="btn btn-sm btn-purple m-t-20">Follow</a>
                                            <ul class="list-inline row m-t-20 clearfix">
                                                <li class="col-md-4">
                                                    <p class="m-b-5 font-18 font-600">23514</p>
                                                    <p class="mb-0">Followers</p>
                                                </li>
                                                <li class="col-md-4">
                                                    <p class="m-b-5 font-18 font-600">2510</p>
                                                    <p class="mb-0">Photos</p>
                                                </li>
                                                <li class="col-md-4">
                                                    <p class="m-b-5 font-18 font-600">68541</p>
                                                    <p class="mb-0">Like</p>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>


                            <div class="col-xl-3">
                                <div class="card m-b-20">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title m-b-30">Revenue (This Month)</h4>

                                        <div class="text-center">
                                            <input class="knob" data-width="150" data-height="150" data-linecap=round data-fgColor="#ffbb44" value="80" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".1" />

                                            <div class="clearfix"></div>
                                            <a href="#" class="btn btn-success m-t-20">View All Data</a>
                                            <ul class="list-inline row m-t-30 clearfix">
                                                <li class="col-6">
                                                    <p class="m-b-5 font-18 font-600">95412</p>
                                                    <p class="mb-0">Followers</p>
                                                </li>
                                                <li class="col-6">
                                                    <p class="m-b-5 font-18 font-600">12030</p>
                                                    <p class="mb-0">Like</p>
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>




                    </div><!-- container -->

                </div> <!-- Page content Wrapper -->

            </div> <!-- content -->

            <footer class="footer" style="left:0">
                © 2019 - 2020 Spirit Apidoc - 更适合自己的接口文档管理工具 <span class="text-muted d-none d-sm-inline-block float-right">Crafted with <i class="mdi mdi-heart text-danger"></i> by PHP精灵</span>
            </footer>

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
    <script src="<?php echo $static_path; ?>js/app.js"></script>

    <script src="<?php echo $static_path; ?>plugins/peity-chart/jquery.peity.min.js"></script>
    <script type="text/javascript" src="<?php echo $static_path; ?>plugins/d3/d3.min.js"></script>
    <script type="text/javascript" src="<?php echo $static_path; ?>plugins/c3/c3.min.js"></script>
    <script src="<?php echo $static_path; ?>plugins/jquery-knob/excanvas.js"></script>
    <script src="<?php echo $static_path; ?>plugins/jquery-knob/jquery.knob.js"></script>
    <script src="<?php echo $static_path; ?>pages/widget-init.js"></script>

    <script type="text/javascript" src="<?php echo $static_path; ?>plugins/parsleyjs/parsley.min.js"></script>
    <script src="<?php echo $static_path; ?>js/request.js"></script>
</body>

</html>