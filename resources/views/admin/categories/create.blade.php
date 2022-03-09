@extends('layouts.admin.app')
@section('main')
<form action="{{route('categories.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="title"> title </label>
        <input type="text" id="title" name="title">
    </div>
    <div>
        <label for="photopath"> Select Image </label>
        <input type="file" id="photopath" name="photopath">
    </div>
    <input type="submit" value="Add">
</form>
@endsection