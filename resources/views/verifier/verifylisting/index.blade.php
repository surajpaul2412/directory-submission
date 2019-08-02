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
          <td>Name</td>
          <td>Email</td>
          <td>title</td>
          <td>Category</td>
          <td>URL</td>
          <td>description</td>
          <td>meta_description</td>
          <td>keyword</td>
          <td><strong>Verify</strong></td>
        </tr>
    </thead>
    <tbody>
        @foreach($listings as $listing)
        <tr>
            <td>{{$listing->name}}</td>
            <td>{{$listing->email}}</td>
            <td>{{$listing->title}}</td>
            <td>{{$listing->category->name}}</td>        
            <td>{{$listing->URL}}</td>
            <td>{{$listing->description}}</td>
            <td>{{$listing->meta_description}}</td>
            <td>{{$listing->keyword}}</td>
            

            <form method="post" action="{{ route('verifier.verifylisting.update', $listing->id) }}">
              @method('PATCH')
              @csrf
              <td style="display: none;">
                <div><input type="text" class="form-control" name="verified_by" placeholder="{{ Auth::user()->name }}" value="{{ Auth::user()->name }}"></div>
              </td>
              <td style="display: none;">
                <div><input type="text" class="form-control" name="verified_on" placeholder="" id="demo" disabled></div>
              </td>
              <td><button type="submit" class="btn btn-primary">Verify</button></td>
            </form>
            <!-- <td><a href="{{ route('verifier.verifylisting.edit',$listing->id)}}" class="btn btn-primary">Verify</a></td> -->
        </tr>
        @endforeach
    </tbody>
  </table>
<div>




<script>
  var d = new Date();
  document.getElementById("demo").placeholder = d;
</script>
@endsection