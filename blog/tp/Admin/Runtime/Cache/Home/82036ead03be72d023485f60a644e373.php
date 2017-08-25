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

                    <div class="templatemo-content-widget white-bg">

                        <form class="layui-form layui-form-pane" id="signupForm" action="<?php echo U('Article/articleadd');?>" method="post" >
                            <div class="layui-tab layui-tab-brief" lay-filter="docDemoTabBrief">

                                <ul class="layui-tab-title">
                                    <li class="layui-this">添加列表</li>
                                </ul>


                                <div class="layui-tab-content">

                                    <div class="layui-tab-item layui-show">

                                        <div class="layui-form-item">
                                            <label class="layui-form-label">文章标题</label>
                                            <div class="layui-input-inline">
                                                <input type="text" name="article_title" id="article_title" lay-verify="required" placeholder="请输入分类名称" autocomplete="off" class="layui-input">
                                            </div>
                                        </div>
                                        
                                        

                                        <div class="layui-form-item">
                                            <label class="layui-form-label">文章标签</label>
                                            <!-- <div class="layui-input-inline"> -->
                                                   <?php if(is_array($label)): foreach($label as $key=>$v): ?><input type="checkbox" name="label[]" value="<?php echo ($v["label_id"]); ?>"><?php echo ($v["label_name"]); ?>&nbsp;&nbsp;<?php endforeach; endif; ?>
                                            <!-- </div> -->
                                        </div>

                                        <div class="layui-form-item">
                                            <label class="layui-form-label">所属分类</label>
                                            <div class="layui-input-inline">
                                                <select name="sort">
                                                    <?php if(is_array($sort)): foreach($sort as $key=>$v): ?><option value="<?php echo ($v["sort_name"]); ?>"><?php echo ($v["sort_name"]); ?></option><?php endforeach; endif; ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="layui-form-item layui-form-text" id="setcontent">
                                            <label class="layui-form-label">文章内容</label>
                                            <div class="layui-input-block ">
                                                <textarea id="article_content" name="article_content" ></textarea>
                                            </div>
                                        </div>



                                    </div>

                                </div>

                            </div> 
                            <div class="layui-form-item">
                                <div class="layui-input-block">
                                    <input type="submit" class="layui-btn" value="提交"></input>
                                    <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                                </div>
                            </div>
                        </form>
                        
                        <iframe style="display:none" name="hiddenIFrame" id="hiddenIFrame"></iframe>


                    </div>
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
        <script src="/blog/tp/Public/Vendor/jquery-3.1.1.min.js"></script>
        <script src="/blog/tp/Public/Vendor/jquery.validate.js"></script>
        <script src="/blog/tp/Public/Vendor/messages_zh.js"></script>
        <script>
             layui.use('element', function () {
                var element = layui.element();  //导航的hover效果、二级菜单等功能，需要依赖element模块

                //监听导航点击
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
                layedit.build('article_content', {
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
            
            function callback(status,info){
                if (status == 'y') {
                    layer.msg(info, {icon: 1});
                    setTimeout(function(){
                       location.href='/blog/tp/index.php/Home/Article/article_list'; 
                    },1500);
                } else {
                    layer.alert(info, {icon: 2});
                }
            }

             $(function(){
                $("#signupForm").validate({

                  rules: {
                    article_title: {
                        required: true,
                        minlength: 4,
                        remote:{
                            url:"<?php echo U('Article/article_title');?>",
                            type:'post',
                            data:{
                                article_title:function(){
                                    return $("#article_title").val();
                                }
                            }
                        }
                    },
                    article_content:{
                        required:true,
                        minlength:10,
                    },
                    status:{
                        required:true,
                    },
                },
                
                messages:{
                    article_title:{
                        required:layer.msg('请输入文章标题名称'),
                        minlength:'请至少输入四位',
                        remote:'文章标题名称已存在',
                    },
                    article_content:{
                        required:"请输入内容",
                        minlength:"字数不能少于10字"
                    },
                    status:{
                        required:"必填"
                    },


                },
             });
            })
        </script>
    </body>
</html>