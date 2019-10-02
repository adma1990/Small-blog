@extends('layout.base')

@section('content')
<div class="container">
@foreach ($blogs as $blog):

    <div class="col">
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
  </div>

@endforeach
<div class="col">
  {{-- $getCards->links() --}}
</div>

</div>



@endsection
