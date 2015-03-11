<?php exit;?>001457575909d3de10a884951a96b5e7e07521a3491bs:2772:"a:2:{s:8:"template";s:2708:"<?php $__Template->display("themes/ruigui/header"); ?>

<main id="main" class="g-wrap">
  <!-- banner -->
  <div id="banner">
    <div class="hd">
      <ul>
        <?php $listList = service("duxcms","Label","categoryList",array( "app"=>"DuxCms", "label"=>"categoryList", "limit"=>"5", "parent_id"=>"1", "class_id"=>"5,6,7"));  if(is_array($listList)) foreach($listList as $list){ ?>
        <li><?php echo $list["i"] + 1;?></li>
        <?php } ?>
      </ul>
    </div>
    <div class="bd">
      <ul>
        <?php $listList = service("duxcms","Label","categoryList",array( "app"=>"DuxCms", "label"=>"categoryList", "limit"=>"5", "parent_id"=>"1", "class_id"=>"5,6,7"));  if(is_array($listList)) foreach($listList as $list){ ?>
        <li><a href="<?php echo $list["curl"];?>" title="<?php echo $list["name"];?>"><img src="<?php echo $list["image"];?>" width="1000" height="320" alt="<?php echo $list["name"];?>"></a></li>
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
  <div id="showcase" class="g-box">
    <ul class="f-tj">
      <?php $listList = service("duxcms","Label","contentList",array( "app"=>"DuxCms", "label"=>"contentList", "limit"=>"16", "pos_id"=>"2"));  if(is_array($listList)) foreach($listList as $list){ ?>
      <li><a href="<?php echo $list["aurl"];?>"><img src="<?php echo $list["image"];?>" width="238" height="184" title="<?php echo $list["title"];?>" alt="<?php echo $list["title"];?>"></a></li>
      <?php } ?>
      <li class="fix"></li>
      <li class="fix"></li>
      <li class="fix"></li>
      <li class="fix"></li>
    </ul>
  </div>
  <!-- /showcase -->

  <!-- homeinfo -->
  <div id="homeinfo" class="g-box f-tj">
    <?php $listList = service("article","Label","contentList",array( "app"=>"Article", "label"=>"contentList", "limit"=>"2", "pos_id"=>"3", "order"=>"class_id desc"));  if(is_array($listList)) foreach($listList as $list){ ?>
    <div class="info">
      <h3 class="title"><?php echo $list["title"];?></h3>
      <p class="content"><?php echo $list["content"];?></p>
    </div>
    <?php } ?>
    <div class="info">
      <h3 class="title">News</h3>
      <ul class="content">
        <?php $listList = service("duxcms","Label","contentList",array( "app"=>"DuxCms", "label"=>"contentList", "limit"=>"5", "class_id"=>"2", "sub"=>"true"));  if(is_array($listList)) foreach($listList as $list){ ?>
        <li><a href="<?php echo $list["aurl"];?>"><?php echo $list["title"];?></a></li>
        <?php } ?>
      </ul>
    </div>
  </div>
  <!-- /homeinfo -->
</main>

<?php $__Template->display("themes/ruigui/footer"); ?>
";s:12:"compile_time";i:1426039909;}";