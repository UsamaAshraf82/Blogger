@extends("Admin.master")

@section('title')
    Mobile Create Page
@endsection


@section('Content')
    <h1>Add new Article</h1>
    <form action="/admin/mobile/add" method="post" class="form-horizontal">
        @include('Admin.Mobiles._form')
        {{csrf_field()}}
        <input type="submit" class="btn btn-info">
    </form>
@endsection
