<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="author" content="M-finder">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">  
        <title>M-finder Article 后台管理系统 - 文章管理</title>
        <link href="/blog/tp/Public/favicon.ico" type="image/vnd.microsoft.icon" rel="shortcut icon"/>
        <link href="/blog/tp/Public/Admin/css/font-awesome.min.css" rel="stylesheet">
        <link href="/blog/tp/Public/Admin/css/bootstrap.min.css" rel="stylesheet">
        <link href="/blog/tp/Public/Admin/css/templatemo-style.css" rel="stylesheet">
        <link href="/blog/tp/Public/Vendor/h5/component.css" rel="stylesheet">
        <link  href="/blog/tp/Public/Vendor/layui/css/layui.css"  media="all" rel="stylesheet">
        <script src="/blog/tp/Public/Vendor/jquery-3.1.1.min.js"></script>
        <script src="/blog/tp/Public/Vendor/layer/layer.js" type="text/javascript" ></script>
        <script src="/blog/tp/Public/Vendor/layui/layui.js"></script>
    </head>
    <body>  
        <!-- Left column -->
        <div class="templatemo-flex-row">
            <div class="templatemo-sidebar">
                <header class="templatemo-site-header">
                    <div class="square"></div>
                    <h1>M-finder</h1>
                </header>
                <div class="profile-photo-container demo-1">
                    <div id="large-header" class="large-header">
                        <canvas id="demo-canvas"></canvas>
                    </div>
                    <div class="profile-photo-overlay "></div>
                </div>      

                <div class="mobile-menu-icon">
                    <i class="fa fa-bars"></i>
                </div>
                <nav class="templatemo-left-nav">          
                    <ul class="layui-nav layui-nav-tree "> 
                        <li class="layui-nav-item"><a href="/blog/tp/index.php/Home/Article/index"><i class="layui-icon" style="top: 3px;">&#xe609; </i>系统首页</a></li>
                        <li class="layui-nav-item layui-nav-itemed">
                            <a href="javascript:;"><i class="layui-icon" style="top: 3px;">&#xe60a; </i>内容管理</a>
                            <dl class="layui-nav-child">
                                <dd class="layui-this"><a href="<?php echo U('Article/index');?>">文章管理</a></dd>
                                <dd><a href="<?php echo U('Sort/show');?>">分类管理</a></dd>
                            </dl>
                        </li>

                          <li class="layui-nav-item">
                            <a href="javascript:;"><i class="layui-icon" style="top: 3px;">&#xe620; </i>关于文章</a>
                            <dl class="layui-nav-child">
                                <dd><a href="<?php echo U('Label/index');?>">文章标签的管理</a></dd>
                                <dd><a href="<?php echo U('Type/index');?>">文章类型管理</a></dd>
                                <dd><a href="<?php echo U('Comment/index');?>">文章评论管理</a></dd>
                            </dl>
                        </li>
                        
                        <li class="layui-nav-item">
                            <a href="javascript:;"><i class="layui-icon" style="top: 3px;">&#xe620; </i>管理员操作</a>
                            <dl class="layui-nav-child">
                                <dd><a href="<?php echo U('Admin/show');?>">管理员展示</a></dd>
                            </dl>
                        </li>

                        <li class="layui-nav-item">
                            <a href="javascript:;"><i class="layui-icon" style="top: 3px;">&#xe620; </i>系统设置</a>
                            <dl class="layui-nav-child">
                                <dd><a href="<?php echo U('Link/index');?>">友情链接</a></dd>
                                <dd><a href="<?php echo U('Admin/p_update');?>">资料修改</a></dd>
                                <dd><a href="<?php echo U('Config/index');?>">网站设置</a></dd>
                            </dl>
                        </li>
                    </ul>
                </nav>
                    </div>
                </div>

                <div class="templatemo-content-container">

                    <div class="templatemo-flex-row flex-content-row">
                        <div class="col-1">
                            <div class="panel panel-default templatemo-content-widget white-bg no-padding templatemo-overflow-hidden">
                                <div class="panel-heading templatemo-position-relative">
                                    <h2 class="text-uppercase">文章管理  <a href='/blog/tp/index.php/Home/Article/add_article'><i class="layui-icon left15 " style="font-size: 18px; color: #fff;">&#xe654;</i></a>  </h2>
                                </div>
                                <div class="table-responsive">

                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <td>No.</td>
                                                <td>标题</td>
                                                <td>作者</td>
                                                <td>栏目</td>
                                                <td>发布时间</td>
                                                <td>操作</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php if(is_array($info)): $k = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($k % 2 );++$k;?><tr>
                                                <td><<?php echo ($v["id"]); ?>>.</td>
                                                <td><<?php echo ($v["title"]); ?>></td>
                                                <td><<?php echo ($v["author"]); ?>></td>
                                                <td><<?php echo ($v["menu"]); ?>></td>
                                                <td><<?php echo (date("m-d H:i",$v["addtime"])); ?>></td>
                                                <td>
                                                    <a href="/blog/tp/index.php/Home/Article/article_set/aid/<<?php echo ($v["id"]); ?>>">修改</a>
                                                    <a href="javascript:;" class="dele_article" data-id="<<?php echo ($v["id"]); ?>>">删除</a>
                                                </td>
                                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>

                                        </tbody>
                                    </table>    
                                </div>                          
                            </div>
                        </div>           
                    </div> <!-- Second row ends -->
                    <script src="/blog/tp/Public/Admin/js/templatemo-script.js" type="text/javascript" ></script><!-- Templatemo Script -->
                    <script src="/blog/tp/Public/Vendor/h5/TweenLite.min.js"></script>
                    <script src="/blog/tp/Public/Vendor/h5/EasePack.min.js"></script>
                    <script src="/blog/tp/Public/Vendor/h5/rAF.js"></script>
                    <script src="/blog/tp/Public/Vendor/h5/demo-1.js"></script>

                    <footer class="layui-footer">
                        <p>Copyright &copy; <script type="text/javascript">document.write((new Date()).getFullYear());</script> M-finder | More Templates <a href="http://www.m-finder.com/" target="_blank">M-finder</a></p>
                    </footer>         
                </div>
            </div>
        </div>
        <script>
            
        </script>
    </body>
</html>