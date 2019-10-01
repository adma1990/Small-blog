@extends('layout.base')

@section('content')
<div class="container">
  <div class="row">
    <h2><p class="text-light ml-3">{{ $getShow->name }}</p></h2>
  </div>

 <div class="row">
    <div class="col-4">
      <img src="{{ asset('/storage/' . $getShow->image) }}" style="height: 350px; width: 350px;">
    </div>

    <div class="col-8">
      <p class="text-light">{{ $getShow->text }}</p>
    </div>
 </div>

 </div>





</div>

@endsection
