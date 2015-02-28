<?php exit;?>00145665306005dc69e1ff93330fb1f4513d85cb2c89s:658:"a:2:{s:8:"template";s:595:"<div class="g-ft">
<?php $echoList = service("duxcms","Label","fragment",array( "app"=>"DuxCms", "label"=>"fragment", "mark"=>"foot"));  echo $echoList; ?>
<nav>
  <ul>
    <li><a href="/">Home</a></li>
    <?php $listList = service("duxcms","Label","categoryList",array( "app"=>"DuxCms", "label"=>"categoryList", "limit"=>5, "parent_id"=>0));  if(is_array($listList)) foreach($listList as $list){ ?>
    <li><a href="<?php echo $list["curl"];?>"><?php echo $list["name"];?></a></li>
    <?php } ?>
  </ul>
</nav>
<p>Copyright © Guangzhou Ruigui Electronic Firm. All rights reserved.</p>
</div>";s:12:"compile_time";i:1425117060;}";