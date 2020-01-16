<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="/static/admin/css/bootstrap.min.css">  
</head>
<body>
  <div class="logHead">
    <img src="/static/admin/img/logLOGO.png" />
  </div>
<!-- <h1>Create Post</h1> -->
  <!-- @if ($errors->any())
 <div class="alert alert-danger">
 <ul>
 @foreach ($errors->all() as $error)
 <li>{{ $error }}</li>
 @endforeach
 </ul>
 </div>
@endif -->
  <form class="form-horizontal" role="form" method="post" action="{{url('/users/store')}}">
    @csrf
<div class="logDiv">
    <img class="logBanner" src="/static/admin/img/logBanner.png" / width="800px" height="200px">  
  </div>
  <div class="form-group">
    <label for="firstname" class="col-sm-2 control-label">管理员名称</label>
    <div class="col-sm-10">
      <input type="text" name="admin_name" id="firstname" placeholder="请输入管理员名称">
      <b style="color:red">{{$errors->first('admin_name')}}</b>
    </div>
  </div>
   <div class="form-group">
    <label for="firstname" class="col-sm-2 control-label">管理员密码</label>
    <div class="col-sm-10">
      <input type="text" name="admin_pwd" id="firstname" placeholder="请输入管理员密码">
      <b style="color:red">{{$errors->first('admin_pwd')}}</b>
    </div>
  </div>
   <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-danger">提交</button>
    </div>
  <!-- <div class="logDiv">
    <img class="logBanner" src="/static/admin/img/logBanner.png" / width="800px" height="200px">  
  </div >-->
</div>
</form>
</body>
</html>