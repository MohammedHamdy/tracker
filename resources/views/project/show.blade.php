@extends('layouts.master')

@section('title') Project @endsection

@section('body')
<h4><a href="{{ route('project.create') }}">Create New Projects</a></h4>
        <div class="table-responsive">

                
              <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead>
                   
                   <th>Project Name</th>
                    <th>Creator</th>
                     <th>created at</th>
                     <th>status</th>
                     <th>Tasks</th>
                      <th>Edit</th>
                      
                       <th>Delete</th>
                   </thead>
    <tbody>
    	
    <tr>
    <td>{{$data->name}}</td>
    <td>{{ $data->user->name }}</td>
    <td>{{ $data->created_at }}</td>
    <td>{{ $data->status }} %</td>
    <td><a href="{{ route('task.index', $data->id) }}" class="btn btn-info">Tasks</a></td>
    <td><a href="{{ route('project.edit', $data->id) }}" class="btn btn-primary">Edit</a></td>
    <td><a href="{{ route('project.delete', $data->id) }}" class="btn btn-danger">Delete</a></td>
    </tr>
 

   
    
   
    
    </tbody>
        
</table>
<br><br>
<h1>Task In This Project</h1>
<table id="mytable" class="table table-bordred table-striped">
                   
                   <thead>
                   
                   <th>Task Name Name</th>
                     <th>created at</th>
                     <th>status</th>
                      <th>Edit</th>
                      
                       <th>Delete</th>
                   </thead>
    <tbody>
      
      @forelse($data->tasks as $k => $task)
    <tr>
    <td>{{$task->name}}</td>
    <td>{{ $task->created_at }}</td>
    <td>{{ status($task->status) }}</td>
    <td><a href="{{ route('task.edit', [$data->id, $task->id]) }}" class="btn btn-primary">Edit</a></td>
    <td><a href="{{ route('task.delete', [$task->id]) }}" class="btn btn-danger">Delete</a></td>
    </tr>

    @empty
    <tr ><td colspan="4" class="text-center">No data Found !!</td></tr>
    @endforelse




                
            </div>
@endsection