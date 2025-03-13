

<x-layout>
  <x-slot:title>
    {{ $todo->content }}
  </x-slot:title>
  <h1>{{ $todo->content }}</h1>

  <h2>Complete? {{ $todo->completed ? "Yassss" : "No." }}</h2>

<a href="/todos/{{ $todo->id }}/edit">Edit</a>
  
    <form action="{{ route('todos.destroy', $todo->id) }}" method="POST">
        @csrf
        @method('DELETE') <!-- DELETE request -->
        
        <button type="submit" onclick="return confirm('Are you sure you want to delete this todo?');">
            Delete
        </button>
    </form>

</x-layout>

    

    

