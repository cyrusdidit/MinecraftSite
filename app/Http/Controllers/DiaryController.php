<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Diary;

class DiaryController extends Controller
{
    public function index()
    {
        $diaries = Diary::all();
        return view("diary.index", compact("diaries"));
    }

    public function show(Diary $diary) {
        return view("diary.show", compact("diary"));
      }

      public function create()
        {
            return view('diary.create'); // Make sure 'todos.create' exists
        }

      public function store(Request $request)
      {
          // Validate that the title, content, and completed fields are correctly provided
          $request->validate([
            'title' => 'required|string|max:100',
            'body' => 'required|string',
            'date' => 'required|date', 
        ]);
      
          // Create and save the Entry
          Diary::create([
            'title' => $request->title,
            'body' => $request->body,
            'date' => $request->date,
        ]);
      
          // Redirect to the list of todos
          return redirect('/diary');
      }

      public function edit(Diary $diary)
      {
          return view('diary.edit', compact('diary'));
      }
      
      
      public function update(Request $request, Diary $diary)
      {
          $request->validate([
              'title' => 'required|string|max:100',
              'body' => 'required|string',
              'date' => 'required|date',
              
          ]);
      
          $diary->update([
              'title' => $request->title,
              'body' => $request->body,
              'date' => $request->date,
          ]);
      
          return redirect('/diary');
      }
      
      public function destroy(Diary $diary) {
        $diary->delete();
        return redirect("/diary");
        }
}

//USES diaries TABLE

