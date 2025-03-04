<x-layout>
  <x-slot:title>
    Diaries List
  </x-slot:title>

  <h1>DIARIES :3</h1>

  <ul>
    @foreach ($diaries as $diary)
      <li><a href="/diaries/{{ $diary->id }}">{{ $diary->title }}</a></li>
    @endforeach
  </ul>

</x-layout>
