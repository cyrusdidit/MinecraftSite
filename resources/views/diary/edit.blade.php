<x-layout>
    <x-slot:title>Edit ENTRY</x-slot:title>

    <h1>Edit ENTRY</h1>

    <form action="/diary/{{ $diary->id }}" method="POST">
    @csrf
    @method('PUT') 

    <label for="title">Title:</label>
    <input type="text" name="title" id="title" value="{{ old('title', $diary->title) }}" required />
    <br>

    @error("title")
        <p>{{ $message }}</p>
    @enderror

    <label for="body"> Body:</label>
    <input type="text" name="body" id="body" value="{{ old('content', $diary->body) }}" required />
    <br>

    @error("body")
        <p>{{ $message }}</p>
    @enderror

    <label for="date">Date:</label>
    <input type="date" name="date" id="date" value="{{ old('content', $diary->date) }}" required />
    <br>

    @error("date")
      <p>{{ $message }}</p>
    @enderror

    <button type="submit">Save Changes</button>
</form>

</x-layout>
