<div class="card">
            <div class="card-header">
                <h4 class="card-title">Update</h4>

            </div>
            <div class="card-body">
                @if(session()->has('error'))
            <div class="alert alert-danger">
             {{ session()->get('error') }}
            </div>
              @endif

              @if(session()->has('msg'))
              <div class="alert alert-success">
               {{ session()->get('msg') }}
              </div>
                @endif
                <form method="POST" action="{{route('update',$new_data->id)}}" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label>name</label>
                        <input class="form-control" type="text" name="name" value="{{$new_data->name}}">
                    </div>
                    <div class="form-group">
                         <label>token</label>
                            <input class="form-control" type="text" name="token" value="{{$new_data->token}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-danger" type="submit">
                        Save
                        </button>
                    </div>
                </form>
                @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
            </div>
        </div>
