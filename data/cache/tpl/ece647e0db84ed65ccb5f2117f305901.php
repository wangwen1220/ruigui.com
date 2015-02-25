<?php exit;?>001456420031419c557c015a77c45de52441114de637s:5270:"a:2:{s:8:"template";s:5206:"<!doctype html>
<html class="home no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="renderer" content="webkit">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $media["title"];?></title>
  <meta name="keywords" content="<?php echo $media["keywords"];?>">
  <meta name="description" content="<?php echo $media["description"];?>">
  <link href="/themes/ruigui/css/main.css" rel="stylesheet">
  <script src="/themes/ruigui/js/head.js" id="headjs" data-headjs-load="/themes/ruigui/js/main.js" data-loads="/themes/ruigui/js/jquery-1.11.2.js, /themes/ruigui/js/jquery-superslide.js"></script>
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>

<body>
	<!--[if lt IE 8]><p class="browserupgrade">似乎您正在使用 Internet Explorer 的一个<strong>老旧</strong>的版本。建议您<a href="http://browsehappy.com/">升级浏览器</a>以达到更好的浏览体验。</p><![endif]-->

  <?php $__Template->display("themes/ruigui/head"); ?>
  <div class="g-bd">
    <div class="g-mn">
      <div class="m-hds">
        <div id="m-sld" class="m-sld s-box">
          <div class="hd">
            <ul>
              <?php $listList = service("duxcms","Label","contentList",array( "app"=>"DuxCms", "label"=>"contentList", "limit"=>5, "image"=>true));  if(is_array($listList)) foreach($listList as $list){ ?>
              <li><?php echo $list["i"];?></li>
              <?php } ?>
            </ul>
          </div>
          <div class="bd">
            <ul>
              <?php $listList = service("duxcms","Label","contentList",array( "app"=>"DuxCms", "label"=>"contentList", "limit"=>5, "image"=>true));  if(is_array($listList)) foreach($listList as $list){ ?>
              <li><a href="<?php echo $list["aurl"];?>" target="_blank"><img src="<?php echo cut_image($list["image"],270,270);?>" width="270" height="270"></a></li>
              <?php } ?>
            </ul>
          </div>
        </div>

        <div class="m-top-new s-box">
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
      </div>
      <div class="f-cb"></div>
      <div class="u-sep10"></div>
      <div class="m-ad"><img src="/themes/ruigui/images/ad-1.jpg" width="670" height="90"></div>
      <div class="g-md">
        <?php $classList = service("article","Label","categoryList",array( "app"=>"Article", "label"=>"categoryList", "limit"=>"4", "type"=>"1"));  if(is_array($classList)) foreach($classList as $class){ ?>
        <div class="m-news">
          <div class="tt"><a href="<?php echo $class["curl"];?>"><?php echo $class["name"];?> </a><span><a href="<?php echo $class["curl"];?>">more</a></span></div>
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
    </div>
    <div class="g-sd">
      <div class="m-sdc">
        <div class="tt">模板说明</div>
        <div class="ct"><?php $echoList = service("duxcms","Label","fragment",array( "app"=>"DuxCms", "label"=>"fragment", "mark"=>"info"));  echo $echoList; ?></div>
      </div>
      <?php $__Template->display("themes/ruigui/sidebar"); ?>
    </div>
    <div class="f-cb"></div>
  </div>
  <?php $__Template->display("themes/ruigui/foot"); ?>
</body>
</html>";s:12:"compile_time";i:1424884031;}";