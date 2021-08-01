@extends('layouts.app')
@section('content')
    <div class="w-100 h-100 d-flex justify-content-center align-items-center">
        <div class="text-center" style="width:40%">
            <h1 class="display-4 text-white">Edit your Todo called{{$task->title}}</h1>
           
            <form action="{{route('update', $task->id)}}" method="POST">
                @method('PATCH')
                 @csrf
                <div class="form-group">
                    <input type="text" name="title" class="form-control" 
                    aria-describedby="button-addon2" 
                   value="{{$task->title}}">
                     <button type="submit" id="button-addon2" class="btn btn-primary">Save changes</button>
                 </form>
            
               
        </div>
        </div>
        
        
@endsection