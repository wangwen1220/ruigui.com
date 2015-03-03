<?php exit;?>00145691232593d4522044314543aff58ff98b309781s:3823:"a:2:{s:8:"template";s:3759:"<?php $__Template->display("themes/ruigui/header"); ?>

<main id="main" class="g-wrap">
  <!-- banner -->
  <div id="banner" class="g-box">
    <div class="hd">
      <ul>
        <?php $listList = service("duxcms","Label","contentList",array( "app"=>"DuxCms", "label"=>"contentList", "limit"=>5, "image"=>true));  if(is_array($listList)) foreach($listList as $list){ ?>
        <li><?php echo $list["i"] + 1;?></li>
        <?php } ?>
      </ul>
    </div>
    <div class="bd">
      <ul>
        <?php $listList = service("duxcms","Label","contentList",array( "app"=>"DuxCms", "label"=>"contentList", "limit"=>5, "image"=>true));  if(is_array($listList)) foreach($listList as $list){ ?>
        <li><a href="<?php echo $list["aurl"];?>"><img src="<?php echo $list["image"];?>" width="270" height="270"></a></li>
        <?php } ?>
      </ul>
    </div>
    <div class="nav">
      <a class="prev"></a>
      <a class="next"></a>
    </div>
  </div>
  <!-- /banner -->

  <!-- showcase -->
  <div class="m-top-new g-box">
    <?php $listList = service("duxcms","Label","contentList",array( "app"=>"DuxCms", "label"=>"contentList", "limit"=>1, "pos_id"=>1));  if(is_array($listList)) foreach($listList as $list){ ?>
    <div class="m-hot">
      <div class="tt"><a href="<?php echo $list["aurl"];?>"><?php echo $list["title"];?></a> <span>推荐置顶</span></div>
      <div class="dsc"><?php echo $list["description"];?></div>
    </div>
    <?php } ?>

    <div class="m-hot-lst">
      <ul>
        <?php $listList = service("duxcms","Label","contentList",array( "app"=>"DuxCms", "label"=>"contentList", "limit"=>"1,5", "pos_id"=>1));  if(is_array($listList)) foreach($listList as $list){ ?>
        <li><a href="<?php echo $list["aurl"];?>"><?php echo $list["title"];?></a><span><?php echo date('Y-m-d',$list['time']);?></span></li>
        <?php } ?>
      </ul>
    </div>
  </div>
  <!-- /showcase -->

  <!-- article -->
  <div class="g-md">
    <?php $classList = service("article","Label","categoryList",array( "app"=>"Article", "label"=>"categoryList", "limit"=>"4", "type"=>"1"));  if(is_array($classList)) foreach($classList as $class){ ?>
    <div class="m-news">
      <div class="tt"><a href="<?php echo $class["curl"];?>"><?php echo $class["name"];?></a><span><a href="<?php echo $class["curl"];?>">more</a></span></div>
      <?php $listList = service("duxcms","Label","contentList",array( "app"=>"DuxCms", "label"=>"contentList", "limit"=>"1", "image"=>"true" , "class_id"=>$class['class_id']));  if(is_array($listList)) foreach($listList as $list){ ?>
      <div class="hot">
        <a href="<?php echo $list["aurl"];?>"><img src="<?php echo $list["image"];?>" width="70" height="48" alt="<?php echo $list["aurl"];?>"></a><a href="<?php echo $list["aurl"];?>"><?php echo $list["title"];?></a>
        <div class="f-cb"></div>
      </div>
      <?php } ?>
      <div class="lst">
        <ul>
          <?php $listList = service("duxcms","Label","contentList",array( "app"=>"DuxCms", "label"=>"contentList", "limit"=>"5", "class_id"=>$class['class_id']));  if(is_array($listList)) foreach($listList as $list){ ?>
          <li><a href="<?php echo $list["aurl"];?>"><?php echo $list["title"];?></a><span><?php echo date('Y-m-d',$list['time']);?></span></li>
          <?php } ?>
        </ul>
      </div>
    </div>
    <?php } ?>
    <div class="f-cb"></div>
  </div>
  <!-- article -->


  <div class="g-sd js-hide">
    <div class="m-sdc">
      <div class="tt">模板说明</div>
      <div class="ct"><?php $echoList = service("duxcms","Label","fragment",array( "app"=>"DuxCms", "label"=>"fragment", "mark"=>"info"));  echo $echoList; ?></div>
    </div>
  </div>


</main>

<?php $__Template->display("themes/ruigui/footer"); ?>
";s:12:"compile_time";i:1425376325;}";