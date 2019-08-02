@extends('layouts.frontend.app')
@section('content')
<div class="media-top-space">
  <img src="{{ asset('assets/frontend/img/banner.jpg') }}" width="100%">
</div>
    <section class="slider d-flex align-items-center mt-0">
        <!-- <img src="images/slider.jpg" class="img-fluid" alt="#"> -->
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-12">
                    <div class="slider-title_box">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="slider-content_wrap">
                                  <div class="text-white py-5" align="left">
                                    <h3 align="center" class="pt-4 pb-5 bold">{{$listing->title}}</h3>
                                    <div class="uper mt-0">
                                      @if(session()->get('success'))
                                        <div class="alert alert-success">
                                          {{ session()->get('success') }}  
                                        </div><br />
                                      @endif
                                      <section class="card text-dark p-5" style="background: #efefef;">
                                        <div class="row">
                                          <div class="col-md-12">
                                            <p>
                                              <strong>Title :</strong>
                                              <span class="ml-3">
                                                {{$listing->title}}
                                              </span>
                                            </p>
                                            <p>
                                              <strong>URL :</strong>
                                              <span class="ml-3">
                                                <a target="_blank" href="{{$listing->URL}}">{{$listing->URL}}</a>
                                              </span>
                                            </p>
                                            <p>
                                              <strong>Category :</strong>
                                              <span class="ml-3 bold">
                                                {{$listing->category->name}}
                                              </span>
                                            </p>
                                            <p>
                                              <strong>Description :</strong>
                                              <span class="ml-3">
                                                {{$listing->description}}
                                              </span>
                                            </p>
                                            <p>
                                              <strong>Meta Description :</strong>
                                              <span class="ml-3">
                                                {{$listing->meta_description}}
                                              </span>
                                            </p>
                                            <p>
                                              <strong>Keywords :</strong>
                                              <span class="ml-3">
                                                {{$listing->keyword}}
                                              </span>
                                            </p>
                                          </div>
                                        </div>
                                      </section>
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