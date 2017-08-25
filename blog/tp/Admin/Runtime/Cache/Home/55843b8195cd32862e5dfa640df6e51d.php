<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>  
        <!-- Left column -->
        <div class="templatemo-flex-row">
            <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
        <meta name="author" content="M-finder">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Refresh" content ="<?php echo $wait;?> ;url=<?php echo $jumpUrl;?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">  
        <title>君莫笑 - 后台管理系统</title>
        <link href="/Public/favicon.ico" type="image/vnd.microsoft.icon" rel="shortcut icon"/>
        <link href="/Public/Admin/css/font-awesome.min.css" rel="stylesheet">
        <link href="/Public/Admin/css/bootstrap.min.css" rel="stylesheet">
        <link href="/Public/Admin/css/templatemo-style.css" rel="stylesheet">
        <link href="/Public/Vendor/h5/component.css" rel="stylesheet">
        <link  href="/Public/Vendor/layui/css/layui.css"  media="all" rel="stylesheet">
        <script src="/Public/Vendor/jquery-3.1.1.min.js"></script>
        <script src="/Public/Vendor/layer/layer.js" type="text/javascript" ></script>
        <script src="/Public/Vendor/layui/layui.js"></script>
</head>
<body>
	<div class="templatemo-sidebar">
                <header class="templatemo-site-header">
                    <div class="square"></div>
                    <h1>君莫笑</h1>
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
                        <li class="layui-nav-item"><a href="/index.php/Home/Index/index"><i class="layui-icon" style="top: 3px;">&#xe609; </i>系统首页</a></li>
                        <li class="layui-nav-item">
                            <a href="javascript:;"><i class="layui-icon" style="top: 3px;">&#xe60a; </i>内容管理</a>
                            <dl class="layui-nav-child">
                                <dd ><a href="<?php echo U('Article/show');?>">文章管理</a></dd>
                                <dd ><a href="<?php echo U('Article/huishou');?>">回收站</a></dd>
                                <dd><a href="<?php echo U('Sort/show');?>">分类管理</a></dd>
                                <dd ><a href="<?php echo U('Label/show');?>">标签管理</a></dd>
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
                        
                        <li class="layui-nav-item ">
                            <a href="javascript:;"><i class="layui-icon" style="top: 3px;">&#xe620; </i>管理员操作</a>
                            <dl class="layui-nav-child">
                                <dd><a href="<?php echo U('Admin/show');?>">管理员展示</a></dd>
                                <dd><a href="<?php echo U('Admin/showlog');?>">管理员日志</a></dd>
                                <dd><a href="<?php echo U('User/show');?>">用户列表</a></dd>
                            </dl>
                        </li>

                        <li class="layui-nav-item">
                            <a href="javascript:;"><i class="layui-icon" style="top: 3px;">&#xe620; </i>系统设置</a>
                            <dl class="layui-nav-child">
                                <dd><a href="<?php echo U('Link/show');?>">友情链接</a></dd>
                                <dd><a href="<?php echo U('Personal/show');?>">资料修改</a></dd>
                                <dd><a href="<?php echo U('Config/show');?>">网站设置</a></dd>
                            </dl>
                        </li>
                    </ul>
                </nav>
            </div>
            
</body>
</html>
            <!-- Main content --> 
            <div class="templatemo-content col-1 light-gray-bg">
                <!DOCTYPE html>
<html lang="en">
<head>
	
</head>
<body>
	<div class="templatemo-top-nav-container">
                    <div class="row">
                        <nav class="templatemo-top-nav col-lg-12 col-md-12">
                            <ul class="text-uppercase">
                                <li><a style="border-left:none;">欢迎您，尊敬的<?php echo ($data['admin_name']); ?></a></li>
                                <li><a href="/index.php/Home/Index/add_article" >发表新作</a></li>
                                <li><a href="<?php echo U('Admin/savepwd')?>">资料修改</a></li>
                                <li><a href="/Home/Index/index" target="_blank">博客首页</a></li>
                                <li><a href="<?php echo U('Login/loginout');?>">退出登录</a></li>
                            </ul>   
                        </nav> 
                    </div>
                </div>
