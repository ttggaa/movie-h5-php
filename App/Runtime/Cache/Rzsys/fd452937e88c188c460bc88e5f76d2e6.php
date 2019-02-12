<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>视频</title>
  <meta name="renderer" content="webkit"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> 
  <meta name="apple-mobile-web-app-status-bar-style" content="black"> 
  <meta name="apple-mobile-web-app-capable" content="yes">  
  <meta name="format-detection" content="telephone=no"> 
	<link rel="stylesheet" type="text/css" href="/Public/admin/common/layui/css/layui.css" media="all">
	<link rel="stylesheet" type="text/css" href="/Public/admin/common/bootstrap/css/bootstrap.css" media="all">
	<link rel="stylesheet" type="text/css" href="/Public/admin/common/global.css">
	<link rel="stylesheet" type="text/css" href="/Public/admin/css/main.css" media="all">
</head>
<body>
<section class="larry-wrapper">
    <!-- overview -->
	<div class="row state-overview"  >
		<div class="col-lg-3 col-sm-6 layui-anim layui-anim-up">
			<section class="panel">
				<div class="symbol userblue layui-anim layui-anim-rotate"> <i class="iconpx-users"></i>
				</div>
				<div class="value">
					<a href="#">
						<h1 id="count1"><?php echo ($user); ?></h1>
					</a>
					<p>用户总量</p>
				</div>
			</section>
		</div>
		<div class="col-lg-3 col-sm-6 layui-anim layui-anim-up">
			<section class="panel">
				<div class="symbol commred layui-anim layui-anim-rotate"> <i class="iconpx-user-add"></i>
				</div>
				<div class="value">
					<a href="#">
						<h1 id="count2"><?php echo ($goods); ?></h1>
					</a>
					<p>产品数量</p>
				</div>
			</section>
		</div>
		<div class="col-lg-3 col-sm-6 layui-anim layui-anim-up">
			<section class="panel">
				<div class="symbol articlegreen layui-anim layui-anim-rotate">
					<i class="iconpx-file-word-o"></i>
				</div>
				<div class="value">
					<a href="#">
						<h1 id="count3"><?php echo ($yuyue); ?></h1>
					</a>
					<p>预约数据</p>
				</div>
			</section>
		</div>
		
	</div>
	<!-- overview end -->
	<div class="row">
		<div class="col-lg-6">
			<section class="panel">
				<header class="panel-heading bm0">
					<span class='span-title'>系统概览</span>
					<span class="tools pull-right"><a href="javascript:;" class="iconpx-chevron-down"></a></span>
				</header>
				<div class="panel-body" >
					<table class="table table-hover personal-task">
                         <tbody>
                         	<tr>
                         		<td>
                         			<strong>版本信息</strong>： 视频

                         		</td>
                         		<td>

                         		</td>
                         	</tr>
                         	<tr>
                         		<td>
                                <strong>开发作者</strong>： 视频

                                </td>
                                <td></td>
                         	</tr>
                         	<!--<tr>
                         		<td>
                                <strong>网站域名</strong>：http://x1.t.100help.net
                                </td>
                                <td></td>
                         	</tr>-->
                         
                         	<tr>
                         		<td>
                                <strong>当前登录用户</strong>： <span class="current_user"><?php echo ($admin["name"]); ?></span>

                                </td>
                                <td></td>
                         	</tr>
                         </tbody>
					</table>
				</div>
			</section>
      <!-- 网站信息统计｛SEO数据统计｝ -->
      <section class="panel" style="display:none">
                  <header class="panel-heading bm0">
                       <span class='span-title'>网站信息统计｛SEO数据统计｝</span>
                       <span class="tools pull-right"><a href="javascript:;" class="iconpx-chevron-down"></a></span>
                  </header>
                  <div class="panel-body laery-seo-box">
                        <div class="larry-seo-stats" id="larry-seo-stats"></div>
                  </div>
      </section>
		</div>
		<div class="col-lg-6" style="display:none">
		     <!-- 快捷操作 -->
             <section class="panel">
                  <header class="panel-heading bm0">
                        <span class='span-title'>快捷操作</span>
                        <span class="tools pull-right"><a href="javascript:;" class="iconpx-chevron-down"></a></span>
                  </header>
                  <div class="panel-body">
                        <table class="table table-hover personal-task shortcut">
                            <tr>
                            	<td>
                            		<div class="c1">1</div>
                            		<div class="c2">2</div>
                            		<br>
                            	</td>
                            </tr>
                        </table>
                  </div>
             </section>
          <!-- 系统公告 -->
             <section class="panel" style="display:none">
                 <header class="panel-heading bm0">
                        <span class='span-title'>系统公告</span>
                        <span class="tools pull-right"><a href="javascript:;" class="iconpx-chevron-down"></a></span>
                  </header>
                  <div class="panel-body">
                        <table class="table table-hover personal-task shortcut">
                            <tr>
                              <td>
                                <div class="c1">1</div>
                                <div class="c2">2</div>
                                <br>
                              </td>
                            </tr>
                        </table>
                  </div>
             </section>

              <!-- 最新文章 -->
             <section class="panel" style="display:none">
                  <header class="panel-heading bm0">
                        <span class='span-title'>最新文章</span>
                        <span class="badge" style="background-color:#FF3333;"> new </span>
                        <span class="tools pull-right"><a href="javascript:;" class="iconpx-chevron-down"></a></span>
                  </header>
                  <div class="panel-body">
                       <table class="table table-hover personal-task">
                             <tbody>
                              <tr>
                                <td>原创</td>
                                <td>
                                  <a href="#" target="_blank">汪涵率众特工入侵地球 20160408</a>
                                </td>
                                <td class="col-md-5">阅读量：1350 &nbsp;&nbsp;&nbsp;&nbsp; 2016-04-11</td>
                              </tr>
                              <tr>
                                <td>原创</td>
                                <td>
                                  <a href="#" target="_blank">汪涵率众特工入侵地球 20160408</a>
                                </td>
                                <td class="col-md-5">阅读量：1350 &nbsp;&nbsp;&nbsp;&nbsp; 2016-04-11</td>
                              </tr>
                              <tr>
                                <td>原创</td>
                                <td>
                                  <a href="#" target="_blank">汪涵率众特工入侵地球 20160408</a>
                                </td>
                                <td class="col-md-5">阅读量：1350 &nbsp;&nbsp;&nbsp;&nbsp; 2016-04-11</td>
                              </tr>
                              <tr>
                                <td>原创</td>
                                <td>
                                  <a href="#" target="_blank">汪涵率众特工入侵地球 20160408</a>
                                </td>
                                <td class="col-md-5">阅读量：1350 &nbsp;&nbsp;&nbsp;&nbsp; 2016-04-11</td>
                              </tr>
                              <tr>
                                <td>原创</td>
                                <td>
                                  <a href="#" target="_blank">汪涵率众特工入侵地球 20160408</a>
                                </td>
                                <td class="col-md-5">阅读量：1350 &nbsp;&nbsp;&nbsp;&nbsp; 2016-04-11</td>
                              </tr>
                             </tbody>
                       </table>
                  </div>
             </section>
		</div>
	</div>

</section>

<script type="text/javascript" src="/Public/admin/common/layui/layui.js"></script>
<script type="text/javascript">
	layui.use(['jquery','layer','element'],function(){
		window.jQuery = window.$ = layui.jquery;
		window.layer = layui.layer;
        window.element = layui.element();

       $('.panel .tools .iconpx-chevron-down').click(function(){
       	   var el = $(this).parents(".panel").children(".panel-body");
       	   if($(this).hasClass("iconpx-chevron-down")){
       	   	   $(this).removeClass("iconpx-chevron-down").addClass("iconpx-chevron-up");
       	   	   el.slideUp(200);
       	   }else{
       	   	   $(this).removeClass("iconpx-chevron-up").addClass("iconpx-chevron-down");
       	   	   el.slideDown(200);
       	   }
       })

	});
</script>
<script type="text/javascript" src="/Public/admin/jsplug/echarts.min.js"></script>
<script type="text/javascript" src="/Public/admin/js/main.js"></script>
</body>
</html>