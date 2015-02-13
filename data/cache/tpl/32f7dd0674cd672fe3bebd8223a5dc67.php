<?php exit;?>001455335082301df62acecfa3eb4e30f88a44148298s:1118:"a:2:{s:8:"template";s:1054:"<div class="g-hd">
	<div class="m-logo"></div>
	<div class="m-sch">
		<!---->
		<form action="<?php echo url('Article/Search/index');?>" method="post">
		<div class="select">
			<select name="model">
				<option value="0">标题</option>
				<option value="1">全文</option>
			</select>
		</div>
		<input name="keyword" type="text" maxlength="20">
		<button>搜索</button>
		</form>
	</div>
</div>
<div class="m-nav">
	<ul>
		<li><a <?php if (!$topCategoryInfo['class_id']){ ?> class="u-crt" <?php } ?>  href="/">网站首页</a></li>
        <?php $listList = service("duxcms","Label","categoryList",array( "app"=>"DuxCms", "label"=>"categoryList", "limit"=>5, "parent_id"=>0));  if(is_array($listList)) foreach($listList as $list){ ?>
           <li> <a href="<?php echo $list["curl"];?>" <?php if ($list['class_id']==$topCategoryInfo['class_id']){ ?> class="u-crt" <?php } ?>  ><?php echo $list["name"];?></a></li>
        <?php } ?>
		<li><a href='<?php echo url("DuxCms/Form/index",array("name"=>'guestbook'));?>'>留言板</a></li>
	</ul>
</div>";s:12:"compile_time";i:1423799082;}";