@extends('layout.base')



@section('content')
<div class="container">

  <div id="gall">
  @foreach($gallerys as $gallery):

  <img src="storage/{{ $gallery->image }}" tabindex="0" border="3"/>
  
  @endforeach
  </div>

</div>







@endsection
