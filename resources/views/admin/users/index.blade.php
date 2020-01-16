<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>约见管理-有点</title>
<link rel="stylesheet" type="text/css" href="/static/admin/css/css.css" />
<link rel="stylesheet" href="/static/admin/css/bootstrap.min.css">
<script type="text/javascript" src="/static/admin/js/jquery.min.js"></script>
<!-- <script type="text/javascript" src="js/page.js" ></script> -->
</head>

<body>
	<div id="pageAll">
		<div class="pageTop">
			<div class="page">
				<img src="/static/admin/img/coin02.png" /><span><a href="#">首页</a>&nbsp;-&nbsp;<a
					href="#">管理员管理中心</a>&nbsp;-</span>&nbsp;管理员管理
			</div>
		</div>

		<div class="page">
			<!-- banner页面样式 -->
			<div class="connoisseur">
				<div class="conShow">
					<table width="100%" border="1" cellspacing="0" cellpadding="0">
						<tr>
							<td width="5%" class="tdColor tdC">管理员ID</td>
							<td width="5%" class="tdColor tdC">管理员名称</td>
							<td width="20%" class="tdColor">添加时间</td>
							<td width="20%" class="tdColor">操作</td>
						</tr>
						@foreach($data as $v)
						<tr>
							<td>{{$v->admin_id}}</td>
							<td>{{$v->admin_name}}</td>
							<td>{{date('Y-m-d h:i:s',$v->add_time)}}</td>
							<td><a href="{{url('/users/edit/'.$v->admin_id)}}"><img class="operation"
									src="/static/admin/img/update.png"></a> <a href="{{url('/users/delete/'.$v->admin_id)}}"><img class="operation delban"
								src="/static/admin/img/delete.png"></a></td>
						</tr>
						@endforeach
						<tr>
   							<td colspan="5">{{$data->appends($query)->links()}}</td>
  						 </tr>
					</table>
					
				</div>
				<!-- banner 表格 显示 end-->
			</div>
			<!-- banner页面样式end -->
		</div>

	</div>
</body>
</html>