<!DOCTYPE html>
<html>
<head>
    <title>Task Manager</title>
    <style>
    /* Add your CSS styling here */
    .forecast-card {
      border: 1px solid #ccc;
      padding: 10px;
      margin-bottom: 10px;
    }
    .temperature {
      font-size: 24px;
      font-weight: bold;
    }
    .description {
      color: #888;
    }








    .card {
      width: 300px;
      margin: 100px auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 4px;
      text-align: center;
    }
    .card input[type="text"],
    .card input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      box-sizing: border-box;
    }
    .card button {
      width: 100%;
      padding: 10px;
      background-color: #4CAF50;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    .card button:hover {
      background-color: #45a049;
    }

  </style>
    


</head>
<body>
    <h1><center>Blogging Platform</center></h1>


    @if(session('success'))
        <div>{{ session('success') }}</div>









        @endif


   









    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

















   
&nbsp; <a style="display: inline-block;
  padding: 10px 20px;
  background-color: #3498db;
  color: #fff;
  text-decoration: none;
  border-radius: 4px; " href="{{ route('tasks.create') }}">Create New Note</a>

<br>
<br>
<br>


    <ul>
        @foreach($tasks as $task)



            <div style="border:1px solid;">

            <br>    

         

           <h1 style="border: 1px solid; background-color:lightgreen;"> &nbsp; ✎ 
           <a href="{{ route('tasks.show', $task) }}">{{ $task->title }}</a> </h1>
           <br>
           {{ $task->description }}   <a href="{{ route('tasks.show', $task) }}"> Know More. </a> 
           
           <br>
<br><br>
            
                <a style="display: inline-block;  padding: 8px 16px;  background-color: orange;   color: white;   border: none;
  text-align: center;
  text-decoration: none;
  font-size: 14px;
  cursor: pointer;
  border-radius: 4px;"  href="{{ route('tasks.edit', $task) }}">Edit</a>



                <form action="{{ route('tasks.destroy', $task) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button 
                    
                    style="display: inline-block;  padding: 8px 16px;  background-color: red;   color: white;   border: none;
  text-align: center;
  text-decoration: none;
  font-size: 14px;
  cursor: pointer;
  border-radius: 4px;" 
                    
                    type="submit">
                        
                    Delete



                    </button>
</div>
<br>
<br> 
        @endforeach
    </ul>

















</body>
</html>
