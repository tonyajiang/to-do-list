@extends('layouts.app')

@section('content')
<div class="container">
  <h1>Ultimate Bucket List</h1>

  <ul class="list-group">
    @foreach($bucket as $mustDo)
      <li class="list-group-item">
        <a name="{{ $mustDo->done }}" id="{{ $mustDo->done }}" href="/{{ $mustDo->id }}">{{ $mustDo->title }}</a>
        <form method="post" action="/{{ $mustDo->id }}/checkoff">
           {{ csrf_field() }}
        <button type="submit" class="btn btn-default pull-right" style="padding: 5px !important;
        position: relative; bottom: 28px; left: 10px;" >Done!</button>
    </form>
        <a href="/{{ $mustDo->id }}/edit" class="pull-right" style="position: relative; bottom: 22px;">&nbsp; edit</a>
        <a href="/{{ $mustDo->id }}/delete" class="pull-right" style="position: relative; bottom: 22px;">delete &nbsp;</a>
      </li>

    @endforeach
  </ul>
  <h3>Go big or go home:</h3>
  <form method="post" action="/add">
     {{ csrf_field() }}
    <div class="form-group">
      <textarea name="body" class="form-control" rows="3">{{ old('body') }}</textarea>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-default">Add</button>
    </div>
  </form>
  @if (count($errors))

    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  @endif
</div>
<script>
// var notDone = document.getElementById('0');
// var done = document.getElementById('1');
var doneList = document.getElementsByName('1');

for(var i=0; i < doneList.length; i++)   // comparison should be "<" not "<="
{
    doneList[i].style.textDecoration = "line-through";
}
//done.style.textDecoration = "line-through";

//document.getElementById("1").style.textDecoration = "line-through"
</script>
@endsection
