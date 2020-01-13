<style>
    td {
        font-size: 13px;
        vertical-align: middle
    }
</style>

<div class="row pagetitle" title="错误码">
    <div class="col-lg-12">
        <div class="card m-b-20">
            <div class="card-body">
                <button type="button" id='tt' class="btn btn-primary btn-sm waves-effect waves-light">添加错误码</button>
                <div class="modal fade" style="top:13%;" tabindex="-1" role="dialog" id="showModal">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <!-- 内容会加载到这里 -->哈哈哈哈
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->


                <button type="button" data-toggle="modal" data-target=".createcode" class="btn btn-primary btn-sm waves-effect waves-light">添加错误码</button>
                <div class="modal fade createcode" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title mt-0" id="myLargeModalLabel">添加错误码</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <form action="<?php echo url('apidoc.ApiCode/add') ?>">

                                    <div class="form-group">
                                        <label>错误码</label>
                                        <div>
                                            <input type="text" class="form-control" data-parsley-required-message="错误码必填" required name="code" placeholder="输入错误码" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>错误描述</label>
                                        <div>
                                            <input type="text" class="form-control" data-parsley-required-message="错误描述必填" required name="message" placeholder="输入错误描述" />
                                        </div>
                                    </div>

                                    <div class="form-group m-b-0">
                                        <div>
                                            <button jump='{"type":2,"url":"<?php echo url('apidoc.ApiCode/index') ?>"}' data-style="expand-left" class="spirit_submit btn btn-primary  waves-effect waves-light ladda-button" type="button">提交</button>
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

                <table class="table m-t-15">
                    <thead>
                        <tr>
                            <th>错误码</th>
                            <th>错误描述</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>0</td>
                            <td>成功</td>
                            <td>
                                <button type="button" class="btn btn-sm btn-info waves-effect waves-light">编辑</button>
                                <button type="button" class="btn btn-sm btn-danger waves-effect waves-light">删除</button>
                            </td>
                        </tr>
                        <tr>
                            <td>-999</td>
                            <td>登录超时</td>
                            <td>
                                <button type="button" class="btn btn-sm btn-info waves-effect waves-light">编辑</button>
                                <button type="button" class="btn btn-sm btn-danger waves-effect waves-light">删除</button>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
<script>
    $(function() {
        $("#tt").click(function() {

            // 打开模态框

            $("#showModal").modal({
                // backdrop: 'static', // 点击空白不关闭
                keyboard: false, // 按键盘esc也不会关闭
                remote: 'http://www.my0511.com' // 从远程加载内容的地址
            });



        });
        $("#showModal").on("hidden.bs.modal", function() {
            $(this).removeData("bs.modal");
            $(this).find(".modal-content").children().remove();
        });
    })
</script>