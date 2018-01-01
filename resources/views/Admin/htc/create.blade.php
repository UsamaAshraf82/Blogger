@extends('admin.master')
@section('Context')
    <h1>Add new Article</h1>
    <form action="/admin/htc" method="post" class="form-horizontal">
        @include('Admin.htc._form')
        {{csrf_field()}}
        <input type="submit" class="btn btn-info">
    </form>
@endsection
