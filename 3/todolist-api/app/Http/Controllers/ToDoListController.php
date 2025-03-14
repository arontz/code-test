<?php

namespace App\Http\Controllers;

use App\Models\ToDoList;
use Illuminate\Http\Request;

class ToDoListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todolist = ToDoList::get();

        return response()->json($todolist);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'todo' => 'required|string|max:255',
            'is_done' => 'boolean',
        ]);

        $todolist = ToDoList::create([
            'todo' => $request->todo,
            'is_done' => $request->is_done,
        ]);

        return response()->json([
            'message' => 'ToDoList Created successfully',
            'ToDoList' => $todolist,
        ], 201);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        $todolist = ToDoList::findOrFail($id);
        $request->validate([
            'todo' => 'required|string|max:255',
            'is_done' => 'boolean',
        ]);

        $todolist->update(['todo' => $request->todo,
                            'is_done' => $request->is_done]);

        return response()->json(['message' => 'ToDoList updated successfully', 'ToDoList' => $todolist]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $todolist = ToDoList::findOrFail($id);

        $todolist->delete();
    
        return response()->json(['message' => 'todolist deleted successfully']);
    }
}
