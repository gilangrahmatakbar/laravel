@extends('master')

@section('content')
<div class="mt-2 ml-2">
    <h2> {{ $post -> title}} </h2>
    <p> {{ $post -> body}} </p>
</div>
  
@endsection