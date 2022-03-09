@extends('layouts.admin.app')

@section('main')
    <h1> Edit :- {{$category->title}}</h1>
    <form action="{{route('categories.update',$category->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div>
            <label for="title"> Title </label>
            <input type="text" id="title" name="title" value="{{$category->title}}">
        </div>
        <div>
            <label for="photopath"> Select Image </label>
            <input type="file" id="photopath" name="photopath">
        </div>
        <input type="submit" value="Edit">
    </form>
@endsection