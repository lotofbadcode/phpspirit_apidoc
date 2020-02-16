/** EasyWeb spa v3.1.6 date:2020-02-08 License By http://easyweb.vip */
layui.config({
    version: '316',   // 更新组件缓存，设为true不缓存，也可以设一个固定值
    base: 'assets/module/'
}).extend({
    dropdown: 'dropdown/dropdown',
    notice: 'notice/notice',
    cascader: 'cascader/cascader',
    fileChoose: 'fileChoose/fileChoose',
    step: 'step-lay/step',
    treeTable: 'treeTable/treeTable',
    tagsInput: 'tagsInput/tagsInput',
    Split: 'Split/Split',
    Cropper: 'Cropper/Cropper',
    citypicker: 'city-picker/city-picker',
    zTree: 'zTree/zTree',
    introJs: 'introJs/introJs',
    dtree: 'dtree/dtree',
}).use(['layer', 'setter', 'index', 'admin'], function () {
    var $ = layui.jquery;
    var layer = layui.layer;
    var setter = layui.setter;
    var index = layui.index;
    var admin = layui.admin;

    // 检查是否登录
    if (!setter.getToken()) {
        return location.replace('login.html');
    }

    setter.refreshToken();//刷新TOKEN

    // 获取用户信息
    /*admin.req('userInfo.json', {}, function (res) {
        if (200 === res.code) {
            setter.putUser(res.user);
            admin.renderPerm();  // 移除没有权限的元素
            $('#huName').text(res.user.nickName);
        } else {
            layer.msg('获取用户失败', {icon: 2, anim: 6});
        }
    }, 'get');*/

    // 加载侧边栏
    /*admin.req('menus.json', {}, function (res) {
        index.regRouter(res);  // 注册路由
        index.renderSide(res);  // 渲染侧边栏
        // 加载主页
        index.loadHome({
            url: '#/console/console',
            name: '<i class="layui-icon layui-icon-home"></i>'
        });
        admin.removeLoading();  // 移除loading
    }, 'get');*/

    // 提示
    if (!setter.pageTabs) {
        /*layer.confirm('SPA版本默认关闭多标签功能，你可以在设置界面开启', {
            skin: 'layui-layer-admin',
            area: '280px',
            title: '温馨提示',
            shade: 0,
            btn: ['打开设置', '知道了']
        }, function (i) {
            layer.close(i);
            $('a[ew-event="theme"]').trigger('click');
        });*/
    }


});
