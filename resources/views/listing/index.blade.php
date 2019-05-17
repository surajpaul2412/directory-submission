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

  <div class="card-body" style="margin-top: 100px;">
    @if(session()->get('success'))
      <div class="alert alert-success">
        {{ session()->get('success') }}  
      </div><br />
    @endif
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br/>
    @endif
      <form method="post" action="{{ route('listing.store') }}">
          @csrf
          <div class="form-row">
            <div class="form-group col">    
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" placeholder="Enter Your Name" />
            </div>
            <div class="form-group col">
                <label for="email">Email:</label>
                <input type="text" class="form-control" name="email" placeholder="Enter Your Email"/>
            </div>
          </div>
          <div class="form-group">
              <label for="title">Title:</label>
              <input type="text" class="form-control" name="title" placeholder="Enter Title"/>
          </div>
               
          <div class="form-group">
            <label for="category_id">Category:</label>
              <select name="category_id" class="form-control">
                <option value="" style="font-weight: bold;">-- Choose any one --</option>
                @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
                <option value="" style="font-weight: bold;">-- Others --</option>
              </select>
          </div>


          <div class="form-group">
              <label for="URL">URL:</label>
              <input type="text" class="form-control" name="URL" placeholder="Enter Your URL"/>
          </div>
          <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="description" class="form-control" rows="5" cols="100%"  placeholder="Description."></textarea>
          </div>
          <div class="form-group">
              <label for="meta_description">Meta_description:</label>
              <textarea name="meta_description" class="form-control" rows="3" cols="100%" maxlength="200" placeholder="Only 200 characters."></textarea>
          </div>
          <div class="form-group">
              <label for="keyword">Keywords:</label>
              <textarea name="keyword" class="form-control" rows="3" cols="100%"  placeholder="Use (,) to separate keywords."></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit URL</button>
      </form>
  </div>
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