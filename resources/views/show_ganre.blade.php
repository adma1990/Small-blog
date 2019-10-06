@extends('layout.base')



@section('content')



<div class="container">
  @foreach($ganres as $ganre)
    <div class="card mb-3">
     <div class="row no-gutters">
     <div class="col-md-4">
      <img src="{{ asset('/storage/' . $ganre->image) }}" class="card-img" alt="...">
     </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">{{ $ganre->name }}</h5>
        <p class="card-text">{{ Str::limit($ganre->text, 249) }}</p>
        <p class="card-text"><small class="text-muted">{{ $ganre->created_at }}</small></p>
        <a href="/show/{{ $ganre->id }}" class="btn btn-primary">Читать</a>
      </div>
    </div>
  </div>
</div>
  @endforeach
</div>




@endsection
