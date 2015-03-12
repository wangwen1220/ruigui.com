<?php exit;?>0014576819885b90cd3ccfad17c64b5f762e553d42d7s:2033:"a:2:{s:8:"template";s:1969:"<div class="m-cats">
  <h2 class="tt">Categories</h2>
  <div class="ct cls">
    <ul>
      <?php $channelList = service("duxcms","Label","categoryList",array( "app"=>"DuxCms", "label"=>"categoryList", "parent_id"=>1));  if(is_array($channelList)) foreach($channelList as $channel){ ?>
      <li<?php if ($channel["class_id"] == $categoryInfo["class_id"]){ ?> class="current" <?php } ?>>
        <a href="<?php echo $channel["curl"];?>" title="<?php echo $channel["name"];?>"><?php echo $channel["name"];?></a>
        <ul>
          <?php $listList = service("duxcms","Label","categoryList",array( "app"=>"DuxCms", "label"=>"categoryList", "parent_id"=>$channel['class_id']));  if(is_array($listList)) foreach($listList as $list){ ?>
          <li><a href="<?php echo $list["curl"];?>" title="<?php echo $list["name"];?>"><?php echo $list["name"];?></a></li>
          <?php } ?>
        </ul>
      </li>
      <?php } ?>
    </ul>
  </div>
</div>

<div class="m-cats">
  <h2 class="tt">New Products</h2>
  <div class="ct art">
    <ul>
      <?php $listList = service("duxcms","Label","contentList",array( "app"=>"DuxCms", "label"=>"contentList", "limit"=>"5", "image"=>"true", "class_id"=>"1", "sub"=>"true"));  if(is_array($listList)) foreach($listList as $list){ ?>
      <li class="clearfix">
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
</div>";s:12:"compile_time";i:1426145988;}";