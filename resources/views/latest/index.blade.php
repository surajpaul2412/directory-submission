@extends('layouts.frontend.app')
@section('content')
<style>
  #header{
    background: #7faef4;
  }
</style>
    <section class="slider d-flex align-items-center pt-5">
        <!-- <img src="images/slider.jpg" class="img-fluid" alt="#"> -->
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-12">
                    <div class="slider-title_box">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="slider-content_wrap">
                                  <div class="text-dark py-5" align="left">
                                    <h3 align="center" class="pt-4 pb-5">LATEST LINKS</h3>
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
                                            @foreach($latests as $latest)
                                            <tr align="center" class="text-dark">
                                                <td>{{$latest->id}}</td>
                                                <td>{{$latest->name}}</td>
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

@endsection