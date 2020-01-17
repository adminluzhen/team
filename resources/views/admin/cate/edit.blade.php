<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title></title>
	<link rel="stylesheet" href="/static/admin/css/bootstrap.min.css">  
	
</head>
<body>
<h3>分类添加</h3><hr/>
<!-- @if ($errors->any())
 <div class="alert alert-danger">
 <ul>
 @foreach ($errors->all() as $error)
 <li>{{ $error }}</li>
 @endforeach
 </ul>
 </div>
@endif -->
<form class="form-horizontal" role="form" action="{{url('cate/update/'.$data->c_id)}}" method="post" enctype="multipart/form-data">
@csrf
	<div class="form-group">
		<label for="firstname" class="col-sm-2 control-label">新闻名称</label>
		<div class="col-sm-10">
			<input type="text" name="c_name" class="form-control" id="firstname"
				   placeholder="请输入分类名称" value="{{$data->c_name}}">
		</div>
	</div>
	<div class="form-group">
		<label for="firstname" class="col-sm-2 control-label">是否显示</label>
		<div class="col-sm-10">
			<input type="radio" {{$data->c_show == 1 ? 'checked' : ''}} name="c_show" id="firstname" value="1">是
			<input type="radio" {{$data->c_show == 1 ? 'checked' : ''}} name="c_show" id="firstname" value="2">
否
		</div>
	</div>
	<div class="form-group">
		<label for="firstname" class="col-sm-2 control-label">是否导航栏</label>
		<div class="col-sm-10">
			<input type="radio" {{$data->c_nav_show == 1 ? 'checked' : ''}} name="c_nav_show" id="firstname" value="1">是
			<input type="radio" {{$data->c_nav_show == 2 ? 'checked' : ''}} name="c_nav_show" id="firstname" value="2">否
		</div>
	</div>
	<div class="form-group">
		<label for="firstname" class="col-sm-2 control-label">添加人</label>
		<div class="col-sm-10">
			<input type="text" name="c_man" class="form-control" id="firstname"
				   placeholder="请输入添加人" value="{{$data->c_man}}">
		</div>
	</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-default">编辑</button>
		</div>
	</div>
</form>

</body>
</html>