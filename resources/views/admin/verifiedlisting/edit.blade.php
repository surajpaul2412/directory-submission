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
<!--     <h3 class="heading">Edit Category</h3>
 -->  </div>
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
      <form method="post" action="{{ route('admin.verifiedlisting.update', $listing->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="verified_by">Verified By:</label>
          <input type="text" class="form-control" name="verified_by" placeholder="Enter Verifier Name" >
        </div>
        <div class="form-group">
          <label for="verified_on">Verified On:</label>
          <input type="text" class="form-control" name="verified_on" placeholder="2019-06-03(Date Format)">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection