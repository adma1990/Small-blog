@extends('layout.base')

@section('content')
<div class="container">

@foreach ($comments as $comment)
<div class="card mt-4">
  <div class="card-header">
    {{ $comment->nickname }}
  </div>
  <div class="card-body" style="background-color: #292929;">
    <p class="card-text text-light">{{ $comment->comment }}</p>
  </div>
</div>
@endforeach

<hr>
  <form method="POST" action="/comment">
    @csrf
    <div class="form-group">
      <label class="text-light" for="formGroupExampleInput">Имя</label>
      <input type="text" class="form-control" name="nickname" id="formGroupExampleInput">
    </div>
    <div class="form-group">
      <label class="text-light" for="exampleFormControlTextarea1">Комментарий</label>
      <textarea class="form-control" name="comment" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>

    <p class="text-light">{{ $errors->first('nickname') }}</p>
    <p class="text-light">{{ $errors->first('comment') }}</p>
    <p><button type="submit" class="btn btn-primary">Отправить</button></p>
  </form>
</div>

@endsection
