<x-layout>
    <x-slot:title>Edit Todo</x-slot:title>

    <h1>Edit Todo</h1>

    <form action="/todos/{{ $todo->id }}" method="POST">
    @csrf
    @method('PUT') 

    <label for="title">Title:</label>
    <input type="text" name="title" id="title" value="{{ old('title', $todo->title) }}" required />
    <br>

    @error("title")
        <p>{{ $message }}</p>
    @enderror

    <label for="content">Content:</label>
    <input type="text" name="content" id="content" value="{{ old('content', $todo->content) }}" required />
    <br>

    @error("content")
        <p>{{ $message }}</p>
    @enderror

    <!-- Completed Checkbox -->
    <label for="completed">Completed:</label>
    <input type="checkbox" name="completed" id="completed" value="1" 
    {{ old("completed", $todo->completed) ? 'checked' : '' }} /> 
    <br>

    @error("completed")
        <p>{{ $message }}</p>
    @enderror

    <button type="submit">Save Changes</button>
</form>

</x-layout>
