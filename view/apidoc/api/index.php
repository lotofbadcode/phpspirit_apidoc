<link rel="stylesheet" href="<?php echo $static_path; ?>plugins/summernote/summernote-bs4.css">

<link rel="stylesheet" href="<?php echo $static_path ?>css/ztree/bootstrapStyle.css" type="text/css">
<link rel="stylesheet" href="<?php echo $static_path ?>css/chkradiobuild.css" type="text/css">
<script type="text/javascript" src="<?php echo $static_path ?>js/jquery.ztree.core.js"></script>
<script type="text/javascript" src="<?php echo $static_path ?>js/jquery.ztree.excheck.js"></script>
<script type="text/javascript" src="<?php echo $static_path ?>js/jquery.ztree.exedit.js"></script>
<SCRIPT type="text/javascript">
    var setting = {
        view: {
            addHoverDom: addHoverDom,
            removeHoverDom: removeHoverDom,
            selectedMulti: false
        },
        check: {
            enable: false
        },
        data: {
            simpleData: {
                enable: true
            }
        },
        edit: {
            enable: true
        }
    };

    var zNodes = [{
            id: 1,
            pId: 0,
            name: "[core] 基本功能 演示",
            open: true
        },
        {
            id: 101,
            pId: 1,
            name: "最简单的树 --  标准 JSON 数据"
        },
        {
            id: 102,
            pId: 1,
            name: "最简单的树 --  简单 JSON 数据"
        },
        {
            id: 103,
            pId: 1,
            name: "不显示 连接线"
        },
        {
            id: 104,
            pId: 1,
            name: "不显示 节点 图标"
        },
        {
            id: 108,
            pId: 1,
            name: "异步加载 节点数据"
        },
        {
            id: 109,
            pId: 1,
            name: "用 zTree 方法 异步加载 节点数据"
        },
        {
            id: 110,
            pId: 1,
            name: "用 zTree 方法 更新 节点数据"
        },
        {
            id: 111,
            pId: 1,
            name: "单击 节点 控制"
        },
        {
            id: 112,
            pId: 1,
            name: "展开 / 折叠 父节点 控制"
        },
        {
            id: 113,
            pId: 1,
            name: "根据 参数 查找 节点"
        },
        {
            id: 114,
            pId: 1,
            name: "其他 鼠标 事件监听"
        },

        {
            id: 2,
            pId: 0,
            name: "[excheck] 复/单选框功能 演示",
            open: false
        },
        {
            id: 201,
            pId: 2,
            name: "Checkbox 勾选操作"
        },
        {
            id: 206,
            pId: 2,
            name: "Checkbox nocheck 演示"
        },
        {
            id: 207,
            pId: 2,
            name: "Checkbox chkDisabled 演示"
        },
        {
            id: 208,
            pId: 2,
            name: "Checkbox halfCheck 演示"
        },
        {
            id: 202,
            pId: 2,
            name: "Checkbox 勾选统计"
        },
        {
            id: 203,
            pId: 2,
            name: "用 zTree 方法 勾选 Checkbox"
        },
        {
            id: 204,
            pId: 2,
            name: "Radio 勾选操作"
        },
        {
            id: 209,
            pId: 2,
            name: "Radio nocheck 演示"
        },
        {
            id: 210,
            pId: 2,
            name: "Radio chkDisabled 演示"
        },
        {
            id: 211,
            pId: 2,
            name: "Radio halfCheck 演示"
        },
        {
            id: 205,
            pId: 2,
            name: "用 zTree 方法 勾选 Radio"
        },

        {
            id: 3,
            pId: 0,
            name: "[exedit] 编辑功能 演示",
            open: false
        },
        {
            id: 301,
            pId: 3,
            name: "拖拽 节点 基本控制"
        },
        {
            id: 302,
            pId: 3,
            name: "拖拽 节点 高级控制"
        },
        {
            id: 303,
            pId: 3,
            name: "用 zTree 方法 移动 / 复制 节点"
        },
        {
            id: 304,
            pId: 3,
            name: "基本 增 / 删 / 改 节点"
        },
        {
            id: 305,
            pId: 3,
            name: "高级 增 / 删 / 改 节点"
        },
        {
            id: 306,
            pId: 3,
            name: "用 zTree 方法 增 / 删 / 改 节点"
        },
        {
            id: 307,
            pId: 3,
            name: "异步加载 & 编辑功能 共存"
        },
        {
            id: 308,
            pId: 3,
            name: "多棵树之间 的 数据交互"
        },

        {
            id: 4,
            pId: 0,
            name: "大数据量 演示",
            open: false
        },
        {
            id: 401,
            pId: 4,
            name: "一次性加载大数据量"
        },
        {
            id: 402,
            pId: 4,
            name: "分批异步加载大数据量"
        },
        {
            id: 403,
            pId: 4,
            name: "分批异步加载大数据量"
        },

        {
            id: 5,
            pId: 0,
            name: "组合功能 演示",
            open: false
        },
        {
            id: 501,
            pId: 5,
            name: "冻结根节点"
        },
        {
            id: 502,
            pId: 5,
            name: "单击展开/折叠节点"
        },
        {
            id: 503,
            pId: 5,
            name: "保持展开单一路径"
        },
        {
            id: 504,
            pId: 5,
            name: "添加 自定义控件"
        },
        {
            id: 505,
            pId: 5,
            name: "checkbox / radio 共存"
        },
        {
            id: 506,
            pId: 5,
            name: "左侧菜单"
        },
        {
            id: 507,
            pId: 5,
            name: "下拉菜单"
        },
        {
            id: 509,
            pId: 5,
            name: "带 checkbox 的多选下拉菜单"
        },
        {
            id: 510,
            pId: 5,
            name: "带 radio 的单选下拉菜单"
        },
        {
            id: 508,
            pId: 5,
            name: "右键菜单 的 实现"
        },
        {
            id: 511,
            pId: 5,
            name: "与其他 DOM 拖拽互动"
        },
        {
            id: 512,
            pId: 5,
            name: "异步加载模式下全部展开"
        },

        {
            id: 6,
            pId: 0,
            name: "其他扩展功能 演示",
            open: false
        },
        {
            id: 601,
            pId: 6,
            name: "隐藏普通节点"
        },
        {
            id: 602,
            pId: 6,
            name: "配合 checkbox 的隐藏"
        },
        {
            id: 603,
            pId: 6,
            name: "配合 radio 的隐藏"
        }
    ];

    $(document).ready(function() {
        $.fn.zTree.init($("#treeDemo"), setting, zNodes);
    });

    var newCount = 1;

    function addHoverDom(treeId, treeNode) {
        var sObj = $("#" + treeNode.tId + "_span");
        if (treeNode.editNameFlag || $("#addBtn_" + treeNode.tId).length > 0) return;
        var addStr = "<span class='button add' id='addBtn_" + treeNode.tId +
            "' title='add node' onfocus='this.blur();'></span>";
        sObj.after(addStr);
        var btn = $("#addBtn_" + treeNode.tId);
        if (btn) btn.bind("click", function() {
            var zTree = $.fn.zTree.getZTreeObj("treeDemo");
            zTree.addNodes(treeNode, {
                id: (100 + newCount),
                pId: treeNode.id,
                name: "new node" + (newCount++)
            });
            return false;
        });
    };

    function removeHoverDom(treeId, treeNode) {
        $("#addBtn_" + treeNode.tId).unbind().remove();
    };
