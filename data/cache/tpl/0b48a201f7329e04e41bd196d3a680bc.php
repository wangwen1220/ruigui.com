<?php exit;?>001457361414f40b98b10cbaae121a072ae29dfe4537s:1887:"a:2:{s:8:"template";s:1823:"<?php $__Template->display("themes/ruigui/header"); ?>

<main id="main" class="g-wrap">
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
    <div class="m-pg-lst">
      <div class="pic">
      <?php if ($vo['image']){ ?>
      <img src="<?php echo $vo["image"];?>" width="120" height="80">
      <?php }else{ ?>
      <img src="/themes/ruigui/images/fm.jpg" width="120" height="80">
      <?php } ?>
      </div>
      <div class="info">
        <div class="tt"><a href="<?php echo $vo["aurl"];?>"><?php echo $vo["title"];?></a></div>
        <div class="dsc"><?php echo $vo["description"];?></div>
        <div class="time"><span>时间：<?php echo date('Y-m-d',$vo['time']);?></span> <span>访问：<?php echo $vo["views"];?></span></div>
      </div>
      <div class="f-cb"></div>
    </div>
    <?php } ?>

    <div class="m-page"><?php echo $page;?> </div>
  </div>

  <sidebar class="g-sd">
    <div class="m-cats">
      <h2 class="tt">Categories</h2>
      <div class="ct cls">
        <ul>
          <?php $listList = service("duxcms","Label","categoryList",array( "app"=>"DuxCms", "label"=>"categoryList", "parent_id"=>$categoryInfo['class_id']));  if(is_array($listList)) foreach($listList as $list){ ?>
          <li><a href="<?php echo $list["curl"];?>" title="<?php echo $list["name"];?>"><?php echo $list["name"];?></a></li>
          <?php } ?>
        </ul>
      </div>
    </div>

    <?php $__Template->display("themes/ruigui/sidebar"); ?>
  </sidebar>
</main>

<?php $__Template->display("themes/ruigui/footer"); ?>
";s:12:"compile_time";i:1425825414;}";