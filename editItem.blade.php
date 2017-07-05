@extends('layouts.app')

@section('content')
<div class='container'>

  <h1>Edit Thoughts</h1>
  <form method="post" action="/{{ $item->id }}/update">
     {{ method_field('PATCH') }}
     {{ csrf_field() }}
    <div class="form-group">
      <textarea name="body" class="form-control" rows="3">{{ $item->title }}</textarea>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-default">Update</button>
    </div>
  </form>
</div>
@endsection
