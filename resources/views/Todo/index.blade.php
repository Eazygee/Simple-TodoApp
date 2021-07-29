<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @toastr_css
    <title>List || Tasks</title>
</head>
<body class="bg-gradient-to-r from-gray-100 to-gray-200">
        <div class="text-5xl text-center pt-20 pr-0.5">
                <h1> 
                    All Tasks </h1>
        </div>
        
        <div class='pt-16 pr-24 flex items-center flex space-x-4 justify-center'>
        <button class="bg-blue-500 hover:bg-blue-700 
        text-white font-bold py-2 px-4 rounded">
             <a href="/create">Create Tasks</a>
        </button>
        <button class="bg-blue-500 hover:bg-blue-700 
        text-white font-bold py-2 px-4 rounded">
             <a href="/">Home</a>
        </button>
        </div>

        
            @foreach ($tasks as $task)
                <div class="text-xl text-center pt-8 pr-0.5">
                
                        <li>
                            @if ($task->completed)
                                <span class="line-through">{{$task->title}}</span>
                            @else
                                {{$task->title}}
                            @endif
                            <div class="flex space-x-4 float-right ">
                                <div>
                                <a href="{{ asset('/') . $task->id . '/delete' }}">
                                    <button class=" bg-blue-500 hover:bg-blue-700 
                                        text-white font-bold py-2 px-4 rounded">
                                        Delete
                                    </button>
                                </a>
                                </div>
                                <div>
                             <a href="{{ asset('/') . $task->id . '/edit' }}">
                             <button class=" bg-blue-500 hover:bg-blue-700 
                                text-white font-bold py-2 px-4 rounded">
                                Edit Tasks
                             </button>
                             </a>
                                </div>
                                <div>
                                <a href="{{ asset('/') . $task->id . '/completed' }}">
                             <button class=" bg-blue-500 hover:bg-blue-700 
                                text-white font-bold py-2 px-4 rounded">
                               Completed
                             </button>
                             </a>
                                </div>
                            </div>
                        </li>
                </div>
            @endforeach 
</body>
    @jquery
    @toastr_js
    @toastr_render
</html>