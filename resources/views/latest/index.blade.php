@extends('layouts.frontend.app')
    <section class="slider d-flex align-items-center">
        <!-- <img src="images/slider.jpg" class="img-fluid" alt="#"> -->
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-12">
                    <div class="slider-title_box">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="slider-content_wrap">
                                  <div class="text-white" align="left">

<style>
  .uper {
    margin-top: 0px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif

  <table class="table table-striped text-white">
    <thead>
        <tr align="center">
          <td>S.No</td>
          <td>Name</td>
          <td>email</td>
          <td>title</td>
          <td>URL</td>
          <td>description</td>
        </tr>
    </thead>
    <tbody>
        @foreach($latests as $latest)
        <tr align="center">
            <td>{{$latest->id}}</td>
            <td>{{$latest->name}}</td>
            <td>{{$latest->email}}</td>
            <td>{{$latest->title}}</td>
            <td>{{$latest->URL}}</td>
            <td>{{$latest->description}}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@section('content')
@endsection