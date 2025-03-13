<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ToDo;

class ToDoController extends Controller
{
    public function index()
    {
        $todos = ToDo::all();
        return view("todos.index", compact("todos"));
    }

    public function show(ToDo $todo) {
        return view("todos.show", compact("todo"));
      }

      public function create()
        {
            return view('todos.create'); // Make sure 'todos.create' exists
        }

        public function store(Request $request)
        {
            // Validate that the title, content, and completed fields are correctly provided
            $request->validate([
                'title' => 'required|string|max:255',  // Title is required
                'content' => 'required|string', // Content is required
                'completed' => 'boolean',               // Completed is optional but boolean
            ]);
        
            // Create and save the ToDo
            ToDo::create([
                'title' => $request->title,            // Ensure title is passed here
                'content' => $request->content,        // Ensure content is passed here
                'completed' => $request->has('completed') ? true : false, // Checkbox logic
            ]);
        
            // Redirect to the list of todos
            return redirect('/todos');
        }
        

        public function edit(Todo $todo)
        {
            return view('todos.edit', compact('todo'));
        }
        
        
        public function update(Request $request, Todo $todo)
        {
            $request->validate([
                'title' => 'required|string|max:255',
                'content' => 'required|string',
                
            ]);
        
            $todo->update([
                'title' => $request->title,
                'content' => $request->content,
                'completed' => $request->has('completed') ? true : false,
            ]);
        
            return redirect('/todos');
        }
        
        public function destroy(ToDo $todo)
        {
            $todo->delete();
            return redirect('/todos');
        }
        

}
//USES to_dos TABLE

