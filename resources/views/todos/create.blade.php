<x-layout>
    <x-slot:title>TODO CREATOR</x-slot:title>

    <h1>Create a To-Do:</h1>

    <form action="/todos" method="POST">
        @csrf
        
        <!-- Title Input -->
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" placeholder="Enter task title" required />
        <br>

        @error("content")
          <p>{{ $message }}</p>
        @enderror

        <!-- Content Input -->
        <label for="content">Content:</label>
        <input type="text" name="content" id="content" placeholder="Enter task content" required />
        <br>

        @error("content")
          <p>{{ $message }}</p>
        @enderror

        <!-- Completed Checkbox -->
        <label for="completed">Completed:</label>
        <input type="checkbox" name="completed" id="completed" value="1" /> 
        <br>

        <button type="submit">Save</button>
    </form>
</x-layout>
