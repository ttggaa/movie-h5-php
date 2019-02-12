<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>域名添加</title>
	<meta name="renderer" content="webkit">	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">	
	<meta name="apple-mobile-web-app-status-bar-style" content="black">	
	<meta name="apple-mobile-web-app-capable" content="yes">	
	<meta name="format-detection" content="telephone=no">	
	<link rel="stylesheet" type="text/css" href="/Public/admin/common/layui/css/layui.css" media="all">
	<link rel="stylesheet" type="text/css" href="/Public/admin/common/bootstrap/css/bootstrap.css" media="all">
	<link rel="stylesheet" type="text/css" href="/Public/admin/common/global.css" media="all">
	<link rel="stylesheet" type="text/css" href="/Public/admin/css/personal.css" media="all">

    <script type="text/javascript" src="/Public/admin/js/jquery-1.9.0.min.js"></script>

</head>
<body>
<section class="layui-larry-box">
	<div class="larry-personal">
		<header class="larry-personal-tit">
			<span>添加域名</span>
		</header><!-- /header -->
		<div class="larry-personal-body clearfix">
			<form class="layui-form col-lg-5"  method="post" id="mainform" >
            <input type="hidden" name="id" id="upid" value="<?php echo ($data['ID']?$data['ID']:''); ?>">
           	    
                <div class="layui-form-item">
					<label class="layui-form-label">名称</label>
					<div class="layui-input-block">  
						<input type="text" name="name" id="name" required class="layui-input " value="<?php echo ($data['LU_NAME']?$data['LU_NAME']:''); ?>"  >
					</div>
				</div>
				
                 <div class="layui-form-item">
					<label class="layui-form-label">域名</label>
					<div class="layui-input-block">  
						<input type="text" name="href" id="href" required class="layui-input " value="<?php echo ($data['LU_REALM']?$data['LU_REALM']:''); ?>"  >
					</div>
				</div>
                <div class="layui-form-item">
					<label class="layui-form-label">状态</label>
					<div class="layui-input-block">  
						<input type="text" name="other" id="other" required class="layui-input " value="<?php echo ($data['LU_OTHER']?$data['LU_OTHER']:''); ?>"  >
					</div>
				</div>
				<div class="layui-form-item">
					<div class="layui-input-block">
						<button class="layui-btn" lay-submit="" lay-filter="demo1">立即提交</button>
						<button type="reset" class="layui-btn layui-btn-primary">重置</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>

<script type="text/javascript" src="/Public/admin/common/layui/layui.js"></script>

<script type="text/javascript">
	layui.use(['form','upload'],function(){
         var form = layui.form();
         //自定义验证规则  
		   //监听提交  
		  form.on('submit(demo1)', function(data){  
		  
			$.ajax({
				 type: "post",
				 url: "<?php echo U('href/doadd');?>",
				 data: {name:$('#name').val(),href:$('#href').val(),other:$('#other').val(),id:$('#upid').val(),pg:$('#pg').val()},
				 dataType: "json",
				 async:false,
				 success: function(data){
					layer.msg(data.msg);
						setTimeout(function() {
							window.location =data.href;
						}, 1200);
					
				 }
							
			 });
				 return false;  
			
		  }); 
	});
</script>

</body>
</html>