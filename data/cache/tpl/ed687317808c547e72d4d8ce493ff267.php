<?php exit;?>0014568251129efb7f00f940b774b260f10e8e6ea67bs:745:"a:2:{s:8:"template";s:682:"  <footer class="footer">
    <?php $echoList = service("duxcms","Label","fragment",array( "app"=>"DuxCms", "label"=>"fragment", "mark"=>"foot"));  echo $echoList; ?>

    <nav>
      <ul>
        <li><a href="/">Home</a></li>
        <?php $listList = service("duxcms","Label","categoryList",array( "app"=>"DuxCms", "label"=>"categoryList", "limit"=>5, "parent_id"=>0));  if(is_array($listList)) foreach($listList as $list){ ?>
        <li><a href="<?php echo $list["curl"];?>"><?php echo $list["name"];?></a></li>
        <?php } ?>
      </ul>
    </nav>
    <p class="copyright">Copyright © Guangzhou Ruigui Electronic Firm. All rights reserved.</p>
  </footer>
</body>
</html>";s:12:"compile_time";i:1425289112;}";