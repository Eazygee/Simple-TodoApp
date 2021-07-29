<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
class TasksController extends Controller
{
    public function index(){
        $tasks = Task::orderBy('completed')->get();
        return view ('todo.index')->with(['tasks' => $tasks]);

     }

        public function home(){
            return view('home');
        }

        public function create(){
            return view('todo.create');
            }

            public function upload(Request $req){
                $req->validate([
                    'title' => 'required|max:255'
                ]);
                $task = $req->title;
                Task::create(['title' => $task]);
                if ($task instanceof Task){
                
                }
                toastr()->success('Task created successfully!');

                return back();
            }

            public function edit($id){
                $task = Task::find($id);
                return view('todo.edit')->with(['id' => $id , 'task'=> $task]);
            }

            
            public function update(Request $req){
                $req->validate([
                    'title' => 'required|max:255'
                ]);

                $updatetask = Task::find($req ->id);
                $updatetask -> update(['title' => $req->title]);
                if ($updatetask instanceof task) {
                    toastr()->success('Task updated successfully!');
        
                    return redirect('/index');
                }
        

        
                return redirect('/index');
            }

            public function completed($id){
                $task = Task::find($id);
                if($task->completed instanceof task){
                    $task->update(['completed' =>true ]);
                    toastr()->success('Task marked as complete');
                    return redirect()->back();
                }else
                {
                    
                    $task->update(['completed' => false  ]);
                    toastr()->success('Task marked incomplete');
                    return redirect()->back();
                }
            }

                public function delete($id){
                    $task = Task::find($id);
                    $task->delete();
                    if ($task instanceof task) {
                        toastr()->success('Task deleted successfully!');
                    return redirect()->back();
                    }
                }
}

