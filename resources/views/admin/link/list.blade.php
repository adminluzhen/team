<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>Bootstrap 实例 - 条纹表格</title>
	<link rel="stylesheet" href="/static/bootstrap/css/bootstrap.min.css">  
	<script src="/static/jquery.js"></script>
	<script src="/static/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<table class="table table-striped">
	<caption>链接列表</caption>
	<thead>
		<tr>
			<th>ID</th>
			<th>网址名称</th>
			<th>网址链接</th>
			<th>操作</th>
		</tr>
	</thead>
	<tbody>
        @foreach($data as $v)
		<tr>
			<td>{{$v->l_id}}</td>
			<td>{{$v->l_name}}</td>
			<td>{{$v->l_url}}</td>
			<td>
                <a href="{{url('link/update')}}?l_id={{$v->l_id}}" class="btn btn-warning">编辑</a>
                <a href="{{url('link/del')}}?l_id={{$v->l_id}}" class="btn btn-danger">删除</a>
            </td>
        </tr>
        @endforeach
    
        <tr>
            <td colspan="4">
                {{$data->links()}}
            </td>
        </tr>
    </tbody>
</table>
<script>
    $(document).on('click','.pagination a',function(){
    	var url = $(this).prop('href');
        
        $.ajax({
            type:'get',
            url:url,
            dataType:'text',
            success:function(res){
                $('tbody').html(res);
            }
        })
    	return false;
    });
</script>
</body>
</html>