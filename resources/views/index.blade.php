<div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">

        </div>
    </div>

<div class="card">
    <div class="card-header">
        New Data
    </div>

    <div class="card-body">
        <div class="">
            <table>
                <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>token</th>
                         <th>Edit</th>
                         <th>Delete</th>
                      </tr>
                </thead>
                <tbody>
                    @foreach ($new_data as $new_data )
                    <tr>
                        <td>{{$new_data->id}}</td>
                        <td>{{$new_data->name}}</td>
                        <td>{{$new_data->token}}</td>
                        <td>

                            <a href="{{route('edit',$new_data->id)}}" class="btn btn-info">edit</a>

                        </td>
                         <td>

                             <form method="POST" action="{{ route('delete',$new_data->id)}}">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button class="btn btn-danger">delete</button>
                            </form>

                         </td>
                   </tr>
                    @endforeach
                   </tbody>
            </table>
        </div>
    </div>
</div>

