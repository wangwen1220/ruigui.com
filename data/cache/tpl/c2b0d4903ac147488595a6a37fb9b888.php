<?php exit;?>0014573614143d37e59e755e0a27f0792cab7043c289s:1455:"a:2:{s:8:"template";s:1391:"<div class="m-cats">
  <h2 class="tt">New Products</h2>
  <div class="ct art">
    <ul>
      <?php $listList = service("duxcms","Label","contentList",array( "app"=>"DuxCms", "label"=>"contentList", "limit"=>"5", "image"=>"true"));  if(is_array($listList)) foreach($listList as $list){ ?>
      <li>
        <a href="<?php echo $list["aurl"];?>" class="pic"><img src="<?php echo $list["image"];?>" width="65" height="43" alt="<?php echo $list["title"];?>"></a>
        <h3 class="title"><a href="<?php echo $list["aurl"];?>"><?php echo $list["title"];?></a></h3>
      </li>
      <?php } ?>
    </ul>
  </div>
</div>

<div class="m-cats">
  <h2 class="tt">Tags</h2>
  <div class="ct tag">
    <?php $listList = service("duxcms","Label","tagsList",array( "app"=>"DuxCms", "label"=>"tagsList", "limit"=>"5"));  if(is_array($listList)) foreach($listList as $list){ ?>
    <a href="<?php echo $list["url"];?>"><?php echo $list["name"];?></a>
    <?php } ?>
  </div>
</div>

<div class="m-cats">
  <h2 class="tt">Links</h2>
  <div class="ct link">
    <ul>
      <?php $listList = service("duxcms","Label","formList",array( "app"=>"DuxCms", "label"=>"formList", "table"=>"link", "limit"=>"5"));  if(is_array($listList)) foreach($listList as $list){ ?>
      <li><a href="<?php echo $list["url"];?>" target="_blank"><?php echo $list["name"];?></a></li>
      <?php } ?>
    </ul>
  </div>
</div>
";s:12:"compile_time";i:1425825414;}";