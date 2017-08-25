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
                                <dd class="layui-this"><a href="<?php echo U('Article/article');?>">文章管理</a></dd>
                                <dd ><a href="<?php echo U('Sort/sort_list');?>">分类管理</a></dd>
                            </dl>
                        </li>

                        <li class="layui-nav-item">
                            <a href="javascript:;"><i class="layui-icon" style="top: 3px;">&#xe620; </i>系统设置</a>
                            <dl class="layui-nav-child">
                                <dd><a href="/blog/tp/index.php/Home/Article/web_links">友情链接</a></dd>
                                <dd><a href="/blog/tp/index.php/Home/Article/info_set">资料修改</a></dd>
                                <dd><a href="/blog/tp/index.php/Home/Article/web_set">网站设置</a></dd>
                            </dl>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- Main content --> 
            <div class="templatemo-content col-1 light-gray-bg">
                <div class="templatemo-top-nav-container">
                    <div class="row">
                        <nav class="templatemo-top-nav col-lg-12 col-md-12">
                            <ul class="text-uppercase">
                                <li><a style="border-left:none;">欢迎您，尊敬的<<?php echo (session('admin_name')); ?>></a></li>
                                <li><a href="/blog/tp/index.php/Home/Article/add_article" >发表新作</a></li>
                                <li><a href="/blog/tp/index.php/Home/Article/info_set">资料修改</a></li>
                                <li><a href="/blog/tp/Home/Index/index" target="_blank">博客首页</a></li>
                                <li><a href="/blog/tp/index.php/Home/Article/logout">退出登录</a></li>
                            </ul>   
                        </nav> 
                    </div>
                </div>


                <div class="templatemo-content-container">

                    <div class="templatemo-content-widget white-bg">

                        <form class="layui-form layui-form-pane" action="/blog/tp/index.php/Home/Article/add_article" method="post" target="hiddenIFrame">
                            <div class="layui-tab layui-tab-brief" lay-filter="docDemoTabBrief">

                                <ul class="layui-tab-title">
                                    <li class="layui-this">文章内容</li>
                                </ul>


                                <div class="layui-tab-content">

                                    <div class="layui-tab-item layui-show">

                                        <div class="layui-form-item">
                                            <label class="layui-form-label">文章标题</label>
                                            <div class="layui-input-inline">
                                                <input type="text" name="title"  lay-verify="required" placeholder="请输入文章标题" autocomplete="off" class="layui-input">
                                            </div>
                                        </div>

                                        <div class="layui-form-item">
                                            <label class="layui-form-label">所属栏目</label>
                                            <div class="layui-input-inline">
                                                <select name="mid">
                                                    <!-- <?php if(is_array($menu)): $i = 0; $__LIST__ = $menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>-->
                                                        <option value="<<?php echo ($v["id"]); ?>>">电饭锅电饭锅</option>
                                                        <option value="<<?php echo ($v["id"]); ?>>">电饭锅电饭锅</option>
                                                        <option value="<<?php echo ($v["id"]); ?>>">电饭锅电饭锅</option>
                                                    <!--<?php endforeach; endif; else: echo "" ;endif; ?> -->
                                                </select>
                                            </div>
                                        </div>

                                        <div class="layui-form-item layui-form-text" id="setcontent">
                                            <label class="layui-form-label">文章内容</label>
                                            <div class="layui-input-block ">
                                                <textarea id="content" name="content" ></textarea>
                                            </div>
                                        </div>


                                    </div>

                                </div>

                            </div> 
                            <div class="layui-form-item">
                                <div class="layui-input-block">
                                    <button class="layui-btn" lay-submit lay-filter="*">立即提交</button>
                                    <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                                </div>
                            </div>
                        </form>
                        
                        <iframe style="display:none" name="hiddenIFrame" id="hiddenIFrame"></iframe>


                    </div>

                    <script src="__AJS__/templatemo-script.js" type="text/javascript" ></script><!-- Templatemo Script -->
                    <script src="__VEN__/h5/TweenLite.min.js"></script>
                    <script src="__VEN__/h5/EasePack.min.js"></script>
                    <script src="__VEN__/h5/rAF.js"></script>
                    <script src="__VEN__/h5/demo-1.js"></script>

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