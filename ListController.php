<?php

namespace App\Http\Controllers;

use App\mustDoItem;
use Illuminate\Http\Request;

class listController extends Controller
{
  public function bucketList()
  {
      $bucket = mustDoItem::all();
      return view('list', compact('bucket'));
  }

  public function show(mustDoItem $item)
  {
    return view('show', compact('item'));
  }

  public function store(Request $request)
  {
    $this->validate($request,[
            'body'=>'required'
          ]);

    $item = new mustDoItem;
    $item->title = $request->body;
    $item->done = '0';
    $item->save();
    return back();
  }

  public function checkoff(mustDoItem $item)
  {
    $item = mustDoItem::find($item->id);
    $item->done = '1';
    // @if ($item->done == '0')
    //   $item->done = '1'
    // @elseif ($item->done == '1')
    //   $item->done = '0'
    // @endif
    $item->save();
    return redirect("");
}

  public function edit(mustDoItem $item)
  {
    return view('editItem', compact('item'));
  }

  public function update(Request $request, mustDoItem $item)
  {
    $item = mustDoItem::find($item->id);
    $item->title = $request->body;
    $item->save();
    return redirect("");
  }

  public function delete(mustDoItem $item)
  {
    // $item = mustDoItem::destroy($item->id);
    // $item->delete();
    return view('delete', compact('item'));
  }

  public function deleted(Request $request, mustDoItem $item)
  {
    $item = mustDoItem::find($item->id);
    $item->delete();
    return redirect("");
  }
}
