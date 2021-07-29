<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @toastr_css
    <title>Create || Todo</title>
</head>
<body class="bg-gradient-to-r from-gray-100 to-gray-200">
            <div class="text-5xl text-center pt-20 pr-0.5">
                
            <h1> 
                Create Tasks </h1>
            </div>
            <div class="text-red-500 text-center  text-xl" >
                <h3>
                        <x-error />
                    </h3>   
                
            </div>
            

            <div class="flex flex-col justify-center items-center pt-16 pr-24">
                    
                    <form class="w-full max-w-sm" action="/upload" method="POST">
                    @csrf
                    <div class="md:flex md:items-center mb-6">
                        <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 
                        md:mb-0 pr-4" for="inline-full-name">
                            
                        </label>
                        </div>
                        <div class="md:w-2/3">
                        <input class="bg-gray-200 appearance-none border-2 
                        border-purple-500 rounded w-full py-2 px-4 text-gray-700 
                        leading-tight focus:outline-none focus:bg-white focus:border-purple-500" 
                        id="inline-full-name" type="text" name="title" >
                        </div>
                   
                        
                        <button class="shadow bg-purple-500 hover:bg-purple-400 
                        focus:shadow-outline focus:outline-none text-white 
                        font-bold py-2 px-4 rounded" type="submit">
                            Create
                        </button>
                        </div>
                    </div>
                </form>
        </div>
        <div class=' pr-24 flex items-center justify-center'>
        <a href="/index">
        <button class="bg-purple-500 hover:bg-blue-700 
        text-white font-bold py-2 px-4 rounded">
             Back
        </button>
        </a>
</body>
    @jquery
    @toastr_js
    @toastr_render
</html>