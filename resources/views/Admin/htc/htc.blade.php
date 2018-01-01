@extends("Admin.master")

@section('title')
    HTC Admin Page
@endsection

@section('Context')
    <div class="container">
        <div class="row">
            <h1>HTC Dashboard</h1>
        </div>
        <div class="row">
            <a href="/admin/htc/create" class="btn btn-success">Add new HTC Mobile</a>
        </div>
        <div class="row">
            <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Action</th>
                <th>Action</th>
            </tr>
            <tbody>
                @foreach($htcs as $htc)
                    <tr>
                        <td>{{$htc->id}}</td>
                        <td>{{$htc->name}}</td>
                        <td>{{$htc->price}}</td>
                        <td><a href="/admin/htc/{{$htc->id}}/edit" class="btn btn-info btn-sm">Edit</a></td>
                        <td><form action="/htc/{{$htc->id}}/delete" class="form-inline inline" method="POST">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            </thead>
        </table>
        </div>

    <div class="row">
    <div class="col-lg-4 col-lg-offset-4" style="font-size: 15px">
        {!!$htcs->links()  !!}
    </div>
    </div>
</div>


@endsection