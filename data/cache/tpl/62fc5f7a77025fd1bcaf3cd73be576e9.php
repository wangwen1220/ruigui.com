<?php exit;?>0014576819886b5029e3475483542bc66401c987e995s:1377:"a:2:{s:8:"template";s:1313:"<?php $__Template->display("themes/ruigui/header"); ?>

<main id="main" class="g-wrap">
  <div class="g-mn">
    <div class="m-crumb">
      <ul class="f-cb">
        <li><a href="/">Home</a></li>
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
        <div class="time"><span>Time: <?php echo date('Y-m-d',$vo['time']);?></span> <span>Views: <?php echo $vo["views"];?></span></div>
      </div>
      <div class="f-cb"></div>
    </div>
    <?php } ?>

    <div class="m-page"><?php echo $page;?> </div>
  </div>

  <sidebar class="g-sd">
    <?php $__Template->display("themes/ruigui/sidebar"); ?>
  </sidebar>
</main>

<?php $__Template->display("themes/ruigui/footer"); ?>
";s:12:"compile_time";i:1426145988;}";