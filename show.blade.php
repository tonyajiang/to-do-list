@extends('layouts.app')

@section('content')
<!-- <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script> -->
<div class="container">
  <h1>{{ $item->title }}</h1>

  <ul class="list-group">
  @foreach ($item->notes as $note)
    <li class="list-group-item"><a href="/notes/{{ $note->id }}/edit">{{ $note->body }}</a></li>
  @endforeach
  <div id="section" class="section">
    <li class="list-group-item">
      @foreach ($item->images as $image)
        <img id="imager" src="{{ $image->body }}"  alt="profile Pic" height="200" width="200"/>

          <!-- <a id="imager" href="#myPopup" data-rel="popup" data-position-to="window">
            <img src="{{ $image->body }}" alt="{{ $item->title }}" height="200" width="200"></a>

            <div data-role="popup" id="myPopup">
              <p>{{ $item->title }}</p>
              <a href="#pageone" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img src="{{ $image->body }}" style="width:800px;height:400px;" alt="{{ $item->title }}">
            </div> -->

      @endforeach
    </li>
  </div>
  </ul>
  <hr>
    <h3>Start planning</h3>
    <form method="post" action="/{{ $item->id }}/notes">
       {{ csrf_field() }}
      <div class="form-group">
        <textarea name="body" class="form-control" rows="3">{{ old('body') }}</textarea>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-default">Add Note</button>
      </div>
    </form>
    <h3>Add an image</h3>
    <form method="post" action="/{{ $item->id }}/images">
       {{ csrf_field() }}
      <div class="form-group">
        <textarea name="body" class="form-control" placeholder="url goes here" rows="1">{{ old('body') }}</textarea>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-default">Add an Image</button>
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
var myElem = document.getElementById('imager');
var text = document.getElementById("section");
if (myElem === null){
  text.style.display = "none";
 }
</script>
@endsection
