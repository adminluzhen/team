<tbody>
@foreach ($data as $v)
    <tr>
        <th>{{$v->n_id}}</th>
        <td>{{$v->n_title}}</td>
        <td>{{$v->n_content}}</td>
        <td>{{$v->n_man}}</td>
        <td><a href="{{url('/news/edit/'.$v->n_id)}}" class="btn btn-success">编辑</a>|<a href="{{url('/news/del/'.$v->n_id)}}" class="btn btn-danger">删除</a></td>
    </tr>
@endforeach
<tr>
    <td colspan="4">{{$data->appends($query)->links()}}</td>
</tr>

</tbody>