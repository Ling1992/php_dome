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
            
    <!--  .css .js  -->
    <style type="text/css">
        .ling-table-type-1 tr td:nth-child(1){text-align: right;vertical-align: middle; width: 200px}
        .ling-table-type-1 tr td:nth-child(1) span{color: red;margin-left: 4px}
        .ling-table-type-1 tr td:nth-child(2){text-align: left}
        .ling-table-type-1 tr td:nth-child(2) div{margin: 0;padding: 0;}
        .ling-table-type-1 tr td:nth-child(2) div div{margin: 0;padding: 0;}
        .dropzone {padding: 0px;min-height: 100px;border-radius: 10px;float: left;width: 90%;}
        .drop-item {cursor: pointer;margin-bottom: 10px;background-color: rgb(255, 255, 255);padding: 5px 10px;border-radisu: 3px;border: 1px solid rgb(204, 204, 204);position: relative;}
        .drop-item .remove {position: absolute;top: 4px;right: 4px;}
    </style>

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
                    

    <div>
        <h4 style="margin-left: 1%" id="edit_type_title">用户编辑</h4>
    </div>
    <hr style="border-top-color: black">

    <div class="row">
        <div class="col-md-8 col-lg-offset-2">
            <table class="table table-bordered ling-table-type-1">
                <tr>
                    <td>姓名:</td>
                    <td>
                        <input class="form-control" id="fullname" value="<?php echo ($info['fullname']); ?>">
                    </td>
                </tr>
                <tr>
                    <td>登录账号:</td>
                    <td>
                        <input class="form-control" name="name" value="<?php echo ($info['name']); ?>" readonly>
                    </td>
                </tr>
                <tr>
                    <td>联系电话:</td>
                    <td>
                        <input class="form-control" id="mobile" value="<?php echo ($info['mobile']); ?>">
                    </td>
                </tr>
                <tr>
                    <td>密码:</td>
                    <td>
                        <input class="form-control" id="password" value="<?php echo ($info['password']); ?>" type="password">
                    </td>
                </tr>
                <tr>
                    <td>角色:</td>
                    <td>
                        <input class="form-control" value="<?php echo ($info['role_name']); ?>" readonly>
                    </td>
                </tr>
                <tr>
                    <td>状态:</td>
                    <td>
                        <input class="form-control" value="正常" readonly>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-1 col-lg-offset-5">
            <button class="btn btn-default" onclick="edit()">修改</button>
        </div>
    </div>


                </div><!-- /#page-wrapper -->
                
                
    <!--（Modal） -->

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
        function edit() {
            $.ajax({
                url:'/ling_test/admin/user/editPersonalInfo',
                data:{fullname:$('#fullname').val(),mobile:$('#mobile').val(),password:$('#password').val()},
                type:'post',
                success:function (info) {
                    console.log(info);
                }
            });
        }
    </script>


        </body>
    </html>