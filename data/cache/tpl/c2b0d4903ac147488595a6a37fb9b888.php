<?php exit;?>00145761978114d34b7b401b9e998b004b8243e231b5s:2301:"a:2:{s:8:"template";s:2237:"<div class="m-cats">
  <h2 class="tt">Categories</h2>
  <div class="ct cls">
    <ul>
      <?php
        $parent_id = $categoryInfo["parent_id"];
        if ($parent_id == null) {
          $parent_id = 1;
        } else if ($parent_id == 0) {
          $parent_id = $categoryInfo["class_id"];
        }
      ?>
      <?php $channelList = service("duxcms","Label","categoryList",array( "app"=>"DuxCms", "label"=>"categoryList", "parent_id"=>$parent_id));  if(is_array($channelList)) foreach($channelList as $channel){ ?>
      <li>
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

<?php if ($categoryInfo["class_id"] == 1 || $categoryInfo["parent_id"] == 1 || !$categoryInfo["class_id"]){ ?>
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
</div>
<?php } ?>";s:12:"compile_time";i:1426083781;}";