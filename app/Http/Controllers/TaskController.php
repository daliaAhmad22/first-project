<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use App\Models\Task;

class TaskController extends Controller
{
    public function index (){
       $tasks=DB::table('tasks')->orderBy('name')->get();
      //$task=Task::all();
       return view('temp',compact('tasks'));
    }

    public function store(Request $request){
        DB::table('tasks')->orderBy('name')->insert([
            'name' => $request->name,
            'created_at' => now(),
            'updated_at' => now()
        ]);
       /*$task=new Task();
       $task->name=$request->name;
       $task->save();*/
        return 'store';
    }

    public function delete($id){
       DB::table('tasks')->where('id',$id)->delete();
       //Task::find($id)->delete(); //fast way
        return redirect()->back();
        /*
            secure way
            Task::find($id)
            Task->delete();
        */
    }

    public function update($id){
        return view('update_insert');
    }

    public function update_insert(Request $request){
        DB::table('tasks')->update([
            'name' => $request->name
        ]);
        return redirect()->back();
    }
}


