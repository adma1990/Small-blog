@extends('layout.base')

@section('content')
<div class="container">
<p class="text-light">{{-- $name --}}</p>
<p class="text-light">{{-- $comment --}}</p>




<hr>
  <form method="POST" action="/catalog">
    @csrf
    <div class="form-group">
      <label class="text-light" for="formGroupExampleInput">Имя</label>
      <input type="text" class="form-control" name="name" id="formGroupExampleInput">
    </div>
    <div class="form-group">
      <label class="text-light" for="exampleFormControlTextarea1">Комментарий</label>
      <textarea class="form-control" name="comment" id="exampleFormControlTextarea1" rows="3"></textarea>
      <button type="submit" class="btn btn-primary">Отправить</button>
    </div>
  </form>
</div>




@endsection
