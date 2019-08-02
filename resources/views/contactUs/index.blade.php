@extends('layouts.frontend.app')
@section('content')
<div class="media-top-space">
  <img src="{{ asset('assets/frontend/img/banner.jpg') }}" width="100%">
</div>
<h3 align="center" class="pt-5">Contact Us</h3>
<form class="py-5 container">
  <div class="row">
    <div class="col-12 col-md-4 mt-4">
      <input type="text" class="form-control" placeholder="First name" required>
    </div>
    <div class="col-12 col-md-4 mt-4">
      <input type="text" class="form-control" placeholder="Last name" required>
    </div>
    <div class="col-12 col-md-4 mt-4">
      <input type="email" class="form-control" placeholder="Your Email" required>
    </div>
    <div class="col-12 mt-4">
      <input type="text" class="form-control" placeholder="Subject" style="height: 40px;">
    </div>
    <div class="col-12 mt-4">
      <input type="text" class="form-control" placeholder="Message" style="height: 100px;">
    </div>

    <div class="col-12 mt-4" align="center">
      <button type="submit" class="btn btn-primary px-4">Submit</button>
    </div>
  </div>
</form>
@endsection