</body>
</html>
                <div class="templatemo-content-container">

                    <div class="templatemo-flex-row flex-content-row">


                        <div class="templatemo-content-widget white-bg col-1">
                            <div class="media margin-bottom-30">
                                <div class="media-left padding-right-25">
                                    <a href="#">
                                        <img class="media-object img-circle templatemo-img-bordered" src="/Public/Upload/avatar/<<?php echo ((isset($info["avatar"]) && ($info["avatar"] !== ""))?($info["avatar"]):'none.jpg'); ?>>" alt="Sunset" style="max-width:120px;">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h2 class="media-heading text-uppercase blue-text"><<?php echo (session('admin_name')); ?>></h2>
                                    <div class="set-relative">
                                        <input class="layui-layim-remark sign" placeholder="编辑签名" value="<<?php echo ($info["sign"]); ?>>">
                                    </div>
                                </div>        
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td><div class="circle green-bg"></div></td>
                                            <td>著有文章</td>
                                            <td><<?php echo ((isset($info["article_total"]) && ($info["article_total"] !== ""))?($info["article_total"]):'0'); ?>></td>                    
                                        </tr> 
                                        <tr>
                                            <td><div class="circle pink-bg"></div></td>
                                            <td>收获评价</td>
                                            <td><<?php echo ((isset($info["comment_total"]) && ($info["comment_total"] !== ""))?($info["comment_total"]):'0'); ?>></td>                    
                                        </tr>  
<!--                                        <tr>
                                            <td><div class="circle blue-bg"></div></td>
                                            <td>草稿箱</td>
                                            <td><<?php echo ((isset($info["drafts_total"]) && ($info["drafts_total"] !== ""))?($info["drafts_total"]):'0'); ?>></td>                    
                                        </tr>  -->
                                        <tr>
                                            <td><div class="circle yellow-bg"></div></td>
                                            <td>创作排名</td>
                                            <td>No.<<?php echo ((isset($info["ranking"]) && ($info["ranking"] !== ""))?($info["ranking"]):'--'); ?>></td>                    
                                        </tr>                                      
                                    </tbody>
                                </table>
                            </div>             
                        </div>




                        <div class="templatemo-content-widget white-bg col-2">
                            <h2 class="text-uppercase">最新评论</h2>
                            <h3 class="text-uppercase">New Comment</h3><hr>
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <td>No.</td>
                                        <td>评论者</td>
                                        <td>评论</td>
                                        <td>时间</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>John</td>
                                        <td>Smith</td>
                                        <td>@jS</td>
                                    </tr>
                                </tbody>
                            </table>   
                        </div>

                    </div>

                    <div class="templatemo-flex-row flex-content-row">

                        <div class="col-1">
                            <div class="panel panel-default templatemo-content-widget white-bg no-padding templatemo-overflow-hidden">
                                <div class="panel-heading templatemo-position-relative"><h2 class="text-uppercase">最新文章</h2></div>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <td>No.</td>
                                                <td>标题</td>
                                                <td>作者</td>
                                                <td>时间</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php if(is_array($article)): $k = 0; $__LIST__ = array_slice($article,0,10,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($k % 2 );++$k;?><tr>
                                                <td><<?php echo ($k); ?>>.</td>
                                                <td><<?php echo ($v["title"]); ?>></td>
                                                <td><<?php echo ($v["author"]); ?>></td>
                                                <td><<?php echo (date("m-d H:i",$v["addtime"])); ?>></td>
                                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                                        </tbody>
                                    </table>    
                                </div>                          
                            </div>
                        </div>           
                    </div> <!-- Second row ends -->
                    <script src="/Public/Admin/js/templatemo-script.js" type="text/javascript" ></script><!-- Templatemo Script -->
                    <script src="/Public/Vendor/h5/TweenLite.min.js"></script>
                    <script src="/Public/Vendor/h5/EasePack.min.js"></script>
                    <script src="/Public/Vendor/h5/rAF.js"></script>
                    <script src="/Public/Vendor/h5/demo-1.js"></script>
                    <div class="height65"></div>
                    <footer class="layui-footer">
                        <p>Copyright &copy; <script type="text/javascript">document.write((new Date()).getFullYear());</script> M-finder | More Templates <a href="http://www.m-finder.com/" target="_blank">M-finder</a></p>
                    </footer>        
                </div>
            </div>
        </div>
        <script>
            layui.use('element', function () {
                var element = layui.element();  //导航的hover效果、二级菜单等功能，需要依赖element模块
                element.on('nav(demo)', function (elem) {
                    //console.log(elem)
                    layer.msg(elem.text());
                });
            });


            //发布签名
            $('.sign').change(function () {
                var sign = $('.sign').val();
                $.ajax({
                    type: "POST",
                    url: "/index.php/Home/Index/edit_sign",
                    data: {sign: sign},
                    dataType: "json",
                    beforeSend: function () {
                        layer.load(0, {shade: 0.1});
                    },
                    success: function (res) {
                        layer.closeAll('loading');
                        if (res.status == 'y') {
                            layer.msg(res.info, {icon: 1});
                        } else {
                            layer.alert(res.info, {icon: 2});
                        }
                    }
                });
            });
        </script>
    </body>
</html>