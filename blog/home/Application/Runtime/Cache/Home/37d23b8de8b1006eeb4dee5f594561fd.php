<?php if (!defined('THINK_PATH')) exit();?>﻿<!--
    
 @Name：不落阁整站模板源码
 @Author：Absolutely
 @Site：http://www.lyblogs.cn

 -->
 <link href="/Public/css/article.css" rel="stylesheet" />
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; Charset=gb2312">
    <meta http-equiv="Content-Language" content="zh-CN">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <title>君莫笑 - 君莫沐雨笑便橙风</title>
    <link rel="shortcut icon" href="/Public/images/Logo_40.png" type="image/x-icon">
    <!--Layui-->
    <link href="/Public/css/layui.css" rel="stylesheet" />
    <!--font-awesome-->
    <link href="/Public/css/font-awesome.min.css" rel="stylesheet" />
    <!--全局样式表-->
    <link href="/Public/css/global.css" rel="stylesheet" />
    <!-- 本页样式表 -->
    <link href="/Public/css/home.css" rel="stylesheet" />
</head>
<body>
    <!-- 导航 -->
    <nav class="blog-nav layui-header">
        <div class="blog-container">
            <!-- QQ互联登陆 -->
            <a href="javascript:;" class="blog-user">
                <i class="fa fa-qq"></i>
            </a>
            <a href="javascript:;" class="blog-user layui-hide">
                <img src="/Public/images/Absolutely.jpg" alt="Absolutely" title="Absolutely" />
            </a>
            <!-- 不落阁 -->
            <a class="blog-logo" href="/Public/home.html">君莫笑</a>
            <!-- 导航菜单 -->
            <ul class="layui-nav" lay-filter="nav">
                <li class="layui-nav-item ">
                    <a href="<?php echo U('index/home');?>"><i class="fa fa-home fa-fw"></i>&nbsp;网站首页</a>
                </li>
                <li class="layui-nav-item">
                    <a href="<?php echo U('article/article');?>"><i class="fa fa-file-text fa-fw"></i>&nbsp;文章专栏</a>
                </li>
                <li class="layui-nav-item">
                    <a href="<?php echo U('resource/resource');?>"><i class="fa fa-tags fa-fw"></i>&nbsp;资源分享</a>
                </li>
                <li class="layui-nav-item">
                    <a href="<?php echo U('timeline/timeline');?>"><i class="fa fa-hourglass-half fa-fw"></i>&nbsp;点点滴滴</a>
                </li>
                <li class="layui-nav-item">
                    <a href="<?php echo U('about/about');?>"><i class="fa fa-info fa-fw"></i>&nbsp;关于本站</a>
                </li>
                <li class="layui-nav-item">
                    <a href="www.blog2.com"><i class="fa fa-info fa-fw"></i>&nbsp;后台管理</a>
                </li>
            </ul>
            <!-- 手机和平板的导航开关 -->
            <a class="blog-navicon" href="javascript:;">
                <i class="fa fa-navicon"></i>
            </a>
        </div>
    </nav>
    <!-- 主体（一般只改变这里的内容） -->
    <div class="blog-body">
        <div class="blog-container">
            <blockquote class="layui-elem-quote sitemap layui-breadcrumb shadow">
                <a href="home.html" title="网站首页">网站首页</a>
                <a><cite>文章专栏</cite></a>
            </blockquote>
            <div class="blog-main">
                <div class="blog-main-left">
                    <div class="shadow" style="text-align:center;font-size:16px;padding:40px 15px;background:#fff;margin-bottom:15px;">
                        未搜索到与【<span style="color: #FF5722;">keywords</span>】有关的文章，随便看看吧！
                    </div>
                    
                    
                   
                    <?php if(is_array($data)): foreach($data as $key=>$v): ?><div class="article shadow">
                        <div class="article-left">
                            <img src="../images/cover/201703181909057125.jpg" alt="" />
                        </div>
                        <div class="article-right">
                            <div class="article-title">
                                <a href="/index.php/Home/Article/detail?id=<?php echo ($v["article_id"]); ?>"><?php echo ($v["article_title"]); ?></a>
                            </div>
                            <div class="article-abstract">
                                <?php echo ($v["article_content"]); ?>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="article-footer">
                            <span><i class="fa fa-clock-o"></i>&nbsp;&nbsp;<?php echo ($v["article_add_time"]); ?></span>
                            <span class="article-author"><i class="fa fa-user"></i>&nbsp;&nbsp;Absolutely</span>
                            <span><i class="fa fa-tag"></i>&nbsp;&nbsp;<a href="#"><?php echo ($v["sort"]); ?></a></span>
                            <span class="article-viewinfo"><i class="fa fa-eye"></i>&nbsp;0</span>
                            <span class="article-viewinfo"><i class="fa fa-commenting"></i>&nbsp;4</span>
                        </div>
                    </div><?php endforeach; endif; ?>
                </div>

                <div class="blog-main-right">
                    <div class="blog-search">
                        <form class="layui-form" action="">
                            <div class="layui-form-item">
                                <div class="search-keywords  shadow">
                                    <input type="text" name="keywords" lay-verify="required" placeholder="输入关键词搜索" autocomplete="off" class="layui-input">
                                </div>
                                <div class="search-submit  shadow">
                                    <a class="search-btn" lay-submit="formSearch" lay-filter="formSearch"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="article-category shadow">
                        <div class="article-category-title">分类导航</div>
                        <?php if(is_array($sort)): $i = 0; $__LIST__ = $sort;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><a href="javascript:layer.msg(&#39;切换到相应分类&#39;)"><?php echo ($v['sort_name']); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
                        <div class="clear"></div>
                    </div>
                   
                    
                    <!--右边悬浮 平板或手机设备显示-->
                    <div class="category-toggle"><i class="fa fa-chevron-left"></i></div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <!-- 底部 -->
    <footer class="blog-footer">
        <p><span>Copyright</span><span>&copy;</span><span>2017</span><a href="http://www.lyblogs.cn">君莫笑</a><span>Design By LY</span></p>
        <p><a href="http://www.miibeian.gov.cn/" target="_blank">蜀ICP备16029915号-1</a></p>
    </footer>
    <!--侧边导航-->
    <ul class="layui-nav layui-nav-tree layui-nav-side blog-nav-left layui-hide" lay-filter="nav">
        <li class="layui-nav-item layui-this">
            <a href="/Public/home.html"><i class="fa fa-home fa-fw"></i>&nbsp;网站首页</a>
        </li>
        <li class="layui-nav-item">
            <a href="/Public/article.html"><i class="fa fa-file-text fa-fw"></i>&nbsp;文章专栏</a>
        </li>
        <li class="layui-nav-item">
            <a href="/Public/resource.html"><i class="fa fa-tags fa-fw"></i>&nbsp;资源分享</a>
        </li>
        <li class="layui-nav-item">
            <a href="/Public/timeline.html"><i class="fa fa-road fa-fw"></i>&nbsp;点点滴滴</a>
        </li>
        <li class="layui-nav-item">
            <a href="/Public/about.html"><i class="fa fa-info fa-fw"></i>&nbsp;关于本站</a>
        </li>
        <li class="layui-nav-item">
            <a href="D:\xampp\htdocs\blog\Tp"><i class="fa fa-info fa-fw"></i>&nbsp;后台管理</a>
        </li>
    </ul>
    <!--分享窗体-->
    <div class="blog-share layui-hide">
        <div class="blog-share-body">
            <div style="width: 200px;height:100%;">
                <div class="bdsharebuttonbox">
                    <a class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
                    <a class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
                    <a class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
                    <a class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a>
                </div>
            </div>
        </div>
    </div>
    <!--遮罩-->
    <div class="blog-mask animated layui-hide"></div>
    <!-- layui.js -->
    <script src="/Public/plug/layui/layui.js"></script>
    <!-- 全局脚本 -->
    <script src="/Public/js/global.js"></script>
    <!--PC和WAP自适应版-->
   
</body>
</html>