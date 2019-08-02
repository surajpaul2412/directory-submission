@extends('layouts.frontend.app')
@section('content')
<style>
  #header{
    background: #7faef4;
  }
  .order{
      display:flex;
      flex-flow: column;
  }
  #blockA{
      order:2;
  }
  #blockB{
      order:1;
  }
</style>
<div class="media-top-space">
  <img src="{{ asset('assets/frontend/img/banner.jpg') }}" width="100%">
</div>
<div class="order">
    <section class="slider d-flex align-items-center pt-3" id="blockA">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-12">
                    <div class="slider-title_box">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="slider-content_wrap">
                                  <div class="text-dark py-5" align="left" id="latest">
                                    <h3 align="center" class="pt-4 pb-5">LATEST LINKS</h3>
                                    <div class="uper mt-0">
                                      @if(session()->get('success'))
                                        <div class="alert alert-success">
                                          {{ session()->get('success') }}  
                                        </div><br />
                                      @endif
                                      <div class="table-responsive-md">
                                      <table class="table table-striped text-dark">
                                        <thead>
                                            <tr align="center" class="text-dark bold">
                                              <td>S.No</td>
                                              <td>title</td>
                                              <td>Category</td>
                                              <td>URL</td>
                                              <td>meta_description</td>
                                              <td>keyword</td>
                                              <td>view</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($latests as $latest)
                                            <tr align="center" class="text-dark">
                                                <td>{{$latest->id}}</td>
                                                <td>{{$latest->title}}</td>
                                                <td>{{$latest->category->name}}</td>
                                                <td>{{$latest->URL}}</td>
                                                <td>{{$latest->meta_description}}</td>
                                                <td>{{$latest->keyword}}</td>
                                                <td><a href="{{ route('latest.show',$latest->id)}}" class="btn btn-primary">view</a></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                      </table>
                                      </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @if (Auth::check() && Auth::user()->role->id == 3)
    <section class="slider d-flex align-items-center pt-5" id="blockB">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-12">
                    <div class="slider-title_box">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="slider-content_wrap">
                                  <div class="text-dark py-5" align="left">
                                    <h3 align="center" class="pt-4 pb-5">Your LISTINGS</h3>
                                    <div class="uper mt-0">
                                      @if(session()->get('success'))
                                        <div class="alert alert-success">
                                          {{ session()->get('success') }}  
                                        </div><br />
                                      @endif

                                      <table class="table table-striped text-dark">
                                        <thead>
                                            <tr align="center" class="text-dark bold">
                                              <td>S.No</td>
                                              <td>User_Name</td>
                                              <td>title</td>
                                              <td>Category</td>
                                              <td>URL</td>
                                              <td>meta_description</td>
                                              <td>keyword</td>
                                              <td>view</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($mydata as $data)
                                            <tr align="center" class="text-dark">
                                                <td>{{$data->id}}</td>
                                                <td>{{$data->name}}</td>
                                                <td>{{$data->title}}</td>
                                                <td>{{$data->category->name}}</td>
                                                <td>{{$data->URL}}</td>
                                                <td>{{$data->meta_description}}</td>
                                                <td>{{$data->keyword}}</td>
                                                <td><a href="{{ route('latest.show',$data->id)}}" class="btn btn-primary">view</a></td>
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
    @endif
</div>
@endsection