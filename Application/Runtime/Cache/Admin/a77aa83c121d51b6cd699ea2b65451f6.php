<?php if (!defined('THINK_PATH')) exit();?><div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close"
               data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel">
                    <?php if($params['menuId']): ?>编辑菜单
                    <?php else: ?>
                      添加菜单<?php endif; ?>
              </h4>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="modal_div">
                  <form role="form" class="form-inline">
                    <div class="form-group col-lg-12">
                      <label class="col-lg-3">菜单名称：</label>
                      <input class="form-control" name="title" value="<?php echo ($info["title"]); ?>">
                    </div>

                    <div class="form-group col-lg-12">
                      <label class="col-lg-3">父菜单</label>
                      <select class="form-control" name="parentMenuId" <?php if($params['menuId']): ?>disabled<?php endif; ?>>
                            <option value="0"></option>
                          <?php if(is_array($menuListLevel1)): foreach($menuListLevel1 as $key=>$vo): ?><option value="<?php echo ($vo["id"]); ?>" <?php if($vo['id']==$info['pid']): ?>selected<?php endif; ?>><?php echo ($vo["title"]); ?></option><?php endforeach; endif; ?>
                      </select>
                    </div>

                    <div class="form-group col-lg-12">
                      <label class="col-lg-3">路径：</label>
                      <input class="form-control" placeholder="例:/Admin/Node/nodes" name="path" value="<?php echo ($info["path"]); ?>" <?php if($info[level]==1): ?>disabled<?php endif; ?>
                          <?php
 if(in_array($info['id'],$MENU_ID_UNDELETE)){ echo "disabled"; } ?>
                      >
                    </div>

                    <div class="form-group col-lg-12">
                      <label class="col-lg-3">排序：</label>
                      <input class="form-control" placeholder="" name="sort" value="<?php echo ($info["sort"]); ?>">
                    </div>

                    <div class="form-group col-lg-12">
                      <label class="col-lg-3">是否显示：</label>
                      <label class="radio-inline">
                        <input type="radio" <?php if($info[is_show]==1): ?>checked<?php endif; ?> <?php if($info[is_show]===null): ?>checked<?php endif; ?> value="1"  name="isShow" >是
                      </label>
                      <label class="radio-inline">
                        <input type="radio" <?php if($info[is_show]==='0'): ?>checked<?php endif; ?> value="0"  name="isShow">否
                      </label>
                    </div>

                  </form>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <input type="hidden" name="menuId" value="<?php echo ($info['id']); ?>">
              <button type="button" class="btn btn-default"
               data-dismiss="modal">关闭</button>
              <button type="button" class="btn btn-primary editMenuAjax">提交</button>
            </div>
          </div>
</div>