
@extends('layout.full-layout')
@section('main')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="container mt-5">
    <div class="card p-4 shadow" style="border-radius: .75rem; background-color: rgb(0, 0, 0);">
      <h2 class="text-center mb-4" >Add Your Task</h2>
      <form method="post" action="{{url('/')}}/addtask">
        @csrf
       
        <div class="form-group">
          <label for="taskTitle">Task Title</label>
          <input type="text" name="taskTitle" class="form-control" id="taskTitle" placeholder="Task Title">
        </div>
        <div class="form-group">
          <label for="taskDescription">Task Description</label>
          <textarea class="form-control" name="taskDescription" id="taskDescription" rows="3" placeholder="Task Description"></textarea>
        </div>
       
          <div class="form-group ">
            <label for="startDate">Task Start Date</label>
            <input type="date" name="startDate" class="form-control" id="startDate">
          </div>
          <div class="form-group  ">
            <label for="endDate">Task End Date</label>
            <input type="date" name="endDate" class="form-control" id="endDate">
          </div>
      
        
      <a href="{{ url('/viewtask') }}" class="btn btn-secondary  ">View Tasks</a>
     
       <button type="submit" class="btn btn-primary ">Add</button>
     
      </form>
   
    </div>
    
  </div>


 

@endsection