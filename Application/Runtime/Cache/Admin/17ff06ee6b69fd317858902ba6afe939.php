<?php if (!defined('THINK_PATH')) exit();?><div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close"
               data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel">
                    <?php if($params['userId']): ?>编辑用户
                    <?php else: ?>
                        添加用户<?php endif; ?>
              </h4>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="modal_div">
                  <form role="form" class="form-inline" id="preview_form" name="preview_form" enctype="multipart/form-data" method="post" action="<?php echo U('Compub/Common/uploadiframe');?>" target="uploadiframe">
                    <div class="form-group col-lg-12">
                      <label class="col-lg-3">姓名：</label>
                      <input class="form-control" name="fullname" value="<?php echo ($info['fullname']); ?>">
                    </div>

                    <div class="form-group col-lg-12">
                      <label class="col-lg-3">用户名：</label>
                      <input class="form-control" placeholder="" name="name" value="<?php echo ($info['name']); ?>" <?php if($params['userId']): ?>disabled<?php endif; ?>>
                    </div>

                    <div class="form-group col-lg-12">
                      <label class="col-lg-3">联系电话：</label>
                      <input class="form-control" placeholder="" name="mobile" value="<?php echo ($info['mobile']); ?>">
                    </div>

                    <div class="form-group col-lg-12">
                      <label class="col-lg-3">密码：</label>
                      <?php if(!$info['id']): ?><input type="password" class="form-control" placeholder="" name="password" value="111111" disabled>
                      <?php else: ?>
                      <input type="password" class="form-control" placeholder="" name="password" value="<?php if($info['id']){echo "default";} ?>"><?php endif; ?>
                      <?php if(!$info[id]): ?><div class="row" style="padding:0;">
                        <span class="col-lg-offset-3 help-block" style="margin-top:0;margin-bottom:0;">&nbsp&nbsp默认密码111111</span>
                        </div><?php endif; ?>
                    </div>

                    <div class="form-group col-lg-12">
                      <label class="col-lg-3">角色:</label>
                      <select class="form-control" name="roleId">
                        <option value=""></option>
                        <?php if(is_array($roleList)): foreach($roleList as $key=>$vo): ?><option value="<?php echo ($vo["id"]); ?>" <?php if($vo['id']==$info['role_id']): ?>selected<?php endif; ?>><?php echo ($vo["name"]); ?></option><?php endforeach; endif; ?>
                      </select>
                    </div>

                    <!-- <div class="form-group col-lg-12">
                      <label class="col-lg-3">上传：</label>
                      <input class="form-control" placeholder="" name="userImg" id="userImg" value="<?php echo ($info['image']); ?>" disabled>
                      <input type="file" class="upload" name="uploadFile">
                    </div> -->

                    <div class="form-group col-lg-12">
                      <label class="col-lg-3">状态:</label>
                      <select class="form-control" name="status">
                        <option value="0">停用</option>
                        <option value="1"<?php if($info['status']=='1'): ?>selected<?php endif; ?>>正常</option>
                      </select>
                    </div>

                  </form>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <input type="hidden" name='userId' value="<?php echo ($params['userId']); ?>">
              <button type="button" class="btn btn-default"
               data-dismiss="modal">关闭</button>
              <button type="button" class="btn btn-primary editUserAjax">提交</button>
            </div>
          </div>
          <iframe name='uploadiframe' id="uploadiframe" style='display:none'></iframe>
</div>