<?php exit;?>001456660735489a20ec999a3280b0aa62dca6878536s:3603:"a:2:{s:8:"template";s:3539:"<div class="panel dux-box  active dux-form form-auto">
    <div class="panel-head">
        <strong>更新管理器</strong>
    </div>
    <div class="panel-body">
        <div class="form-group">
            <div class="label">
                <label>当前版本</label>
            </div>
            <div class="field">
                <?php echo config('DUX_VER');?> (<?php echo config('DUX_TIME');?>)
            </div>
        </div>
        <div class="form-group">
            <div class="label">
                <label>可用更新</label>
            </div>
            <div class="field">
                <p>
                    <button class="button bg-main" type="button" id="check"><span class=""></span> 检测更新</button>
                </p>
                <blockquote>
                    <p id="msg">等待检测</p>
                </blockquote>
            </div>
        </div>
        <input type="hidden" id="url_fix" name="url_fix" value="">

    </div>
</div>
<script>
    //开启检测按钮
    function onUpdateBtn(){
        $('#check  span').removeClass('icon-spinner rotate');
        $('#check').removeAttr('disabled');
    }
    //禁用检测按钮
    function offUpdateBtn(){
        $('#check  span').addClass('icon-spinner rotate');
        $('#check').attr('disabled','disabled');
    }
    //检测更新
    $('#check').click(function(){
        offUpdateBtn();
        $.post(appUrl +'duxcms/AdminUpdate/getVer',{},function(data){
            onUpdateBtn();
            if(data.status){
                var info = data.info;
                $('#url_fix').val(info.url_fix);
                var html = '\
                <p>'+ info.msg +'</p>\
                <p>更新简要：'+ info.remark +'</p>\
                <p><button class="button bg-green" type="button" id="update"><span class=""></span> 点击更新</button>  </p>\
                <p id="updateMsg"></p>\
                ';
                $('#msg').html(html);
            }else{
                $('#msg').html(data.info);
            }
        });
    });
    //开启更新按钮
    function onUpdateBtn(){
        $('#update  span').removeClass('icon-spinner rotate');
        $('#update').removeAttr('disabled');
    }
    //禁用更新按钮
    function offUpdateBtn(){
        $('#update  span').addClass('icon-spinner rotate');
        $('#update').attr('disabled','disabled');
    }
    
    //更新版本
    $('body').on('click','#update', function () { 
        offUpdateBtn();
        $('#updateMsg').html('下载更新中，请稍等...');
        $.post(appUrl +'duxcms/AdminUpdate/dowload',{url:$('#url_fix').val()},function(data){
            $('#updateMsg').html(data.info);
            if(data.status){
                unzip();
            }else{
                onUpdateBtn();
            }
        });
     });
    //解压更新
    function unzip(){
        $.post(appUrl +'duxcms/AdminUpdate/unzip',{url:$('#url_fix').val()},function(data){
            $('#updateMsg').html(data.info);
            if(data.status){
                upfile();
            }else{
                onUpdateBtn();
            }
        });
    }
    //更新文件
    function upfile(){
        $.post(appUrl +'duxcms/AdminUpdate/upfile',{url:$('#url_fix').val()},function(data){
            $('#updateMsg').html(data.info);
            if(data.status){
                window.setTimeout("window.location.reload();",3000);
            }else{
                onUpdateBtn();
            }
        });
    }
    
</script>";s:12:"compile_time";i:1425124735;}";