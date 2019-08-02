@extends('layouts.backend.app')

@section('title','dashboard')

@push('css')
@endpush

@section('content')
<style>
  .uper {
    margin-top: 140px;
  }
  .card-body{
    padding: 40px;
  }
  .form-control{
    border-bottom: 1px solid #888 !important;
  }
  .heading{
    color: #333;padding-top: 20px;text-align: center;
  }
</style>
<div class="card uper">
  <div class="card-header">
    <h3 class="heading">Add Category</h3>
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('admin.category.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Name:</label>
              <input type="text" class="form-control" name="name"/><br/>

              <label for="icon">Icon:</label>
              <input type="text" class="form-control" name="icon"/>
              <label>Refer: Base 64 code from freepik</label>
          </div>
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
@endsection