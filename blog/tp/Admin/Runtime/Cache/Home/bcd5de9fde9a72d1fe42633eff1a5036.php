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
                                <li><a href="/blog/tp/index.php/Home/Article/add_article" >发表新作</a></li>
                                <li><a href="<?php echo U('Admin/savepwd')?>">资料修改</a></li>
                                <li><a href="/blog/tp/Home/Index/index" target="_blank">博客首页</a></li>
                                <li><a href="<?php echo U('Login/loginout');?>">退出登录</a></li>
                            </ul>   
                        </nav> 
                    </div>
                </div>
</body>
</html>

                <div class="templatemo-content-container">

                    <div class="templatemo-flex-row flex-content-row">
                        <div class="col-1">
                            <div class="panel panel-default templatemo-content-widget white-bg no-padding templatemo-overflow-hidden">
                            
                                <div class="panel-heading templatemo-position-relative">
                                    <h2 class="text-uppercase" style="float: left;">分类管理  <a href="<?php echo U('Article/linkshow');?>"><i class="layui-icon left15 " style="font-size: 18px; color: #fff;">&#xe654;</i></a>  </h2>
                                    <form action="<?php echo U('Article/show');?>" method="get" name="searchform" style="float: left;">
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <input type="text" name="admin_name" value="<?php echo ($adminName); ?>" size="15" style="color: #000;">
                                        <input type="submit" value="标题搜索" class="button" style="background: #39adb4;border: 0">
                                    </form>
                                    <form action="<?php echo U('Article/oneshow');?>" method="get" name="searchform" style="float: left;">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <select name="label_name" style="color: #000;">
                                        <option value="<?php echo ($labelName['label_id']); ?>"><?php echo ($labelName['label_name']); ?></option>
                                            <?php if(is_array($label)): $i = 0; $__LIST__ = $label;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<?php echo ($v["label_id"]); ?>" style="color: #000;"><?php echo ($v["label_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                        </select>
                                        <input type="submit" value="标签搜索" class="button" style="background: #39adb4;border: 0">
                                    </form>
                                    <form action="<?php echo U('Article/ershow');?>" method="get" name="searchform">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <select name="sort_name" style="color: #000;">
                                        <option value="<?php echo ($sortName); ?>"><?php echo ($sortName); ?></option>
                                            <?php if(is_array($sort)): $i = 0; $__LIST__ = $sort;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<?php echo ($v["sort_name"]); ?>" style="color: #000;"><?php echo ($v["sort_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                        </select>
                                        <input type="submit" value="分类搜索" class="button" style="background: #39adb4;border: 0">
                                    </form>
                                </div>
                                <div class="table-responsive">

                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <td>No.</td>
                                                <td>文章标题</td>
                                                <td>文章内容</td>
                                                <td>添加时间</td>
                                                <td>分类名称</td>
                                                
                                                <td>操作</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
                                                <td><?php echo ($v["article_id"]); ?></td>
                                                <td><?php echo ($v["article_title"]); ?></td>
                                                <td><?php echo ($v["article_content"]); ?></td>
                                                <td><?php echo ($v["article_time"]); ?></td>
                                                <td><?php echo ($v["sort"]); ?></td>
                                                
                                                <td>
                                                    <a href="<?php echo U('Article/save')?>?id=<?php echo ($v["article_id"]); ?>">修改</a>
                                                    
                                                    <a href="<?php echo U('Article/xiugai')?>?id=<?php echo ($v["article_id"]); ?>" >放入回收站</a>
                                                </td>
                                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>

                                        </tbody>
                                    </table>  
                                    <div class="lalala">
                                        <?php echo ($pages); ?>
                                    </div> 
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
            layui.use('element', function () {
                var element = layui.element();  //导航的hover效果、二级菜单等功能，需要依赖element模块

                //监听导航点击
                element.on('nav(demo)', function (elem) {
                    layer.msg(elem.text());
                });
            });

            $('.dele_article').click(function () {
                var article_id = $(this).attr('data-id');
                layer.confirm('确认删除该文章？', {
                    btn: ['确定', '取消']
                }, function () {
                    $.ajax({
                        type: "POST",
                        url: "/blog/tp/index.php/Home/Article/dele_article",
                        data: {id: article_id},
                        dataType: "json",
                        beforeSend: function () {
                            layer.load(0, {shade: 0.1});
                        },
                        success: function (res) {
                            layer.closeAll('loading');
                            if (res.status == 'y') {
                                layer.msg(res.info, {icon: 1});
                                setTimeout(window.location.reload(), 1500);
                            } else {
                                layer.alert(res.info, {icon: 2});
                            }
                        }
                    });
                });

            });
        </script>
    </body>
</html>