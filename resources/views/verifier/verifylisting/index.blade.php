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
          <td>ID</td>
          <td>title</td>
          <td>URL</td>
          <td>description</td>
          <td>meta_description</td>
          <td>keyword</td>
          <td>verified_by</td>
          <td>verified_on</td>
          <td>view</td>
        </tr>
    </thead>
    <tbody>
        @foreach($listings as $listing)
        <tr>
            <td>{{$listing->user_id}}</td>
            <td>{{$listing->title}}</td>
            <td>{{$listing->URL}}</td>
            <td>{{$listing->description}}</td>
            <td>{{$listing->meta_description}}</td>
            <td>{{$listing->keyword}}</td>
            <td>{{$listing->verified_by}}</td>
            <td>{{$listing->verified_on}}</td>
            <td></td>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection