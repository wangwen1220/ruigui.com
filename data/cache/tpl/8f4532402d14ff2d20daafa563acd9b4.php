<?php exit;?>00145641886333e39df439f91cd9949e2e46669b362es:3666:"a:2:{s:8:"template";s:3602:"<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>DUXCMS 2.0 - 网站后台管理</title>
    <link rel="stylesheet" href="/public/common/css/pintuer.css">
    <link rel="stylesheet" href="/public/lib/css/admin.css">
    <script src="/public/js/jquery.js"></script>
    <script src="/public/common/js/pintuer.js"></script>
    <script src="/public/common/js/respond.js"></script>
    <style>
    body,html{overflow: hidden;}
    </style>
</head>
<body>
    <div class="dux-head clearfix">
        <div class="dux-logo">
            <a href="http://www.duxcms.com" target="_blank">
                <img src="/public/lib/images/logo.png" alt="duxcms后台管理系统" />
            </a>
            <button class="button icon-navicon admin-nav-btn" data-target=".admin-nav"></button>
            <button class="button icon-navicon icon-ellipsis-v admin-menu-btn" data-target=".admin-menu"></button>
        </div>
        <div class="dux-nav">
            <ul class="nav  nav-navicon nav-inline admin-nav" id="nav">
            </ul>
            <ul class="nav  nav-navicon nav-menu nav-inline admin-nav nav-tool">
               <li> <a href="/" target="_blank" class="icon-home"></a></li>
                <li> <a href="<?php echo url('admin/AdminUser/edit',array('user_id'=>$loginUserInfo['user_id']));?>" target="dux-iframe" class="icon-user"></a></li>
                <li> <a href="<?php echo url('admin/Login/logout');?>" class="dux-logout bg-red icon-power-off"></a></li>
            </ul>
        </div>
    </div>
    <div class="dux-sidebar">
        <ul class="nav  nav-navicon admin-menu">
            <div class="nav-head" id="nav-head"></div>
            <div id="menu">
                <li><a href="<?php echo $vo["url"];?>" class="icon-<?php echo $vo["icon"];?>"> <?php echo $vo["name"];?></a></li>
            </div>
        </ul>
    </div>    
    <div class="dux-admin">
            <iframe id="dux-iframe" name="dux-iframe" class="dux-iframe" src="" frameborder="0"></iframe>
    </div>
</body>
<script>
    //生成主菜单
    var data = <?php echo $menuList;?>;
    var topNav = '';
    for(var i in data){
        if(data[i]['menu'] != ''){
            topNav += '<li><a href="javascript:;" data="'+i+'" url="" class="icon-'+data[i].icon+'"> '+data[i].name+'</a></li>';
        }
    }
    $('#nav').html(topNav);
    //绑定导航连接
    $('#nav').on('click','a',function(){
        $('#nav-head').text($(this).text());
        var n = $(this).attr('data');
        var menu = data[n]['menu'];
        var menuHtml =  '';
        if(menu != ''){
            for(var i in menu){
                menuHtml += '<li><a href="javascript:;" url="'+menu[i].url+'" class="icon-'+menu[i].icon+'"> '+menu[i].name+'</a></li>';
            }
        }
        $('#menu').html(menuHtml);
        //设置样式
        $('#nav li').removeClass('active');
        $(this).parent('li').addClass('active');
        //打开菜单
        $('#menu a:first').click();
    });
    //绑定菜单连接
    $('#menu').on('click','a',function(){
        var url = $(this).attr('url');
        $('.dux-iframe').attr('src',url);
        //设置样式
        $('#menu li').removeClass('active');
        $(this).parent('li').addClass('active');
    });
    $('#nav a:first').click();
</script>
</html>";s:12:"compile_time";i:1424882863;}";