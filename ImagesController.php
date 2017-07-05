<?php

namespace App\Http\Controllers;

use App\mustDoItem;
use App\Images;
use Illuminate\Http\Request;

class ImagesController extends Controller
{
  public function store(Request $request, mustDoItem $item)
  {
    $this->validate($request,[
            'body'=>'required'
          ]);

    $images = new Images;
    $images->body = $request->body;
    $item->images()->save($images);
    return back();
  }

}
