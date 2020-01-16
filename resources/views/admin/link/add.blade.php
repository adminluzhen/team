<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>约见编辑-有点</title>
<link rel="stylesheet" href="/static/bootstrap/css/bootstrap.min.css">  
	<script src="/static/jquery.min.js"></script>
	<script src="/static/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
    <div style="margin-top:80px"></div>
<form class="form-horizontal" role="form" action="{{url('link/do_add')}}" method="post">
    @csrf
	<div class="form-group">
		<label for="firstname" class="col-sm-2 control-label">链接名称</label>
		<div class="col-sm-10">
			<input type="text" name="l_name" class="form-control" id="firstname" 
				   placeholder="请输入链接名称">
		</div>
	</div>
	<div class="form-group">
		<label for="lastname" class="col-sm-2 control-label">链接网址</label>
		<div class="col-sm-10">
			<input type="text" name="l_url" class="form-control" id="lastname" 
				   placeholder="请输入链接">
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-default">确定</button>
		</div>
	</div>
</form>
</body>
</html>