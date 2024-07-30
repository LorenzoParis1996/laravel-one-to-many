@extends('layouts.admin')

@section('content')

<div class="container">
    @if ($errors->any())
       <div class="alert alert-danger">
         <ul>
            @foreach ($errors->all() as $error)
             <li>{{$error}}</li>
            @endforeach
         </ul>
       </div>
    @endif
</div>

<div class="container">
 <form action="{{route('admin.projects.store')}}" method="POST">
    @csrf
    <input class="form-control mb-3" type="text" placeholder="Title" aria-label="default input example" id="title" name="title" value="{{old('title')}}">

    <input class="form-control mb-3" type="text" placeholder="Developer" aria-label="default input example" id="developer" name="developer" value="{{old('developer')}}">

    <textarea class="form-control mb-3" type="text" placeholder="Description" aria-label="default input example" id="description" name="description">{{old('description')}}</textarea>

    <input class="form-control mb-3" type="text" placeholder="Release Date" aria-label="default input example" id="release-date" name="release_date" value="{{old('release_date')}}">

    <input class="form-control mb-3" type="text" placeholder="Image" aria-label="default input example" id="image" name="image">

    <input type="submit" value="Add new project" class="btn btn-primary btn-sm">
    <input type="reset" value="Reset fields" class="btn btn-danger btn-sm">
 </form>
</div>

@endsection


