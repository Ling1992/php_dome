<?php if (!defined('THINK_PATH')) exit();?><div class="modal-dialog" style="width:1000px;">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close"
               data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel">
                    权限分配
              </h4>
              <div class="row">
                  <div class="col-sm-4">
                    <label>当前角色:<?php echo ($info['name']); ?></label>
                  </div>
              </div>
            </div>

            <div class="modal-body" style="overflow-y:auto;max-height:600px;">
                  <div class="row">
                      <div class="col-sm-12">
                                <div class="table-responsive">
                                  <table class="table table-bordered table-hover table-striped tablesorter table-condensed" data-info='<?php echo json_encode($info['nodes']);;?>'>
                                    <tbody>
                                        <?php if(is_array($nodeList)): foreach($nodeList as $key=>$vo): ?><tr>
                                              <td style="text-align:left;">
                                                <?php if($vo['level']==1): ?><label class="checkbox-inline">
                                                    <input type="checkbox" value="<?php echo ($vo["id"]); ?>"  data-pid="<?php echo ($vo["pid"]); ?>" data-level="<?php echo ($vo["level"]); ?>"><?php echo ($vo["title"]); ?>
                                                  </label><?php endif; ?>
                                              </td>
                                              <td style="text-align:left;">
                                                <?php if($vo['level']==2): ?><label class="checkbox-inline">
                                                    <input type="checkbox" value="<?php echo ($vo["id"]); ?>" data-pid="<?php echo ($vo["pid"]); ?>" data-level="<?php echo ($vo["level"]); ?>"><?php echo ($vo["title"]); ?>
                                                  </label><?php endif; ?>
                                              </td>
                                              <td class="row" style="text-align:left;">
                                                  <?php if($vo['level']==3): if(is_array($vo['childNodes'])): foreach($vo['childNodes'] as $key=>$child): ?><div class="col-sm-4">
                                                              <label class="checkbox-inline">
                                                                <input type="checkbox" value="<?php echo ($child["id"]); ?>" data-pid="<?php echo ($child["pid"]); ?>" data-level="<?php echo ($child["level"]); ?>" name="nodeId"><?php echo ($child["title"]); ?>
                                                              </label>
                                                            </div><?php endforeach; endif; endif; ?>
                                              </td>
                                            </tr><?php endforeach; endif; ?>
                                    </tbody>
                                  </table>
                              </div>
                        </div>
                  </div>
            </div>

            <div class="modal-footer">
              <input type="hidden" name='roleId' value="<?php echo ($info['id']); ?>">
              <button type="button" class="btn btn-default"
               data-dismiss="modal">关闭</button>
              <button type="button" class="btn btn-primary editRoleNodeAjax">提交</button>
            </div>
          </div>
</div>