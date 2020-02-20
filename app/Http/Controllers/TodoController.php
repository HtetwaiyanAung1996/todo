<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todos = Todo::all();
        return($todos);
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */ 
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $todo = Todo::create($request->all());
        $todo = new Todo;
        $todo->text = $request->text;
        $todo->status = 'new';
        $todo->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function show(Todo $todo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function edit(Todo $todo)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {   
        $id = $request->id;
        $todo = Todo::find($id);
        $todo->text = $request->text;
        $todo->status = 'completed';
        $todo->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {   
        // return($request->all());
        $id = $request->id;
        $todo = Todo::find($id);
        $todo->delete();
    }


    public function check(Request $request)
    {   
        $id = $request->id;
        $todo = Todo::find($id);
        $todo->text = $request->text;
        $todo->status = 'completed';
        $todo->save();
    }

}
