<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>首页左侧导航</title>
<link rel="stylesheet" type="text/css" href="/static/admin/css/public.css" />
<script type="text/javascript" src="/static/admin/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/admin/js/public.js"></script>
<head></head>

<body id="bg">
	<!-- 左边节点 -->
	<div class="container">

		<div class="leftsidebar_box">
			<a href="{{url('admin/main')}}" target="main"><div class="line">
					<img src="/static/admin/img/coin01.png" />&nbsp;&nbsp;首页
				</div></a>
			<!-- <dl class="system_log">
			<dt><img class="icon1" src="../img/coin01.png" /><img class="icon2"src="../img/coin02.png" />
				首页<img class="icon3" src="../img/coin19.png" /><img class="icon4" src="../img/coin20.png" /></dt>
		</dl> -->
		<dl class="system_log">
				<dt>
					<img class="icon1" src="/static/admin/img/coin03.png" />
					<img class="icon2" src="/static/admin/img/coin04.png" /> 分类管理
					<img class="icon3" src="/static/admin/img/coin19.png" />
					<img class="icon4" src="/static/admin/img/coin20.png" />
				</dt>
				<dd>
					<img class="coin11" src="/static/admin/img/coin111.png" />
					<img class="coin22"	src="/static/admin/img/coin222.png" />
					<a class="cks" href="{{url('cate/create')}}" target="main">分类管理</a>
					<img class="icon5" src="/static/admin/img/coin21.png" />
				</dd>
				<dd>
						<img class="coin11" src="/static/admin/img/coin111.png" />
						<img class="coin22"	src="/static/admin/img/coin222.png" />
						<a class="cks" href="{{url('cate')}}" target="main">分类列表</a>
						<img class="icon5" src="/static/admin/img/coin21.png" />
				</dd>
			</dl>
			
			<dl class="system_log">
				<dt>
					<img class="icon1" src="/static/admin/img/coin05.png" />
					<img class="icon2" src="/static/admin/img/coin06.png" /> 新闻管理
					<img class="icon3" src="/static/admin/img/coin19.png" />
					<img class="icon4" src="/static/admin/img/coin20.png" />
				</dt>
				<dd>
					<img class="coin11" src="/static/admin/img/coin111.png" />
					<img class="coin22" src="/static/admin/img/coin222.png" />

					<a class="cks" href="{{url('/news/create')}}" target="main">新闻添加</a>



					<img class="icon5" src="/static/admin/img/coin21.png" />
				</dd>
				<dd>
					<img class="coin11" src="/static/admin/img/coin111.png" />
					<img class="coin22" src="/static/admin/img/coin222.png" />
					<a class="cks" href="{{url('/news/')}}" target="main">新闻列表</a>
					<img class="icon5" src="/static/admin/img/coin21.png" />
				</dd>
			</dl>
			<dl class="system_log">
				<dt>
					<img class="icon1" src="/static/admin/img/coin07.png" />
					<img class="icon2" src="/static/admin/img/coin08.png" /> 管理员
					<img class="icon3" src="/static/admin/img/coin19.png" />
					<img class="icon4" src="/static/admin/img/coin20.png" />
				</dt>
				<dd>
					<img class="coin11" src="/static/admin/img/coin111.png" />
					<img class="coin22"	src="/static/admin/img/coin222.png" />
				<dd>
					<img class="coin11" src="/static/admin/img/coin111.png" />
					<img class="coin22"	src="/static/admin/img/coin222.png" />
					<a href="{{url('users/create')}}" target="main"	class="cks">管理员列表</a>

					<a href="{{url('/users')}}" target="main"	class="cks">管理员列表</a>

					<img class="icon5" src="/static/admin/img/coin21.png" />
				</dd>
			</dl>
			<dl class="system_log">
				<dt>
					<img class="icon1" src="/static/admin/img/coin14.png" /><img class="icon2"
						src="/static/admin/img/coin13.png" /> 友情链接<img class="icon3"
						src="/static/admin/img/coin19.png" /><img class="icon4"
						src="/static/admin/img/coin20.png" />
				</dt>
				<dd>
					<img class="coin11" src="/static/admin/img/coin111.png" />
					<img class="coin22"	src="/static/admin/img/coin222.png" />
					<a href="{{url('link/showadd')}}" target="main" class="cks">添加友情链接</a>
					<img class="icon5" src="/static/admin/img/coin21.png" />
				</dd>
				<dd>
					<img class="coin11" src="/static/admin/img/coin111.png" />
					<img class="coin22"	src="/static/admin/img/coin222.png" />
					<a href="{{url('link/list')}}" target="main"	class="cks">链接列表</a>
					<img class="icon5" src="/static/admin/img/coin21.png" />
				</dd>
			</dl>

		</div>

	</div>
</body>
</html>
