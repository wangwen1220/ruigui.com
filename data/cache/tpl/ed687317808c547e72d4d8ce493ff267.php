<?php exit;?>0014576819887e3ef19448f36bf6102be5dd858f7200s:827:"a:2:{s:8:"template";s:764:"  <footer id="footer" class="g-wrap">
    <?php $echoList = service("duxcms","Label","fragment",array( "app"=>"DuxCms", "label"=>"fragment", "mark"=>"foot"));  echo $echoList; ?>

    <nav>
      <ul>
        <li><a href="/">Home</a></li>
        <?php $listList = service("duxcms","Label","categoryList",array( "app"=>"DuxCms", "label"=>"categoryList", "limit"=>8, "parent_id"=>0));  if(is_array($listList)) foreach($listList as $list){ ?>
        <li><a href="<?php echo $list["curl"];?>"><?php echo $list["name"];?></a></li>
        <?php } ?>
      </ul>
    </nav>

    <p class="copyright">Copyright © <?php echo $sys["site_copyright"];?>. All rights reserved.</p>
  </footer>

  <!-- 统计代码 -->
  <?php echo $sys["site_statistics"];?>
</body>
</html>";s:12:"compile_time";i:1426145988;}";