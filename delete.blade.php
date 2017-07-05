@extends('layouts.app')

@section('content')
<div class='container'>

  <h1>Are you sure you want to delete this?</h1>
  <form method="post" action="/{{ $item->id }}/deleted">
     {{ method_field('DELETE') }}
     {{ csrf_field() }}
    <div class="form-group">
      <button type="submit" class="btn btn-default">Yes</button>
    </div>
  </form>
</div>
@endsection
