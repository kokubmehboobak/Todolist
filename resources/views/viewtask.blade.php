
@extends('layout.full-layout')
@section('main')

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<!-- Font Awesome CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<!-- Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


<div class="container mt-5">
    <div class="card p-4 shadow" style="border-radius: 2rem; background-color: rgb(0, 0, 0); margin:-11px;">
      <h2 class="text-center mb-4" >View Tasks</h2>

      


      
      <table class="table" style=" color : white; border:solid;">
        <thead style="color : white; border:solid;  ">
          <tr>
            <th scope="col" style="color : white; border:solid " >Task ID</th> 
            <th scope="col" style="color : white; border:solid " >Task Title</th>
            <th scope="col" style="color : white; border:solid ">Task Description</th>
            <th scope="col" style="color : white; border:solid ">Start Date</th>
            <th scope="col" style="color : white; border:solid ">End Date</th>
            <th scope="col" style="color : white; border:solid ">Task Status</th>
            <th scope="col" style="color : white; border:solid ">Edit</th>
            <th scope="col" style="color : white; border:solid ">Delete</th>
          </tr>
        </thead>
        @foreach ($task as $tasks)
        <tbody >
          <tr>
            <td style="color : white; border:solid ">{{$tasks->id}}</td>
            <td style="color : white; border:solid ">{{$tasks->title}}</td> 
            <td style="color : white; border:solid ">{{$tasks->description}}</td>
            <td style="color : white; border:solid ">{{$tasks->startDate}}</td>
            <td style="color : white; border:solid ">{{$tasks->endDate}}</td>

            <td style="color : white; border:solid ">@if($tasks->endDate < now())
              <span class="badge badge-danger">Overdue</span>
          @elseif($tasks->endDate == now())
              <span class="badge badge-warning">Due today</span>
          @else
              <span class="badge badge-success">Active</span>
          @endif</td>
            <td style="color : white; border:solid ">
              <a href="{{route('edittask.edit', ['id'=> $tasks->id])}}" > <i class="fas fa-edit fa-2x"></i></a>
              </td>
            <td style="color : white; border:solid ">
               <a  href="{{route('deletetask.show', ['id'=> $tasks->id])}}" data-toggle="modal" data-target="#confirmDeleteModal" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt fa-2x"></i></a>
            </td>
          </tr>
          
        </tbody>
        @endforeach
      </table>
      <div class="text-center mt-3">
        <a href="{{ route('newtask.add')}}" style="border-radius: 0.5rem;" class="btn btn-primary">Create New Task</a>
      </div>
    </div>
  </div>  
@endsection