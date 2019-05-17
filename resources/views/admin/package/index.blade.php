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

  <div align="right"><a href="{{ route('admin.package.create')}}"><button class="btn btn-primary">Add package</button></a></div>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Name</td>
          <td>Price</td>
          <td>Sponsered_Adds</td>
          <td>Edit</td>
          <td>Delete</td>
        </tr>
    </thead>
    <tbody>
        @foreach($packages as $package)
        <tr>
            <td>{{$package->id}}</td>
            <td>{{$package->name}}</td>
            <td>{{$package->price}}</td>
            <td>{{$package->sponsered}}</td>
            <td><a href="{{ route('admin.package.edit',$package->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('admin.package.destroy', $package->id)}}" method="post">
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