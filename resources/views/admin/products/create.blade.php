@extends('layouts.admin.app')
@section('main')
<form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="title"> title </label>
        <input type="text" id="title" name="name">
    </div>
    
    <div>
        <label for="price"> Price </label>
        <input type="number" id="price" name="price">
    </div>
    <div>
        <label for="photopath"> Select Image </label>
        <input type="file" id="photopath" name="photopath">
    </div>
    <select name="category_id">
        <option selected disabled>Select Category </option>
        @foreach($cat as $c)
            <option value={{$c->id}}>{{$c->title}}</option>
        @endforeach
    </select>

    <input type="submit" value="Add">
</form>
@endsection