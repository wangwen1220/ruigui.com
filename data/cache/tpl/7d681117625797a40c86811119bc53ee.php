<?php exit;?>001456820108c53830302a6513fe2595dc59e12fde35s:2341:"a:2:{s:8:"template";s:2277:"<!doctype html>
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
  <script src="/themes/ruigui/js/head.js" id="headjs" data-headjs-load="/themes/ruigui/js/main.js" data-map="home"></script>
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>

<body>
  <!--[if lt IE 8]><p class="browser-upgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p><![endif]-->

  <header id="header">
    <div class="g-wrap">
      <div class="logo"><a href="/"><img src="/themes/ruigui/images/logo.png"></a></div>
      <!-- <div class="m-search">
        <form action="<?php echo url('Article/Search/index');?>" method="post">
          <div class="slectbox">
            <select name="model">
              <option value="0">标题</option>
              <option value="1">全文</option>
            </select>
          </div>
          <input name="keyword" type="text" maxlength="20">
          <button>搜索</button>
        </form>
      </div> -->
    </div>

    <nav>
      <ul class="g-wrap">
        <li><a <?php if (!$topCategoryInfo['class_id']){ ?> class="u-crt" <?php } ?> href="/">Home</a></li>
        <?php $listList = service("duxcms","Label","categoryList",array( "app"=>"DuxCms", "label"=>"categoryList", "limit"=>5, "parent_id"=>0));  if(is_array($listList)) foreach($listList as $list){ ?>
        <li><a href="<?php echo $list["curl"];?>" <?php if ($list['class_id']==$topCategoryInfo['class_id']){ ?> class="u-crt" <?php } ?>><?php echo $list["name"];?></a></li>
        <?php } ?>
        <li><a href='http://malu.en.alibaba.com/' target="_blank">Alibaba</a></li>
        <!-- <li><a href='<?php echo url("DuxCms/Form/index",array("name"=>'guestbook'));?>'>留言板</a></li> -->
      </ul>
    </nav>
  </header>
";s:12:"compile_time";i:1425284108;}";