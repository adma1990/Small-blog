@extends('layout.base')

@section('content')
<div class="container">

@foreach ($comments as $comment)
<p class="text-light">{{ $comment->nickname }}</p>
<p class="text-light">{{ $comment->comment }}</p>
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
    <p><button type="submit" class="btn btn-primary">Отправить</button></p>
  </form>
</div>

@endsection
