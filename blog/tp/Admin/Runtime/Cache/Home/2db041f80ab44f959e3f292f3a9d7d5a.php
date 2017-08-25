<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="author" content="M-finder">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">  
        <title>M-finder Article 后台管理系统 - 文章管理</title>
        <link href="/blog/tp/Public/Vendor/favicon.ico" type="image/vnd.microsoft.icon" rel="shortcut icon"/>
        <link href="/blog/tp/Public/Vendor/font-awesome.min.css" rel="stylesheet">
        <link href="/blog/tp/Public/Vendor/bootstrap.min.css" rel="stylesheet">
        <link href="/blog/tp/Public/Vendor/templatemo-style.css" rel="stylesheet">
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
                                <dd ><a href="/blog/tp/index.php/Home/Article/menu_list">栏目管理</a></dd>
                                <dd class="layui-this"><a href="/blog/tp/index.php/Home/Article/article_list">文章管理</a></dd>
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

                        <form class="layui-form layui-form-pane" action="/blog/tp/index.php/Home/Article/article_set" method="post" target="hiddenIFrame">
                            <input type='hidden' name='id' value='<<?php echo ($info["id"]); ?>>'>
                            <div class="layui-tab layui-tab-brief" lay-filter="docDemoTabBrief">

                                <ul class="layui-tab-title">
                                    <li class="layui-this">文章内容</li>
                                </ul>


                                <div class="layui-tab-content">

                                    <div class="layui-tab-item layui-show">


                                        <div class="layui-form-item">
                                            <label class="layui-form-label">文章标题</label>
                                            <div class="layui-input-inline">
                                                <input type="text" name="title"  lay-verify="required" placeholder="请输入文章标题" autocomplete="off" class="layui-input" value="<<?php echo ($info["title"]); ?>>">
                                            </div>
                                        </div>

                                        <div class="layui-form-item">
                                            <label class="layui-form-label">所属栏目</label>
                                            <div class="layui-input-inline">
                                                <select name="mid">
                                                    <?php if(is_array($menu)): $i = 0; $__LIST__ = $menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<<?php echo ($v["id"]); ?>>"  <?php if($info["mid"] == $v['id']): ?>selected<?php endif; ?>><<?php echo ($v["name"]); ?>></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="layui-form-item layui-form-text" id="setcontent">
                                            <label class="layui-form-label">文章内容</label>
                                            <div class="layui-input-block ">
                                                <textarea id="content" name="content" ><<?php echo ($info["content"]); ?>></textarea>
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
                element.on('nav(demo)', function (elem) {
                    layer.msg(elem.text());
                });
            });

            layui.use('form', function () {
                var form = layui.form();
            });


            layui.use('layedit', function () {  //建立编辑器
                var layedit = layui.layedit;
                layedit.set({
                    uploadImage: {
                        url: '/blog/tp/index.php/Home/Article/upload?action=img' //接口url  {"code": 0 ,"msg": "" ,"data": {"src": "图片路径","title": "图片名称"}
                        , type: '' //默认post
                    }
                });
                layedit.build('content', {
                    tool: [
                        'strong' //加粗
                        , 'italic' //斜体
                        , 'underline' //下划线
                        , 'del' //删除线
                        , '|' //分割线
                        , 'left' //左对齐
                        , 'center' //居中对齐
                        , 'right' //右对齐
                        , 'link' //超链接
                        , 'unlink' //清除链接
                        , 'face' //表情
                        , 'image' //插入图片
                        , 'code' //帮助
                    ]
                });
            });

            function callback(status, info) {
                if (status == 'y') {
                    layer.msg(info, {icon: 1});
                    setTimeout(function(){
                       location.href='/blog/tp/index.php/Home/Article/article_list'; 
                    },1500);
                } else {
                    layer.alert(info, {icon: 2});
                }
            }
        </script>
    </body>
</html>