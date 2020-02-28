/** EasyWeb spa v3.1.6 date:2020-02-08 License By http://easyweb.vip */

layui.define(function (exports) {
    var setter = {
        baseServer: 'http://www.phpspirit.com/phpspirit_apidoc/server/public/index.php/', // 接口地址
        pageTabs: false,   // 是否开启多标签
        cacheTab: true,  // 是否记忆Tab
        defaultTheme: ' theme-cyan',  // 默认主题
        openTabCtxMenu: true,   // 是否开启Tab右键菜单
        maxTabNum: 20,  // 最多打开多少个tab
        viewPath: 'pages', // 视图位置
        viewSuffix: '.html',  // 视图后缀
        reqPutToPost: true,  // req请求put方法变成post
        tableName: 'easyweb-spa',  // 存储表名

        // 获取缓存的projectid
        getProjectid: function () {
            var cache = layui.data(setter.tableName);
            if (cache) {
                return cache.projectid;
            }
        },
        // 清除token
        removeProjectid: function () {
            layui.data(setter.tableName, {
                key: 'projectid',
                remove: true
            });
        },
        // 缓存token
        putProjectid: function (projectid) {
            layui.data(setter.tableName, {
                key: 'projectid',
                value: projectid
            });
        },


        // 获取缓存的token
        getToken: function () {
            var cache = layui.data(setter.tableName);
            if (cache) {
                return cache.token;
            }
        },
        // 清除token
        removeToken: function () {
            layui.data(setter.tableName, {
                key: 'token',
                remove: true
            });
        },
        // 缓存token
        putToken: function (token) {
            layui.data(setter.tableName, {
                key: 'token',
                value: token
            });
        },

        // 获取缓存的token
        getRefreshToken: function () {
            var cache = layui.data(setter.tableName);
            if (cache) {
                return cache.refreshtoken;
            }
        },
        // 清除token
        removeRefreshToken: function () {
            layui.data(setter.tableName, {
                key: 'refreshtoken',
                remove: true
            });
        },
        // 缓存token
        putRefreshToken: function (token) {
            layui.data(setter.tableName, {
                key: 'refreshtoken',
                value: token
            });
        },

        // 获取缓存的token
        getLoginUser: function () {
            var cache = layui.data(setter.tableName);
            if (cache) {
                return cache.LoginUser;
            }
        },
        // 清除token
        removeLoginUser: function () {
            layui.data(setter.tableName, {
                key: 'LoginUser',
                remove: true
            });
        },
        // 缓存token
        putLoginUser: function (userinfo) {
            layui.data(setter.tableName, {
                key: 'LoginUser',
                value: userinfo
            });
        },


        // 当前登录的用户
        getUser: function () {
            var cache = layui.data(setter.tableName);
            if (cache) {
                return cache.loginUser;
            }
        },
        // 缓存user
        putUser: function (user) {
            layui.data(setter.tableName, {
                key: 'loginUser',
                value: user
            });
        },
        // 获取用户所有权限
        getUserAuths: function () {
            var auths = [];
            /* var authorities = config.getUser().authorities;
             for (var i = 0; i < authorities.length; i++) {
                auths.push(authorities[i].authority);
            } */
            return auths;
        },
        // ajax请求的header
        getAjaxHeaders: function (url) {
            var headers = [];
            var token = setter.getToken();
            if (token) {
                headers.push({
                    name: 'token',
                    value: token.token
                });
            }
            return headers;
        },
        // ajax请求结束后的处理，返回false阻止代码执行
        ajaxSuccessBefore: function (res, url, obj) {
            if (res.code === 401) {
                setter.removeToken();
                layer.msg('登录过期', { icon: 2, anim: 6, time: 1500 }, function () {
                    location.reload();
                });
                return false;
            }
            return true;
        },
        // 路由不存在处理
        routerNotFound: function (r) {
            layer.alert('路由' + location.hash + '不存在', {
                title: '提示',
                skin: 'layui-layer-admin',
                btn: [],
                offset: '30px',
                anim: 6,
                shadeClose: true
            });
        },

        refreshToken: function () {

            /**
            * 判断token是否过期
            */
            var nowdate = new Date();

            var token = setter.getToken();
            var refreshtoken = setter.getRefreshToken()

            var dateDiff = nowdate.getTime() - token.exp; console.log(nowdate.getTime()); console.log(token.exp);
            if (dateDiff > 0) {

                //刷新key
                var refreshdateDiff = nowdate.getTime() - refreshtoken.exp; console.log(nowdate.getTime()); console.log(refreshtoken.exp);
                if (refreshdateDiff > 0) {
                    //跳转到登录页面
                    layer.msg('登录超时1', { icon: 5 }, function () {
                        //window.location.href = 'login.html';
                    });
                }
                var $ = layui.jquery;
               
                $.ajax({
                    url: setter.baseServer + 'Logreg/refreshtoken',
                    type: 'post',
                    headers: { refreshtoken: refreshtoken.refreshtoken },
                    dataType: 'JSON',
                    async: false,
                    success: function (res) {
                        if (res.code == 0) {
                            var dd = new Date();
                            var tokenexp = dd.getTime() + 30 * 1000;
                            var reftokenexp = dd.getTime() + 60 * 38 * 1000;
                            setter.putToken({ exp: tokenexp, token: res.data.token });
                            setter.putRefreshToken({ exp: reftokenexp, refreshtoken: res.data.refreshtoken });
                            setter.putLoginUser(res.data.userinfo);

                        } else {
                            layer.closeAll('loading');
                            layer.msg('登录超时', { icon: 5 }, function () {
                                //window.location.href = 'login.html';
                            });
                        }
                    },
                    error: function (xhr) {

                    }
                });

            }
        }
    };
    setter.base_server = setter.baseServer;  // 兼容旧版
    exports('setter', setter);
});
