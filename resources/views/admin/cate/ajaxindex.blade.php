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
                   {{$v->c_show=1?'显示':'不显示'}}
                </td>

                <td>
                   {{$v->c_nav_show=1?'重要':'不重要'}}
                </td>

                <td>
                    <a href="{{url('/cate/edit/'.$v->cate_id)}}" class="btn btn-info">编辑</a>
                    <a href="{{url('/cate/del/'.$v->cate_id)}}" class="btn btn-danger">删除</a>
                </td>
            </tr>
        @endforeach
  @endif
         <tr>
             <td colspan="6">
                 {{ $data->links()}}
             </td>
         </tr>