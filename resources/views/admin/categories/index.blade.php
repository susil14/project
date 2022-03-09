@extends('layouts.admin.app')

@section('main')
    @foreach ($cat as $c)
        <h1>{{$c->title}}</h1>
        <img src="/storage/{{$c->photopath}}">
        <a href="{{route('categories.edit',$c->id)}}"> Edit</a>
        <form action="{{route('categories.destroy',$c->id)}}" method="post">
            @csrf
            @method('delete')
            <input value="delete" type="submit">
        </form>
    @endforeach
@endsection