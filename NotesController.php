<?php

namespace App\Http\Controllers;

use App\mustDoItem;
use App\Note;
use Illuminate\Http\Request;

class NotesController extends Controller
{
  public function store(Request $request, mustDoItem $item)
  {
    $this->validate($request,[
            'body'=>'required'
          ]);

    $note = new Note;
    $note->body = $request->body;
    $item->notes()->save($note);
    return back();
  }

  public function edit(Note $note)
  {
    return view('edit', compact('note'));
  }

  public function update(Request $request, Note $note)
  {
    $note->update($request->all());

    return redirect("");
  }

}
