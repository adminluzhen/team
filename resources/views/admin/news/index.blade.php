<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="/static/admin/css/bootstrap.min.css">
    <script src="/static/admin/js/jquery.js"></script>
</head>
<body>
<h3>新闻列表</h3>
{{--<h3>欢迎【{{session('admin')->u_name??''}}】登录，<a href="{{url('/logout')}}">退出</a></h3>--}}
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Bootstrap 实例 - 条纹表格</title>
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<table class="table table-striped">
    <a href="{{url('news/create')}}">添加</a>  <br>
    <form action="">
        <input type="text" name="n_title" placeholder="请输入新闻标题" value="{{$query['n_title']??''}}">
        <input type="text" name="n_content" placeholder="请输入新闻内容关键字" value="{{$query['n_content']??''}}">
        <button>搜索</button>
    </form>
    <br>  <br>
    <thead>
    @csrf
    <tr>
        <th>新闻ID</th>
        <th>新闻标题</th>
        <th>新闻内容</th>
        <th>新闻作者</th>
        <th>新闻分类</th>
        <th>新闻图片</th>
        <th>操作</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($data as $v)
        <tr>
            <th>{{$v->n_id}}</th>
            <td>{{$v->n_title}}</td>
            <td>{{$v->n_content}}</td>
            <td>{{$v->n_man}}</td>
            <td>{{$v->c_name}}</td>
            <td><img src="{{env('NEWS_URL')}}{{$v->n_myfile}}" width="100px"></td>
            <td><a href="{{url('/news/edit/'.$v->n_id)}}" class="btn btn-success">编辑</a>|<a href="{{url('/news/del/'.$v->n_id)}}" class="btn btn-danger">删除</a></td>
        </tr>
    @endforeach
    <tr>
        <td colspan="4">{{$data->appends($query)->links()}}</td>
    </tr>

    </tbody>
</table>

</body>
</html>
</body>
</html>