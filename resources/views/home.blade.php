@extends('layouts.app')
@section('content')
    <div class="w-100 h-100 d-flex justify-content-center align-items-center">
        <div class="text-center" style="width:40%">
            <h1 class="display-2 text-white">Todo App</h1>
            <h2 class="text-white">What next? Add tasks to your list!</h2>
            <form action="{{route('upload')}}" method="POST">
                 @csrf
                <div class="form-group">
                    <input type="text" name="title" class="form-control" 
                    aria-describedby="button-addon2" 
                    placeholder="type here to create task...">
                     <button type="submit" id="button-addon2" class="btn btn-primary">Add to list</button>
                 </form>
            </div>
                <h2 class="text-white">My Tasks list:</h2>
                <div class="bg-white w-100">
            @forelse($tasks as $task)
            <div class="w-100 d-flex align-items-center justify-content-between m-auto">
                <div>@if ($task->completed == 0)
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-right" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <polyline points="9 6 15 12 9 18" />
               </svg>
                @else
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M5 12l5 5l10 -10" />
                </svg>
                @endif{{ $task->title }}</div>
            
            <div class="mr-0 d-flex align-items-center">
                @if ($task->completed == 0)
                <form action="{{route('completed', $task->id)}}" method="POST">
                  @method('get')
                  @csrf
                  <input type="text" name="completed" value="1" hidden>
                  <button class="btn btn-success">
                      Marked
                     </button>
                </form>
                @else
                <form action="{{route('completed', $task->id)}}" method="POST">
                  @method('get')
                  @csrf
                  <input type="text" name="completed" value="0" hidden>
                  <button class="btn btn-warning">
                      Unmarked 
                     </button>
                </form>
                @endif
                <form action="{{route('edit', $task->id)}}" method="POST">
                @method('get')
                @csrf
                <button class="border-0 bg-transparent">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit ml-4" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ff2825" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M9 7h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" />
                        <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" />
                        <line x1="16" y1="5" x2="19" y2="8" />
                    </svg>           
                </button>   
            </form>
            
                <button class="border-0 bg-transparent" type="button" data-target="#exampleModalCenter" data-toggle="modal">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash ml-1" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ff2825" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <line x1="4" y1="7" x2="20" y2="7" />
                    <line x1="10" y1="11" x2="10" y2="17" />
                    <line x1="14" y1="11" x2="14" y2="17" />
                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                </svg>  
                </button>
            
            </div>
            </div>
            @empty
            <p>No task created yet.</p>
            @endforelse
        </div>
        </div>
        <!-- Button trigger modal -->

        @foreach ($tasks as $task )
            
        
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"id="exampleModalLongTitle">Warning!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       Proceed to permanently delete task?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
     
      <form action="{{route('delete', $task->id)}}" method="POST">
                @method('get')
                @csrf
        <button type="submit" class="btn btn-danger">Delete</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endforeach
        
@endsection