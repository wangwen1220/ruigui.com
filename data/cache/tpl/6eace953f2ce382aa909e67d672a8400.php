<?php exit;?>00145779949461fa066252408bcb61e1cb237ab294a1s:2354:"a:2:{s:8:"template";s:2290:"<!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="renderer" content="webkit">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $media["title"];?></title>
  <meta name="keywords" content="<?php echo $media["keywords"];?>">
  <meta name="description" content="<?php echo $media["description"];?>">
  <link href="/themes/ruigui/css/main.css" rel="stylesheet">
  <script src="/themes/ruigui/js/head.js" id="headjs" data-headjs-load="/themes/ruigui/js/main.js" data-map="home"></script>
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>

<body>
  <!--[if lt IE 8]><p class="browser-upgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p><![endif]-->

  <header id="header">
    <div class="g-wrap">
      <div class="logo"><a href="/"><img src="/themes/ruigui/images/logo.png"><strong>RuiGui Electronic</strong></a></div>
      <form class="search" action="<?php echo url('Article/Search/index');?>" method="post">
        <div class="slectbox">
          <select name="model">
            <option value="0">Title</option>
            <!-- <option value="1">Content</option> -->
          </select>
        </div>
        <input type="text" name="keyword" maxlength="20" placeholder="Search Products">
        <button>Search</button>
      </form>
    </div>
  </header>

  <nav id="nav">
    <ul class="g-wrap">
      <li><a <?php if (!$topCategoryInfo['class_id']){ ?> class="current" <?php } ?> href="/">Home</a></li>
      <?php $listList = service("duxcms","Label","categoryList",array( "app"=>"DuxCms", "label"=>"categoryList", "limit"=>8, "parent_id"=>0));  if(is_array($listList)) foreach($listList as $list){ ?>
      <li><a href="<?php echo $list["curl"];?>" <?php if ($list['class_id']==$topCategoryInfo['class_id']){ ?> class="current" <?php } ?>><?php echo $list["name"];?></a></li>
      <?php } ?>
      <li><a href='http://malu.en.alibaba.com/' target="_blank">Alibaba Website</a></li>
      <!-- <li><a href='<?php echo url("DuxCms/Form/index",array("name"=>'guestbook'));?>'>留言板</a></li> -->
    </ul>
  </nav>
";s:12:"compile_time";i:1426263494;}";