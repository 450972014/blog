<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">  
        <title>M-finder - Login 后台管理系统 - 登录</title>
        <meta name="description" content="">
        <meta name="author" content="templatemo">
        <link href="/Public/Admin/favicon.ico" type="image/vnd.microsoft.icon" rel="shortcut icon"/>
        <link href="/Public/Admin/css/font-awesome.min.css" rel="stylesheet">
        <link href="/Public/Admin/css/bootstrap.min.css" rel="stylesheet">
        <link href="/Public/Admin/css/templatemo-style.css" rel="stylesheet">
      
    </head>
    <body class="light-gray-bg">
        <div class="templatemo-content-widget templatemo-login-widget white-bg">
            <header class="text-center">
                <div class="square"></div>
                <h1>M-finder Admin</h1>
            </header> 
            <form action="<?php echo U('Login/login');?>" id="signupForm" method="post" class="templatemo-login-form">
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>	        		
                        <input type="text" name="admin_name" id="name" class="form-control" placeholder="请输入登录名称">           
                    </div>	
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-key fa-fw"></i></div>	        		
                        <input type="password" name="admin_pwd" id="pwd" class="form-control" placeholder="******">           
                    </div>	
                </div>	          	

                <div class="form-group">
                <input type="submit" value="login"  class="templatemo-blue-button width-100 login_btn">
                </div>
            </form>
        </div>
        <div class="templatemo-content-widget templatemo-login-widget templatemo-register-widget white-bg">
            <p>Powered by <strong><a href="http://www.m-finder.com" class="blue-text">M-finder</a></strong></p>
        </div>
        <script src="/Public/Vendor/jquery-3.1.1.min.js"></script>
        <script src="/Public/Vendor/jquery.validate.js"></script>
        <script src="/Public/Vendor/messages_zh.js"></script>
        <script>
        $(function(){
            $("#signupForm").validate({
                  rules: {
                    admin_name: {
                    required: true,
                    minlength: 2,
                   
                  },
                  admin_pwd:{
                    required:true,
                    minlength:6
                  },
                },

                messages:{
                    admin_name:{
                        required:'请输入管理员名称',
                        minlength:'最少输入俩位',
                        remote:'管理员已存在',
                    },
                    admin_pwd:{
                        required:"请输入密码",
                        minlength:"密码必须6位以上",
                    },
                },
                
             });
        }); 
        </script>
    </body>
</html>