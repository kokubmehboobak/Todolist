<?php

namespace App\Http\Controllers;
use App\Models\todolist;
use Illuminate\Http\Request;

class todolistController extends Controller
{
    public function addtask()
    {
        return view('addtask');
    }
    public function addnewtask(Request $request)
    {
        $validatedData = $request->validate([
            'taskTitle'=> 'required|max:100',
            'taskDescription'=>'nullable',
            'startDate'=>'required|date',
            'endDate'=> 'required|date|after_or_equal:startDate'
        ]);
        $task = new todolist();
        $task->title = $validatedData['taskTitle'];
        $task->description =$validatedData['taskDescription'];
        $task->startDate=$validatedData['startDate'];
        $task->endDate=$validatedData['endDate'];
        $task->save();

        return redirect('/addtask')->with('success','Task has created successfully');
    
    }
    public function viewtask()
    {
        $task = todolist::all();
        $data = compact('task');
        return view('viewtask')->with($data);
    }

    public function edittask($id)
    {
        $task = todolist::findOrFail($id);
        return view('edittask', ['task'=>$task]);
    }

    public function edit(Request $request, $id)
    {
        $validatedData = $request->validate([
            'taskTitle'=> 'required|max:100',
            'taskDescription'=>'nullable',
            'startDate'=>'required|date',
            'endDate'=> 'required|date|after_or_equal:startDate'
        ]);

        $task = todolist::findOrFail($id);
        $task->title = $validatedData['taskTitle'];
        $task->description =$validatedData['taskDescription'];
        $task->startDate=$validatedData['startDate'];
        $task->endDate=$validatedData['endDate'];
        $task->update();

        return redirect('/viewtask')->with('Success','Data Updated Successfully');

    }
    public function deletetask($id)
    {
        $task = todolist::findOrFail($id);
        if(!is_null($task))
        {
            $task->delete();
        }
        return redirect('/viewtask')->with('success', 'Task has been deleted successfully');
    }
}
