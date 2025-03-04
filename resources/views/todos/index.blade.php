
<x-layout>
  <x-slot:title>
    To do List
  </x-slot:title>

  <h1>TO DOS :3</h1>

  <ul>
    @foreach ($todos as $todo)
    <li><a href="/todos/{{ $todo->id }}">{{ $todo->content }}</a></li>
    @endforeach
  </ul>

</x-layout>

