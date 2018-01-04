@extends("Admin.master")

@section('title')
    Mobile Edit
@endsection

@section('Content')
    <?php session_start(); ?>
    <h1>Add new Article</h1>
    <form action="/admin/mobile/{{$mobiles->id}}/update" method="post" class="form-horizontal">
        @include('Admin.Mobiles._form')
        {{method_field('PATCH')}}
        {{csrf_field()}}
        <input type="submit" class="btn btn-info">
    </form>
@endsection
@section('title')
    Anonymous.
@endsection