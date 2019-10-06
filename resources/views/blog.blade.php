@extends('layout.base')

@section('content')
<div class="container">

<div class="row">

<div class="col-2">
    @foreach ($cats as $cat):
        <a href="show_ganre/{{ $cat->id }}"><p class="text-light">{{ $cat->ganre }}</p></a>    
    @endforeach
</div>



<div class="col-10">
   @foreach ($blogs as $blog):
      <div class="card mb-3">
       <div class="row no-gutters">
       <div class="col-md-4">
        <img src="storage/{{ $blog->image }}" class="card-img" alt="...">
       </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">{{ $blog->name }}</h5>
          <p class="card-text">{{ Str::limit($blog->text, 249) }}</p>
          <p class="card-text"><small class="text-muted">{{ $blog->created_at }}</small></p>
          <a href="show/{{ $blog->id }}" class="btn btn-primary">Читать</a>
        </div>
      </div>
    </div>
  </div>
@endforeach
</div>
</div>
</div>


@endsection
