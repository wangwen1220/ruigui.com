<?php exit;?>00145666128905eccdb6aeee720cb2f50bb841dcb0bes:1145:"a:2:{s:8:"template";s:1081:"<!doctype html>
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
		
		<div class="m-pg-tt"><?php echo $categoryInfo["name"];?></div>
		<div class="m-pg-bd">
			<?php echo $categoryInfo["content"];?>
		</div>
	</div>
	<div class="g-sd">
		<?php $__Template->display("themes/ruigui/sidebar"); ?>
	</div>
	<div class="f-cb"></div>
</div>
<?php $__Template->display("themes/ruigui/foot"); ?>
</body>
</html>
";s:12:"compile_time";i:1425125289;}";