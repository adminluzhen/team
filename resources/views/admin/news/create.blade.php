<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="/static/admin/css/bootstrap.min.css">
    <script src="/static/admin/js/jquery.js"></script>

</head>
<body>
<h3>新闻添加</h3>

<form class="form-horizontal" role="form" method="post" action="{{url('news/store')}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">新闻标题</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="firstname" placeholder="请输入新闻标题" name="n_title">
            <b style="color:red"></b>
        </div>
    </div>
    <div class="form-group">
        <label for="lastname" class="col-sm-2 control-label">新闻作者</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="lastname" placeholder="请输新闻作者" name="n_man" >
            <b style="color:red"></b>
        </div>
    </div>

    <div class="form-group">
        <label for="lastname" class="col-sm-2 control-label">新闻内容</label>
        <div class="col-sm-10">
            <textarea type="text" class="form-control" id="lastname" placeholder="新闻内容" name="n_content"></textarea>
            <b style="color:red"></b>
        </div>
    </div>

    <div class="form-group">
        <label for="lastname" class="col-sm-2 control-label">新闻图片</label>
        <div class="col-sm-10">
            <input type="file" name="n_myfile">
            <b style="color:red"></b>
        </div>
    </div>
    <div class="form-group">
        <label for="lastname" class="col-sm-2 control-label">新闻分类</label>
        <div class="col-sm-10">
                <select name="c_id" id="">
                    <option value="">——请选择——</option>
                    @foreach($category as $v)
                        <option value="{{$v->c_id}}">{{$v->c_name}}</option>
                     @endforeach
                </select>
            <b style="color:red"></b>
        </div>
    </div>


    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <div class="checkbox">
                <label>
                    <input type="checkbox">请记住我
                </label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">提交</button>
        </div>
    </div>
</form>

</body>

</html>

