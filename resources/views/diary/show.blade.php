<x-layout>
  <x-slot:title>
    {{ $diary->title }}
  </x-slot:title>

  <h1>{{ $diary->title }}</h1>
  <p>{{ $diary->body }}</p>

  <a href="/diary/{{ $diary->id }}/edit">Edit</a>

  <form action="/diary/{{ $diary->id }}" method="POST">
    @method('delete')
    @csrf
    <button type="submit">Delete</button>
  </form>

</x-layout>
