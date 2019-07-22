@extends('layouts.frontend.app')
@section('content')
<style>
	#header{
		background: #7faef4;
	}
</style>
<!-- row of categories -->
		<section class="feature-cat-area pt-100 pb-60" id="category">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-60 col-lg-10">
                        <div class="title text-center">
                            <h1 class="mb-10">Featured Listing Categories</h1>
                            <p>Who are in extremely love with eco friendly system.</p>
                        </div>
                    </div>
                </div>                      
                <div class="row">
                	@foreach($categories as $category)
                    <div class="col-lg-2 col-md-4 col-sm-6 py-3">
                        <div class="single-fcat border">
                            <a href="{{ route('homecategory.show',$category->id)}}">
                                <img src="{{$category->icon}}" width="60px" />
                            </a>
                            <p>
                                <strong>{{$category->name}}</strong>
                            </p>
                        </div>
                    </div>
                    @endforeach 
                </div>
            </div>  
        </section>


@endsection