@extends('layouts.frontend.app')
@section('content')
<div>
  <img src="{{ asset('assets/frontend/img/banner.jpg') }}" width="100%">
</div>
<div class="container">
	<div class="row justify-content-center d-flex">
		@foreach($latests as $latest)
            <h2 class="my-5">Category : {{$latest->category->name}}</h2>
        @endforeach
        <div class="col-lg-12 post-list">
                        
                   @foreach($latests as $latest)

                        <div class="single-post d-flex flex-row card">
                            <div class="details">
                                <div class="title d-flex flex-row justify-content-between">
                                    <div class="titles">
                                        <a href=""><h4>{{$latest->title}}</h4></a>
                                        <h6>Premium</h6>                 
                                    </div>
                                </div>
                                <p>
                                    <strong class="mr-2">Link :</strong>
                                    <a href="{{$latest->URL}}">{{$latest->URL}}</a>
                                </p>
                                <p>
                                    <strong class="mr-2">Description :</strong>
                                    <span>{{$latest->description}}</span>
                                </p>
                                <p>
                                    <strong class="mr-2">Keyword :</strong>
                                    <span>{{$latest->keyword}}</span>
                                </p>
                            </div>
                        </div>
                        @endforeach   

        </div>
	</div>
</div>
@endsection