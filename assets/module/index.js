﻿/** EasyWeb spa v3.1.6 date:2020-02-08 License By http://easyweb.vip */
layui.define(["layer","element","setter","layRouter","admin","laytpl"],function(r){var d=layui.jquery;var q=layui.layer;var c=layui.element;var o=layui.setter;var k=layui.layRouter;var j=layui.admin;var a=layui.laytpl;var b=".layui-layout-admin>.layui-header";var m=".layui-layout-admin>.layui-side>.layui-side-scroll";var i=".layui-layout-admin>.layui-body";var l=i+">.layui-tab";var p=i+">.layui-body-header";var h="admin-pagetabs";var n="admin-side-nav";var f={homeUrl:undefined,mTabPosition:undefined,mTabList:[]};f.regRouter=function(s){d.each(s,function(t,u){if(u.url&&u.url.indexOf("#")===0){k.reg(u.url,function(v){v.name=u.name;v.iframe=u.iframe;f.changeView(v)})}if(u.subMenus){f.regRouter(u.subMenus)}})};f.changeView=function(x){var w=f.getHashPath(x);var v=i+">div[lay-id]";if(o.pageTabs){var s;d(l+">.layui-tab-title>li").each(function(z){if(d(this).attr("lay-id")===w){s=true;return false}});if(!s){if((f.mTabList.length+1)>=o.maxTabNum){q.msg("最多打开"+o.maxTabNum+"个选项卡",{icon:2,anim:6});history.back();return}c.tabAdd(h,{id:w,title:'<span class="title">'+(x.name||"")+"</span>",content:'<div lay-id="'+w+'" lay-url="'+x.href+'"></div>'});(w!==k.index)&&f.mTabList.push(x);(o.cacheTab)&&j.putTempData("indexTabs",f.mTabList)}v=l+'>.layui-tab-content>.layui-tab-item>div[lay-id="'+w+'"]';var u=d(v).attr("lay-url");if(x.href!==u){d(v).attr("lay-url",x.href);s=false;for(var t=0;t<f.mTabList.length;t++){if(f.mTabList[t].href===u){f.mTabList[t]=x}}(o.cacheTab)&&j.putTempData("indexTabs",f.mTabList)}if(!s||x.refresh){f.renderView(x,v)}if(!x.noChange){c.tabChange(h,w)}}else{j.activeNav(x.href);if(d(v).length<=0){var y='<div class="layui-body-header">';y+='      <span class="layui-body-header-title"></span>';y+='      <span class="layui-breadcrumb pull-right" lay-filter="admin-body-breadcrumb" style="visibility: visible;"></span>';y+="   </div>";y+='   <div lay-id="'+x.href+'"></div>';d(i).html(y)}else{d(v).attr("lay-id",x.href)}f.setTabTitle(k.index!==w?x.name:undefined);d('[lay-filter="admin-body-breadcrumb"]').html(f.getBreadcrumbHtml(x.href));f.mTabList.splice(0,f.mTabList.length);(k.index!==w)&&f.mTabList.push(x);(o.cacheTab)&&j.putTempData("indexTabs",f.mTabList);f.renderView(x,v)}(j.getPageWidth()<=768)&&j.flexible(true);d(".layui-table-tips-c").trigger("click")};f.renderView=function(v,t,u){var s=d(t);u||(u=s.parent());if(!v.iframe){j.showLoading({elem:u,size:""});j.ajax({url:o.viewPath+"/"+v.path.join("/")+o.viewSuffix,data:v.search,dataType:"html",success:function(w){j.removeLoading(u);if(w.code!==404){s.html(w);j.renderPerm()}else{k.notFound&&k.notFound(v)}}})}else{s.html('<div class="admin-iframe" style="-webkit-overflow-scrolling: touch;"><iframe src="'+v.iframe+'" class="admin-iframe" frameborder="0"></iframe></div>')}};f.loadHome=function(t){var v=j.getTempData("indexTabs");f.regRouter([t]);if(o.pageTabs){var u=k.routerInfo(t.url);k.index=f.getHashPath(u);u.name=t.name;u.iframe=t.iframe;u.noChange=true;f.changeView(u);if(t.loadSetting!==false&&o.cacheTab&&v){for(var s=0;s<v.length;s++){v[s].noChange=true;f.changeView(v[s])}}}k.init({index:t.url,notFound:o.routerNotFound})};f.openNewTab=function(s){f.regRouter([s]);k.go(s.url)};f.closeTab=function(s){c.tabDelete(h,f.getHashPath(s))};f.getHashPath=function(s){if(!s||typeof s==="string"){return k.routerInfo(s).path.join("/")}return s.path.join("/")};f.go=function(s){k.go(s)};f.setTabTitle=function(t,s){if(o.pageTabs){t||(t="");s||(s=f.getHashPath());s&&d(l+'>.layui-tab-title>li[lay-id="'+s+'"] .title').html(t)}else{if(t){d(p+">.layui-body-header-title").html(t);d(p).addClass("show");d(b).css("box-shadow","0 1px 0 0 rgba(0, 0, 0, .03)")}else{d(p).removeClass("show");j.util.removeStyle(b,"box-shadow")}}};f.setTabTitleHtml=function(s){if(!o.pageTabs){if(s){d(p).addClass("show");d(p).html(s)}else{d(p).removeClass("show")}}};f.getBreadcrumb=function(s){s||(s=d(i+">div[lay-id]").attr("lay-id"));var u=[];var t=d(m).find('[href="#'+s+'"]');u.push(t.text().replace(/(^\s*)|(\s*$)/g,""));while(true){t=t.parent("dd").parent("dl").prev("a");if(t.length===0){break}u.unshift(t.text().replace(/(^\s*)|(\s*$)/g,""))}return u};f.getBreadcrumbHtml=function(t){var v=f.getBreadcrumb(t);var u='<a href="#'+k.index+'">首页</a>';for(var s=0;s<v.length-1;s++){u+='<span lay-separator="">/</span><a><cite>'+v[s]+"</cite></a>"}return u};f.renderSide=function(u,s,v){function t(x){for(var w=0;w<x.length;w++){if(x[w].subMenus){t(x[w].subMenus)}if(x[w].show===false){x.splice(w,1)}else{if(!x[w].target){x[w].target="_self"}}}}t(u);a(s||sideNav.innerHTML).render(u,function(w){if(v){v(w)}else{d(m+">.layui-nav").html(w);c.render("nav","admin-side-nav")}})};var g=".layui-layout-admin .site-mobile-shade";if(d(g).length<=0){d(".layui-layout-admin").append('<div class="site-mobile-shade"></div>')}d(g).click(function(){j.flexible(true)});if(o.pageTabs&&d(l).length<=0){var e='<div class="layui-tab" lay-allowClose="true" lay-filter="'+h+'">';e+='      <ul class="layui-tab-title"></ul>';e+='      <div class="layui-tab-content"></div>';e+="   </div>";e+='   <div class="layui-icon admin-tabs-control layui-icon-prev" ew-event="leftPage"></div>';e+='   <div class="layui-icon admin-tabs-control layui-icon-next" ew-event="rightPage"></div>';e+='   <div class="layui-icon admin-tabs-control layui-icon-down">';e+='      <ul class="layui-nav" lay-filter="admin-pagetabs-nav">';e+='         <li class="layui-nav-item" lay-unselect>';e+='            <dl class="layui-nav-child layui-anim-fadein">';e+='               <dd ew-event="closeThisTabs" lay-unselect><a>关闭当前标签页</a></dd>';e+='               <dd ew-event="closeOtherTabs" lay-unselect><a>关闭其它标签页</a></dd>';e+='               <dd ew-event="closeAllTabs" lay-unselect><a>关闭全部标签页</a></dd>';e+="            </dl>";e+="         </li>";e+="      </ul>";e+="   </div>";d(i).html(e);c.render("nav","admin-pagetabs-nav")}c.on("tab("+h+")",function(){var t=d(this).attr("lay-id");var s=d(l+'>.layui-tab-content>.layui-tab-item>div[lay-id="'+t+'"]').attr("lay-url");j.activeNav(s);k.go(s);j.resizeTable(0);j.rollPage("auto")});c.on("tabDelete("+h+")",function(s){if(s.index>0&&s.index<=f.mTabList.length){f.mTabList.splice(s.index-1,1);(o.cacheTab)&&j.putTempData("indexTabs",f.mTabList)}if(d(l+">.layui-tab-title>li.layui-this").length<=0){d(l+">.layui-tab-title>li:last").trigger("click")}});d(document).off("click.navMore").on("click.navMore","[nav-bind]",function(){var s=d(this).attr("nav-bind");d('ul[lay-filter="'+n+'"]').addClass("layui-hide");d('ul[nav-id="'+s+'"]').removeClass("layui-hide");d(b+">.layui-nav .layui-nav-item").removeClass("layui-this");d(this).parent(".layui-nav-item").addClass("layui-this");if(j.getPageWidth()<=768){j.flexible(false)}});if(o.openTabCtxMenu&&o.pageTabs){layui.use("contextMenu",function(){var s=layui.contextMenu;if(!s){return}d(l+">.layui-tab-title").off("contextmenu.tab").on("contextmenu.tab","li",function(u){var t=d(this).attr("lay-id");s.show([{icon:"layui-icon layui-icon-refresh",name:"刷新当前",click:function(){c.tabChange(h,t);var v=d(l+'>.layui-tab-content>.layui-tab-item>div[lay-id="'+t+'"]').attr("lay-url");j.refresh(v)}},{icon:"layui-icon layui-icon-close-fill ctx-ic-lg",name:"关闭当前",click:function(){j.closeThisTabs(t)}},{icon:"layui-icon layui-icon-unlink",name:"关闭其他",click:function(){j.closeOtherTabs(t)}},{icon:"layui-icon layui-icon-close ctx-ic-lg",name:"关闭全部",click:function(){j.closeAllTabs()}}],u.clientX,u.clientY);return false})})}r("index",f)});