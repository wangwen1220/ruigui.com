<?php exit;?>001456912325650f0bbf7e03cb41956c3f8f598cde94s:758:"a:2:{s:8:"template";s:695:"  <footer id="footer" class="g-wrap">
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
</html>";s:12:"compile_time";i:1425376325;}";