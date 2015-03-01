<?php exit;?>0014566612340b1183a594274e56341da011a929e8afs:658:"a:2:{s:8:"template";s:595:"<div class="g-ft">
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
</div>";s:12:"compile_time";i:1425125234;}";