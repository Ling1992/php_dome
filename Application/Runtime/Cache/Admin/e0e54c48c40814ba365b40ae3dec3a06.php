<?php if (!defined('THINK_PATH')) exit();?><div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close"
               data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel">
                    <?php if($params['nodeId']): ?>编辑节点
                    <?php else: ?>
                      添加节点<?php endif; ?>
              </h4>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="modal_div">
                  <form role="form" class="form-inline">
                    <div class="form-group col-lg-12">
                      <label class="col-lg-3">节点名：</label>
                      <input class="form-control" name="name" value="<?php echo ($info["name"]); ?>">
                    </div>

                    <div class="form-group col-lg-12">
                      <label class="col-lg-3">名称：</label>
                      <input class="form-control" placeholder="" name="title" value="<?php echo ($info["title"]); ?>">
                    </div>

                    <div class="form-group col-lg-12">
                      <label class="col-lg-3">父模块节点：</label>
                      <select class="form-control" name="parentNode1" data-info="<?php echo ($info['parentNode1']); ?>" <?php if($params['nodeId']): ?>disabled<?php endif; ?>>
                        <option value=""></option>
                      </select>
                    </div>
                    <div class="form-group col-lg-12">
                      <label class="col-lg-3">父控制器节点</label>
                      <select class="form-control" name="parentNode2" data-info="<?php echo ($info['parentNode2']); ?>" <?php if($params['nodeId']): ?>disabled<?php endif; ?>>
                          <option value=""></option>
                      </select>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <input type="hidden" name="nodeId" value="<?php echo ($info['id']); ?>">
              <button type="button" class="btn btn-default"
               data-dismiss="modal">关闭</button>
              <button type="button" class="btn btn-primary editNodeAjax">提交</button>
            </div>
          </div>
</div>