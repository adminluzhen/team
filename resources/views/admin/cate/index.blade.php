<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>分类管理</title>
    <link rel="stylesheet" href="/static/admin/css/bootstrap.min.css">
    <script src="/static/admin/js/jquery.js"></script>
    <script src="/static/admin/js/bootstrap.min.js"></script>
</head>
<body>
<div align="center">
    <h3>分类列表</h3>
</div>
<hr>
<form>
   <input type="text" name="c_name" value="{{$query['c_name']??''}}"  placeholder="请输入分类名称">
   <input type="text" name="c_man" value="{{$query['c_name']??''}}"  placeholder="请输入作者">
   <input type="submit" value="搜索">
</form>
<table class="table table-striped">
    <thead>
    <tr>
        <th>分类id</th>
        <th>分类名称</th>
        <th>添加人</th>
        <th>是否显示</th>
         <th>是否导航栏显示</th>
        <th>操作</th>
    </tr>
    </thead>
    <tbody>
    @if($data)
        @foreach($data as $v)
            <tr>
                <td>
                    {{$v->c_id}}
                </td>

                <td>
                    {{$v->c_name}}
                </td>

                <td>
                   {{$v->c_man}}
                </td>

                <td>
                    
                   {{$v->c_show==1?'显示':'不显示'}}
                </td>

                <td>
                   {{$v->c_nav_show==1?'重要':'不重要'}}
                </td>

                <td>
                    <a href="{{url('/cate/edit/'.$v->c_id)}}" class="btn btn-info">编辑</a>
                    <a href="{{url('/cate/destroy/'.$v->c_id)}}" class="btn btn-danger">删除</a>
                </td>
            </tr>
        @endforeach
  @endif
         <tr>
             <td colspan="6">
                 {{$data->appends($query)->links()}}
             </td>
         </tr>
    </tbody>

</body>
</html>
<script>
//ajax分页
$(document).on('click','.pagination a',function(){
	var url = $(this).attr('href');
	$.get(url,function(res){
		$('tbody').html(res);
	});
	return false;
})
</script>	


