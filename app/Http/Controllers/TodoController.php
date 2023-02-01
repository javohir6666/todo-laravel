<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller
{
    public function index(){
        $Todo = Todo::all();
        $todo_all = Todo::all()->count();
        return view('index')->with('Todo', $Todo);

    }
    public function create(){
        return view('create');
    }
    public function store(Request $request){
        // return $request->input('name');
        $todo = new Todo();
        $todo-> name= $request->input('name');
        $todo-> description = $request->input('description');
        $todo->save();
        return redirect('/');
    }
    public function details(){

        return view('details');

    }

    public function edit(Todo $request, $id){
        $todo = Todo::find($id);
        return view('edit')->with('Todo', $todo);

    }
    public function update(Request $request, Todo $Todo, $id){

        //we will write codes for updating a todo here
        $todo = Todo::find($id);
        $todo-> name= $request->input('name');
        $todo-> description = $request->input('description');
        $todo->save();
        return redirect('/');

    }
    public function delete(Todo $request, $id ){

        //we will write codes for deleting a todo here
        $todo = Todo::find($id);
        $todo->delete();
        return redirect('/');

    }

}
