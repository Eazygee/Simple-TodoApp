<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
class TasksController extends Controller
{
    // public function index(){
    //     $tasks = Task::latest()->get();
        
    //  }

        public function home(){
            $tasks = Task::latest()->get();
            return view ('home')->with(['tasks' => $tasks]);

        }

        public function create(){
            return view('todo.create');
            }

            public function upload(Request $req){
                $req->validate([
                    'title' => 'required|max:255',
                    
                ]);
                
                
                 if ($task = $req->title){
                    
                   $task = Task::create([
                    'title' => $req->title,
                    'completed' => 0,
                ]);
                    toastr()->success('Task created successfully!');
                 }
                

                return redirect("/");
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
        
                    return redirect('/');
                 }
        
            }

            public function completed($id){
                $task = Task::find($id);
                if($task->completed){
                    $task->update(['completed' => 0 ]);
                    toastr()->warning('Unmarked');
                    return redirect('/');
                }else{
                    $task->update(['completed' => 1 ]);
                    toastr()->success('Marked');
                        return redirect('/');
                }
            }

                public function delete($id){
                    $task = Task::find($id);
                     $task->delete();              
                    if ($task instanceof task) {
                        toastr()->error('Task deleted');
                        return redirect('/');     
                    }
                }

                // public function modal(){
                //     $task = Task::find('id');
                //     return view("todo.modal")->with(['task' => $task]);
                // }

                
            }
