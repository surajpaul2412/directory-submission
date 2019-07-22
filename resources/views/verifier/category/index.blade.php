@extends('layouts.backend.app')

@section('title','dashboard')

@section('content')
<style>
  .uper {
    margin-top: 140px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif

  <div align="right"><a href="{{ route('verifier.category.create')}}"><button class="btn btn-primary">Add Category</button></a></div>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Name</td>
          <td>icon</td>
          <td>Edit</td>
          <td>Delete</td>
        </tr>
    </thead>
    <tbody>
        @foreach($categories as $category)
        <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->name}}</td>
            <td><img src="{{$category->icon}}" width="30px" /></td>
            <td><a href="{{ route('verifier.category.edit',$category->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('verifier.category.destroy', $category->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection