@extends('layouts.frontend.app')
@section('content')
<div class="media-top-space">
  <img src="{{ asset('assets/frontend/img/banner.jpg') }}" width="100%">
</div>



@if (empty($latest->title))
<div class="py-5" align="center">
    <h3>Category is empty</h3>
</div>
@else

<h3 class="pt-5" align="center">{{$latest->category->name}}</h3>
<div class="container py-5">
    <div class="row justify-content-center d-flex">
        <div class="col-lg-12 post-list">
            @foreach($latests as $latest)
            <div class="single-post d-flex flex-row card">
                <div class="details">
                    <div class="title d-flex flex-row justify-content-between">
                        <div class="titles">
                            <a href=""><h4>{{$latest->title}}</h4></a>               
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


@endif
















@endsection