<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
    <html lang="en">
        <head>
            
                <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<title>Ling管理系统</title>
            
            <block name ="basesrc">
                <!-- Bootstrap core CSS -->
                <link href="/ling_test/Public/css/bootstrap.css" rel="stylesheet">
                <link rel="stylesheet" type="text/css" href="/ling_test/Public/css/style.css">
                <!-- Add custom CSS here -->
                <link href="/ling_test/Public/css/sb-admin.css" rel="stylesheet">
                <link rel="stylesheet" href="/ling_test/Public/font-awesome/css/font-awesome.min.css">

                <script type="text/javascript" src="/ling_test/Public/js/jquery-1.10.2.js"></script>
                <script type="text/javascript">
                    var sysZoneAjaxUrl = '/ling_test/Compub/Common/zone';
                </script>
                <script type="text/javascript" src="/ling_test/Public/js/common.js"></script>

            </block>
            
            
        </head>
        <body>
            <div id="wrapper">
                <!-- Sidebar -->
                <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                    <!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </button>
  <a class="navbar-brand" href="">Ling管理系统</a>
</div>
                    <!-- Collect the nav links, forms, and other content for toggling -->

<div class="collapse navbar-collapse navbar-ex1-collapse">
  <ul class="nav navbar-nav side-nav">
    <?php if(is_array($leftMenuList)): $i = 0; $__LIST__ = $leftMenuList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="dropdown <?php if($vo['id']==$selectMenu1Id): ?>open <?php else: ?> nopen<?php endif; ?>"  <?php if($i == count($leftMenuList)): ?>style="padding-bottom:40px;"<?php endif; ?>>
        <a href="#" class="dropdown-toggle">
          <i class="fa fa-caret-square-o-down"></i><?php echo ($vo["title"]); ?>
          <b class="caret"></b>
        </a>
          <ul class="dropdown-menu">
            <?php if(is_array($vo['child'])): foreach($vo['child'] as $key=>$child): ?><li class="<?php if($child['id']==$selectMenu2Id): ?>active<?php endif; ?>">
                  <a href="#" data-info="/ling_test<?php echo ($child["path"]); ?>?selectMenu1Id=<?php echo ($vo["id"]); ?>&selectMenu2Id=<?php echo ($child["id"]); ?>"><?php echo ($child["title"]); ?></a>
              </li><?php endforeach; endif; ?>
          </ul>
      </li><?php endforeach; endif; else: echo "" ;endif; ?>
    <!-- <li class="dropdown  open">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <i class="fa fa-caret-square-o-down"></i> 二级菜单
          <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li>
              <a href="#">Dropdown Item</a>
          </li>
          <li class="active">
              <a href="#">Another Item</a>
          </li>
          <li>
            <a href="#">Third Item</a>
          </li>
          <li>
            <a href="#">Last Item</a>
          </li>
        </ul>
      </li> -->
  </ul>

  <ul class="nav navbar-nav navbar-right navbar-user">
    <li class="dropdown messages-dropdown">
      <p class="navbar-text pull-right">
            <span class="header_info">
                <?php echo ($topUserInfo['userName']); ?>，欢迎登录，您的等级:<?php echo ($topUserInfo['roleName']); ?>
                <span> <i class="icon-user icon-white"></i>
                    <a class="pointer"><!-- 个人信息 --></a>
                </span>
                <a href="#" class="navbar-link sysLoginout">退出</a>
            </span>
        </p>
    </li>
  </ul>

</div><!-- /.navbar-collapse -->
                </nav>
                <div id="page-wrapper">
                    
         <div class="row">
          <div class="col-lg-12">
            <form role="form" class="form-inline" action="<?php echo U('nodes');;?>" methode="GET" id="queryForm">
              <div class="form-group col-lg-3">
                  <button type="button" class="btn btn-default addNodeHtml">新增节点</button>
              </div>
              <div class="form-group col-lg-3">
              </div>
              <div class="form-group col-lg-3">
              </div>
              <div class="form-group col-lg-3">
              </div>
            </form>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <div class="table-responsive">
              <table class="table table-bordered table-hover table-striped tablesorter">
                <thead>
                  <tr>
                    <th colspan=2>节点名称</th>
                    <th>操作</th>
                  </tr>
                </thead>
                <tbody>
                    <?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr>
                          <?php if($vo['level']==1): ?><td style="text-align:left;"><?php echo ($vo["title"]); ?>-<?php echo ($vo["name"]); ?></td>
                            <td></td><?php endif; ?>
                          <?php if($vo['level']==2): ?><td style="text-align:right;"><?php echo ($vo["title"]); ?>-<?php echo ($vo["name"]); ?></td>
                            <td></td><?php endif; ?>
                          <?php if($vo['level']==3): ?><td></td>
                            <td style="text-align:left;"><?php echo ($vo["title"]); ?>-<?php echo ($vo["name"]); ?></td><?php endif; ?>
                          <td>
                              <a data-info="<?php echo ($vo["id"]); ?>" class="editNodeHtml">编辑</a>
                              <a data-info="<?php echo ($vo["id"]); ?>" class="deleteNode">删除</a>
                          </td>
                        </tr><?php endforeach; endif; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <!-- <?php echo ($page); ?> -->
        <!-- 模态框（Modal） -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel" aria-hidden="true">
        </div>

                </div><!-- /#page-wrapper -->
                
                
                
            </div><!-- /#wrapper -->
            <block name ="footersrc">
                <!-- JavaScript -->
                <script type="text/javascript" src="/ling_test/Public/js/bootstrap.js"></script>
                <script type="text/javascript">
                    var sysLoginoutUrl = '/ling_test/Admin/Login/signout';
                    var sysLoginIndexUrl = '/ling_test/Admin/Login/index';
                </script>
                <script type="text/javascript" src="/ling_test/Public/js/Admin/menu.js"></script>
            </block>
            
    <script>
      var editUrl = '/ling_test/admin/Node/edit';
      var addUrl = '/ling_test/admin/Node/add';
      var deleteUrl = '/ling_test/admin/Node/delete';
      var nodesAjaxUrl = '/ling_test/admin/Node/nodesajax';
    </script>
    <script type="text/javascript" src="/ling_test/Public/js/Admin/Node/nodes.js"></script>

        </body>
    </html>