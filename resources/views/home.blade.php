<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Todo || Home</title>
</head>
<body class="bg-gradient-to-r from-gray-100 to-gray-200">
<div >
                <div class="text-purple-500 text-center pt-24 text-3xl">
                   <h1> Click the button below to Create or view tasks</h1>
                    <div class="pt-24" >
                    <a href="/create">
                   <button class="shadow bg-purple-500 hover:bg-purple-400 
                        focus:shadow-outline focus:outline-none text-white 
                        font-bold py-2 px-4 rounded" type="submit">
                            Create
                        </button>
                    </a>
                    <a href="/index">
                    <button class="shadow bg-purple-500 hover:bg-purple-400 
                        focus:shadow-outline focus:outline-none text-white 
                        font-bold py-2 px-4 rounded" type="submit">
                            Task(s) Created
                        </button>
                        </a>
                    </div>
                </div>
                </div>
</body>
</html>