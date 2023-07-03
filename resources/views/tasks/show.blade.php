<!DOCTYPE html>
<html>
<head>
    <title>{{ $task->title }}</title>
</head>
<body>
    <h1>Task Number: {{ $task->id }}</h1>
    
    <h2>{{ $task->title }}</h2>
    <p>{{ $task->description }}</p>

    <a href="{{ route('tasks.edit', $task) }}">Edit</a>
    <form action="{{ route('tasks.destroy', $task) }}" method="POST" style="display:inline"> 
        @csrf
        @method('DELETE')
       
        <button type="submit">Delete </button> 
    
    </form>



    




</body>
</html>
