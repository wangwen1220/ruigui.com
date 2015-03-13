<?php exit;?>001457775789361e0339deebb5b38ae1e693a8593d61s:2500:"a:2:{s:8:"template";s:2436:"<div class="panel dux-box">
    <div class="panel-head">
        <strong><?php echo $name;?>备份</strong>
    </div>
    <div class="table-responsive">
        <table id="table" class="table table-hover ">
            <tbody>
                <tr>
                    <th width="*">表名</th>
                    <th width="*">说明</th>
                    <th width="*">索引大小</th>
                    <th width="180">创建时间</th>
                </tr>
                <?php foreach ($list as $vo) { ?>
                <tr>
                    <td><?php echo $vo["Name"];?></td>
                    <td><?php echo $vo["Comment"];?></td>
                    <td><?php echo $vo["Index_length"];?></td>
                    <td><?php echo $vo["Create_time"];?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<br>
<form method="post" class="form-x dux-form form-auto" id="form" action="<?php echo url();?>">
    <div class="panel dux-box  active">
        <div class="panel-body">
            <div class="form-group">
                <div class="label">
                    <label for="sitename">执行操作</label>
                </div>
                <div class="field">
                    <div class="button-group radio">
                      <label class="button active"><input name="type" value="0" checked="checked" type="radio">备份</label>
                      <label class="button"><input name="type" value="1" type="radio">优化</label>
                      <label class="button"><input name="type" value="2" type="radio">修复</label>
                    </div>
                    <div class="input-note">备份后的数据保存在网站根目录下的Backup目录，请FTP下载后及时删除，执行数据库优化和修复可能因数据库大小会有延迟。</div>
                </div>
            </div>
        </div>
        <div class="panel-foot">
            <div class="form-button">
                <div id="tips"></div>
                <input type="hidden" name="user_id" type="hidden"  value="<?php echo $info["user_id"];?>">
                <button class="button bg-main" type="submit">执行</button>
                <button class="button bg" type="reset">重置</button>
            </div>
        </div>
    </div>
</form>
<script>
    Do.ready('base', function () {
        $('#form').duxForm();
    });
</script>";s:12:"compile_time";i:1426239789;}";