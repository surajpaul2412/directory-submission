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

  <table class="table table-striped">
    <thead>
        <tr>
          <td>user_name</td>
          <td>package_id</td>
          <td>sub_total</td>
          <td>tax</td>
          <td>total</td>
          <td>status</td>
        </tr>
    </thead>
    <tbody>
        @foreach($orders as $order)
        <tr>
            <td>{{$users->name}}</td>
            
            <td></td>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection