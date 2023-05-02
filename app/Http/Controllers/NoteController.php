<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$notes = Note::where('user_id', Auth::id())->latest('updated_at')->paginate(6);
        //$notes = Auth::user()->notes()->latest('updated_at')->paginate(6);
        $notes = Note::whereBelongsTo(Auth::user())->latest('updated_at')->paginate(6);
        return view('notes.index')->with('notes', $notes);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('notes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:120',
            'perex' => 'required',
            'description' => 'required'
        ]);

        Note::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'perex' => $request->perex,
            'description' => $request->description
        ]);

        return to_route('notes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $note = Note::where('id', $id)->where('user_id', Auth::id())->firstOrFail();

        //nezobrazovanie pre vsetkych okrem autorstva
        if($note->user_id != Auth::id()) {
            return abort(403);
        }
        return view('notes.show')->with('note', $note);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $note = Note::where('id', $id)->where('user_id', Auth::id())->firstOrFail();

        //nezobrazovanie pre vsetkych okrem autorstva
        if($note->user_id != Auth::id()) {
            return abort(403);
        }
        return view('notes.edit')->with('note', $note);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Note $note)
    {
        //nezobrazovanie pre vsetkych okrem autorstva
        if($note->user_id != Auth::id()) {
            return abort(403);
        }

        $request->validate([
            'title' => 'required|max:120',
            'perex' => 'required',
            'description' => 'required'
        ]);

        $note->update([
            'title' => $request->title,
            'perex' => $request->perex,
            'description' => $request->description
        ]);

        return to_route('notes.show', $note)->with('success', 'Note updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note)
    {
        //nezobrazovanie pre vsetkych okrem autorstva
        if($note->user_id != Auth::id()) {
            return abort(403);
        }

        $note->delete();

        return to_route('notes.index')->with('success', 'Note deleted successfully.');
    }
}
