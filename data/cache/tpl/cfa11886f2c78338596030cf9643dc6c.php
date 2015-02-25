<?php exit;?>001456415100b59bcbc394f4c1d5587e97cebae785das:2763:"a:2:{s:8:"template";s:2699:"<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $media["title"];?></title>
<meta name="keywords" content="<?php echo $media["keywords"];?>" />
<meta name="description" content="<?php echo $media["description"];?>" />
<link href="/themes/ruigui/css/base.css" rel="stylesheet" type="text/css">
<link href="/themes/ruigui/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php $__Template->display("themes/ruigui/head"); ?>
<div class="g-bd">
	<div class="g-mn">
		<div class="m-crumb">
			<ul class="f-cb">
				<li><a href="/">首页</a></li>
				<?php foreach ($crumb as $vo) { ?> 
				<li><i>&gt;</i><a href="<?php echo $vo["url"];?>"><?php echo $vo["name"];?></a></li>
				<?php } ?>
			</ul>
		</div>
		<?php foreach ($pageList as $vo) { ?> 
		<div class="m-gb-lst">
			<div class="info"><?php echo $vo["name"];?> | <?php echo $vo["email"];?> | <?php echo date('Y-m-d',$vo['time']);?></div>
			<div class="content"><?php echo $vo["content"];?></div>
		</div>
		<?php } ?>
		<div class="m-gb-form">
			<form action="<?php echo U('DuxCms/Form/push');?>" method="post" AutoComplete="off" >
				<div class="m-form"> 
                	<div class="formitm">
                        <label class="lab">昵称：</label>
                        <div class="ipt">
                            <input type="text" name="name" class="u-ipt" />
                        </div>
                    </div>
                    <div class="formitm">
                        <label class="lab">邮箱：</label>
                        <div class="ipt">
                            <input name="email" type="text" class="u-ipt" id="email" />
                        </div>
                    </div>
                    <div class="formitm">
                        <label class="lab">内容：</label>
                        <div class="ipt">
                          <textarea name="content" class="u-tta u-tta-6" id="content"></textarea>
                        </div>
                    </div>
					<div class="formitm formitm-1">
                    	<input name="table" type="hidden" value="guestbook">
                        <input name="token" type="hidden" value=' <?php $echoList = service("duxcms","Label","formToken",array( "app"=>"DuxCms", "label"=>"formToken", "table"=>"guestbook"));  echo $echoList; ?> '>
						<button class="u-btn" type="submit">确认发布</button>
					</div>
				</div>
			</form>
		</div>
		<div class="m-page"><?php echo $page;?> </div>
	</div>
	<div class="g-sd">
		<?php $__Template->display("themes/ruigui/sidebar"); ?>
	</div>
	<div class="f-cb"></div>
</div>
<?php $__Template->display("themes/ruigui/foot"); ?>
</body>
</html>
";s:12:"compile_time";i:1424879100;}";