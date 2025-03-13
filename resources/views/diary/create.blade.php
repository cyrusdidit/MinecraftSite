<x-layout>
    <x-slot:title>ENTRY CREATOR</x-slot:title>

    <h1>Create a Diary Entry:</h1>

    <form action="/diary" method="POST">
        @csrf
        
        <!-- Title Input -->
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" placeholder="Enter entry title" required />
        <br>

        @error("title")
          <p>{{ $message }}</p>
        @enderror

        <!-- Content Input (body) -->
        <label for="body">Body:</label>
        <input type="text" name="body" id="body" placeholder="Enter entry content" required />
        <br>

        @error("body")
          <p>{{ $message }}</p>
        @enderror

        <!-- Date Input -->
        <label for="date">Date:</label>
        <input type="date" name="date" id="date" required />
        <br>

        @error("date")
          <p>{{ $message }}</p>
        @enderror

        <button type="submit">Save</button>
    </form>
</x-layout>
