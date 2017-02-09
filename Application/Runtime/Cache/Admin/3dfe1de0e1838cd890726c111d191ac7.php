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
            
            
        </body>
    </html>