</SCRIPT>

<div class="row pagetitle" title="接口列表">
    <div class="col-12">
        <!-- Left sidebar -->
        <div class="email-leftbar " style="width: 380px">
            <a style="color:white;" class="btn btn-danger btn-rounded btn-custom btn-block waves-effect waves-light">创建文件夹</a>
            <div class="m-t-20"></div>
            <ul id="treeDemo" class="ztree card"></ul>

        </div>
        <!-- End Left sidebar -->


        <!-- Right Sidebar -->
        <div class="email-rightbar" style="margin-left:410px">
            <div class="btn-toolbar" role="toolbar" style="padding-top: 9px;">
                <div class="checkbox checkbox-success checkbox-inline">
                    <input type="checkbox" class="styled" id="inlineCheckbox1" value="option1">
                    <label for="inlineCheckbox1"> 通用请求头 </label>
                </div>

                <div class="checkbox checkbox-success checkbox-inline">
                    <input type="checkbox" class="styled" id="inlineCheckbox2" value="option1">
                    <label for="inlineCheckbox2"> 通用请求参数 </label>
                </div>

                <div class="checkbox checkbox-success checkbox-inline">
                    <input type="checkbox" class="styled" id="inlineCheckbox3" value="option1">
                    <label for="inlineCheckbox3"> Inline One </label>
                </div>


            </div>


            <div class="card m-t-20">
                <div class="card-body">

                    <!--tree/start-->
                    <script src="<?php echo $static_path ?>js/jquery.treetable.js"></script>
                    <link href="<?php echo $static_path ?>css/treetable/jquery.treetable.min.css" rel="stylesheet">
                    <link href="<?php echo $static_path ?>css/treetable/jquery.treetable.theme.default.css" rel="stylesheet">
                    <table id="example-advanced">
                        <caption>
                            <a href="#" onclick="jQuery('#example-advanced').treetable('expandAll'); return false;">Expand all</a>
                            <a href="#" onclick="jQuery('#example-advanced').treetable('collapseAll'); return false;">Collapse all</a>
                        </caption>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Kind</th>
                                <th>Size</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr data-tt-id='1'>
                                <td><span class='folder'>Acknowledgements.rtf</span></td>
                                <td>File</td>
                                <td>480.95 KB</td>
                            </tr>
                            <tr data-tt-id='2'>
                                <td><span class='folder'>CHUD</span></td>
                                <td>Folder</td>
                                <td>--</td>
                            </tr>
                            <tr data-tt-id='3' data-tt-parent-id='2'>
                                <td><span class='file'>amber</span></td>
                                <td>Folder</td>
                                <td>--</td>
                            </tr>
                            <tr data-tt-id='4' data-tt-parent-id='2'>
                                <td><span class='file'>amber1</span></td>
                                <td>Folder</td>
                                <td>--</td>
                            </tr>
                        </tbody>
                    </table>
                    <script>
                        $(function() {
                            $("#example-advanced").treetable({
                                expandable: false
                            });

                            // Highlight selected row
                            $("#example-advanced tbody").on("mousedown", "tr", function() {
                                $(".selected").not(this).removeClass("selected");
                                $(this).toggleClass("selected");
                            });

                            // Drag & Drop Example Code
                            $("#example-advanced .file, #example-advanced .folder").draggable({
                                helper: "clone",
                                opacity: .75,
                                refreshPositions: true,
                                revert: "invalid",
                                revertDuration: 300,
                                scroll: true
                            });

                            $("#example-advanced .folder").each(function() {
                                $(this).parents("#example-advanced tr").droppable({
                                    accept: ".file, .folder",
                                    drop: function(e, ui) {
                                        var droppedEl = ui.draggable.parents("tr");
                                        $("#example-advanced").treetable("move", droppedEl.data("ttId"), $(this).data("ttId"));
                                    },
                                    hoverClass: "accept",
                                    over: function(e, ui) {
                                        var droppedEl = ui.draggable.parents("tr");
                                        if (this != droppedEl[0] && !$(this).is(".expanded")) {
                                            $("#example-advanced").treetable("expandNode", $(this).data("ttId"));
                                        }
                                    }
                                });
                            });
                        })
                    </script>


                </div>

            </div>


        </div> <!-- end Col-9 -->

    </div>

</div>

<script src="<?php echo $static_path; ?>js/jquery-ui.min.js"></script>