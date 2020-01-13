$(function () {
    $("body").on("click",'.spirit_submit',function(){
        form = $(this).parents().find('form');
        submitbtn = $(this);
        b = form.parsley().validate();
        if (b) { console.log(this);
            var ladda = Ladda.create(this);
            ladda.start();
            $.ajax({
                url: form.attr('action'),
                cache: false,
                data: form.serialize(),
                type: "POST",
                success: function (data) {
                    if (data.code == 0) {
                        const jump = JSON.parse(submitbtn.attr('jump'));
                        switch (jump.type) {
                            case 0:
                                window.location.reload();
                                break;
                            case 1:
                                if (form.find('.successtip').length <= 0) {
                                    $('<div class="alert alert-success successtip"  style="display: none" role="alert"></div>').appendTo(form);
                                }

                                $(form).find('.successtip').html(jump.message + "，3秒后自动<a href='" + jump.url + "' class='alert-link'>跳转</a>");
                                $(form).find('.successtip').show();
                                setTimeout(function () {
                                    window.location.href = jump.url;
                                }, 3000);
                                break;
                            case 2:
                                window.location.href = jump.url;
                                break;
                             
                        }
                    } else {
                        if (form.find('.errortip').length <= 0) {
                            $('<div class="alert alert-danger errortip"  style="display: none" role="alert"></div>').appendTo(form);
                        }
                        $(form).find('.errortip').html(data.message);
                        $(form).find('.errortip').show();
                        setTimeout(function () {
                            $(form).find('.errortip').fadeOut(1000)
                        }, 3000);
                    }
                },
                error: function () {
                    if (form.find('.errortip').length <= 0) {
                        $('<div class="alert alert-danger errortip"  style="display: none" role="alert"></div>').appendTo(form);
                    }
                    $(form).find('.errortip').html('服务器发生错误');
                    $(form).find('.errortip').show();
                    setTimeout(function () {
                        $(form).find('.errortip').fadeOut(1000)
                    }, 3000);
                },
                complete: function (data) {
                    //请求完成的处理
                    ladda.stop();
                },
            });
        }
      });



});
