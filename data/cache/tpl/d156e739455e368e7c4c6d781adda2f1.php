<?php exit;?>001456653060eeabc1a7b5a664892dbdee4d10963c6as:1287:"a:2:{s:8:"template";s:1223:"<div class="g-hd">
  <div class="m-logo"><a href="/"><img src="/themes/ruigui/images/logo.png"></a></div>
  <!-- <div class="m-sch">
    <form action="<?php echo url('Article/Search/index');?>" method="post">
      <div class="select">
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
<div class="m-nav">
  <ul>
    <li><a <?php if (!$topCategoryInfo['class_id']){ ?> class="u-crt" <?php } ?> href="/">Home</a></li>
    <?php $listList = service("duxcms","Label","categoryList",array( "app"=>"DuxCms", "label"=>"categoryList", "limit"=>5, "parent_id"=>0));  if(is_array($listList)) foreach($listList as $list){ ?>
    <li><a href="<?php echo $list["curl"];?>" <?php if ($list['class_id']==$topCategoryInfo['class_id']){ ?> class="u-crt" <?php } ?>><?php echo $list["name"];?></a></li>
    <?php } ?>
    <li><a href='http://malu.en.alibaba.com/' target="_blank">Alibaba</a></li>
    <!-- <li><a href='<?php echo url("DuxCms/Form/index",array("name"=>'guestbook'));?>'>留言板</a></li> -->
  </ul>
</div>";s:12:"compile_time";i:1425117060;}";