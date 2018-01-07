@extends("Admin.master")

@section('title')
    HTC Mobile Admin Page
@endsection

@section('Content')
    </div>
    <div class="container">
        <div class="row">
            <h1>HTC Dashboard</h1>
        </div>
        <div class="row">
            <a href="/admin/mobile/create" class="btn btn-success">Add new Mobile</a>
        </div>
        <div class="row">
            <table class="table">

            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            <tbody>
                @foreach($mobiles as $mobile)
                    <tr>
                        <td>{{$mobile->id}}</td>
                        <td>{{$mobile->company}} {{$mobile->name}}</td>
                        <td>{{$mobile->price}}</td>
                        <td>{{$mobile->status}}</td>
                        <td class="btn-group"><a href="/admin/mobile/{{$mobile->id}}/edit" class="btn btn-info btn-sm">Edit</a>
                        <form action="/admin/mobile/{{$mobile->id}}/delete" class="form-inline inline" method="POST">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
        </div>

    <div class="row">
    <div class="col-lg-4 col-lg-offset-4" style="font-size: 15px">
        {!!$mobiles->links()  !!}
    </div>
    </div>
</div>


@endsection