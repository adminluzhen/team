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