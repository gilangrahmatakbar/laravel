@extends('master')

@section('content')
<div class="ml-3 mt-3">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"> Create New Post</h3>
              </div>
              <form role="form" action="/posts" method="POST">
                  @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="title"> Title </label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title','') }}" placeholder="Enter title">
                    @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror  
                </div>
                  <div class="form-group">
                    <label for="body">Body</label>
                    <input type="text" class="form-control" id="body" name="body" value="{{ old('body','') }}" placeholder="Body">
                    @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror 
                </div>
             </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Create</button>
                </div>
              </form>
            </div>
</div>
@endsection