<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>登录-有点</title>
<link rel="stylesheet" type="text/css" href="/static/admin/css/public.css" />
<link rel="stylesheet" type="text/css" href="/static/admin/css/page.css" />
<script type="text/javascript" src="/static/admin/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/admin/js/public.js"></script>
</head>

<body>
<form action="{{url('/users/do_login')}}" method="post">
  @csrf
  <!-- 登录页面头部 -->
  <div class="logHead">
    <img src="/static/admin/img/logLOGO.png" />
  </div>
  <!-- 登录页面头部结束 -->

  <!-- 登录body -->
  <div class="logDiv">
    <img class="logBanner" src="/static/admin/img/logBanner.png" />
    <div class="logGet">
      <!-- 头部提示信息 -->
      <div class="logD logDtip">
        <p class="p1">登录</p>
        <p class="p2">有点人员登录</p>
      </div>
      <!-- 输入框 -->
      <div class="lgD">
        <img class="/static/admin/img1" src="/static/admin/img/logName.png" /><input type="text"
        name="admin_name"  placeholder="输入用户名" />
        <b style="color:red">{{$errors->first('admin_name')}}</b>
      </div>
      <div class="lgD">
        <img class="/static/admin/img1" src="/static/admin/img/logPwd.png" /><input type="text" name="admin_pwd" 
          placeholder="输入用户密码" />
          <b style="color:red">{{$errors->first('admin_pwd')}}</b>
      </div>
          <div class="logC">
        <button>登 陆</button>
      </div>
    </div>
  </div>
  </form>
  <!-- 登录body  end -->

  <!-- 登录页面底部 -->
</body>
</html>